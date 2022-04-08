jQuery(function($){

    load_countries();

    function load_countries()
    {
        var filter = jQuery(".character-filter .item.active").text();
        var URL     = "/football/wp-json/api/v1/countries/";
        var dataObj = {
            filter : filter, 
        };

        $.ajax({
            type: 'POST',
            url: URL,
            data: dataObj,
            dataType: "json",
            beforeSend: function() {
                jQuery("#load-countries").text("Please wait...");
            },
            success: function(response)
            {
               jQuery("#load-countries").html(response);
            },
            error: function(error){
                console.log(error);
                alert('something went wrong, please try again later');
            }
        });
    }

    jQuery(document).on("click", ".character-filter .item", function(){
        jQuery(".character-filter .item").removeClass("active");
        jQuery(this).addClass("active");

        load_countries();
    });

    //update data to user account
    jQuery(document).on('click', '#continue-to-next-page', function(){
        if( validate_country() )
        {

            $.ajax({
                type: 'POST',
                url : admin.ajaxurl,
                data: {
                    nonce: admin.nonce,
                    country : jQuery('input[name=select_country]:checked').val(), 
                    countryname : jQuery('input[name=select_country]:checked').data('countryname'), 
                    countryalpha3 : jQuery('input[name=select_country]:checked').data('alpha3'), 
                    action : 'update_user_country',
                },
                dataType: "json",
                beforeSend: function() {
                    
                },
                success: function(response)
                {
                    window.location.href = "https://laravel.infiniteloopcorp.com/football/select-competition/";
                   //alert(response.data);
                },
                error: function(error){
                    console.log(error);
                    alert('something went wrong, please try again later');
                }
            });
        }   
    });

    function validate_country(){
        var validate = true;

        if (jQuery('input[name=select_country]:checked').prop('checked')) {
            //all good
		} 
		else{
			 alert('Please choose a country.');
			 validate = false;
		 }

        return validate;
    }


});