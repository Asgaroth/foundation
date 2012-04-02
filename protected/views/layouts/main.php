<!DOCTYPE html> 

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <meta name="description" content="Foundation is an easy to use, powerful, and flexible framework for building rapid prototypes and production code on any kind of device." />
    
    <title>Yii Foundation: Rapid Prototyping and Building Framework from ZURB with Yii Framework</title>
    <link rel="icon" type="image/ico" href="<?php echo Yii::app()->baseUrl; ?>/favicon.ico">
  
    <!-- Included CSS Files -->
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/presentation.css">
    
    <!--[if lt IE 9]>
            <link rel="stylesheet" href="<?php echo Yii::app()->foundation->registerCssFile("ie.css"); ?>stylesheets/ie.css">
        <![endif]-->
    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>

  <!-- ZURBar -->
  <div id="zurBar" class="container">
    <div class="row">
      <div class="four columns">
        <a href="#" id="mobileNav" data-reveal-id="navModal" class="small nice button show-on-phones">Nav</a>
        <h1><a href="<?php echo Yii::app()->baseUrl; ?>">Yii Foundation</a></h1>
      </div>
      <div class="eight columns hide-on-phones">
        <strong class="right">
            <a href="http://twitter.com/#!/asgarothbelem">@AsgarothBelem</a>
            <a href="http://www.yiiframework.com/extension/foundation/">Setup</a>
            <a href="<?php echo Yii::app()->createUrl("site/index"); ?>">Documentation</a>
            <a href="https://github.com/Asgaroth/foundation">Github</a>
            <a href="../files/foundation-download-2.2.zip" class="small blue nice button src-download">Download</a>
        </strong>
      </div>
    </div>
  </div>
  <!-- /ZURBar -->
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <div class="foundation-header">
                    <h1><a href="<?php echo Yii::app()->baseUrl; ?>">Yii Foundation Docs</a></h1>
                    <h4 class="subheader">Yii Extension for the Rapid prototyping and building library from ZURB <a href="http://foundation.zurb.com/">Foundation</a></h4>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="two columns">
                  <?php
                    if (!empty($this -> menu)) :
                        $this -> widget("foundation.widgets.menu.FounTabs", array('items' => $this -> menu, 'type' => 'nice vertical hide-on-phones'));
                    endif;
                    ?>
            </div>
            <div class="six columns">
                <?php echo $content; ?>
            </div>
            <div class="four columns">
                                <div class="panel hide-on-phones">
                    <h4>Get Yii Foundation</h4>
                    <p>Download Yii Foundation here to get started quickly. Includes everything you need to get your proyects up and running, take a look at the
                         <a href="http://www.yiiframework.com/extension/foundation/">Setup Guide</a>.</p>
                    <p>
                        <a href="http://www.yiiframework.com/extension/foundation/" class="nice radius blue button mobile src-download">Download Yii Foundation</a>
                    </p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="twelve columns">
                <?php
                    if (!empty($this -> menu)) :
                        $this -> widget("foundation.widgets.menu.FounTabs", array('items' => $this -> menu, 'type' => 'nice mobile show-on-phones'));
                    endif;
                    ?>
            </div>
        </div>
        
        
    <!-- Das Footer -->
      <footer class="row">
        <section class="three columns">
          <h6><strong>Made by AsgarothBelem</strong></h6>
        <p>Yii Foundation is made by <a href="http://twitter.com/#!/asgarothbelem">AsgarothBelem</a>, a Web programmer and developer located in Bogota, Colombia.</p>
        </section>
        
        <section class="three columns">
          <h6><strong>Made by ZURB</strong></h6>
        <p>Foundation is made by <a href="http://www.zurb.com/">ZURB</a>, an <a href="http://www.zurb.com/words/design-process">interaction design and strategy company</a> located in Campbell, California. We've put over 10 years of experience building web products, services and websites into this framework. <a href="../about.php">Foundation Info and Goodies &rarr;</a></p>
        </section>
        
        <section class="three columns">
          <h6><strong>Using Foundation?</strong></h6>
          <p>Let us know how you're using Foundation and we might feature you as an example! <a href="mailto:foundation@zurb.com?subject=I'm%20using%20Foundation">Get in touch &rarr;</a></p>
        </section>
        
        <section class="three columns">
          <h6><strong>Need some help?</strong></h6>
          <p>For quick answers or help <a href="mailto:foundation@zurb.com">email us &rarr;</a></p>
        </section>
      </footer>
      <!-- /Das Footer -->
      
        <div id="navModal" class="reveal-modal">
            <h3>Yii Foundation Docs</h3>
            <?php
                    if (!empty($this -> menu)) :
                        $this -> widget("foundation.widgets.menu.FounTabs", array('items' => $this -> menu, 'type' => 'nice vertical'));
                    endif;
                    ?>
            <a class="close-reveal-modal">&#215;</a>
        </div>
    </div>
</body>
</html>