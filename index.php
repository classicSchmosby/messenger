<!DOCTYPE html>
<html>
<head>
	<title>Messenger</title>

	<link rel="stylesheet" href="assets/css/messenger.css" type="text/css" />

	<script type="text/javascript" src="assets/js/messenger.js"></script>
</head>
<body>
	<div id="contactWrapper">
		<div id="searchContacts">
			<input type="text" id="searcher" placeholder="Search..." onkeyup="return messageSearcher(event)" />
		</div>
		<div id="contact">
			<div id="contactImg">
				<img id="userImg" src="assets/img/user.png" />
			</div>
			<div id="contactInfo">
				<h2 id="username"></h2>
				<h2 id="username2" style="display:none;">UsernameUsernameUsernameUsernameUsernameUsername</h2>

				<h4 id="contactInfoContents_2" style="display:none;">The next part that I am buying for my new PC build is the case. I can't wait because its white and looks so nice! Then its the PSU, which is 850w</h4>
				<h4 id="biggie" style="display:none;">The next part that im getting is sdafdsfasdfasdfasdfasdfasdfasdfasdfasdfasdfdsf</h4>
				<h4 id="recentMessage"></h4>
			</div>
			<div id="messageTimeWrapper">
				<h4 id="messageTime">13:57</h4>
			</div>
		</div>
	</div>

</body>
<script type="text/javascript">
	function messageSearcher(e) {
		var searcher = document.getElementById('searcher').innerHTML;
		if(e.keyCode == 13) {
			alert('enter!');
		} else {
			alert('press!');
		}
	}
	function populateMessages() {
		var tester = document.getElementById('username2').innerHTML;
		var username_maxLength = 30;
		if (tester.length > username_maxLength) {
			var trimmer = (tester.substring(0, username_maxLength) + '...');
		} else {
			var trimmer = (tester.substring(0, username_maxLength));
		}
		document.getElementById('username').innerHTML = trimmer;

		var userMessage = document.getElementById('biggie').innerHTML;
		var userMessage_maxLength = 60;
		if (userMessage.length > userMessage_maxLength) {
			var trimmedString = (userMessage.substring(0, userMessage_maxLength) + '...');
		} else {
			var trimmedString = (userMessage.substring(0, userMessage_maxLength));
		}
		document.getElementById('recentMessage').innerHTML = trimmedString;
	}
	populateMessages();
</script>
</html>