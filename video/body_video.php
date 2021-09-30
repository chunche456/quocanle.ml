<body>
	<h1><a href="/">Home</a></h1>
	<h1><a href="/video">Video List</a></h1>
	<div class="video">
		<video controlsList="nodownload" controls autoplay preload="auto" poster=<?php echo $poster; ?> data-setup="{}">
			<source src=<?php echo $url_video; ?> type="video/mp4" />
			<?php $definition; ?>
			<!-- <source src="MY_VIDEO.webm" type="video/webm" /> -->
			<?php $subtitles; ?>
		</video>
		<div class="description">
			<h2><?php echo $name; ?></h2>
			<p><?php echo $description_p; ?></p>
		</div>
</body>