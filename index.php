<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>BOOTSTRAP CHAT EXAMPLE</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="/public/css/bootstrap.css" rel="stylesheet" />

    <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    <script type="text/javascript" src="/public/js/main.js"></script>

</head>
<body style="font-family:Verdana">
  <div class="container">
	<div class="row " style="padding-top:40px;">
	    <h3 class="text-center" >BOOTSTRAP CHAT EXAMPLE </h3>
	    <br /><br />
	    <div class="col-md-8 col-md-offset-2">
	        <div class="panel panel-info">
	            <div class="panel-heading">
	                RECENT CHAT HISTORY
	            </div>
	            <div class="panel-body">
					<ul class="media-list" id="chat-body">
			        </ul>
	            </div>
	            <div class="panel-footer">
	                <div class="input-group">
	                    <input type="text" id="message" class="form-control" placeholder="Enter Message" />
	                    <span class="input-group-btn">
	                        <button class="btn btn-info" type="button" id="send-message">SEND</button>
	                    </span>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<div class="row">
		<div class="col-md-4 col-md-offset-2">
			<div class="panel panel-default">
			  <div class="panel-body form-inline">
			    Your username:
			    <input type="text" class="form-control" id="username" placeholder="Your current name">
			  </div>
			</div>			
		</div>		
	</div>
</div>
</body>
</html>
