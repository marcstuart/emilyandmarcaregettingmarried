/* http://keith-wood.name/countdown.html
 * Bulgarian initialisation for the jQuery countdown extension
 * Written by Manol Trendafilov manol@rastermania.com (2010) */
(function($) {
	$.countdown.regionalOptions['bg'] = {
		labels: ['Y', 'M', 'W', 'D', 'h', 'm', 's'],
		labels1: ['Y', 'M', 'W', 'D', 'h', 'm', 's'],
		compactLabels: ['l', 'm', 'n', 'd'], compactLabels1: ['g', 'm', 'n', 'd'],
		whichLabels: null,
		digits: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'],
		timeSeparator: ':', isRTL: false};
	$.countdown.setDefaults($.countdown.regionalOptions['bg']);
	var austDay = new Date();
	austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
	var weddingDay = new Date();
	weddingDay = new Date(2016, 7, 19, 17,30);
	$('#countdown').countdown({until: weddingDay});
})(jQuery);
