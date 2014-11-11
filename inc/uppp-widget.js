/* 
 * Custom JS code for our UPPP Widget
*/

jQuery(document).ready(function() {    

    /*
     * Submit form when number of results is changed
     */
    jQuery('#num_results').change(function () {
        
        //jQuery('#uppp_form').submit();
        
        // Get current url
        var link = jQuery(location).attr('href');
        
        jQuery('#container').fadeOut(500, function(){

               // Get new posts
                jQuery.post(ajaxurl, {
 
                    action:     'uppp_get_posts',
 
 
                }, function (response) {
 
                    console.log(response);
 
                });
 
        });        
    });
    
});

