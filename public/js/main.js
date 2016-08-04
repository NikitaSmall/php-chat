setTimeout(function() {
	var conn = new WebSocket('ws://localhost:8080/chat');

	conn.onmessage = function(e) {
		console.log(e.data);
	};

	conn.onopen = function(e) {
	    console.log("Connection established!");
	    conn.send('Hello Me!');
	};
}, 1000);
