<?php
/**
 * @package WordPress
 * @subpackage synStudio_Theme
 */

add_theme_support( 'menus' );
automatic_feed_links();


function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 40 );



add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' ); 

function theme_options_init(){
 register_setting( 'sample_options', 'sample_theme_options');
} 

function theme_options_add_page() {
 add_theme_page( __( 'Theme Options', 'sampletheme' ), __( 'Theme Options', 'sampletheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

function theme_options_do_page() { 
    global $select_options; 
    if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false; ?>

    <div>
    <?php screen_icon(); 
        echo "<h2>". __( 'Syn Studio Central Information Panel', 'customtheme' ) . "</h2>";
        echo "<h3>". __( 'Information entered here are distributed to all corresponding pages.', 'customtheme' ) . "</h2>"; 
    ?>

    <?php 
        if ( false !== $_REQUEST['settings-updated'] ) : ?>
            <div>
                <p><strong><?php _e( 'Options saved', 'customtheme' ); ?></strong></p></div>
        <?php endif; ?> 

    <form method="post" action="options.php">
        <?php settings_fields( 'sample_options' ); ?>  
        <?php $options = get_option( 'sample_theme_options' ); ?> 

    <table>

    <tr valign="top"><th scope="row"><?php _e( 'Class Registration Notice (English)', 'customtheme' ); ?></th>
    <td>
    <textarea id="sample_theme_options[deadline_en]"
    class="large-text" cols="100" rows="3" placeholder="Example: Late Registration Deadline: Wednesday, July 8th, 11:59 P.M." name="sample_theme_options[deadline_en]"><?php echo esc_textarea( $options['deadline_en'] ); ?></textarea>
    </td>
    </tr>

    <tr valign="top"><th scope="row"><?php _e( 'Class Registration Notice (French)', 'customtheme' ); ?></th>
    <td>
    <textarea id="sample_theme_options[deadline_fr]"
    class="large-text" cols="100" rows="3" placeholder="Example: Date limite d\'inscription finale : mercredi 8 juillet à 23h59." name="sample_theme_options[deadline_fr]"><?php echo esc_textarea( $options['deadline_fr'] ); ?></textarea>
    </td>
    </tr>

    </table> 

    <p>
    <input type="submit" value="<?php _e( 'Save Options', 'customtheme' ); ?>" />
    </p>
    </form>
    </div>

<?php } ?>

<?php

// Disable auto formatting for newly defined <raw> tag 
// http://www.wprecipes.com/disable-wordpress-automatic-formatting-on-posts-using-a-shortcode
function my_formatter($content) {
    $new_content = '';
    $pattern_full = '{(\[raw\].*?\[/raw\])}is';
    $pattern_contents = '{\[raw\](.*?)\[/raw\]}is';
    $pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);
 
    foreach ($pieces as $piece){
        if (preg_match($pattern_contents, $piece, $matches)){
            $new_content .= $matches[1];
        } else{
            $new_content .= wptexturize(wpautop($piece));
        }
    }
    return $new_content;
}
remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');
add_filter('the_content', 'my_formatter', 99);

?>

<?php 

// register dynamic sidebar to display tweets using plugin. See home.php

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '',
        'after_title' => '',
    ));
register_sidebars(1);

// This function works with Twitter Widget plugin to display recent tweets on the homepage

/*function getTwitterFollowers($screenName = 'codeforest'){
    // some variables
    $consumerKey = '0lnJHFRzifcDvTDJuwhQ';
    $consumerSecret = '7hPA64Rqt0VGoelIJVuqRflPYGZOMbKirUVqE1Dv760';
    $token = get_option('cfTwitterToken');
 
    // get follower count from cache
    $numberOfFollowers = get_transient('cfTwitterFollowers');
 
    // cache version does not exist or expired
    if (false === $numberOfFollowers) {
        // getting new auth bearer only if we don't have one
        if(!$token) {
            // preparing credentials
            $credentials = $consumerKey . ':' . $consumerSecret;
            $toSend = base64_encode($credentials);
 
            // http post arguments
            $args = array(
                'method' => 'POST',
                'httpversion' => '1.1',
                'blocking' => true,
                'headers' => array(
                'Authorization' => 'Basic ' . $toSend,
                'Content-Type' => 'application/x-www-form-urlencoded;charset=UTF-8'
                ),
            'body' => array( 'grant_type' => 'client_credentials' )
            );
 
            add_filter('https_ssl_verify', '__return_false');
            $response = wp_remote_post('https://api.twitter.com/oauth2/token', $args);
 
            $keys = json_decode(wp_remote_retrieve_body($response));
 
            if($keys) {
                // saving token to wp_options table
                update_option('cfTwitterToken', $keys->access_token);
                $token = $keys->access_token;
            }
        }
        // we have bearer token wether we obtained it from API or from options
        $args = array(
            'httpversion' => '1.1',
            'blocking' => true,
            'headers' => array(
            'Authorization' => "Bearer $token"
            )
        );
 
        add_filter('https_ssl_verify', '__return_false');
        $api_url = "https://api.twitter.com/1.1/users/show.json?screen_name=$screenName";
        $response = wp_remote_get($api_url, $args);
 
        if (!is_wp_error($response)) {
            $followers = json_decode(wp_remote_retrieve_body($response));
            $numberOfFollowers = $followers->followers_count;
        } else {
            // get old value and break
            $numberOfFollowers = get_option('cfNumberOfFollowers');
            // uncomment below to debug
            //die($response->get_error_message());
        }
 
        // cache for an hour
        set_transient('cfTwitterFollowers', $numberOfFollowers, 1*60*60);
        update_option('cfNumberOfFollowers', $numberOfFollowers);
    }
 
    return $numberOfFollowers;
}*/

add_image_size( 'slidethumb', 170, 107, array( 'center', 'top' ) );

function get_attachment_id( $url ) {
    $attachment_id = 0;
    $dir = wp_upload_dir();
    if ( false !== strpos( $url, $dir['baseurl'] . '/' ) ) { // Is URL in uploads directory?
        $file = basename( $url );
        $query_args = array(
            'post_type'   => 'attachment',
            'post_status' => 'inherit',
            'fields'      => 'ids',
            'meta_query'  => array(
                array(
                    'value'   => $file,
                    'compare' => 'LIKE',
                    'key'     => '_wp_attachment_metadata',
                ),
            )
        );
        $query = new WP_Query( $query_args );
        if ( $query->have_posts() ) {
            foreach ( $query->posts as $post_id ) {
                $meta = wp_get_attachment_metadata( $post_id );
                $original_file       = basename( $meta['file'] );
                $cropped_image_files = wp_list_pluck( $meta['sizes'], 'file' );
                if ( $original_file === $file || in_array( $file, $cropped_image_files ) ) {
                    $attachment_id = $post_id;
                    break;
                }
            }
        }
    }
    return $attachment_id;
}


?>