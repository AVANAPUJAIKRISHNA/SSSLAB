<?php
	// Develop a PHP program to perform various file handling operations.
	
	$path="C:\\Users\\ML Lab\\Desktop\\20761A0505\\module6.txt";
	$path2="C:\\Users\\ML Lab\\Desktop\\20761A0505\\module6_append.txt";
	$path3="C:\\Users\\ML Lab\\Desktop\\20761A0505\\delete.txt";
	
	//Using fread
	echo "file opened Successfully"."<br>"; 
	$fp=fopen($path,"r");
	$data=fread($fp,filesize($path));
	echo "<br> Using fread: <br>";
	echo $data."<br>";
	fclose($fp);
	
	//Using fgets
	echo "<br> Using fgets: <br>";
	$fp=fopen($path,"r");
	echo fgets($fp)."<br>";
	fclose($fp);
	
	//Print the first character using fgetc
	echo "<br> Print the character using fgetc: <br>";
	$fp=fopen($path,"r");
	echo fgetc($fp)."<br>";
	fclose($fp);
	
	//Print the entire data using fgets
	echo "<br> Print the entire data using fgets: <br>";
	$fp=fopen($path,"r");
	while(!feof($fp)){
		echo fgetc($fp);
	}
	echo "<br>";
	fclose($fp);
	
	//write the data into file   i.e, OverWritten
	echo "<br> Write the data into file: <br>";
	$fp=fopen($path,"w");
	fwrite($fp,"Welcome to fwrite in PHP");
	fclose($fp);
	
	$fp=fopen($path,"r");
	$data=fread($fp,filesize($path));
	echo $data."<br>";
	fclose($fp);
	
	//Append the data into file
	echo "<br> Append the data into file: <br>";
	$fp=fopen($path,"a");
	fwrite($fp,"This is CSE Dept");
	fwrite($fp,"Appending data");
	fclose($fp);
	
	$fp=fopen($path,"r");
	$data=fread($fp,filesize($path));
	echo $data."<br>";
	fclose($fp);
	
	//Merging Files
	echo "<br> Merge the files: <br>";
	$fp=fopen($path,"a+");
	$fp2=file_get_contents($path2);
	fwrite($fp,$fp2);
	fclose($fp);
	
	$fp=fopen($path,"r");
	$data=fread($fp,filesize($path));
	echo $data."<br>";
	fclose($fp);
	
	//Deleting a file
	echo "<br> Deleting a file <br>";
	$status=unlink($path3);
	if($status)
		echo "File deleted Succesfully";
	else
		echo "File not deleted";
?>