console.log("in js file");
function sendContactForm() {
         
    // var valid;	
    // valid = validateContact();
    // if(valid) {
        $.ajax({
            url: "https://www.mtolivebaptistchurch.net/assets/PHP/contactForm.php",
            data:'name='+$("#nameInput").val()+'&userEmail-address='+
            $("#emailInput").val()+'&subject='+
            $("#subjectInput").val()+'&message='+
            $("#messageTextarea").val(),
            method: "POST",
            success:function(data){
                $("#mail-status").html(data);
                console.log(data);
                console.log("Everything was successful")
            },
            error:function (err){
                console.log(err);
            }
        });
    }
// }

