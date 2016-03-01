<? header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?
include_once 'classes/DB.php';
include_once 'classes/Slider.php';
?>
<html>
<head>
<title></title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<?
	Slider::Slide_linck();
?>

<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="js/common.js"></script>
</body>
</html>