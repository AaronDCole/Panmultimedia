<?php
session_start();

if (isset($_SESSION['previous'])) {
   if (basename($_SERVER['PHP_SELF']) != $_SESSION['previous']) {
        session_destroy();
        header('Location: '.$_SERVER['PHP_SELF']);
   }
}

$_SESSION['previous'] = basename($_SERVER['PHP_SELF']);

if(isset($_SESSION['islive']))
    $_SESSION['islive']='0';
else 
    $_SESSION['islive']='0';
    
if(isset($_SESSION['curdir']))
    $_SESSION['curdir'] = $_SESSION['curdir'];
else 
    $_SESSION['curdir']='Clipart';
    
if(isset($_SESSION['nextdir']))
    $_SESSION['nextdir'] = $_SESSION['nextdir'];
else 
    $_SESSION['nextdir']=''; 
    
if(isset($_SESSION['imgpp']))
    $_SESSION['imgpp'] = $_SESSION['imgpp'];
else 
    $_SESSION['imgpp']='108'; 
    
    
    
    
    if (isset($_POST['imgppnumber'])) {
    if ($_POST["imgppnumber"] == 27) { $_SESSION["imgpp"]=27; }
    if ($_POST["imgppnumber"] == 54) { $_SESSION["imgpp"]=54; }
    if ($_POST["imgppnumber"] == 81) { $_SESSION["imgpp"]=81; }
    if ($_POST["imgppnumber"] == 108) { $_SESSION["imgpp"]=108; }
    if ($_POST["imgppnumber"] == 135) { $_SESSION["imgpp"]=135; }
    if ($_POST["imgppnumber"] == 162) { $_SESSION["imgpp"]=162; }
    if ($_POST["imgppnumber"] == 189) { $_SESSION["imgpp"]=189; }
    if ($_POST["imgppnumber"] == 216) { $_SESSION["imgpp"]=216; }
    if ($_POST["imgppnumber"] == 243) { $_SESSION["imgpp"]=243; }
    if ($_POST["imgppnumber"] == 270) { $_SESSION["imgpp"]=270; }
    if ($_POST["imgppnumber"] == 297) { $_SESSION["imgpp"]=297; }
    if ($_POST["imgppnumber"] == 324) { $_SESSION["imgpp"]=324; }
    if ($_POST["imgppnumber"] == 351) { $_SESSION["imgpp"]=351; }
    if ($_POST["imgppnumber"] == 378) { $_SESSION["imgpp"]=378; }
    if ($_POST["imgppnumber"] == 405) { $_SESSION["imgpp"]=405; }
    if ($_POST["imgppnumber"] == 432) { $_SESSION["imgpp"]=432; }
    if ($_POST["imgppnumber"] == 459) { $_SESSION["imgpp"]=459; }
    if ($_POST["imgppnumber"] == 486) { $_SESSION["imgpp"]=486; }
    if ($_POST["imgppnumber"] == 513) { $_SESSION["imgpp"]=513; }
    if ($_POST["imgppnumber"] == 540) { $_SESSION["imgpp"]=540; }
    if ($_POST["imgppnumber"] == 567) { $_SESSION["imgpp"]=567; }
    if ($_POST["imgppnumber"] == 594) { $_SESSION["imgpp"]=594; }
    if ($_POST["imgppnumber"] == 621) { $_SESSION["imgpp"]=621; }
    if ($_POST["imgppnumber"] == 100000) { $_SESSION["imgpp"]=100000; }	
    	
    	}
    
    
    
?>
<html>
<head>
<!-- Add jQuery library -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="./modules/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="./modules/fancybox/jquery.fancybox.css?v=2.1.0" type="text/css" media="screen" />
<script type="text/javascript" src="./modules/fancybox/jquery.fancybox.pack.js?v=2.1.0"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="./modules/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.3" type="text/css" media="screen" />
<script type="text/javascript" src="./modules/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.3"></script>
<script type="text/javascript" src="./modules/fancybox/helpers/jquery.fancybox-media.js?v=1.0.3"></script>

<link rel="stylesheet" href="./modules/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.6" type="text/css" media="screen" />
<script type="text/javascript" src="./modules/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.6"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
<title>Clipart</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<body>
<style type="text/css">

