/**
 * form_post.js
 */

$(function() { 
	
	function clearErrors() {
		$("#username").removeClass('is-invalid');
		$("#err-msg-username").text("");
		$("#email").removeClass('is-invalid');
		$("#err-msg-email").text("");
		$("#password").removeClass('is-invalid');
		$("#err-msg-password").text("");
	}
	
	$('#user-form').submit(function( e ) {
		e.preventDefault();

		$.ajax({
			type: 'post',
			url: 'php/form_post.php',
			data: $('#user-form').serialize(),
			dataType: 'json',
			success: function (data) {
				if (data.hasErrors) {
					$("#valid-signup").empty();

					if (data.errEmptyUsername) {
						$("#username").addClass('is-invalid');
						$("#err-msg-username").text(data.errEmptyUsername);
					} else {
						$("#username").removeClass('is-invalid');
						$("#err-msg-username").text("");
					}
					
					if (data.errEmptyEmail) {
						$("#email").addClass('is-invalid');
						$("#err-msg-email").text(data.errEmptyEmail);
					} else if (data.errInvalidEmail) {
						$("#email").addClass('is-invalid');
						$("#err-msg-email").text(data.errInvalidEmail);
					} else {
						$("#email").removeClass('is-invalid');
						$("#err-msg-email").text("");
					}
					
					if (data.errEmptyPassword) {
						$("#password").addClass('is-invalid');
						$("#err-msg-password").text(data.errEmptyPassword);
					} else {
						$("#password").removeClass('is-invalid');
						$("#err-msg-password").text("");
					}
					
				} else {
					clearErrors();
					$("#valid-signup").html("<p class='alert alert-success' role='alert'> Form valid! Note:" +
							" You are not registered yet. This is still under construction.</p>");
				}
			}
		});
	});
});
