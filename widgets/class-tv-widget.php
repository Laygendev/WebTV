<?php

/**
 * Widget for display twitch tchat.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    TV
 * @subpackage TV/includes
 */

class TV_Widget extends WP_Widget {
  /**
  * Constructor for the widget
  *
  * @since 1.0.0
  */

  public function __construct() {
    parent::__construct(
      'tv-widget',
      'TV Widget',
      array(
        'description' => __( 'Set the tchat', 'tv' ),
      )
    );
  }

  public function widget( $args, $instance ) {
	$tv_options = get_option( 'tv_options' );
    echo '<iframe frameborder="0"
        scrolling="no"
        id="chat_embed"
        src="https://www.twitch.tv/embed/' . $tv_options['channel_id'] .'/chat"
        height="100%"
        width="300">
        </iframe>';
  }
}
