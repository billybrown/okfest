<?php include 'header.php'; ?>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,900|Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/design2.css">

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- stuff for the mobile nav -->
        <div id="page-wrapper-wrapper"><div id="page-wrapper">

        <header class="main-header">
            <div class="header-inner">
                <div id="main-menu-toggle" class="mobile-nav">
                    <p>Menu</p>
                    <div class="navicon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="header-text">
                    <h1 class="site-name"><img src="img/logo2.png" alt="Open Knowledge Festival"/></h1>
                    <div class="conference-meta">
                        <p class="tagline">The Open Knowledge & Data Event of the Year</p>
                        <p class="location">Helsinki, Finland</p>
                        <p class="date">September 17-22, 2012</p>
                    </div>
                </div>
            </div><!-- header-inner -->
            <nav role="navigation" class="main-navigation">
                <div class="navigation-inner">
                    <span id="main-menu-close" class="button button--close">Close Menu</span>
                    <ul class="menu">
                        <li><a href="">Programme</a></li>
                        <li><a href="">Topics</a></li>
                        <li><a href="">Tickets</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Info</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </div><!-- navigation-inner -->
            </nav>
        </header>

        <!-- Add your site or application content here -->
        <div class="main-page">
            <div class="main-content">
                <h2 class="ppst-title">OKFestival 2012 Event Summary</h2>
                <div class="post-content">
                    <?php include 'inner-page.php'; ?>
                </div>
                <?php include 'social.php'; ?>
            </div><!-- main-content -->

            <?php include 'aside.php'; ?>
        </div><!-- main-page -->
 
 <?php include 'footer.php'; ?>