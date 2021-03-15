<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    partials/wp10settingscallback
 */
?>
<?php
settings_fields('wp10customsettings');
do_settings_sections( 'wp10customsetting' );
?>
<h1 class="pt-3">General Settings for WP10YouTube Test</h1><br><hr>
<div class="container" style="max-width:100%;">
  <div class="row">
    <div class="col">
        <div class="alert alert-warning">
        <div class="py-5 px-5">
            <h1 class="display-4">Youtybe API Importer</h1>
            <p class="lead">Use this sectino to inport your youtube videos.</p>
            <hr class="my-4">
            <p>Need a youtube key generated they're free get ove here.</p>
                <form method="post" action="options.php">
                    <?php
                    settings_fields('wp10customsettings');
                    do_settings_sections( 'wp10customsetting' );
                    ?>
                    <div class="form-group">
                        <label for="youtubeAPIKey">Youtube API Key</label>
                        <input name="youtubeAPIKey" value="<?php echo get_option( 'youtubeAPIKey' ) ?>" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="youtubeChannelID">Your YouTube Channel ID:</label>
                        <input name="youtubeChannelID" value="<?php echo get_option( 'youtubeChannelID' ) ?>" type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary my-3">sudmit settings</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="alert alert-success">
            <h1 class="display-4">ShortCode Information</h1>
            <h3> To output videos simply use this shortcoed: "[wp10yvidsout]" </h3>
            <hr>
            <form method="post" action="options.php">
            <?php
                settings_fields( 'wp10shortcodesettings' );
                do_settings_sections( 'wp10shortcodesettings' );
            ?>
                <div class="form-group">
                    <label for="ypostcount">Number of Videos to Show</label>
                    <input class="form-control" type="number" value="<?php echo get_option( 'ypostcount' ); ?>" id="ypostcount" name="ypostcount">
                </div>
                <div class="form-group">
                    <label for="yvidstyletype">Display Type</label>
                    <select class="form-control" id="yvidstyletype" name="yvidstyletype">
                    <option <?php if(get_option('yvidstyletype') == 'Image Left'){ echo(' selected');} ?>>Image Left</option>
                    <option <?php if(get_option('yvidstyletype') == 'Image Center'){ echo(' selected');} ?>>Image Center</option>
                    <option <?php if(get_option('yvidstyletype') == 'Image Right'){ echo(' selected');} ?>>Image Right</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Save ShortCode Changes</button>
            </form>
        </div>
    </div>
  </div>
</div>