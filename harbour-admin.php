<h1> Harbourside Theme Options </h1>
<h3 class="title"> Manage Options </h3>
<p> Customize Sidebar Options </p>


<form method="post" action=" ">


<?php settings_fields('harbour-settings-group'); //function-admin.php line 22 ?>
<?php do_settings_sections('Harbourside_page'); ?>


<?php submit_button(); ?>



</form>