
<script type="text/javascript">

	function tuniPlayer(){

		// Initialize the Audio Object in JS

		var audio=new Audio();

		// Which one is playing

		this.pointer=0;


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
						Song_url=www.tunisongs.com/crazier,

						Artist_name:Taylor_Swift,
						Artist_Profile: www.tunisongs.com/tarlorSwift, 

						Album_Name: Teenage Dreams,
						Album_url=www.tunisongs.com/teenage_dreams
					}]; 

		   tuniPlayer.loadPlayList(playList);

		   Now I guess you have got the basic Idea

		*/ 

		this.playList;
		this.playListLength;


		/* 
			Some variables are needed for UI control like 
			These basic thing will be necessary to add make the UI meaningful

		*/
		this.song_name;
		this.song_info;
		this.artist_name;
		this.artist_profile;
		this.album_Name;
		this.album_url;
		this.total_length;




		this.loadPlayList=function loadPlayList(ObjectArray){

			this.playListLength=ObjectArray.length;
			this.playList=ObjectArray;

			this.playerUI();
		}


		this.playSong=function playSong(ObjectArray, pointer){
			audio.src=ObjectArray[this.pointer].Song_stream;
			audio.play();
		}


		this.changeVoume=function changeVoume(volume){
			audio.volume=volume;
		}


		this.changeCurrentTime=function changeCurrentTime(newTime){

			audio.currentTime=(newTime/100)*audio.duration;
		}


		this.playNext=function playNext(){

			this.pointer++;
			//alert(pointer);

			this.playSong(this.playList, this.pointer);
		}



		this.playPrevious=function playPrevious(){
			this.pointer--;
			this.playSong(this.playList, this.pointer);
		}


		this.play_pause=function play_pause(){
			if(audio.paused){
				audio.play();
				// Then  the Code will go for UI Control
				
			}else{
				audio.pause();
				//Then the code will go for UI Control
			}
			this.playerUI();
		}

		this.playerUI=function playerUI(){
				/*
					This function is need for all the controls I need to make change on the UI
				*/


		}

	}



p=[ {
						Song_Name:"crazier", 
						Song_stream:"audio/1.mp3",
						
					}, 

					{
						Song_Name:"crazier", 
						Song_stream:"audio/2.mp3",
						
					}
					]; 




//alert(p[0].Song_stream);
tuniPlayer=new tuniPlayer();
tuniPlayer.playList=p;
tuniPlayer.pointer=1;

tuniPlayer.playPrevious();



</script>