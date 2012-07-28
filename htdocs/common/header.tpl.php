<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=6" />
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $GLOBALS['config']['charset']; ?>" />
	<meta http-equiv="Content-Language" content="<?php echo $GLOBALS['config']['lang']; ?>" />
	<script type="text/javascript" src="tablesort.js"></script>

	<link rel="stylesheet" type="text/css" href="../common/common.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['module']; ?>.css" />
	<title><?php echo $title = sprintf("XCache %s", $xcache_version = defined('XCACHE_VERSION') ? XCACHE_VERSION : '') . " - " . ucfirst($GLOBALS['module']); ?></title>
</head>

<body>
<div id="header">
	<div id="banner"><?php echo $title; ?></div>
	<div id="nav">
		<div id="mainnav">
				<?php echo mainnav(); ?>
		</div>
		<div id="subnav" class="switcher">
				<?php echo subnav(); ?>
		</div>
	</div>
</div>
<div id="headerbase">&nbsp;</div>
<div id="main">
