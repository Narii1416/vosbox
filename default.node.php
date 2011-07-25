<!DOCTYPE HTML>
<html>

<head>
<title>Vosplayer</title>
<link rel="stylesheet" href="?style" />
<script src="?jquery"></script>
<script src="?jshotkeys"></script>
<script src="?client"></script>
</head>

<body>

<div id="right">
	<div id="nowPlaying">
		<div id="albumArt"><img /></div>
		<h2 class="title"></h2><p class="album"></p><p class="artist"></p>
	</div>
	<div id="controls"></div>
	<div id="playlist">
		<div class="message">Click a search result to add it to this playlist</div>
	</div>
</div>

<div id="left">
	<form><input id="search" type="text" /></form>
	<div id="searchResults">
		<div class="message">To begin, search in the box above</div>
	</div>
</div>

<img id="searchIcon" src="?searchIcon" />

</body>
</html>
