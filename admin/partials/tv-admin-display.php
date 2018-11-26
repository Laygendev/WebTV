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

<div class="tv-wrap">
	<div class="tv-head">
		<div class="tv-section-head">
			<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
		</div>
	</div>

	<ul class="tv-section tv-bg tv-menu">
		<li class="active" data-target="twitch"><a href="#">Twitch</a></li>
		<li data-target="social"><a href="#">Social</a></li>
		<li data-target="theme"><a href="#"><?php esc_html_e( 'Themes', 'TV' ); ?></a></li>
		<li data-target="welcome"><a href="#"><?php esc_html_e( 'Help', 'TV' ); ?></a></li>
	</ul>

	<div class="tv-tab active" id="twitch">
		<div class="tv-section tv-bg">
			<h3><?php esc_html_e( 'Configure your WebTV', 'tv' ); ?></h3>
			<p><?php esc_html_e( 'Enter your channel ID below', 'tv' ); ?></p>
			<form method="post" action="admin-ajax.php">

				<input type="hidden" name="action" value="save_tv_options" />

				<div class="form-element">
					<label for="channel-id"><?php esc_html_e( 'Channel ID', 'tv' ); ?></label>
					<input type="text" id="channel-id" name="tv_options[channel_id]" value="<?php echo esc_attr( $tv_options['channel_id'] ); ?>" />
				</div>

				<input type="submit" class="button" value="<?php esc_attr_e( 'Save Changes' ); ?> " />
			</form>
		</div>
	</div>

	<div class="tv-tab hidden" id="social">
		<div class="tv-section tv-bg">
			<h3><?php esc_html_e( 'Configure your social network', 'tv' ); ?></h3>

			<form method="post" action="admin-ajax.php">

				<input type="hidden" name="action" value="save_tv_options" />

				<div class="form-element">
					<label for="facebook"><?php esc_html_e( 'Facebook', 'tv' ); ?></label>
					<input type="text" id="facebook" name="tv_options[facebook]" value="<?php echo esc_attr( $tv_options['facebook'] ); ?>" />
				</div>

				<div class="form-element">
					<label for="twitter"><?php esc_html_e( 'Twitter', 'tv' ); ?></label>
					<input type="text" id="twitter" name="tv_options[twitter]" value="<?php echo esc_attr( $tv_options['twitter'] ); ?>" />
				</div>

				<div class="form-element">
					<label for="twitch"><?php esc_html_e( 'Twitch', 'tv' ); ?></label>
					<input type="text" id="twitch" name="tv_options[twitch]" value="<?php echo esc_attr( $tv_options['twitch'] ); ?>" />
				</div>

				<div class="form-element">
					<label for="youtube"><?php esc_html_e( 'Youtube', 'tv' ); ?></label>
					<input type="text" id="youtube" name="tv_options[youtube]" value="<?php echo esc_attr( $tv_options['youtube'] ); ?>" />
				</div>

				<input type="submit" class="button" value="<?php esc_attr_e( 'Save Changes' ); ?> " />
			</form>
		</div>
	</div>

	<div class="tv-tab hidden" id="theme">
		<div class="tv-section tv-bg">
			<h3><?php esc_html_e( 'Your theme', 'tv' ); ?></h3>
			<p><?php echo sprintf( __( 'Your currently use the theme %s. You can customize it below.', 'tv' ), 'Theme Name' ); ?></p>
		</div>

		<div class="tv-section tv-bg">
			<h3><?php esc_html_e( 'Logo & Banner', 'tv' ); ?></h3>

			<form method="post" action="admin-ajax.php">

				<input type="hidden" name="action" value="save_tv_options" />

				<div class="form-element">
					<label for="logo"><?php esc_html_e( 'Logo', 'tv' ); ?></label>
					<input type="text" id="logo" name="tv_options[logo]" value="<?php echo esc_attr( $tv_options['logo'] ); ?>" />
				</div>

				<div class="form-element">
					<label for="banner"><?php esc_html_e( 'Banner', 'tv' ); ?></label>
					<input type="text" id="banner" name="tv_options[banner]" value="<?php echo esc_attr( $tv_options['banner'] ); ?>" />
				</div>

				<input type="submit" class="button" value="<?php esc_attr_e( 'Save Changes' ); ?> " />
			</form>
		</div>

		<div class="tv-section tv-bg">
			<h3><?php esc_html_e( 'Color', 'tv' ); ?></h3>

			<form method="post" action="admin-ajax.php">

				<input type="hidden" name="action" value="save_tv_options" />

				<div class="form-element">
					<label for="background_color"><?php esc_html_e( 'Background color', 'tv' ); ?></label>
					<input type="color" id="background_color" name="tv_options[background_color]" value="<?php echo esc_attr( $tv_options['background_color'] ); ?>" />
				</div>

				<input type="submit" class="button" value="<?php esc_attr_e( 'Save Changes' ); ?> " />
			</form>
		</div>

		<div class="tv-section tv-bg">
			<h3><?php esc_html_e( 'Customize your theme', 'tv' ); ?></h3>

			<form method="post" action="admin-ajax.php">

				<input type="hidden" name="action" value="save_tv_options" />

				<div class="form-element">
					<label for="copyright"><?php esc_html_e( 'Copyright', 'tv' ); ?></label>
					<input type="text" id="copyright" name="tv_options[copyright]" value="<?php echo esc_attr( $tv_options['copyright'] ); ?>" />
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
</div>
