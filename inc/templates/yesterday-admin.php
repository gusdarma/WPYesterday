<p><span class="dashicons dashicons-image-filter"></span><b> Yesterday</b> Wordpress Theme | by <a href="https://www.linkedin.com/in/gusdarma/" target="_blank">gusdarma</a></p>
<h1>General Settings</h1>
<br>
<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php settings_fields( 'yesterday-setting-group' );?>
    <?php do_settings_sections( 'yesterday' ); ?>
    <?php submit_button(); ?>
</form>