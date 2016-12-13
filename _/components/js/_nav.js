/**
 *
 * Nav
 * 
 * @author Jeremy Heminger : c/o Geographics j.heminger@061375.com
 *
 * 
 * */
var Nav = (function() {
    
    "use strict";

    var acc = $('.main .questions h5');
    
    /**
    * toggle
    * @returns {Void}
    * */
    var toggle = function() {
        if (!$(this).closest('tr').find('img').hasClass('open')) {
            $('.main .questions img').removeClass('open');
            $(this).closest('tr').find('img').addClass('open');
            $(this).closest('tr').next().find('.hidden').toggle("fast",function(){
                $(this).addClass("not");
            });
            $('.main .questions .hidden.not').toggle('fast',function(){
                $(this).removeClass('not');
            });
        }
    };
    
    /**
    * bindActions
    * @returns {Void}
    * */
    var bindActions = function() {
        acc.on('click', toggle);
    };
    /**
    * initialize
    * @returns {Void}
    * */
    var init = function(s) {
       bindActions(); 
    };
    
    return {
      init: init,
    };   
}());