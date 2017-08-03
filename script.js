$(document).ready(function() {

	$("#form").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function(response) {
			alert(response)
			//alert("Спасибо за заявку, письмо отправлено успешно!");
		});
		return false;
	});
});