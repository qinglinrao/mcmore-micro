/* 
* @Author: Administrator
* @Date:   2015-06-11 13:04:13
* @Last Modified by:   Administrator
* @Last Modified time: 2015-06-11 13:05:33
*/
'use strict';
$(function(){
	function openLeftMenu() {
        $('#menu-button').toggleClass('opened')
        $(".mainContent").addClass('opened');
    }
    function closeLeftMenu() {
        $('#menu-button').toggleClass('opened');
        $(".mainContent").removeClass('opened');
    }
    $('#menu-button').on("click", function() {
        if (!$(this).hasClass('opened')) {
            openLeftMenu()
        } else {
            closeLeftMenu()
        }
    });
})