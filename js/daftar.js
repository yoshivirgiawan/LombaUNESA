(function ($) {
    "use strict";


    // 1. Focus
    $('.login-container .login-wrapper .input-wrapper input').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
    

})(jQuery);