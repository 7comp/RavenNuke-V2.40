<?php
/*
Written and solely owned by Raven Web Services, LLC
Not for distribution other than by Raven Web Services, LLC
Copyright 2005-2010
*/
session_start();
if (!defined('INCLUDE_PATH')) define('INCLUDE_PATH', '../');
define('_rnINSTALLATION_FOLDER', INCLUDE_PATH . basename(dirname(__FILE__)).'/');
define('_rnRAVENSTALLER_CONFIG_FILE', _rnINSTALLATION_FOLDER . 'ravenstallerConfigFile.php');
$nukeConfigFile = INCLUDE_PATH . 'config.php';
if (file_exists($nukeConfigFile)) require_once $nukeConfigFile;
require_once _rnRAVENSTALLER_CONFIG_FILE;
define('_rnINSTALLATION_LANG_FILE',_rnINSTALLATION_FOLDER.'language/'.$useLanguageFile.'.php');
// $nukeConfigFile = INCLUDE_PATH . 'config.php';
$noConfigFile=FALSE;
if ($debugShowPathSettings === true) {
/*  Rudimentry - for diagnosing problems */
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" '."\n".'"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">'
	."\n".'<html xmlns="http://www.w3.org/1999/xhtml">'
	."\n".'<head><title></title></head>'
	."\n".'<body>'
	."\n".'INCLUDE_PATH = ' . INCLUDE_PATH
	."\n".'<br /><br />_rnINSTALLATION_FOLDER = ' . _rnINSTALLATION_FOLDER
	."\n".'<br /><br />_rnRAVENSTALLER_CONFIG_FILE = ' . _rnRAVENSTALLER_CONFIG_FILE
	."\n".'<br /><br />_rnINSTALLATION_LANG_FILE = ' . _rnINSTALLATION_LANG_FILE
	."\n".'<br /><br />$nukeConfigFile = ' . $nukeConfigFile
	."\n".'<br /><br />mimetype.php path = ' . INCLUDE_PATH . 'includes/mimetype.php'
	."\n".'<br /><br />_SERVER["PHP_SELF"] = ' . $_SERVER["PHP_SELF"]
	 ."\n".'</body>'
	."\n".'</html>';
	die();
}
@require_once INCLUDE_PATH . 'includes/mimetype.php';
if (!file_exists($nukeConfigFile)) {
	$dbhost = '';
	$dbuname = '';
	$dbname = '';
	$prefix = '';
	$user_prefix = '';
	require_once _rnINSTALLATION_LANG_FILE;
	$noConfigFile = TRUE;
	echo '<title></title></head><body>';
	rnInstallErr(1);
	echo '</body></html>';
	die();
}
// @require_once $nukeConfigFile;
if($display_errors) {
	error_reporting(E_ALL);
	@ini_set('display_errors', 1);
} else {
	error_reporting(E_ALL &~ E_NOTICE);
	@ini_set('display_errors', 0);
}
require_once _rnINSTALLATION_LANG_FILE;
if(!isset($_SESSION['lct']))  $_SESSION['lct']  = _rnNOT_LOADED;
if(!isset($_SESSION['lns']))  $_SESSION['lns']  = _rnNOT_LOADED;
if(!isset($_SESSION['lip1'])) $_SESSION['lip1'] = _rnNOT_LOADED;
if(!isset($_SESSION['lip2'])) $_SESSION['lip2'] = _rnNOT_LOADED;
if(!isset($_SESSION['lip3'])) $_SESSION['lip3'] = _rnNOT_LOADED;
if(!isset($_SESSION['lip4'])) $_SESSION['lip4'] = _rnNOT_LOADED;
if(!isset($_SESSION['lip5'])) $_SESSION['lip5'] = _rnNOT_LOADED;
if(!isset($_SESSION['lip6'])) $_SESSION['lip6'] = _rnNOT_LOADED;
if(!isset($_SESSION['lip7'])) $_SESSION['lip7'] = _rnNOT_LOADED;
if(!isset($_SESSION['lip8'])) $_SESSION['lip8'] = _rnNOT_LOADED;
if(!isset($_SESSION['lip9'])) $_SESSION['lip9'] = _rnNOT_LOADED;
if(!isset($_SESSION['lip10'])) $_SESSION['lip10'] = _rnNOT_LOADED;
if(!isset($_SESSION['noip2c'])) $_SESSION['noip2c'] = FALSE;
if(!isset($_GET['setup']))    $_GET['setup']    = '';
?>
<meta name="rating" content="general" />
<meta name="generator" content="PHP Web Host - Quality Web Hosting For All PHP Applications - Copyright (c) 2002-2010 by http://www.ravenphpscripts.com" />
<link rel="StyleSheet" href="css/ravenstaller.css" type="text/css" />
<link rel="stylesheet" href="windowfiles/dhtmlwindow.css" type="text/css" />
<link rel="stylesheet" href="modalfiles/modal.css" type="text/css" />
<script type="text/javascript" src="js/ravenstaller.js"></script>
<script type="text/javascript" src="windowfiles/dhtmlwindow.js"></script>
<script type="text/javascript" src="modalfiles/modal.js"></script>
<script type="text/javascript">
	//<![CDATA[
	/* DHTML Window Widget© Dynamic Drive Visit http://www.dynamicdrive.com/ for full source code
	* DHTML Modal window Dynamic Drive Visit http://www.dynamicdrive.com/ for full source code */
	//]]>
