$(document).ready(function() {
	
	$('.tab-content>div:not(":first-of-type")').hide();

	$('.tab-menu li').each(function(i) {
		$(this).attr('data-tab', 'tab' + i)
	});

	$('.tab-content>div').each(function(i) {
		$(this).attr('data-tab', 'tab' + i)
	});

	$('.tab-menu li').on('click', function() {

		var dataTab = $(this).data('tab');
		// var tabWrapper = $(this).closest('.tab-content');

		// tabWrapper.find('.tab-menu li').removeClass('active');
		$('.tab-menu li').removeClass('active');
		$(this).addClass('active');

		// tabWrapper.find('.tab-content>div').hide();
		// tabWrapper.find('.tab-content>div[data-tab=' + dataTab +']').show();

		$('.tab-content>div').hide();
		$('.tab-content>div[data-tab=' + dataTab +']').show();

	})

});