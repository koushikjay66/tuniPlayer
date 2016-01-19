
<div id="SampleSong" data-tuniSongs-type="song" >
	<button data-tunisongs-id="13101206" id="bulala"></button>
</div>

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

		this.ShuffelCurrentPlayList=function ShuffelCurrentPlayList(){

				/*
					 As you have already guessed from the name 
					 It Suffels the Current Playlist
					 It is implemented by using the "Fisher-Yates" algorithm for shuffeling 
					 For more information Google It.
					
					After Shuffeling it calls the playSong method because I wanted by default to play the New Shuffeled Playlist
				*/

				for (var i = this.playListLength - 1; i > 0; i--) {
					var j=Math.floor(Math.random()*(i+1));
					var temp=this.playList[i];
					this.playList[i]=this.playList[j];
					this.playList[j]=temp;
				}

				this.playSong(this.playList, 1);
		}// End of this.ShuffelCurrentPlayList

		this.ignite=function ignite(){
			/*
				This is one of the most most important function in tuniPlayer
				You will just need to call this function from your Button Onclick method 
				Like : 

					<button id="igniteTutorial" class="YourClassName" onclick="tuniPlayer.ignite()"/>

				You see whenever we need to play a song (call this.playSong()) we need a Object array.
				So, One of the job of ignite function is 

					@Job1:Create that ignite object array and set all the variable values.

				So whenever it gets a call what it does is  
			*/	

		}

	}// End of function TuniPlayer



p=[
					 {
						Song_Name:"crazier", 
						Song_stream:"audio/1.mp3",
						
					}, 

					{
						Song_Name:"crazier1", 
						Song_stream:"audio/2.mp3",
						
					},
					
					{
						Song_Name:"crazier2", 
						Song_stream:"audio/1.mp3",
						
					}, 

					{
						Song_Name:"crazier3", 
						Song_stream:"audio/2.mp3",
						
					}, 

					{
						Song_Name:"crazier4", 
						Song_stream:"audio/2.mp3",
						
					}, 

					{
						Song_Name:"crazier", 
						Song_stream:"audio/2.mp3",
						
					}
]; 


tuniPlayer=new tuniPlayer();
//tuniPlayer.ignite();

//var x=document.getElementById("bulala").getAttribute("data-tunisongs-id");
//alert(x);
</script>