</script>
<title><?php echo _rnRAVENNUKE;?>&trade; <?php echo _rnMYSQL_TABLE_INSTALLER;?></title>
</head>
  <body class="c1">
<div class="c1">
	 <img style="float:left;" src="images/logo.gif" border="0" alt="" />
	 <span class="c5">
		<?php echo _rnRAVENNUKE;?>&trade; &copy; 2005-2010 - <?php echo _rnMYSQL_TABLE_INSTALLER;?>
	 </span>
</div>
<br /><br /><br />
<div>
<div align="center"><p id="warning"><?php echo _rnWARNING;?></p></div>
	 <hr />
	 <p class="sectiontitle">
		<?php echo _rnTITLE_1;?>
	 </p>
</div>
<?php
ini_set('display_errors','on');
ini_set('mysql.connect_timeout',120);
$dbCheck = array();
echo '<span class="msg">'._rnCONFIG_FILE_FOUND.'</span><br />';
$conn = @mysql_connect($dbhost,$dbuname,$dbpass) or die(rnInstallErr(2));
echo '<span class="msg">'._rnSUCCESS_CONNECT_HOST.'</span>';
$db = @mysql_select_db($dbname) or die(rnInstallErr(3));
echo '<span class="msg">'._rnFOUND_DB.'</span>';
echo '<span class="msg">'._rnTABLE_PREFIX.'</span>';
function rnInstallErr($errNum,$sqlFileName='',$lineNumberInFile='',$line='') {
		  if ($errNum==1)  die('<span class="c3"> '. _rnERR1  . '</span><br /><span class="c3">&nbsp;</span>');
	 elseif ($errNum==2)  die('<span class="c3"> '. _rnERR2  . '</span><br /><span class="c3">MySQL Error # ' . $errNum .' = ' . mysql_error() . '</span>');
	 elseif ($errNum==3)  die('<span class="c3"> '. _rnERR3  . '</span><br /><span class="c3">MySQL Error # ' . $errNum .' = ' . mysql_error() . '</span>');
	 elseif ($errNum==4)  die('<span class="c3"> '. _rnERR4  . '</span><br /><span class="c3">MySQL Error # ' . $errNum .' at line '.__LINE__.' in file '.basename(__FILE__).' ==> ' . mysql_error() . '<br /><br /><span class="c2">Error in '.$sqlFileName.' at line '.$lineNumberInFile.':</span><br />'.$line.'</span>');
	 elseif ($errNum==90) die('<span class="c3"> '. _rnERR90 . '</span><br /><span class="c3">MySQL Error # ' . $errNum .' = ' . mysql_error() . '</span>');
	 elseif ($errNum==91) die('<span class="c3"> '. _rnERR91 . '</span><br /><span class="c3">MySQL Error # ' . $errNum .' = ' . mysql_error() . '</span>');
	 elseif ($errNum==80) die('<span class="c3"> '. _rnERR80 . '</span><br /><span class="c3">MySQL Error # ' . $errNum .' = ' . mysql_error() . '</span>');
	 elseif ($errNum==81) die('<span class="c3"> '. _rnERR81 . '</span><br /><span class="c3">MySQL Error # ' . $errNum .' = ' . mysql_error() . '</span>');
}
?>
<hr />
	 <p class="msg">
		  <?php echo _rnINSTALLER_INTENT;?>
	 </p>
	 <hr />
	 <table>
	  <tr>
		  <td>
		<table><tr><td>
			 <form name="lsec" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
			<span class="c3">
				<input type="button"  name="btnCheckServerEnvironment" class="button2" id="btnCheckServerEnvironment" readonly="readonly" size="75" onfocus="blur()" onclick="browserWindowSize();dhtmlmodal.open('serverEnvironmentCheck', 'iframe', 'serverEnvironmentCheck.php', '<?php echo _rnLOAD_SERVER_ENVIRONMENT_CHECK;?>', 'width='+bwW+',height='+bwH+',center=1,resize=1,scrolling=1');" value="<?php echo _rnRUN.' '. _rnLOAD_SERVER_ENVIRONMENT_CHECK;?>" />
			</span>
				<input type="hidden" name="op" value="lsec" />
			 </form>
		</td></tr></table>
		</td>
	</tr>
		<tr>
		  <td>
		<table><tr><td>
			 <form name="lct" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
				<input class="button" type="submit" name="<?php echo _rnSUBMIT;?>" value="<?php echo _rnSTEP1;?>&nbsp;:&nbsp;&nbsp;<?php echo _rnLOAD_CORE_TABLES;?>" />
				&nbsp;&nbsp;<span class="c3"><input class="inputbox" name="session" value="<?php echo $_SESSION['lct'];?>" readonly="readonly" size="75" onfocus="blur()" /></span>
				<input type="hidden" name="op" value="lct" />
			 </form>
		</td></tr></table>
		</td>
	</tr>
		<tr>
		  <td>
		<table><tr><td>
			 <form name="lns" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
				<input class="button" type="submit" name="<?php echo _rnSUBMIT;?>" value="<?php echo _rnSTEP2;?>&nbsp;:&nbsp;&nbsp;<?php echo _rnLOAD_NUKESENTINEL_TABLES;?>" />
				&nbsp;&nbsp;<span class="c3"><input class="inputbox" name="session" value="<?php echo $_SESSION['lns'];?>" readonly="readonly" size="75" onfocus="blur()" /></span>
				<input type="hidden" name="op" value="lns" />
			 </form>
		</td></tr></table>
		</td>
	</tr>
			 <?php if (!$_SESSION['noip2c']) { ?>
		<tr>
		  <td>
		<table><tr><td>
			 <form name="lip1" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
			<hr />
			<p id="ip2cnote"><?php echo _rnSTEP3;?>&nbsp;:&nbsp;&nbsp;<?php echo _rnLOAD_IP2COUNTRY_DATA;?>
				:&nbsp;<?php echo _rnIP2COUNTRY_NOTE;?>
			</p>
			<hr />
				<input class="button" type="submit" name="<?php echo _rnSUBMIT;?>" value="<?php echo _rnSTEP3a;?>&nbsp;:&nbsp;&nbsp;<?php echo _rnLOAD_IP2COUNTRY_DATA1_10;?>" />
				&nbsp;&nbsp;<span class="c3"><input class="inputbox" name="session" value="<?php echo $_SESSION['lip1'];?>" readonly="readonly" size="75" onfocus="blur()" /></span>
				<input type="hidden" name="op" value="lip1" />
			 </form>
		</td></tr></table>
		</td>
	</tr>
		<tr>
		  <td>
		<table><tr><td>
			 <form name="lip2" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
				<input class="button" type="submit" name="<?php echo _rnSUBMIT;?>" value="<?php echo _rnSTEP3b;?>&nbsp;:&nbsp;&nbsp;<?php echo _rnLOAD_IP2COUNTRY_DATA2_10;?>" />
				&nbsp;&nbsp;<span class="c3"><input class="inputbox" name="session" value="<?php echo $_SESSION['lip2'];?>" readonly="readonly" size="75" onfocus="blur()" /></span>
				<input type="hidden" name="op" value="lip2" />
			 </form>
		</td></tr></table>
		</td>
	</tr>
		<tr>
		  <td>
		<table><tr><td>
			 <form name="lip3" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
				<input class="button" type="submit" name="<?php echo _rnSUBMIT;?>" value="<?php echo _rnSTEP3c;?>&nbsp;:&nbsp;&nbsp;<?php echo _rnLOAD_IP2COUNTRY_DATA3_10;?>" />
				&nbsp;&nbsp;<span class="c3"><input class="inputbox" name="session" value="<?php echo $_SESSION['lip3'];?>" readonly="readonly" size="75" onfocus="blur()" /></span>
				<input type="hidden" name="op" value="lip3" />
			 </form>
		</td></tr></table>
		</td>
	</tr>
	<tr>
		<td>
		<table><tr><td>
			 <form name="lip4" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
				<input class="button" type="submit" name="<?php echo _rnSUBMIT;?>" value="<?php echo _rnSTEP3d;?>&nbsp;:&nbsp;&nbsp;<?php echo _rnLOAD_IP2COUNTRY_DATA4_10;?>" />
				&nbsp;&nbsp;<span class="c3"><input class="inputbox" name="session" value="<?php echo $_SESSION['lip4'];?>" readonly="readonly" size="75" onfocus="blur()" /></span>
				<input type="hidden" name="op" value="lip4" />
			 </form>
		  </td></tr></table>
		 </td>
	</tr>
	<tr>
		<td>
		<table><tr><td>
			 <form name="lip5" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
				<input class="button" type="submit" name="<?php echo _rnSUBMIT;?>" value="<?php echo _rnSTEP3e;?>&nbsp;:&nbsp;&nbsp;<?php echo _rnLOAD_IP2COUNTRY_DATA5_10;?>" />
				&nbsp;&nbsp;<span class="c3"><input class="inputbox" name="session" value="<?php echo $_SESSION['lip5'];?>" readonly="readonly" size="75" onfocus="blur()" /></span>
				<input type="hidden" name="op" value="lip5" />
			 </form>
		  </td></tr></table>
		 </td>
	</tr>
	<tr>
		<td>
		<table><tr><td>
			 <form name="lip6" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
				<input class="button" type="submit" name="<?php echo _rnSUBMIT;?>" value="<?php echo _rnSTEP3f;?>&nbsp;:&nbsp;&nbsp;<?php echo _rnLOAD_IP2COUNTRY_DATA6_10;?>" />
				&nbsp;&nbsp;<span class="c3"><input class="inputbox" name="session" value="<?php echo $_SESSION['lip6'];?>" readonly="readonly" size="75" onfocus="blur()" /></span>
				<input type="hidden" name="op" value="lip6" />
			 </form>
		  </td></tr></table>
		 </td>
	</tr>
	<tr>
		<td>
		<table><tr><td>
			 <form name="lip7" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
				<input class="button" type="submit" name="<?php echo _rnSUBMIT;?>" value="<?php echo _rnSTEP3g;?>&nbsp;:&nbsp;&nbsp;<?php echo _rnLOAD_IP2COUNTRY_DATA7_10;?>" />
				&nbsp;&nbsp;<span class="c3"><input class="inputbox" name="session" value="<?php echo $_SESSION['lip7'];?>" readonly="readonly" size="75" onfocus="blur()" /></span>
				<input type="hidden" name="op" value="lip7" />
			 </form>
		  </td></tr></table>
		 </td>
	</tr>
	<tr>
		<td>
		<table><tr><td>
			 <form name="lip8" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
				<input class="button" type="submit" name="<?php echo _rnSUBMIT;?>" value="<?php echo _rnSTEP3h;?>&nbsp;:&nbsp;&nbsp;<?php echo _rnLOAD_IP2COUNTRY_DATA8_10;?>" />
				&nbsp;&nbsp;<span class="c3"><input class="inputbox" name="session" value="<?php echo $_SESSION['lip8'];?>" readonly="readonly" size="75" onfocus="blur()" /></span>
				<input type="hidden" name="op" value="lip8" />
			 </form>
		  </td></tr></table>
		 </td>
	</tr>
	<tr>
		<td>
		<table><tr><td>
			 <form name="lip9" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
				<input class="button" type="submit" name="<?php echo _rnSUBMIT;?>" value="<?php echo _rnSTEP3i;?>&nbsp;:&nbsp;&nbsp;<?php echo _rnLOAD_IP2COUNTRY_DATA9_10;?>" />
				&nbsp;&nbsp;<span class="c3"><input class="inputbox" name="session" value="<?php echo $_SESSION['lip9'];?>" readonly="readonly" size="75" onfocus="blur()" /></span>
				<input type="hidden" name="op" value="lip9" />
			 </form>
		  </td></tr></table>
		 </td>
	</tr>
	<tr>
		<td>
		<table><tr><td>
			 <form name="lip10" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
				<input class="button" type="submit" name="<?php echo _rnSUBMIT;?>" value="<?php echo _rnSTEP3j;?>&nbsp;:&nbsp;&nbsp;<?php echo _rnLOAD_IP2COUNTRY_DATA10_10;?>" />
				&nbsp;&nbsp;<span class="c3"><input class="inputbox" name="session" value="<?php echo $_SESSION['lip10'];?>" readonly="readonly" size="75" onfocus="blur()" /></span>
				<input type="hidden" name="op" value="lip10" />
			 </form>
		  </td></tr></table>
<?php } ?>
		  </td>
		</tr>

	 </table>
