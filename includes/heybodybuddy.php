<body>
	<!--Isso foi feito por um retardado feliz conhecido como Lera-->

	<audio id="podcast" preload="auto">
		<source id="audio1" src="https://mcdn.podbean.com/mf/web/7qc7qp/MRG485_Voz_do_Robo_Papa_tapa.mp3" class="podsource">

	</audio>
	<div id="audioplayer" class="podplayer">
		<div id="podtitle" class="ptitle"><h1 id="podtitleh1">Eu curto Idols. Mas isso tem que acabar!</h1></div>
		
		<div class="time">
		<span id="ctime" class="ctime">0:0:0</span>
		<span id="duration" class="pdur">0:0:0</span>
		</div>
		<input type="range" min="0" max="1" step="0.01"  class="vol" id="volu">
		<div class="ppmbtn">
		<div id="pButton" class="playbutton"></div>
		<div id="muteb" class="mutebutton"></div>
		</div>
		<div id="timeline">	
			<div id="playhead" ></div>
			<div id="d1">
			<div id="downloaded"></div>
			</div>

	<div class="Watermark"><strong>SDNPlayer 20201128</strong></div>
		</div>

		<div id="playlist" class="plist"><ul><li><span onclick="playFLAC()">Play FLAC</span></li>
				<li><span onclick="playMP3()">PlayMP3</span></li></ul></div>

	</div>
