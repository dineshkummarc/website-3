<?php
define('DIR', dirname(__FILE__));

$page = 'home';

if (!empty($_SERVER['PATH_INFO'])) {
	$page = trim($_SERVER['PATH_INFO'], '/?#');
	$file = DIR . '/' . $page . '.html.inc';

	if (!file_exists($file)) {
		$page = 'error';
		header('HTTP/1.1 404 Not Found');
	}
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>volkszaehler.org - <?php echo $page; ?></title>
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/jquery.tweet.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/vz.css" type="text/css" media="screen" title="no title" charset="utf-8">

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="favicon.png" />
</head>

<body>
	<div class="wrapper">
		<?php include(DIR . '/header.html'); ?>

		<div class="<?php echo $page; ?>">
			<?php include(DIR . '/' . $page . '.html.inc'); ?>
		</div>
		<div class="push"></div>
	</div>

	<?php include(DIR . '/footer.html'); ?>
</body>
</html>
