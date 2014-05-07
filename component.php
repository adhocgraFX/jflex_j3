<?php
/**
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined('_JEXEC') or die;
?>

<?php if (JRequest::getString('type')=='raw'):?>
<jdoc:include type="component" />
<?php else: ?>
    <!DOCTYPE html>
    <head>
        <jdoc:include type="head" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/jf-template.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/jf-print.css" type="text/css" media="print" />
    </head>
    <body class="contentpane">
    <div class="grid-container">
        <header class="grid-100">
            <div class="headerlogo"> <a href="<?php echo $this->baseurl ?>"> <IMG src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/logo.png" alt="JUG Fulda" /> </a> </div>
        </header>
        <section class="grid-100">
            <jdoc:include type="message" />
            <jdoc:include type="component" />
        </section>
        <footer class="grid-100">
            <div class="copy-pad"><p>JUG Fulda | 2014 | &copy; | alle Rechte vorbehalten</p></div>
        </footer>
    </div>
    </body>
    </html>
<?php endif; ?>
