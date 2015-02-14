<?php defined('_JEXEC') or die; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<jdoc:include type="head" />
	<?php
		JHtml::_('bootstrap.framework');
		JHtmlBootstrap::loadCss(false);
		$doc 		= JFactory::getDocument();
		$user 		= JFactory::getUser();
		$config 	= JFactory::getConfig();
		$app        = JFactory::getApplication();
		$template   = $app->getTemplate(true);
		$params     = $template->params;

		$doc->addStyleSheet('/templates/'. $template->template .'/css/default.css');
	?>
</head>
<body>
    <header>
        <div id="top">
            <div class="logo"></div>
            <div class="contactTop"></div>
        </div>
        <nav>

        </nav>
        <div id="bottom">
            <div class="slider"></div>
            <div class="action"></div>
        </div>
    </header>
    <main>
        <div id="wrap">
            <div class="content"></div>
            <div class="video"></div>
        </div>
        <aside>

        </aside>
    </main>
    <footer>
        <div class="addressFooter"></div>
        <div class="contactFooter"></div>
        <div class="counterFooter"></div>
    </footer>
</body>
</html>
