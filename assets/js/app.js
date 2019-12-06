$(document).ready(function(){
    $("#registerForm").submit(function(event){
        submitForm();
        return false;
    });

});

function submitForm(){
    $.ajax({
        type: "POST",
        url: "localhost/todo/users/register",
        cache:false,
        data: $('form#registerForm').serialize(),
        success: function(response){
;
        },
        error: function(){
            alert("Error");
        }
    });
}