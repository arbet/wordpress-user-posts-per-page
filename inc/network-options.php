<?php

/* 
 * Contains the options page for the plugin
 */

// Form has been submitted
if(!empty($_POST)){
    $uppp = new WP_UPPP();
    $uppp->save_network_options();
}
?>

<div class="wrap">
<h2>User Posts Per Page Options - Network Options</h2>

<form method="post" action="settings.php?page=uppp_network_options"> 

<?php 

// Generate WP-specific form fields
settings_fields( 'uppp-network-options' );

// Define the option group here, required by WP
do_settings_sections( 'uppp-network-options' );


?>
<table class="form-table">	
        <tr valign="top">
        <th scope="row">Results per page</th>
        <td><input type='text' name='num_results' value='<?= get_option('uppp_network_num_results')?>' />
	    <p class="description">
		Enter the number of results you want to show per page. This applies to every page your widget or theme shortcode is displayed on.
	    </p>	    	    
	</td>
        </tr>	
	
        <tr valign="top">
        <th scope="row">Automatically add form to pages?</th>
        <td><input type='checkbox' name='automatic_insertion' value='' <?=get_option('uppp_network_automatic_insertion')?"checked='checked'":''?>/>
	    <p class="description">
		If this is checked, it will automatically add the posts per page form to every page. If left unchecked, you will need to add this via a widget or theme shortcode.
	    </p>	    	    
	</td>
        </tr>		
</table> 
    
<?php
// Submit button
submit_button(); 

?>
</form>
</div>