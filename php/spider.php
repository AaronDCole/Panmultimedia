<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include("file_with_errors.php");	
include 'db_connect.php';
$link = mysql_connect($mysqlpath, $mysqluser, $mysqlpass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());
mysql_query("TRUNCATE TABLE photography_folder_list");
mysql_query("TRUNCATE TABLE photography_list");
mysql_query("TRUNCATE TABLE clipart_folder_list");
mysql_query("TRUNCATE TABLE clipart_list");
mysql_query("TRUNCATE TABLE video_folder_list");
mysql_query("TRUNCATE TABLE video_list");
mysql_close($link);

function listPhotographyFolderFiles($dir){
	include './db_connect.php';
	$link = mysql_connect($mysqlpath, $mysqluser, $mysqlpass) or die(mysql_error());
	mysql_select_db($dbname) or die(mysql_error());
	$ffs = scandir($dir);
    foreach($ffs as $ff){
        if($ff != '.' && $ff != '..'){
            if ((is_dir($dir.'/'.$ff)==true))
				{ 
					$f_address = str_replace('./', '/', $dir.'/'.$ff);
					$folder_add_split = explode('/', $f_address);
					$splitlength = count($folder_add_split)-2;
					$backlength = count($folder_add_split)-3;
					$folder_root = $folder_add_split[$splitlength];
					$folder_back = $folder_add_split[$backlength];
					$query_folder = "SELECT * FROM `photography_folder_list` WHERE `folder_address` = '".$f_address."'";
					$entry_folder = "INSERT INTO `photography_folder_list` (`folder_address`, `folder_name`, `folder_root`, `folder_back`) VALUES ('".$f_address."', '".$ff."', '".$folder_root."', '".$folder_back."')";
					$result_folder = mysql_query($query_folder) or die(mysql_error());
					if (!mysql_num_rows($result_folder)) {
					mysql_query($entry_folder);
					}
				}
			$pathI = pathinfo($ff);
			if ( $pathI['extension'] == 'jpg' && (strpos($ff, 'thum') === false))
				{
					$f = str_replace('./', '/', $dir.'/'.$ff);
					$image_name = str_replace('.'.$pathI['extension'],'', basename($f));
					$f_thum = str_replace('.'.$pathI['extension'], '_thumb.'.$pathI['extension'], $f);
					$f_address = str_replace('./', '/', $dir.'/'.$ff);
					$image_folder = basename($f_address);
					$query = "SELECT * FROM `photography_list` WHERE `image_address` = '".$f."'";
					$entry = "INSERT INTO `photography_list` (`address`, `image_address`, `image_folder`, `thum_address`, `image_name`) VALUES ('".str_replace(basename($f_address), '', $f_address)."', '".$f."', '".basename(str_replace(basename($f_address), '', $f_address))."', '".$f_thum."', '".$image_name."')";
					$result = mysql_query($query) or die(mysql_error());
					if (!mysql_num_rows($result)) {
					mysql_query($entry);
					}
				}
            if(is_dir($dir.'/'.$ff)) listPhotographyFolderFiles($dir.'/'.$ff);
        }
    }
}
function listClipartFolderFiles($dir){
	include './db_connect.php';
	$link = mysql_connect($mysqlpath, $mysqluser, $mysqlpass) or die(mysql_error());
	mysql_select_db($dbname) or die(mysql_error());
	$ffs = scandir($dir);
    foreach($ffs as $ff){
        if($ff != '.' && $ff != '..'){
            if ((is_dir($dir.'/'.$ff)==true))
				{ 
					$f_address = str_replace('./', '/', $dir.'/'.$ff);
					$folder_add_split = explode('/', $f_address);
					$splitlength = count($folder_add_split)-2;
					$backlength = count($folder_add_split)-3;
					$folder_root = $folder_add_split[$splitlength];
					$folder_back = $folder_add_split[$backlength];
					$query_folder = "SELECT * FROM `clipart_folder_list` WHERE `folder_address` = '".$f_address."'";
					$entry_folder = "INSERT INTO `clipart_folder_list` (`folder_address`, `folder_name`, `folder_root`, `folder_back`) VALUES ('".$f_address."', '".$ff."', '".$folder_root."', '".$folder_back."')";
					$result_folder = mysql_query($query_folder) or die(mysql_error());
					if (!mysql_num_rows($result_folder)) {
					mysql_query($entry_folder);
					}
				}
			$pathI = pathinfo($ff);
			if ( $pathI['extension'] == 'png' && (strpos($ff, 'thum') === false))
				{
					$f = str_replace('./', '/', $dir.'/'.$ff);
					$image_name = str_replace('.'.$pathI['extension'],'', basename($f));
					$f_thum = str_replace('.'.$pathI['extension'], '_thumb.'.$pathI['extension'], $f);
					$f_address = str_replace('./', '/', $dir.'/'.$ff);
					$image_folder = basename($f_address);
					$query = "SELECT * FROM `clipart_list` WHERE `image_address` = '".$f."'";
					$entry = "INSERT INTO `clipart_list` (`address`, `image_address`, `image_folder`, `thum_address`, `image_name`) VALUES ('".str_replace(basename($f_address), '', $f_address)."', '".$f."', '".basename(str_replace(basename($f_address), '', $f_address))."', '".$f_thum."', '".$image_name."')";
					$result = mysql_query($query) or die(mysql_error());
					if (!mysql_num_rows($result)) {
					mysql_query($entry);
					}
				}
            if(is_dir($dir.'/'.$ff)) listClipartFolderFiles($dir.'/'.$ff);
        }
    }
}
function listVideoFolderFiles($dir){
	include './db_connect.php';
	$link = mysql_connect($mysqlpath, $mysqluser, $mysqlpass) or die(mysql_error());
	mysql_select_db($dbname) or die(mysql_error());
	$ffs = scandir($dir);
    foreach($ffs as $ff){
        if($ff != '.' && $ff != '..'){
            if ((is_dir($dir.'/'.$ff)==true))
				{ 
					$f_address = str_replace('./', '/', $dir.'/'.$ff);
					$folder_add_split = explode('/', $f_address);
					$splitlength = count($folder_add_split)-2;
					$backlength = count($folder_add_split)-3;
					$folder_root = $folder_add_split[$splitlength];
					$folder_back = $folder_add_split[$backlength];
					$query_folder = "SELECT * FROM `video_folder_list` WHERE `folder_address` = '".$f_address."'";
					$entry_folder = "INSERT INTO `video_folder_list` (`folder_address`, `folder_name`, `folder_root`, `folder_back`) VALUES ('".$f_address."', '".$ff."', '".$folder_root."', '".$folder_back."')";
					$result_folder = mysql_query($query_folder) or die(mysql_error());
					if (!mysql_num_rows($result_folder)) {
					mysql_query($entry_folder);
					}
				}
			$pathI = pathinfo($ff);
			if ( $pathI['extension'] == 'png' && (strpos($ff, 'thum') === false))
				{
					$f = str_replace('./', '/', $dir.'/'.$ff);
					$video_name = str_replace('.'.$pathI['extension'],'', basename($f));
					$f_thum = str_replace('.'.$pathI['extension'], '_thumb.'.$pathI['extension'], $f);
					$f_address = str_replace('./', '/', $dir.'/'.$ff);
					$video_folder = basename($f_address);
					$query = "SELECT * FROM `video_list` WHERE `video_address` = '".$f."'";
					$entry = "INSERT INTO `video_list` (`address`, `video_address`, `video_folder`, `thum_address`, `video_name`) VALUES ('".str_replace(basename($f_address), '', $f_address)."', '".$f."', '".basename(str_replace(basename($f_address), '', $f_address))."', '".$f_thum."', '".$video_name."')";
					$result = mysql_query($query) or die(mysql_error());
					if (!mysql_num_rows($result)) {
					mysql_query($entry);
					}
				}
            if(is_dir($dir.'/'.$ff)) listVideoFolderFiles($dir.'/'.$ff);
        }
    }
}
	
listPhotographyFolderFiles('../media/Photography');
listClipartFolderFiles('../media/Clipart');
listVideoFolderFiles('../media/Video');
?>
