<p><span class="dashicons dashicons-image-filter"></span><b> Yesterday</b> Wordpress Theme | by <a href="https://www.linkedin.com/in/gusdarma/" target="_blank">gusdarma</a></p>
<h1>General Settings</h1>
<br>
<?php settings_errors(); ?>


<style>
.tab {
  float: left;
  background-color: #f1f1f1;
  width: 20%;
  height: 300px;
}

/* Style the butto  ns inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 15px 15px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 14px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #1565c0;
  color:white;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #1565c0;
  color:white;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  width: 65%;
  border-left: none;
  height: 300px;
  padding-left:0px;
}
.tabcontent h2{
    margin-top:0px!important;
}
.tabcontent form{
    padding:1.5rem;
    background-color:#f9f9f9;
}
</style>

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

<!-- <div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div> -->

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