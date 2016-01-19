<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>

	<button id="pp" onclick="cpp()">Play</button>
	<input id="playControl" type="range" oninput="cplayback(this.value)" min="0" max="100" value="0">
	<button id="mp" onclick="cmp()">Mute</button>
	<input id="volumeControl" type="range" oninput="cvolume(this.value)" min="0" max="100" value="50">
	<p id="bulala"></p>


</body>
</html>

<script type="text/javascript">
	var audio=new Audio();

	audio.src="http://localhost/tuniPlayer/test.php";
	
	function cpp(){
		if (audio.paused) {
			audio.play();
			audio.volume=document.getElementById('volumeControl').value/100;
			document.getElementById('pp').innerHTML="Pause";
		}else{
			audio.pause();
			document.getElementById('pp').innerHTML="Play";
		}
	}

	function cmp(){

		if(audio.muted){
			audio.muted=false;
			document.getElementById('mp').innerHTML="Mute";
		}else{
			audio.muted=true;
			document.getElementById('mp').innerHTML="unmute";
		}
	}

	function cvolume(v){

		audio.volume=v/100;
	}

	function cplayback(t){

		audio.currentTime=(t/100)*audio.duration;
		

	}


setInterval(function(){
	document.getElementById("playControl").value=(audio.currentTime*100)/audio.duration;
	document.getElementById("bulala").innerHTML=(audio.currentTime/100).toFixed(2) +"/"+(audio.duration/100).toFixed(2);
	if(audio.currentTime==audio.duration){

		document.getElementById("pp").click();
		document.getElementById("pp").click();
	}
}, 200);



	
</script>