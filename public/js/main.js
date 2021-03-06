$(document).ready(function () {
	var conn = new WebSocket('ws://localhost:8080/chat');

	conn.onmessage = function(e) {
		var message = JSON.parse(e.data);
		console.log(e.data);
		if (Array.isArray(message)) {
			message.forEach(function(m) {
				showMessage(JSON.parse(m));
			});
		} else {
			showMessage(message);
		}
	};

	function showMessage(message) {
		$('#chat-body').append(
			'<li class="media">' +
                '<div class="media-body">' +
                    '<div class="media">' +
                        '<div class="media-body">' +
                           message.message +
                           '<br />' +
                           '<small class="text-muted">' +
                           message.username + '| 23rd June at 5:00pm</small>' +
                            '<hr />' +
                        '</div>' +
                    '</div>' +
                '</div>' +
            '</li>'
		);
	}

	conn.onopen = function(e) {
	    console.log("Connection established!");
	};

	$('#send-message').click(function () {
		var message = $('#message').val();
		var username = $('#username').val();

		if (message.length < 1 || username.length < 1) {
			alert('Enter the message AND username!');
			return;
		}

		conn.send(JSON.stringify({message: message, username: username}));
	});
});
	
