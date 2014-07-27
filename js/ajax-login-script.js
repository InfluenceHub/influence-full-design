jQuery(document).ready(function($) {
    //var homeURL = 'http://stagingview.net/';
    var homeURL = 'http://www.theinfluence.com/';
    
    // Perform AJAX login on form submit
    $('form#login').on('submit', function(e){
        $('form#login p.status').show().text(ajax_login_object.loadingmessage);
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_login_object.ajaxurl,
            data: { 
                'action': 'ajaxlogin', //calls wp_ajax_nopriv_ajaxlogin
                'username': $('form#login #username').val(), 
                'password': $('form#login #password').val(),              
                'security': $('form#login #security').val() },
            success: function(data){
                //$('form#login p.status').text(data.message);
                if (data.message == 'error') {
                  $('form#login input#username, form#login input#password').css({'color': '#ff0000', 'border': '1px solid #ff0000'});
                }
                if (data.loggedin == true){
                  document.location.href = $('form#login #redirect_to').val();
                }
            }
        });
        e.preventDefault();
    });
    
    // Perform AJAX password reset on form submit
    $('form#reset').on('submit', function(e){
        $('form#reset p.status').show().text(ajax_login_object.loadingmessage);
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_login_object.ajaxurl,
            data: { 
                'action': 'ajax_reset', //calls wp_ajax_nopriv_ajaxreset
                'username': $('form#reset #username').val(),
                'security': $('form#reset #security').val() },
            success: function(data){
                $('form#reset p.status').text(data.message);
            }
        });
        e.preventDefault();
    });
    
    // Perform AJAX register on form submit
    $('form#register').on('submit', function(e){
        $('form#register p.status').show().text(ajax_login_object.loadingmessage);
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_login_object.ajaxurl,
            data: { 
                'action': 'ajax_registration', //calls wp_ajax_nopriv_ajaxreset
                'username': $('form#register #username').val(),
                'password': $('form#register #password').val(),
                'security': $('form#register #security').val() },
            success: function(data){
                if (data.message == 'emailexists') {
                  $('form#register p.status').text('Email is already registered.');
                }
                if (data.message.indexOf('password') != -1) {
                  $('form#register input#password').css({'color': '#ff0000', 'border': '1px solid #ff0000'});
                }
                if (data.message.indexOf('email') != -1) {
                  $('form#register input#username').css({'color': '#ff0000', 'border': '1px solid #ff0000'});
                }
                if (data.loggedin == true){
                  //document.location.href = ajax_login_object.redirecturl;
                  $('.signup .top-list').html('<li><a href="' + homeURL + '/logout">Logout</a></li>');
                }
                return false;
            }
        });
        e.preventDefault();
    });
});