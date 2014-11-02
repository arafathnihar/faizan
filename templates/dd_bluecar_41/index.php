<?php
/**
 *-------------------------------------------
 * Szablon został wypalony w  Diablodesign.
 * www.diablodesign.eu
 * biuro@diablodesign.eu
 * tel.666-977-944
 *-------------------------------------------
 */
defined('_JEXEC') or die;



require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';


$document = $this;


$templateUrl = $document->baseurl . '/templates/' . $document->template;

Artx::load("Artx_Page");


$view = $this->artx = new ArtxPage($this);


$view->componentWrapper();

JHtml::_('behavior.framework', true);
$app = JFactory::getApplication();
$tplparams	= $app->getTemplate(true)->params;
//on off
$fc = htmlspecialchars($tplparams->get('fc'));
$tc = htmlspecialchars($tplparams->get('tc'));
$ic = htmlspecialchars($tplparams->get('ic'));
$allicon = htmlspecialchars($tplparams->get('allicon'));
$backc = htmlspecialchars($tplparams->get('backc'));
$cc = htmlspecialchars($tplparams->get('cc'));
?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $document->language; ?>">
    <!-- slideshow -->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/js/flex-slider/flexslider.css" type="text/css" media="all" />
	<script src="<?php echo $templateUrl; ?>/js/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
    
	<script src="<?php echo $templateUrl; ?>/js/flex-slider/jquery.flexslider-min.js" type="text/javascript" charset="utf-8"></script>
    
    <script type="text/javascript">      
 var $j = jQuery.noConflict();       
 jQuery(document).ready(function ($){   
 $j("#slider").flexslider(          
); });          
 </script>
	<script src="<?php echo $templateUrl; ?>/js/DD_belatedPNG-min.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo $templateUrl; ?>/js/functions.js" type="text/javascript" charset="utf-8"></script>
    <!-- end slideshow -->
<head>
    <jdoc:include type="head" />
            <!--scroling head-->
