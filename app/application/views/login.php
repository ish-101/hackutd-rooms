<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?= style_link_tag('login') ?>
	<script src="https://apis.google.com/js/api:client.js"></script>
	<script>
		var googleUser = {};
		var startApp = function() {
			gapi.load('auth2', function(){
				auth2 = gapi.auth2.init({
					client_id: '<?= $google_signin_client_id ?>'
				});
				attachSignin(document.getElementById('gSignIn'));
			});
		};
	</script>
</head>
<body id="login" style="background-image: url(<?= asset('bitmap/background1.png') ?>);">
	<main>
	
		<img id="logo" src="<?= asset('bitmap/utdlogo1.png') ?>">
		<span id="google-text">Login powered by <img id="google-logo" src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png"></span>

		<div id="gSignInWrapper">
			<div id="gSignIn" class="button orange-button">
				<span class="text">Login</span><i class="icon material-icons">arrow_forward</i>
			</div>
		</div>

	</main>

	<script>startApp();</script>
	<?= script_tag('login') ?>

</body>
</html>



	
			