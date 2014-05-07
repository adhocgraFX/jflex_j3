<?php
/**
 * @version		$Id: error.php 17282 2010-05-26 15:24:49Z infograf768 $
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
defined( '_JEXEC' ) or die( 'Restricted access' );
?>

<!doctype html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="language" content="<?php echo $this->language; ?>" />
<title><?php echo $this->error->getCode(); ?>-<?php echo $this->title; ?></title>

<?php if ($this->error->getCode()>=400 && $this->error->getCode() < 500) { 	?>

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/jf-template.css" type="text/css" media="screen" />
</head>

<body class="contentpane">

<div class="headerlogo"> <a href="<?php echo $this->baseurl ?>"> <IMG src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/logo.png" alt="JUG Fulda" /> </a> </div>

<!-- *****    Error Message Begins   ******** -->
<a href="index.php">
    <div class="box clouds">
	<h2>Sorry, this page does not exist.</h2>
	<h4>Please click here, to go back to the main page.</h4>
	<h2>Entschuldigung, diese Seite existiert leider nicht.</h2>
	<h4>Klicken Sie bitte hier, um zur Startseite zu gelangen.</h4>
    </div>
</a>
<!-- ********  Error Message Ends  ********** -->

</body>
</html>
<?php } ?>