h1 { font-weight:bold; font-size:18px; alignment-baseline: central; }
h2 {font-size:14px; font: bold 1em/1.5em "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif; alignment-baseline: central;}
.Headingphp { font-family:Snell Roundhand; font-size:42px; color: white; }
.Headingphp:hover { font-family:Snell Roundhand; font-size:42px; color: white; text-shadow: 0 0 0.5em white; }
.Subheadingphp { font-family:Arial,Helvetica,sans-serif; color: white; font-size:12px; }

img {opacity:1;
-moz-transition: opacity 1s;
-webkit-transition: opacity .5s;
-o-transition: opacity 1s;
transition: opacity .5s;
}​

.hovermenuh ul{
font: bold 13px Helvetica;
background-color: black;
margin-left: 0;
height: 100%;
}
.hovermenuh ul li{
list-style: none;
display: inline;
}
.hovermenuh ul li a{
padding: 0px 1.3em;
text-decoration: none;
float: left;
color: grey;
}
.hovermenuh ul li a:hover{
color: black;
text-shadow: 0 0 0.2em black;
}

.hovermenub ul{
font: bold 13px Helvetica;
margin-left: 0;
height: 100%;
}
.hovermenub ul li{
list-style: none;
display: inline;
}
.hovermenub ul li a{
padding: 0px 2.1em;
text-decoration: none;
float: left;
color: grey;
}
.hovermenub ul li a:hover{
color: white;
text-shadow: 0 0 0.2em white;
}

.hovermenuv ul{
font: 14px Helvetica;
margin-left: -40;
height: 100%;
}
.hovermenuv ul li{
list-style: none;
display: inline;
}
.hovermenuv ul li a{
padding: 0px .1em;
text-decoration: none;
float: left;
color: blue;
}
.hovermenuv ul li a:hover{
color: grey;
text-decoration: underline;
text-shadow: 0 0 0.2em grey;
}

</style>
	<?php include("./elements/header.html"); ?>
<div id="main" class="img"; style="position: relative; margin-left: auto; margin-right: auto; height: auto; width: 1024; border: 0px solid black;">	
		<div id="catogriesnav" style="position: relative; margin-left: auto; margin-right: auto; top: -8; height: auto; width: 1024; background-color:#E8EDF2; border: 0px solid #333;">	
				<div id="searchbutton" style="position: absolute; top: 27; right: 10; width: 25; height: 25;">
					<a href="#" onclick="document.getElementById('search').style.left = '5px'; $('#searchbutton').css({ opacity: 0.0 }); $('#backbutton').css({ opacity: 0.0 }); $('#homebutton').css({ opacity: 0.0 }); $('#subcattitle').css({ opacity: 0.0 });"><img src="./img/toolbar_find.png" alt="search" height="25" width="25"/></a>
				</div>
				<div id="homebutton" style="position: absolute; top: 27; left: 40; width: 25; height: 25;">
					<form class="" id="sendtocatcheck" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<input type='image' src='./img/toolbar_home.png' name='loc' value='gohome' alt='gohome' height='25' width='25'>
					</form>
				</div>
				<div id="backbutton" style="position: absolute; top: 27; left: 10; width: 25; height: 25;">
					<form class="" id="sendtocatcheck" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<input type='image' src='./img/toolbar_back.png' name='back' value='goback' alt='goback' height='25' width='25'>
					</form>
				</div>	
				<div id="search" style="position: relative; left: -5000; top: 29; right: 7; width: auto; height: 44; border: 0px solid #333;">
				<form class="form-wrapper" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<input type="text" size="190" name="query" id="search" placeholder="To search the photographic library, simply enter key words seperated by a comma and space, and press go!" required>
				<div id="pushsearch" style="position: absolute; right: 15; top: -2; width: 25; height: 25;">
				<input type="image" src="./img/toolbar_find.png" width="25" height="25" id="submit">
				</div>
				</form>
		</div>	
				<div id="catdisplayarea" style="position: relative; width: 98%; height: auto; left: 9; top: 45; border: 0px solid #333; font-family:Helvetica; color: black; font-size:10px; font-weight: bold;">
						<form class="" id="sendtocatcheck" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
						<?php
						function retrieve($filter) {
						include './php/db_connect.php';
						$link = mysql_connect($mysqlpath, $mysqluser, $mysqlpass );
						$dblink = mysql_select_db($dbname, $link);
						$result = mysql_query("select * from clipart_folder_list where folder_root = '$filter'");
						print ('<center><table border="0" cellspacing="30">');
						$tablelenth = 1;
						print ('<tr>');
						while ($row = mysql_fetch_assoc($result))
						{
						$dirname = $row['folder_name'];
						$diraddress = $row['folder_address'];
						$mysqlimg = mysql_fetch_array(mysql_query("select * from clipart_list where image_address like CONCAT('%', '$dirname', '%') having count(*) > '1'"));
						$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'];
						$imgaddress = $url.'/'.$mysqlimg['thum_address'];
						print ("<td><input type='image' style='float:top' name='loc' onmouseover=this.style.opacity='.75' onmouseout=this.style.opacity='1' src=$imgaddress alt='$dirname' value='$dirname' height='130' width='130'><center><h2>$dirname</h2></center></td>");
						if ($tablelenth == 6)
						{
						print ('</tr>');	
						print ('<tr>');
						$tablelenth = 0;
						}
						$tablelenth += 1;
						}
						print ('</tr>');		
						print ('</table>');
						print ('</center>');
						print ('</form>');
						}
						
						if (isset($_POST['back'])) {
						if ($_POST['back'] == 'goback' && $_SESSION['curdir'] != 'Clipart') {
						$_SESSION['curdir'] = str_replace(('/'.basename($_SESSION['curdir'])), '', $_SESSION['curdir']);
						}
						}
						
						if (isset($_POST['loc'])) {
						if ($_POST['loc'] == 'gohome') {
						$_SESSION['curdir']='Clipart';
						$_SESSION['predir']='Clipart';
						}
						if (($_POST['loc'] != $_SESSION['nextdir']) && ($_POST['loc'] !== 'gohome')) {
						$_SESSION['curdir'] = $_SESSION['curdir'].'/'.$_POST['loc'];
						}
						}
						
						if (isset($_POST['loc'])) {
						$_SESSION['nextdir'] = $_POST['loc'];
						}
						
						if (isset($_POST['islive'])) {
						if ($_POST['islive'] == '1'){
						$_SESSION['islive'] = '1';
						retrieve(basename($_SESSION['curdir']));						
						}
						if ($_POST['islive'] == '0'){
						$_SESSION['islive'] = '0';
						}
						}
						?>
						</form>
					</div>
				<div id="subcattitle" class="Headingphp" style="position: absolute; top: 32; height: 15; left: 60; right: 60; width: auto; border: 0px solid #333; font-family:Arial,Helvetica; color: black; font-size:18px;">	
					<center>
					<b>
					<?php					
					print  'Show by categories...';
					?>
					</b>
					</center>
				</div>
				<div id="pulldowntab" style="position: relative; margin-left: auto; margin-right: auto; bottom: -20; width: 55; height: 23; background-color: #E8EDF2;">
					<form class="" id="sendtocatcheck" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
					<?php
					session_start();
					if ($_SESSION['islive'] == '0') {
					print'<center><input type="image" id="checkcatbutton" src="./img/toolbar_eject.png" name="islive" value="1" width="20" height="20""></center>';
					}
					elseif ($_SESSION['islive'] == '1') {
					print'<center><input type="image" id="checkcatbutton" src="./img/toolbar_eject_up.png" name="islive" value="0" width="20" height="20""></center>';
					}
					print'</form>';
					?>
					</form>
				</div>		
		</div>	
		<div id="thumsdisplayarea" style="position: relative; margin-left: auto; margin-right: auto; top: 50; width: 100%; height: auto; border: 0px solid black;">
				<?php
				print '<center><b>'.$_SESSION['curdir'].'</b></center>';
				function retrieve_thum($filter, $search) {
				include './php/db_connect.php';
				$link = mysql_connect($mysqlpath, $mysqluser, $mysqlpass );
				$dblink = mysql_select_db($dbname, $link);
				$result = mysql_query("select * from clipart_list where image_address like CONCAT('%', '$filter', '%')");
				print ('<center><table border="0">');
				$tablelenth = 1;
				print ('<tr>');
				$drawn = 0;
				while (($row = mysql_fetch_array($result)) && ($drawn != $_SESSION['imgpp']))
				{
				if (($search[0] == '*') or ((array_intersect(explode('_', $row['image_name']), $search) != null))) {
				$drawn += 1;
				$imgadd = $row['image_address'];
				$thumadd = $row['thum_address'];
				$imgdir = $row['image_folder'];
				$imgname = $row['image_name'];
				$imgid = $row['id'];
				$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'];			
				$imglink = $imgname;
				print ("<td><a href=$url/$imgadd class='fancybox' rel='imglist' title='$imglink'><img id=$imgid onmouseover=this.style.opacity='.75' onmouseout=this.style.opacity='1' src=$url/$thumadd alt='$nameme' height='109' width='109'/></a></td>");
				if ($tablelenth == 9)
				{
				print ('</tr>');	
				print ('<tr>');
				$tablelenth = 0;
				}
				$tablelenth += 1;
				}
				}
				print ('</tr>');		
				print ('</table>');
				}
				
				if (isset($_POST['query'])) {
				$searchresults = explode(', ', $_POST["query"]);
				retrieve_thum(basename($_SESSION['curdir']), $searchresults);
				}
				else {
				retrieve_thum(basename($_SESSION['curdir']), '*');
				}
				
				?>
				<script language="JavaScript" type="text/javascript">
				function getsupport ( number )
				{
				  document.send.imgppnumber.value = number ;
				  document.send.submit() ;
				}
				</script>
				<form class="" name='send' action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<input type="hidden" name="imgppnumber" />
				Images per page <a href="javascript:getsupport(27)">27</a> 
				<a href="javascript:getsupport(54)">54</a> 
				<a href="javascript:getsupport(81)">81</a> 
				<a href="javascript:getsupport(108)">108</a> 
				<a href="javascript:getsupport(135)">135</a> 
				<a href="javascript:getsupport(162)">162</a> 
				<a href="javascript:getsupport(189)">189</a> 
				<a href="javascript:getsupport(216)">216</a> 
				<a href="javascript:getsupport(243)">243</a>
				<a href="javascript:getsupport(270)">270</a> 
				<a href="javascript:getsupport(297)">297</a> 
				<a href="javascript:getsupport(324)">324</a> 
				<a href="javascript:getsupport(351)">351</a> 
				<a href="javascript:getsupport(378)">378</a> 
				<a href="javascript:getsupport(405)">405</a> 
				<a href="javascript:getsupport(432)">432</a> 
				<a href="javascript:getsupport(459)">459</a> 
				<a href="javascript:getsupport(486)">486</a> 
				<a href="javascript:getsupport(513)">513</a> 
				<a href="javascript:getsupport(540)">540</a> 
				<a href="javascript:getsupport(567)">567</a> 
				<a href="javascript:getsupport(594)">594</a> 
				<a href="javascript:getsupport(621)">621</a> 
				<a href="javascript:getsupport(100000)">Display All</a>
				</form>
				<br \>
				<br \>
				</div>
			<div id="addsensearea1" style="position: relative; margin-left: 148; margin-right: 148; bottom: -108; height: 90; width: 728; border: 0px solid #333;">
					<script type="text/javascript"><!--
					google_ad_client = "hjdgfhhjytrjtyt";
					
					google_ad_width = 728;
					google_ad_height = 90;
					google_ad_format = "728x90_as";
					google_ad_type = "text_image";
					google_ad_channel = "";
					google_color_border = "000000";
					google_color_bg = "FFFFFF";
					google_color_link = "0000FF";
					google_color_text = "000000";
					google_color_url = "008000";
					google_ui_features = "rc:0";
					//-->
					</script>
					<script type="text/javascript"
					  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
					</script>
			</div>

</div>
</div>
</body>
<div id="filler" style="position: relative; height: 130px;"></div>
	<?php include("./elements/footer.html"); ?>
</html>