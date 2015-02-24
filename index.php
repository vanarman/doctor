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
		$app        = JFactory::getApplication();
		$template   = $app->getTemplate(true);
		$params     = $template->params;

		$doc->addStyleSheet('/templates/'. $template->template .'/css/default.css');
	?>
</head>
<body>
    <div id="page">
        <header>
            <div id="top">
                <div class="logo"></div>
                <?php if ($this->countModules('contactTop')) : ?>
                    <div class="contactTop">
                            <jdoc:include type="modules" name="contactTop" style="default"/>
                    </div>
                <?php endif; ?>
            </div>
            <?php if ($this->countModules('menu')) : ?>
                <nav class="main-menu">
                        <jdoc:include type="modules" name="menu" style="default"/>
                </nav>
            <?php endif; ?>
            <?php /*if (($this->countModules('topSlider')) or ($this->countModules('action'))) :*/ ?>
            <div id="bottom">
                <?php if ($this->countModules('topSlider')) : ?>
                    <div class="slider">
                            <jdoc:include type="modules" name="topSlider" style="default"/>
                    </div>
                <?php endif; ?>
                <?php if ($this->countModules('action')) : ?>
                    <div class="action">
                            <jdoc:include type="modules" name="action" style="default"/>
                    </div>
                <?php endif; ?>
            </div>
            <?php /*endif;*/ ?>
        </header>
        <main>
            <div id="wrap">
                <div class="content"><jdoc:include type="component" /></div>
                <?php if ($this->countModules('video')) : ?>
                    <div class="video">
                            <jdoc:include type="modules" name="video" style="default"/>
                    </div>
                <?php endif; ?>
            </div>
            <?php if ($this->countModules('rightSide')) : ?>
                <aside>
                        <jdoc:include type="modules" name="rightSide" style="default"/>
                </aside>
            <?php endif; ?>
        </main>
    </div>
    <footer>
        <?php if ($this->countModules('addressFooter')) : ?>
            <div class="addressFooter">
                    <jdoc:include type="modules" name="addressFooter" style="default"/>
            </div>
        <?php endif; ?>
        <?php if ($this->countModules('contactFooter')) : ?>
            <div class="contactFooter">
                    <jdoc:include type="modules" name="contactFooter" style="default"/>
            </div>
        <?php endif; ?>
        <?php if ($this->countModules('counterFooter')) : ?>
            <div class="counterFooter">
                    <jdoc:include type="modules" name="counterFooter" style="default"/>
            </div>
        <?php endif; ?>
    </footer>
        <script>
        jQuery(document).ready(function($){
            $('.moduletable_form').find('.custom_form').addClass('none');
            $('.moduletable_form').find('.title').css('cursor','pointer').on('click', function() {
                    $('.moduletable_form').find('.custom_form').toggleClass('none');
            });
        });
    </script>
</body>
</html>
