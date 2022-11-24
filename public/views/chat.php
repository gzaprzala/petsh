<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="public/css/style.css" />
	<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" />
	<link href="https://fonts.cdnfonts.com/css/bluetea" rel="stylesheet" />
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Chat / Petsh</title>
</head>

<body>
	<div class="chat-container">
		<?php include "public/views/components/navigation.php" ?>
		<div class="chat-container-main">
			<div class="chat-container-main-left">
				<div class="chat-container-main-left-user1">
					<img src="public/img/person-profile-pic.png" alt="user1-photo" class="chat-container-main-left-user1-photo">
				</div>
			</div>
			<div class="chat-container-main-right">
				<div class="chat-container-main-right-messages"></div>
				<div class="chat-container-main-right-tools">
					<div class="chat-container-main-right-tools-enter">
						<span class="chat-container-main-right-tools-enter-new">Enter a message...</span>
						<div class="chat-container-main-right-tools-enter-send">
							<img src="public/img/send.svg" alt="send" class="chat-container-main-right-tools-enter-send-icon">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>