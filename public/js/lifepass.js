$(window).on('load',function() {
    // Animate loader off screen
    $("#example-basic").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        autoFocus: true,
        onStepChanging: function (event, currentIndex, newIndex) {
            console.log($('#fname').val());
            $('#inputtype').text('User Type: ' + $('#user_type').val());
            $('#inputname').text('Name: ' + $('#fname').val() + ' ' + $('#mname').val() + ' ' +  $('#lname').val());
            $('#inputemail').text('Email: ' + $('#email').val());
            $('#inputaddress').text('Address: ' + $('#address1').val() + $('#address2').val());
            $('#inputphone').text('Phone Number: ' + $('#phone_prefix').val() + $('#phone').val());
            return true;
        },
        onFinished: function(){
            // alert('submitted');
            $("#patient-new").submit();
        }
    });
});
