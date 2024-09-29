<?php
//error_reporting('E_All');
//ini_set('display_errors', 1);
// error_reporting(0);
// ini_set('display_errors', 0);
?>
<link id="bootstrapTheme" href="<?php echo $site_url;?>/themes/<?php echo $site_theme; ?>/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $site_url;?>/fontawesome/css/fontawesome.css" rel="stylesheet">
<link href="<?php echo $site_url;?>/fontawesome/css/fa-solid.css" rel="stylesheet">
<link href="<?php echo $site_url;?>/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo $site_url;?>/favicon.ico" rel="shortcut icon" type="image/x-icon">
<?php 
$head_code = file_get_contents("ads/head_code.php",NULL);
if(isset($head_code) and !empty($head_code)){
echo $head_code; 
} ?>