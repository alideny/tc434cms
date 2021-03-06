<?php
/****************************************************/
/*				TrinityCore 4.3.4 CMS				*/
/****************************************************/
/*	repo: https://github.com/Bender103/tc434cms		*/
/****************************************************/
/*	Main Developer: Bender Gabor					*/
/*	https://github.com/Bender103					*/
/****************************************************/
require_once("../configs.php");
?>
<html>
<head>
<title><?php echo $website['title']; ?></title>
<link rel="stylesheet" type="text/css" href="../login/static/local-common/css/common.css?v15"/>
<link rel="stylesheet" type="text/css" href="../login/static/_themes/bam/css/master.css?v1"/>
<script type="text/javascript" src="../login/static/local-common/js/third-party/jquery-1.4.2.min.js?v15"></script>
<script type="text/javascript" src="../login/static/local-common/js/core.js?v15"></script>
<style type="text/css">
.loader {
	width:24px;
	height:24px;
	background: url("../wow/static/images/loaders/canvas-loader.gif") no-repeat;
}

.submit {
	height:38px;
	width:128px;
	background:url('../wow/static/images/services/button.png') no-repeat;
	border:0px;
	color:#E0BB00;
	text-shadow:0px 0px 2px #000;
	font-size:15px;
	font-weight:bold;
}
.submit:hover {
	background-position:0 -41;
}
.submit:active{
	background-position:0 -82;
}

.wuaha {
	text-shadow:0px 0px 2px #000;
}

.wuaha2 {
	text-shadow:0px 0px 5px #444;
}
</style>
</head>
<body>
<div id="embedded-login">
	<h2 class="wuaha2">Trinity Blizzard Website - SHA1 Encryption</h2>
	<br />
	<center>
		<?php
		if($_POST['username']){
			function sha_password($user,$pass){
				$user = strtoupper($user);
				$pass = strtoupper($pass);
				return SHA1($user.':'.$pass);
			}
			echo '<br /><br /><center><h3><font color="aqua" class="wuaha">Your password is</font></h3><br /><br /><font color="green" class="wuaha"> '.sha_password($_POST['username'],$_POST['password']).'</font></center>';
		}else{
		echo'
			<form method="POST">
			<table>
			<tr>
			<td>Username:<br /><input type="text" name="username"/></td>
			<td>Password:<br /><input type="password" name="password"/></td>
			</tr>
			<tr>
			<td colspan="2" align="center"><br /><br /><input type="submit" class="submit" value="Generate"/></td>
			</tr>
			</form>
		';
		}
		?>
	</center>
</div>
</body>
</html>