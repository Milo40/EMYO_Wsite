
(function ($) {
    "use strict";


    /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
  
  
	// Page loading animation
    $(window).on('load', function() {

        $('#js-preloader').addClass('loaded');

    });
    
    
    /*==================================================================
    [ Show pass ]*/
    var showPass = 0;
    $('.btn-show-pass').on('click', function(){
        if(showPass == 0) {
            $(this).next('input').attr('type','text');
            $(this).find('i').removeClass('fa-eye-slash');
            $(this).find('i').addClass('fa-eye');
            showPass = 1;
        }
        else {
            $(this).next('input').attr('type','password');
            $(this).find('i').addClass('fa-eye-slash');
            $(this).find('i').removeClass('fa-eye');
            showPass = 0;
        }
        
    });


})(jQuery);