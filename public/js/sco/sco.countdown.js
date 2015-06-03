/* ==========================================================
 * sco.countdown.js
 * http://github.com/terebentina/sco.js
 * ==========================================================
 * Copyright 2013 Dan Caragea.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ========================================================== */

/*jshint laxcomma:true, sub:true, browser:true, jquery:true, devel:true */

;(function($, undefined) {
	"use strict";

	var pluginName = 'scojs_countdown';

	function doit($elem, data, until) {
		var str = ''
			,started = false
			,left = {d: 0, h: 0, m: 0, s: 0}
			,js_current = Math.round((new Date()).getTime() / 1000);

		left.s = until - js_current;

		if (left.s < 0) {
                        $elem.html('已结束');
                        $elem.closest('.layer2').remove()
                        if($('#main-wrapper').hasClass('product-detail-page'))
                            window.location.reload
			return;
		}
		if (data.strings.d != '') {
			left.d = Math.floor(left.s / 86400) < 10 ? '0' + Math.floor(left.s / 86400) : Math.floor(left.s / 86400);
			left.s = left.s % 86400;
			str += '<span class="count">'+left.d  +'</span>' + '<span>'+ data.strings.d + '</span>';
			started = true;
		}
		if (data.strings.h != '') {
			left.h = Math.floor(left.s / 3600) < 10 ? '0' + Math.floor(left.s / 3600) : Math.floor(left.s / 3600);
			left.s = left.s % 3600;
			started = true;
		}
		if (started) {
			str += '<span class="count">'+left.h  +'</span>' + '<span>'+ data.strings.h +'</span>';
			started = true;
		}

                        left.m = Math.floor(left.s / 60) < 10 ? '0' + Math.floor(left.s / 60) : Math.floor(left.s / 60);
                        left.s = left.s % 60 < 10 ? '0' + left.s % 60 : left.s % 60;
                        started = true;
		
		if (started) {
			str += '<span class="count">'+left.m  +'</span>' + '<span>'+ data.strings.m + '</span>';
			started = true;
		}
		if (left.s > 0) {
			started = true;
		}
		if (started) {
			str += '<span class="count">'+left.s  +'</span>' + '<span>'+ data.strings.s + '</span>';
			started = true;
		}

		$elem.html(str);
		setTimeout(function() {doit($elem, data, until);}, 500);
	}

	$.fn[pluginName] = function(options) {
		var $this = $(this)
			,data = $this.data()
			,js_current
			;

		data = $.extend({}, $.fn[pluginName].defaults, options, data);

		if (!data.until) {
			return;
		}

		js_current = Math.round((new Date()).getTime() / 1000);
		if (!data.current) {
			data.current = js_current;
		}

		data.until -= (js_current - data.current);

		doit($this, data, data.until);
	};

	$.fn[pluginName].defaults = {
		strings: {d: '天', h: '时', m: '分', s: '秒'}
	};
})(jQuery);
