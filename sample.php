
<script type="text/javascript">
	
	function tuniPlayer(){

		// Initialize the Audio Object in JS

		var audio=new Audio();

		// Which one is playing

		var pointer=0;


		/*
		    Initially This player needs to load a playlist to play a song 
		   If you want to play just one song then add them to a playlist array 
		   Remember User dont need to know this .
		   for example : User clicked on a song Name Crazier By Taylor Swift
		   what you need to do is make a play list out of it . 
		   Just just need to play  this thing to play a Song
			
			playlist=[ { 

						Song_Name:crazier, 
						Song_stream:www.example/crazier.mp3,

						Artist_name:Taylor_Swift,
						Artist_Profile: www.tunisongs.com/tarlorSwift, 

						Album_Name: Teenage Dreams,
						Album_url=www.tunisongs.com/teenage_dreams
					}]; 

		   tuniPlayer.loadPlayList(playList);

		   Now I guess you have got the basic Idea

		*/ 
		var playList;
		var playListLength;

		this.loadPlayList=function loadPlayList(ObjectArray){

			playListLength=ObjectArray.length;
			playList=ObjectArray;
		}


		this.playSong=function playSong(object, pointer){

		}


		this.changeVoume=function changeVoume(volume){
			audio.volume=volume;
		}


		this.changeCurrentTime=function changeCurrentTime(newTime){

			audio.currentTime=(newTime/100)*audio.duration;
		}


		this.playNext=function playNext(){

			pointer++;

			playSong(playList, pointer);
		}

	}
</script>