 (function($) {
       $.ajax({
		url: site_data.url,
		type: 'post',
		data: {
			action: 'get_quote'
		},
		success: function (response) {
			alert(response);
		}

	});
       
    })(jQuery);
