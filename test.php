<?php 
	
	$file="audio/1.mp3";

	if($_SERVER['HTTP_REFERER']==null){
		exit;
	}
	$file2 = fopen("sample.txt","a");
	 fwrite($file2, $_SERVER['HTTP_REFERER']."\n");
	fclose($file2);

	header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
	header('Content-Type: audio/mpeg3; charset=utf-8');
	echo "audio/1.mp3";
 ?>