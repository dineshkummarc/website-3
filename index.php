<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>volkszaehler.org</title>
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/jquery.tweet.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/default.css" type="text/css" media="screen" title="no title" charset="utf-8">

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="favicon.png" />
</head>

<body>

<?php

define('DIR', dirname(__FILE__));

include(DIR . '/header.html');

if (empty($_SERVER['PATH_INFO'])) {
	include(DIR . '/home.html.inc');
}
else {
	$file = DIR . '/' . $_SERVER['PATH_INFO'] . '.html.inc';

	if (file_exists($file)) {
		include($file);
	}
	else {
		include(DIR . '/404.html.inc');
	}
}

include(DIR . '/footer.html');

?>

</body>
</html>
