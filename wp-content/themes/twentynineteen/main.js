// $(document).ready(function ($) {

// 	$.ajax({
// 		url: site_data.url,
// 		type: 'post',
// 		data: {
// 			action: 'get_quote'
// 		},
// 		success: function (response) {
// 			alert(response);
// 		}
// 	});

// });
(function($){

   $.ajax({
		url: site_data.ajaxurl,
		type: 'post',
		data: {
			action: 'get_quote'
		},
		success: function (response) {
			alert(response);
		}
	});

})(jQuery);
console.log("test");