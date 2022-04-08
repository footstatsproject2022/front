// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
'use strict'

// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.querySelectorAll('.needs-validation')

// Loop over them and prevent submission
Array.prototype.slice.call(forms)
    .forEach(function (form) {
    form.addEventListener('submit', function (event) {
        event.preventDefault()
        event.stopPropagation()
        if (form.checkValidity()) {
            authentication();
        }

        form.classList.add('was-validated');
        
    }, false)
    })
})()

function authentication()
{
    var URL     = "/football/wp-json/api/v1/authentication/login/";
    var dataObj = {
        email       : jQuery("#emailaddress").val(), 
        password    : jQuery("#password").val(),
    };

    $.ajax({
        type: 'POST',
        url: URL,
        data: dataObj,
        dataType: "json",
        beforeSend: function() {
            
        },
        success: function(response)
        {
           if( response.success == true ){
                location.reload();
           }
           else{
                jQuery(".tas-message").addClass('alert alert-danger mt-3');
                jQuery(".tas-message").html(response.error);
           }
        },
        error: function(error){
            console.log(error);
            alert('something went wrong, please try again later');
        }
    });

}