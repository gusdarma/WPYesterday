<p><span class="dashicons dashicons-image-filter"></span><b> Yesterday</b> Wordpress Theme | by <a href="https://www.linkedin.com/in/gusdarma/" target="_blank">gusdarma</a></p>
<h1>General Settings</h1>
<br>
<?php settings_errors(); ?>

<div class="wrap-tab">
    <div class="tab tab-inner">
        <button class="tablinks" onclick="openCity(event, 'Social')" id="defaultOpen">Social Media</button>
        <button class="tablinks" onclick="openCity(event, 'CustomCSS')">Custom CSS</button>
        <!-- <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button> -->
    </div>

    <div id="Social" class="tabcontent tab-inner">
        <form method="post" action="options.php">
            <?php settings_fields( 'yesterday-setting-group' );?>
            <?php do_settings_sections( 'yesterday' ); ?>
            <?php submit_button(); ?>
        </form>
    </div>

    <div id="CustomCSS" class="tabcontent tab-inner">
       <form method="post" action="options.php">
            <?php settings_fields( 'yesterday-setting-group' );?>
            <?php do_settings_sections( 'yesterday' ); ?>
            <?php submit_button(); ?>
        </form>
    </div>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>