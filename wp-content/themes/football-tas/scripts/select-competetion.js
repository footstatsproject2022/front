jQuery(function($){

    load_competetions();

    function load_competetions()
    {
        var URL     = "/football/wp-json/api/v1/competitions/";
        var dataObj = {
            current_user_id: admin.current_user_id,
        };

        $.ajax({
            type: 'POST',
            url: URL,
            data: dataObj,
            dataType: "json",
            beforeSend: function() {
                jQuery("#load-competitions").text("Please wait...");
            },
            success: function(response)
            {
               console.log(response);
               jQuery("#load-competitions").html(response);
            },
            error: function(error){
                console.log(error);
                alert('something went wrong, please try again later');
            }
        });

    }

    //update data to user account
    jQuery(document).on('click', '#continue-to-next-page', function(){
        if( validate_country() )
        {
            
            window.location.href= "https://laravel.infiniteloopcorp.com/football/team-player-data/?squad_id=5650";

            // $.ajax({
            //     type: 'POST',
            //     url : admin.ajaxurl,
            //     data: {
            //         nonce: admin.nonce,
            //         action : 'update_user_country',
            //     },
            //     dataType: "json",
            //     beforeSend: function() {
                    
            //     },
            //     success: function(response)
            //     {
            //       //alert(response.data);
            //       window.location.href= "https://laravel.infiniteloopcorp.com/football/team-player-data/?squad_id=5650";
            //     },
            //     error: function(error){
            //         console.log(error);
            //         alert('something went wrong, please try again later');
            //     }
            // });
        }   
    });

    function validate_country(){
        var validate = true;

        if (jQuery('input[name=select_competition]:checked').prop('checked')) {
            //all good
		} 
		else{
			 alert('Please choose a competition.');
			 validate = false;
		 }

        return validate;
    }


});