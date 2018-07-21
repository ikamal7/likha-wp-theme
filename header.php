<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="main-content animsition">
    <!-- /.End of top header -->
    <nav class="navbar navbar-inverse navbar-sticky navbar-mobile bootsnav">
        <div class="container">
            <div class="attr-nav">
                <ul>
                    <!--<li><a href="javascript:void(0)" data-toggle="modal" data-target="#user-modal"><i class="fa fa-user"></i></a></li>
                    <li class="side-menu"><a href="javascript:void(0)"><i class="fa fa-bars"></i></a></li>-->
                    <!--<li id="btn-search1"><a href="" id="btn-search2"><i class="fa fa-search"></i></a></li>-->
                    <li><?php echo get_search_form(); ?></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <h2><?php bloginfo("name"); ?></h2>
                </a>
            </div>
            <!-- End Header Navigation -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <?php wp_nav_menu(array(
                        'theme_location' => 'primary',
                    'menu_class' => 'nav navbar-nav navbar-center',

                )); ?>
            </div><!-- /.navbar-collapse -->
        </div>
        <!-- side menu here -->
    </nav>
    <!-- /.End of navigation -->
    <div class="clearfix"></div>
    <!-- /.End of navigation -->

    <!-- /.End of search full page  -->