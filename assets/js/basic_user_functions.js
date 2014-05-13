jQuery( document ).ready(function() {

$('#login-form-login').click( function(){

    var loginName, loginPass;

    loginName = $('#login-name').val().length;
    loginPass = $('#login-pass').val();
    loginPassVal = $('#login-pass').val().length;

      if( loginName > 2 && loginPassVal > 3 ) {

        $('#login-form').submit();

      } else {

        $('#required-message').html('Please enter your email address and password.');

      }

  });

});