<?php if ($_GET['setup']) {echo '<div class="c1"><p id="proceed">'._rnREADY_TO_PROCEED.'</p></div>'; session_destroy(); $_GET['setup']='';} ?>
	 <hr />
	 <div align="center" class="msg">
		<?php echo _rnCOPYRIGHT;?> 2005-2010 &copy;Raven Web Services<span class="c1"><sup>&trade;</sup></span>, LLC -- <?php echo _rnALL_RIGHTS;?> --<br />
		<?php echo _rnNO_PORTION;?> Raven Web Services<span class="c1"><sup>&trade;</sup></span>, LLC
	 </div>
	 <hr />

<?php
/*<![CDATA[*/
/*
Validate $_POST Data
*/
/*]]>*/
if (!isset($_POST['op'])) $_POST['op'] = '';
if (!isset($_POST[_rnSUBMIT])) $_POST[_rnSUBMIT] = '';
$isValidOp = FALSE;
$validOp = array('lsec','lct','lns','lip1','lip2','lip3','lip4','lip5','lip6','lip7','lip8','lip9','lip10');
if (strlen($_POST['op'])>0 AND (strlen($_POST['op'])==3 OR strlen($_POST['op'])==4 OR strlen($_POST['op'])==5)) {
	 if (in_array($_POST['op'],$validOp)) {
		  $isValidOp = TRUE;
	 }
	 else {
		  rnInstallErr(90);
		  die();
	 }
}
reset($_POST);
if (strlen($_POST[_rnSUBMIT])>0 AND $isValidOp AND $_POST['op']!=='lsec') {
	 if ($_POST['op']=='lct')
		  $rnSql = array('rnCoreSql'=>'rn_core.sql');
	 elseif ($_POST['op']=='lns') {
			$sql = "TRUNCATE TABLE `$prefix"."_nsnst_countries`;";
			$rc = @mysql_query($sql);
		  $rnSql = array(
				'rnNukeSentinelSql'=>'ns_core.sql',
				'rnNukeSentinelSql0'=>'ns_countries.sql',
				);
	 }
	 elseif ($_POST['op']=='lip1') {
			$sql = "TRUNCATE TABLE `$prefix"."_nsnst_ip2country`;";
			$rc = @mysql_query($sql);
			$sql = "ALTER TABLE `$prefix"."_nsnst_ip2country` DISABLE KEYS;";
			$rc = @mysql_query($sql);
		  $rnSql = array(
				'ip2country1sql'=>'ns_ip2c1.sql.gz',
				'ip2country2sql'=>'ns_ip2c2.sql.gz');
	 }
	 elseif ($_POST['op']=='lip2')
		  $rnSql = array(
				'ip2country3sql'=>'ns_ip2c3.sql.gz',
				'ip2country4sql'=>'ns_ip2c4.sql.gz');
	 elseif ($_POST['op']=='lip3')
		  $rnSql = array(
				'ip2country5sql'=>'ns_ip2c5.sql.gz',
				'ip2country6sql'=>'ns_ip2c6.sql.gz');
	 elseif ($_POST['op']=='lip4')
		  $rnSql = array(
				'ip2country7sql'=>'ns_ip2c7.sql.gz',
				'ip2country8sql'=>'ns_ip2c8.sql.gz');
	 elseif ($_POST['op']=='lip5')
		  $rnSql = array(
				'ip2country9sql'=>'ns_ip2c9.sql.gz',
				'ip2country10sql'=>'ns_ip2c10.sql.gz');
	 elseif ($_POST['op']=='lip6')
		  $rnSql = array(
				'ip2country11sql'=>'ns_ip2c11.sql.gz',
				'ip2country12sql'=>'ns_ip2c12.sql.gz');
	 elseif ($_POST['op']=='lip7')
		  $rnSql = array(
				'ip2country13sql'=>'ns_ip2c13.sql.gz',
				'ip2country14sql'=>'ns_ip2c14.sql.gz');
	 elseif ($_POST['op']=='lip8')
		  $rnSql = array(
				'ip2country15sql'=>'ns_ip2c15.sql.gz',
				'ip2country16sql'=>'ns_ip2c16.sql.gz');
	 elseif ($_POST['op']=='lip9')
		  $rnSql = array(
				'ip2country17sql'=>'ns_ip2c17.sql.gz',
				'ip2country18sql'=>'ns_ip2c18.sql.gz');
	 elseif ($_POST['op']=='lip10') {
			$sql = "ALTER TABLE `$prefix"."_nsnst_ip2country` ENABLE KEYS;";
			$rc = @mysql_query($sql);
		  $rnSql = array(
				'ip2country19sql'=>'ns_ip2c19.sql.gz',
				'ip2country20sql'=>'ns_ip2c20.sql.gz');
	 }
	 else {rnInstallErr(91); die();}

/*<![CDATA[*/
/*MysQL dump comment types*/
/*]]>*/
	 $totalCnt = 0;
	 $mtime = microtime();
	 $mtime = explode(' ',$mtime);
	 $mtime = $mtime[1] + $mtime[0];
	 $start_time = $mtime;
	 foreach ($rnSql as $key => $value) {
		  if (strpos($value,'.gz')===false)
			  $lines = file($sqlFolder.$value);
		  else
			  $lines = gzfile($sqlFolder.$value);
		  $lines = str_replace('$prefix.`',"`$prefix",$lines);
		  $lines = str_replace('$user_prefix.`',"`$user_prefix",$lines);
		  $cnt=0;
		  $lineNumberInFile=0;
		  foreach ($lines as $line) {
				$lineNumberInFile++;
				if ($line=="\n"||$line=="\r\n") continue;
			if ($byPassTableLock===true && (strtoupper(substr($line,0,11))=='LOCK TABLES' || strtoupper(substr($line,0,13))=='UNLOCK TABLES')) continue;
				$cont=FALSE;
				for ($i=0;$i<count($comment);$i++) {
					 if (substr($line,0,strlen($comment[$i]-1))==$comment[$i]) $cont=TRUE;;
				}
				if ($cont) continue;
				if (empty($line)||strlen($line)==0) continue;
				$cnt++;
				$rc = @mysql_query($line);
				if (!$rc AND !in_array(mysql_errno(),$byPassSqlErrors))  {rnInstallErr(4,$value,$lineNumberInFile,$line); die();}
		  }
		  $totalCnt+=$cnt;
	 }
	 $mtime = microtime();
	 $mtime = explode(' ',$mtime);
	 $mtime = $mtime[1] + $mtime[0];
	 $endtime = $mtime;
	 $total_time = round(($endtime - $start_time), 4);
	 if ($isValidOp) {
		  if ($_POST['op']=='lct') {
				$_SESSION['lct']=_rnLOADED.' '.$totalCnt.' '._rnPROCESSED_IN.' '. $total_time ._rnS;
				echo '<script>document.lct.session.value="'.$_SESSION['lct'].'";</script>';
				unset($_SESSION['lre']);
				unset($_SESSION['lgt']);
				unset($_SESSION['lhnl']);
				unset($_SESSION['lns']);
				unset($_SESSION['lgc']);
				unset($_SESSION['lip1']);
				unset($_SESSION['lip2']);
				unset($_SESSION['lip3']);
				unset($_SESSION['lip4']);
				unset($_SESSION['lip5']);
				unset($_SESSION['lip6']);
				unset($_SESSION['lip7']);
				unset($_SESSION['lip8']);
				unset($_SESSION['lip9']);
				unset($_SESSION['lip10']);
				unset($_SESSION['noip2c']);
		  }
		  if ($_POST['op']=='lns') {
				$_SESSION['lns']=_rnLOADED.' '.$totalCnt.' '._rnPROCESSED_IN.' '. $total_time ._rnS;
				echo '<script>document.lns.session.value="'.$_SESSION['lns'].'";</script>';
				unset($_SESSION['lgc']);
				unset($_SESSION['lip1']);
				unset($_SESSION['lip2']);
				unset($_SESSION['lip3']);
				unset($_SESSION['lip4']);
				unset($_SESSION['lip5']);
				unset($_SESSION['lip6']);
				unset($_SESSION['lip7']);
				unset($_SESSION['lip8']);
				unset($_SESSION['lip9']);
				unset($_SESSION['lip10']);
				unset($_SESSION['noip2c']);
		  }
		  $setup = false;
		  $_SESSION['noip2c'] = false;
		  if ($_POST['op']=='lip1') {
				$_SESSION['lip1']=_rnLOADED.' '.$totalCnt.' '._rnPROCESSED_IN.' '. $total_time ._rnS;
				echo '<script>document.lip1.session.value="'.$_SESSION['lip1'].'";</script>';
		  }
		  elseif ($_POST['op']=='lip2') {
				$_SESSION['lip2']=_rnLOADED.' '.$totalCnt.' '._rnPROCESSED_IN.' '. $total_time ._rnS;
				echo '<script>document.lip2.session.value="'.$_SESSION['lip2'].'";</script>';
		  }
		  elseif ($_POST['op']=='lip3') {
				$_SESSION['lip3']=_rnLOADED.' '.$totalCnt.' '._rnPROCESSED_IN.' '. $total_time ._rnS;
				echo '<script>document.lip3.session.value="'.$_SESSION['lip3'].'";</script>';
		  }
		  elseif ($_POST['op']=='lip4') {
				$_SESSION['lip4']=_rnLOADED.' '.$totalCnt.' '._rnPROCESSED_IN.' '. $total_time ._rnS;
				echo '<script>document.lip4.session.value="'.$_SESSION['lip4'].'";</script>';
		  }
		  elseif ($_POST['op']=='lip5') {
				$_SESSION['lip5']=_rnLOADED.' '.$totalCnt.' '._rnPROCESSED_IN.' '. $total_time ._rnS;
				echo '<script>document.lip5.session.value="'.$_SESSION['lip5'].'";</script>';
		  }
		  elseif ($_POST['op']=='lip6') {
				$_SESSION['lip6']=_rnLOADED.' '.$totalCnt.' '._rnPROCESSED_IN.' '. $total_time ._rnS;
				echo '<script>document.lip6.session.value="'.$_SESSION['lip6'].'";</script>';
		  }
		  elseif ($_POST['op']=='lip7') {
				$_SESSION['lip7']=_rnLOADED.' '.$totalCnt.' '._rnPROCESSED_IN.' '. $total_time ._rnS;
				echo '<script>document.lip7.session.value="'.$_SESSION['lip7'].'";</script>';
		  }
		  elseif ($_POST['op']=='lip8') {
				$_SESSION['lip8']=_rnLOADED.' '.$totalCnt.' '._rnPROCESSED_IN.' '. $total_time ._rnS;
				echo '<script>document.lip8.session.value="'.$_SESSION['lip8'].'";</script>';
		  }
		  elseif ($_POST['op']=='lip9') {
				$_SESSION['lip9']=_rnLOADED.' '.$totalCnt.' '._rnPROCESSED_IN.' '. $total_time ._rnS;
				echo '<script>document.lip9.session.value="'.$_SESSION['lip9'].'";</script>';
		  }
		  elseif ($_POST['op']=='lip10') {
				$_SESSION['lip10']=_rnLOADED.' '.$totalCnt.' '._rnPROCESSED_IN.' '. $total_time ._rnS;
				echo '<script>document.lip10.session.value="'.$_SESSION['lip10'].'";</script>';
				$setup = true; // Only use this with the last step as it triggers the Proceed to setup message
		  }
		  echo '<script>window.location.href = "'.$_SERVER['PHP_SELF'].'?setup='.$setup.'"</script>';
	 }
}
?>
</body>
</html>