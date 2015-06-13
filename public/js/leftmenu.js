/* 
* @Author: Administrator
* @Date:   2015-06-11 13:04:13
* @Last Modified by:   Administrator
* @Last Modified time: 2015-06-11 13:05:33
*/
'use strict';
$(function(){
	function openLeftMenu() {
        $('#menu-bar-wrapper').show();
        $('#menu-button').toggleClass('opened');
        $('#menu-bar-wrapper').toggleClass('opened');
        $(".mainContent").addClass('opened');
    }
    function closeLeftMenu() {
        $('#menu-button').toggleClass('opened');
        $('#menu-bar-wrapper').toggleClass('opened');
        $(".mainContent").removeClass('opened');
        setTimeout(function(){
            $('#menu-bar-wrapper').hide();
        },1000);


    }
    $('#menu-button').on("click", function() {
        if (!$(this).hasClass('opened')) {
            openLeftMenu()
        } else {
            closeLeftMenu()

        }
    });


    $(".close").click( function () {
        if($("#menu-bar-wrapper").hasClass('opened')){
            closeLeftMenu();
        }
    });
})