function sendContactForm() {
    // var valid;	
    // valid = validateContact();
    // if(valid) {
        $.ajax({
            url: "assets/PHP/contactForm.php",
            data:'name='+$("#nameInput").val()+'&userEmail-address='+
            $("#emailInput").val()+'&subject='+
            $("#subjectInput").val()+'&message='+
            $("#messageTextarea").val(),
            type: "POST",
            success:function(data){
                $("#mail-status").html(data);
            },
            error:function (){}
        });
    }
// }

