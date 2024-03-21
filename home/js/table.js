function ff() {
	$.ajax({
		type: "GET",
		url: "dd.php",
		success: function(response) {
			console.log("sup");
		}
	});
}