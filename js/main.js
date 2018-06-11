$(function () {
	$('#AjaxRequest').submit(function () {

		var form = $(this).serialize();

		var request = $.ajax({
			method: "POST",
			url: "post.php",
			data: form,
			dataType: "json"
		});

		request.done(function (e) {
			$('#msg').html(e.msg);

			if(e.status) {
				$('#AjaxRequest').each(function () {
					this.reset();
				});
			}
		});

		request.fail(function (e) {
			console.log("fail");
		});

		request.always(function (e) {
			console.log(e);
		});

		return false;
	});
});