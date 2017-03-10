<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Class PUM_Modules_Menu
 *
 * This class handles the menu editor fields & adds popup classes to menu items.
 */
class PUM_Modules_Menu {

	/**
	 * Initializes this module.
	 */
	public static function init() {
		// Merge Menu Item Options
		add_filter( 'wp_setup_nav_menu_item', array( __CLASS__, 'merge_item_data' ) );
		// Admin Menu Editor
		add_filter( 'wp_edit_nav_menu_walker', array( __CLASS__, 'nav_menu_walker' ) );
		// Admin Menu Editor Fields.
		add_action( 'wp_nav_menu_item_custom_fields', array( __CLASS__, 'fields' ), 10, 4 );
		add_action( 'wp_update_nav_menu_item', array( __CLASS__, 'save' ), 10, 2 );
	}

	/**
	 * Override the Admin Menu Walker
	 *
	 * @return string
	 */
	public static function nav_menu_walker() {
		global $wp_version;

		if ( ! class_exists( 'PUM_Walker_Nav_Menu_Edit' ) ) {

			if ( ! class_exists( 'Walker_Nav_Menu_Edit' ) ) {
				/** Walker_Nav_Menu_Edit class */
				require_once ABSPATH . 'wp-admin/includes/class-walker-nav-menu-edit.php';
			}

			if ( version_compare( $wp_version, '3.6', '>=' ) ) {
				require_once POPMAKE_DIR . '/includes/modules/menus/class-pum-walker-nav-menu-edit.php';
			} else {
				require_once POPMAKE_DIR . '/includes/modules/menus/class-pum-walker-nav-menu-edit-deprecated.php';
			}
		}

		return 'PUM_Walker_Nav_Menu_Edit';
	}

	/**
	 * Merge Item data into the $item object.
	 *
	 * @param $item
	 *
	 * @return mixed
	 */
	public static function merge_item_data( $item ) {

		// Merge Rules.
		foreach ( PUM_Modules_Menu::get_item_options( $item->ID ) as $key => $value ) {
			$item->$key = $value;
		}

		if ( is_admin() ) {
			return $item;
		}

		if ( isset( $item->popup_id ) ) {
			$item->classes[] = 'popmake-' . $item->popup_id;
		}

		return $item;
	}

	/**
	 * @param int $item_id
	 *
	 * @return array
	 */
	public static function get_item_options( $item_id = 0 ) {

		// Fetch all rules for this menu item.
		$item_options = get_post_meta( $item_id, '_pum_nav_item_options', true );

		return PUM_Modules_Menu::parse_item_options( $item_options );
	}

	/**
	 * @param array $options
	 *
	 * @return array
	 */
	public static function parse_item_options( $options = array() ) {

		if ( ! is_array( $options ) ) {
			$options = array();
		}

		return wp_parse_args( $options, array(
			'popup_id' => null,
		) );
	}

	/**
	 * Adds custom fields to the menu item editor.
	 *
	 * @param $item_id
	 * @param $item
	 * @param $depth
	 * @param $args
	 */
	public static function fields( $item_id, $item, $depth, $args ) {

		wp_nonce_field( 'pum-menu-editor-nonce', 'pum-menu-editor-nonce' ); ?>

		<p class="nav_item_options-popup_id  description  description-wide">

			<label for="pum_nav_item_options-popup_id-<?php echo $item->ID; ?>">

				<?php _e( 'Trigger a Popup', 'popup-maker' ); ?><br />

				<select name="pum_nav_item_options[<?php echo $item->ID; ?>][popup_id]" id="pum_nav_item_options-popup_id-<?php echo $item->ID; ?>" class="widefat">
					<option value=""></option>
					<?php foreach ( PUM_Modules_Menu::popup_list() as $option => $label ) : ?>
						<option value="<?php echo $option; ?>" <?php selected( $option, $item->popup_id ); ?>>
							<?php echo esc_html( $label ); ?>
						</option>
					<?php endforeach; ?>
				</select>

				<span class="desc"><?php _e( 'Choose a popup to trigger when this item is clicked.', 'popup-maker' ); ?></span>
			</label>


		</p>

		<?php
	}

	/**
	 * Returns a list of popups for a dropdown.
	 *
	 * @return array
	 */
	public static function popup_list() {

		static $popups;

		if ( ! isset( $popups ) ) {

			$popups = array();

			$query = new WP_Query( array(
				'post_type'      => 'popup',
				'posts_per_page' => - 1,
			) );

			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) : $query->next_post();
					$popups[ $query->post->ID ] = $query->post->post_title;
				endwhile;

			}

		}

		return $popups;
	}

	/**
	 * Processes the saving of menu items.
	 *
	 * @param $menu_id
	 * @param $item_id
	 */
	public static function save( $menu_id, $item_id ) {

		$popups = PUM_Modules_Menu::popup_list();

		$allowed_popups = wp_parse_id_list( array_keys( $popups ) );

		if ( ! isset( $_POST['pum-menu-editor-nonce'] ) || ! wp_verify_nonce( $_POST['pum-menu-editor-nonce'], 'pum-menu-editor-nonce' ) ) {
			return;
		}

		if ( empty( $_POST['pum_nav_item_options'][ $item_id ] ) ) {
			delete_post_meta( $item_id, '_pum_nav_item_options' );

			return;
		}

		$item_options = PUM_Modules_Menu::parse_item_options( $_POST['pum_nav_item_options'][ $item_id ] );

		$item_options['popup_id'] = ! empty( $item_options['popup_id'] ) ? absint( $item_options['popup_id'] ) : 0;

		if ( ! in_array( $item_options['popup_id'], $allowed_popups ) || $item_options['popup_id'] <= 0 ) {
			unset( $item_options['popup_id'] );
		}

		// Remove empty options to save space.
		$item_options = array_filter( $item_options );

		if ( ! empty( $item_options ) ) {
			update_post_meta( $item_id, '_pum_nav_item_options', $item_options );
		} else {
			delete_post_meta( $item_id, '_pum_nav_item_options' );
		}
	}
}

PUM_Modules_Menu::init();