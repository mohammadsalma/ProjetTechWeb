
var from = document.getElementById("msg-form");
form.addEventListener("submit", function(event)) {
	event.preventDefault();
		var request = new XMLHttpRequest();
		request.addEventListener('load', function(data)) {
			console.log(data);
			var textarea = document.getElementById('msg');
			textarea.value = '';
		});
		request.addEventListener('error', function(data) {
			console.log('error', data);
		});
		request.open("POST", "php/add_msg.php");
		request.send(new FormData(form));
});