<script src="<?php echo $templateUrl; ?>/js/scroling.js"></script>
<script type="text/javascript">
$(function() {
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();	
		} else {
			$('#toTop').fadeOut();
		}
	});
 
	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});	
});
</script>
<!--end scroling-->
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" />


    
    
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width" />

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.css" media="screen" type="text/css" />
    <!--[if lte IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.responsive.css" media="all" type="text/css" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Aldrich&amp;subset=latin" />
<link rel="shortcut icon" href="<?php echo $templateUrl; ?>/favicon.ico" type="image/x-icon" />
    <script>if ('undefined' != typeof jQuery) document._artxJQueryBackup = jQuery;</script>
    <script src="<?php echo $templateUrl; ?>/jquery.js"></script>
    <script>jQuery.noConflict();</script>

    <script src="<?php echo $templateUrl; ?>/script.js"></script>
    <script src="<?php echo $templateUrl; ?>/script.responsive.js"></script>
    <script src="<?php echo $templateUrl; ?>/modules.js"></script>
    <?php $view->includeInlineScripts() ?>
    <script>if (document._artxJQueryBackup) jQuery = document._artxJQueryBackup;</script>

</head>
<body>
<!--License Number :<?php echo $this->params->get('license'); ?>-->
<?php if ($backc == 1) { ?><div id="toTop"><p><?php echo $this->params->get('scroll'); ?></p></div><?php } ?>
<div id="dd-main">
<header class="dd-header"><?php echo $view->position('position-30', 'dd-nostyle'); ?>

    <div class="dd-shapes">
        <div class="dd-object1714408021"></div>
<div class="dd-object1980935317"><!--slideshow-->
 <!-- Begin Slider -->
 
		<div id="slider">
			<div class="shell">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="<?php echo $this->params->get('foto1'); ?>" />
							<div class="slide-entry">
								
									<h2><a href="<?php echo $this->params->get('lh1'); ?>"><?php echo $this->params->get('header1'); ?></a></h2>
								<p><?php echo $this->params->get('info_txt1'); ?> </p>
							
								
							</div>
						</li>
						<li>
							<img src="<?php echo $this->params->get('foto2'); ?>" />
							<div class="slide-entry">
							
									<h3><a href="<?php echo $this->params->get('lh2'); ?>"><?php echo $this->params->get('header2'); ?></a></h3>
								
							<p><?php echo $this->params->get('info_txt2'); ?>.</p>
							
							</div>
						</li>
						<li>
							<img src="<?php echo $this->params->get('foto3'); ?>" />
							<div class="slide-entry">
								
							<h2><a href="<?php echo $this->params->get('lh3'); ?>"><?php echo $this->params->get('header3'); ?></a></h2>
								<p><?php echo $this->params->get('info_txt3'); ?> </p>
								
							</div>
						</li>
                        <li>
							<img src="<?php echo $this->params->get('foto4'); ?>" />
							<div class="slide-entry">
								
							<h2><a href="<?php echo $this->params->get('lh4'); ?>"><?php echo $this->params->get('header4'); ?></a></h2>
								<p><?php echo $this->params->get('info_txt4'); ?> </p>
								
							</div>
                            <li>
							<img src="<?php echo $this->params->get('foto5'); ?>" />
							<div class="slide-entry">
								
							<h2><a href="<?php echo $this->params->get('lh5'); ?>"><?php echo $this->params->get('header5'); ?></a></h2>
								<p><?php echo $this->params->get('info_txt5'); ?> </p>
								
							</div>
						</li>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Slider --></div>
<div class="dd-textblock dd-object269234422">
        <div class="dd-object269234422-text-container">
        <div class="dd-object269234422-text"></div>
    </div>
    
</div>
            </div>
            

<h1 class="dd-headline">
    <a href="<?php echo $document->baseurl; ?>/"><?php echo $this->params->get('siteTitle'); ?></a>
</h1>
<h2 class="dd-slogan"><?php echo $this->params->get('siteSlogan'); ?></h2>

<div class="dd-positioncontrol dd-positioncontrol-208131842" id="ICON">
<!-- Social Icons Start !-->
<?php if ($allicon == 1) { ?>
<div class="socialw fadeInDown">  
  
	

	<!-- Facebook !-->
	<?php if ($fc == 1) { ?><a href="<?php echo $this->params->get('facebook'); ?>" target="_blank">		
    <div class="social"><img src="<?php echo $templateUrl; ?>/images/PY2EPRW.png"/></div>
	</a><?php } ?>
	<!-- Facebook !-->

	<!-- Twitter !-->
	<?php if ($tc == 1) { ?><a href="<?php echo $this->params->get('twitter'); ?>" target="_blank">		
    <div class="social"> <img src="<?php echo $templateUrl; ?>/images/ny0pyqt.png"/> </div>
	</a><?php } ?>
	<!-- Twitter !-->

	<!-- Instagram !-->
	<?php if ($ic == 1) { ?><a href="<?php echo $this->params->get('ins'); ?>" target="_blank">		
    <div class="social"> <img src="<?php echo $templateUrl; ?>/images/tZZG2zQ.png"/></div>
	</a><?php } ?>
	<!-- Instagram !-->

	</div>

<!-- Social Icons End !--><?php } ?></div>


<a href="index.php" class="dd-logo dd-logo-1089039657">
    <img src="<?php echo $this->params->get('logo'); ?>" alt="" />
</a>
<div class="dd-textblock dd-object1849085462">
    <form class="dd-search" name="Search" action="<?php echo $document->baseurl; ?>/index.php" method="post">
    <input type="text" value="" name="searchword" />
        <input type="hidden" name="task" value="search" />
<input type="hidden" name="option" value="com_search" />
<input type="submit" value="" name="search" class="dd-search-button" />
        </form>
</div>
<?php if ($view->containsModules('position-1', 'position-28', 'position-29')) : ?>
<nav class="dd-nav">
    <div class="dd-nav-inner">
    
<?php if ($view->containsModules('position-28')) : ?>
<div class="dd-hmenu-extra1"><?php echo $view->position('position-28'); ?></div>
<?php endif; ?>
<?php if ($view->containsModules('position-29')) : ?>
<div class="dd-hmenu-extra2"><?php echo $view->position('position-29'); ?></div>
<?php endif; ?>
<?php echo $view->position('position-1'); ?>
 
        </div>
    </nav>
<?php endif; ?>

                    
</header>
<?php if ($cc == 1) { ?><div id="ramka"><!--circle-->
   

			<style>
            .ch-img-1 { 
	background-image: url(<?php echo $this->baseurl ?>/<?php echo $this->params->get('c1'); ?>);
}

.ch-img-2 { 
	background-image: url(<?php echo $this->baseurl ?>/<?php echo $this->params->get('c2'); ?>);
}

.ch-img-3 { 
	background-image: url(<?php echo $this->baseurl ?>/<?php echo $this->params->get('c3'); ?>);
}
.ch-img-4 { 
	background-image: url(<?php echo $this->baseurl ?>/<?php echo $this->params->get('c4'); ?>);
}
            
            </style>
			
			
				<ul class="ch-grid">
					<li>
						<a href="<?php echo $this->params->get('li1'); ?>"><div class="ch-item ch-img-1">
							<div class="ch-info">
								<h3><?php echo $this->params->get('t1'); ?></h3>
								<p><a href="<?php echo $this->params->get('li1'); ?>"><?php echo $this->params->get('te1'); ?></a></p>
							</div>
						</div></a>
					</li>
					<li>
						<a href="<?php echo $this->params->get('li2'); ?>"><div class="ch-item ch-img-2">
							<div class="ch-info">
								<h3><?php echo $this->params->get('t2'); ?></h3>
								<p><a href="<?php echo $this->params->get('li2'); ?>"><?php echo $this->params->get('te2'); ?></a></p>
							</div>
						</div></a>
					</li>
					<li>
						<a href="<?php echo $this->params->get('li3'); ?>"><div class="ch-item ch-img-3">
							<div class="ch-info">
								<h3><?php echo $this->params->get('t3'); ?></h3>
								<p><a href="<?php echo $this->params->get('li3'); ?>"><?php echo $this->params->get('te3'); ?></a></p>
							</div>
						</div></a>
					</li>
                    <li>
						<a href="<?php echo $this->params->get('li4'); ?>"><div class="ch-item ch-img-4">
							<div class="ch-info">
								<h3><?php echo $this->params->get('t4'); ?></h3>
								<p><a href="<?php echo $this->params->get('li4'); ?>"><?php echo $this->params->get('te4'); ?></a></p>
							</div>
						</div></a>
					</li>
				</ul>

<!--end circle--></div><?php } ?>
<div class="dd-sheet clearfix">
            <?php echo $view->position('position-15', 'dd-nostyle'); ?>
<?php echo $view->positions(array('position-16' => 33, 'position-17' => 33, 'position-18' => 34), 'dd-block'); ?>
<div class="dd-layout-wrapper">
                <div class="dd-content-layout">
                    <div class="dd-content-layout-row">
                        <?php if ($view->containsModules('position-7', 'position-4', 'position-5')) : ?>
<div class="dd-layout-cell dd-sidebar1">
<?php echo $view->position('position-7', 'dd-block'); ?>
<?php echo $view->position('position-4', 'dd-block'); ?>
<?php echo $view->position('position-5', 'dd-block'); ?>




                        </div>
<?php endif; ?>

                        <div class="dd-layout-cell dd-content">
<?php
  echo $view->position('position-19', 'dd-nostyle');
  if ($view->containsModules('position-2'))
    echo artxPost($view->position('position-2'));
  echo $view->positions(array('position-20' => 50, 'position-21' => 50), 'dd-article');
  echo $view->position('position-12', 'dd-nostyle');
  echo artxPost(array('content' => '<jdoc:include type="message" />', 'classes' => ' dd-messages'));
  echo '<jdoc:include type="component" />';
  echo $view->position('position-22', 'dd-nostyle');
  echo $view->positions(array('position-23' => 50, 'position-24' => 50), 'dd-article');
  echo $view->position('position-25', 'dd-nostyle');
?>



                        </div>
                        <?php if ($view->containsModules('position-6', 'position-8', 'position-3')) : ?>
<div class="dd-layout-cell dd-sidebar2">
<?php echo $view->position('position-6', 'dd-block'); ?>
<?php echo $view->position('position-8', 'dd-block'); ?>
<?php echo $view->position('position-3', 'dd-block'); ?>


                        </div>
<?php endif; ?>
                    </div>
                </div>
            </div>
<?php echo $view->positions(array('position-9' => 33, 'position-10' => 33, 'position-11' => 34), 'dd-block'); ?>
<?php echo $view->position('position-26', 'dd-nostyle'); ?>


    </div>
<footer class="dd-footer">
  <div class="dd-footer-inner">
<div class="dd-content-layout">
    <div class="dd-content-layout-row">
    <div class="dd-layout-cell layout-item-0" style="width: 100%">
<?php if ($view->containsModules('position-32')) : ?>
    <?php echo $view->position('position-32', 'dd-nostyle'); ?>
<?php else: ?>
        <p>
         Copyright © 2014 <?php echo $this->params->get('footer'); ?> Rights Reserved.</p>
    <?php endif; ?>
</div>
    </div>
</div>

    <p class="dd-page-footer">
        <span id="dd-footnote-links">Designed by <a href="http://www.diablodesign.eu" target="_blank">www.diablodesign.eu</a>.</span>
    </p>
  </div>
</footer>

</div>


<?php echo $view->position('debug'); ?>
</body>
</html>