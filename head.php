<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<link rel="icon" href="/favicon\Smiling_Face_With_Tear.png" />
	<link rel="stylesheet" href="css\index.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7714233913291579"
     crossorigin="anonymous"></script>
	</script>
	<script src="/js\adblockDetector.js"></script>
	<script>
	// Configure the adblock detector
	(function(){
		var enabledEl = document.getElementById('adb-enabled');
		var disabledEl = document.getElementById('adb-not-enabled');
		function adBlockDetected() {
			enabledEl.style.display = 'block';
			disabledEl.style.display = 'none';
		}
		function adBlockNotDetected() {
			disabledEl.style.display = 'block';
			enabledEl.style.display = 'none';
		}
		
		if(typeof window.adblockDetector === 'undefined') {
			adBlockDetected();
		} else {
			window.adblockDetector.init(
				{
					debug: true,
					found: function(){
						adBlockDetected();
					},
					notFound: function(){
						adBlockNotDetected();
					}
				}
			);
		}
	}());
	</script>
</head>