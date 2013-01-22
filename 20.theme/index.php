<!DOCTYPE html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <base href="<?= $this->_basehref() ?>">
    <!-- Remove this line if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="description" content="Designa Studio, a HTML5 / CSS3 template.">
    <meta name="author" content="Sylvain Lafitte, Web Designer, sylvainlafitte.com">

    <title></title>

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="shortcut icon" type="image/png" href="favicon.png">

    <link rel="stylesheet" href="_css/base.css">
    <link rel="stylesheet" href="_css/skeleton.css">
    <link rel="stylesheet" href="_css/layout.css">
</head>

<body>
<!-- Prompt IE 7 users to install Chrome Frame -->
<!--[if lt IE 8]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

    <div class="container">

        <div class="sixteen columns">
            <a href="" class="logo fleft">
                <img src="logo.png" alt="Designa Studio">
            </a>
        </div>

        <div class="sixteen columns">
            <div class="eleven columns alpha append-1">
                <?php print $this->content->html; ?>
            </div>
            <div class="four columns omega">
                <h3>Documentation</h3>
                <ol>
                    <li><a href="docs/">Getting Started</a>
                        <ol>
                            <li><a href="docs/1-installation">Installation</a></li>
                            <li><a href="docs/2-building-a-simple-website">Building a simple website</a></li>
                            <li><a href="docs/3-adding-a-theme">Adding a theme to your website</a></li>
                        </ol>
                    </li>
                    <li>Building Applications</li>
                        <ol>
                            <li><a href="docs/4-using-patterns">Using Patterns</a></li>
                        </ol>
                </ol>
                <h3>Download</h3>
                <ol>
                    <li><a href="https://github.com/chrislynch/engine4">GitHub</a></li>
                </ol>
            </div>
        </div>

    </div>

</body>

</html>

