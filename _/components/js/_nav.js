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

    var acc = $('.acc_section');
    
    /**
    * toggle
    * @returns {Void}
    * */
    var toggle = function() {
        
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