<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @property AC_Column_Menu $column
 */
class ACP_Editing_Model_Menu extends ACP_Editing_Model {

	public function get_view_settings() {
		$options = array();

		$menus = wp_get_nav_menus();

		if ( $menus && ! is_wp_error( $menus ) ) {
			foreach ( $menus as $menu ) {
				$options[ $menu->term_id ] = $menu->name;
			}
		}

		return array(
			'type'         => 'select2_dropdown',
			'multiple'     => true,
			'clear_button' => true,
			'options'      => $options,
		);
	}

	public function get_edit_value( $id ) {
		$menus = array();

		foreach ( $this->column->get_menus( $id ) as $menu ) {
			$menus[ $menu->term_id ] = $menu->name;
		}

		return $menus;
	}

	/**
	 * @param int $id
	 *
	 * @return string|false
	 */
	private function get_title( $id ) {
		$list_screen = $this->column->get_list_screen();

		switch ( true ) {
			case  $list_screen instanceof AC_ListScreen_Post :
				return get_post_field( 'post_title', $id );

			case $list_screen instanceof ACP_ListScreen_Taxonomy :
				$term = get_term_by( 'id', $id, $this->column->get_taxonomy() );

				return $term->name;

			case $list_screen instanceof AC_ListScreen_Comment :
				$comment = get_comment( $id );

				return $comment->comment_ID;

			case $list_screen instanceof AC_ListScreen_User :
				$user = get_userdata( $id );

				return $user->display_name;

			default:
				return false;
		}
	}

	/**
	 * Return list of menu items if the object ID is present
	 *
	 * @param int $menu_id
	 * @param int $object_id
	 *
	 * @return array|false
	 */
	private function item_exists( $menu_id, $object_id ) {
		$items = wp_get_nav_menu_items( $menu_id, array( 'post_status' => 'publish' ) );

		if ( ! $items ) {
			return false;
		}

		$items = (array) wp_filter_object_list( $items, array( 'object' => $this->column->get_object_type() ) );

		return in_array( $object_id, wp_list_pluck( $items, 'object_id' ) );
	}

	public function save( $id, $menu_ids ) {

		// Delete item from menu
		foreach ( $this->column->get_menu_item_ids( $id ) as $menu_item_id ) {
			if ( ! in_array( $menu_item_id, $menu_ids ) ) {
				wp_delete_post( $menu_item_id, true );
			}
		}

		// Add item to menu
		foreach ( $menu_ids as $menu_id ) {

			if ( $this->item_exists( $menu_id, $id ) ) {
				continue;
			}

			$item = array(
				'menu-item-object-id' => $id,
				'menu-item-db-id'     => 0,
				'menu-item-object'    => $this->column->get_object_type(),
				'menu-item-type'      => $this->column->get_item_type(),
				'menu-item-title'     => $this->get_title( $id ),
				'menu-item-status'    => 'publish',
			);

			wp_update_nav_menu_item( $menu_id, 0, $item );
		}
	}

}
