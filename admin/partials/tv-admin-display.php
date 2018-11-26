<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    TV
 * @subpackage TV/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="tv-head">
	<div class="tv-section-head">
		<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
	</div>
</div>

<ul class="tv-section tv-bg tv-menu">
	<li class="active" data-target="twitch"><a href="#">Twitch</a></li>
	<li data-target="social"><a href="#">Social</a></li>
	<li data-target="welcome"><a href="#">Help</a></li>
</ul>

<div class="tv-tab active" id="twitch">
	<div class="tv-section tv-bg">
		<h3><?php esc_html_e( 'Configure your WebTV', 'tv' ); ?></h3>
		<p><?php esc_html_e( 'Enter your channel ID below', 'tv' ); ?></p>
		<form method="post" action="admin_post.php">

			<div class="form-element">
				<label for="channel-id"><?php esc_html_e( 'Channel ID', 'tv' ); ?></label>
				<input type="text" id="channel-id" name="tv_options[channel_id]" />
			</div>

			<input type="submit" class="button" value="<?php esc_attr_e( 'Save Changes' ); ?> " />
		</form>
	</div>
</div>

<div class="tv-tab hidden" id="social">
	<div class="tv-section tv-bg">
		<h3><?php esc_html_e( 'Configure your social network', 'tv' ); ?></h3>
		<form method="post" action="admin_post.php">

			<div class="form-element">
				<label for="facebook"><?php esc_html_e( 'Facebook', 'tv' ); ?></label>
				<input type="text" id="facebook" name="tv_options[facebook]" />
			</div>

			<input type="submit" class="button" value="<?php esc_attr_e( 'Save Changes' ); ?> " />
		</form>
	</div>
</div>

<div class="tv-tab hidden" id="welcome">
	<div class="tv-section tv-welcome">
		<h3><?php esc_html_e( 'Welcome to WebTV', 'tv' ); ?></h3>
	</div>

	<div class="tv-section tv-bg">
		<p><?php esc_html_e( 'Create your WebTV for your WordPress website.', 'tv' ); ?></p>
		<p><a class="button" href=""><?php esc_html_e( 'Configure WebTV', 'tv' ); ?></a></p>
	</div>

	<div class="tv-section tv-bg">
		<h3><?php esc_html_e( 'What WebTV do to my WordPress ?', 'tv' ); ?></h3>
		<p><?php esc_html_e( 'He create "Live" Page with custom Gutenberg Block for embed your Twitch Player on the this page.', 'tv' ); ?></p>
	</div>
</div>
