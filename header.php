<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?php echo $pageKeywords; ?>">
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="author" content="cretechs">

    <title><?php echo $pageTitle; ?></title>
	
    
   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-93235843-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-93235843-1');
</script>

    
    


    <!-- Fevicon -->
    <link rel="icon" type="image/png" href="<?php echo ASSETS; ?>images/favicon.ico">

    <!-- Styles-->
    <link type="text/css" rel="stylesheet" href="<?php echo ASSETS; ?>css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo ASSETS; ?>css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo ASSETS; ?>css/bootstrap-social.css">
    <link type="text/css" rel="stylesheet" href="<?php echo ASSETS; ?>css/iprimitus.css">

    <?php
    if(isset($isHomePage)): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo ASSETS; ?>css/hero-slider.css">
        <link type="text/css" rel="stylesheet" href="<?php echo ASSETS; ?>css/diamond.css">
    <?php
    else: ?>
        <link type="text/css" rel="stylesheet" href="<?php echo ASSETS; ?>css/pages.css">
        <?php
    endif;
    ?>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" style="position: relative; margin-top:85px;" data-spy="scroll" data-target="#middleMenu" data-offset="147">

<!-- Navigation Starts-->
<nav class="navbar navbar-custom navbar-fixed-top navbar-white" role="navigation">
    <div class="container-fluid" style="padding-left:25px;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i style="color:#000;" class="fa fa-chevron-down"></i>
            </button>
            <a class="navbar-brand" href="<?php echo ASSETS; ?>">
                <img class="img-responsive" src="<?php echo ASSETS; ?>images/logo.png">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo ASSETS; ?>">Home</a>
                </li>
             
                <li class="dropdown" id="dropdown-button">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services<i class="fa fa-chevron-down" style="font-size: small;"></i></a>
                    <ul class="dropdown-menu mega-dropdown-menu row" id="grad1" style="right: 0px !important;">
                        <li class="col-md-4 col-xs-12 text-left">
                            <ul>
                                <li class="dropdown-header"><a href="<?php echo ASSETS; ?>services/software-engineering"><span style="color: #08714a!important;">Software Engineering</span></a></li>
                                <li><a href="<?php echo ASSETS; ?>services/software/application">Application Services</a></li>
                                <li><a href="<?php echo ASSETS; ?>services/software/mobility">Mobility Services</a></li>
                                <li><a href="<?php echo ASSETS; ?>services/software/digital">Digital Services</a></li>
                                <li><a href="<?php echo ASSETS; ?>services/software/bianalytics">Bi & Analytics</a></li>
								<li><a href="<?php echo ASSETS; ?>services/expertise">Our Expertise</a></li>

                            </ul>
                        </li>
                 <!--       <li class="col-md-3 col-xs-12 text-left">
                            <ul>
                                <li class="dropdown-header"><a href="<?php echo ASSETS; ?>services/consulting-services"><span style="color: #08714a!important;">Consulting</span></a></li>
                             <li><a href="--><?php //echo ASSETS; ?><!--services/consulting/agile">Agile</a></li>
                                <li><a href="<?php echo ASSETS; ?>services/consulting/banking">Banking</a></li>
                                <li><a href="<?php echo ASSETS; ?>services/consulting/bcp">Business Continuity Process</a></li>
                            </ul>
                        </li>-->
                        <li class="col-md-4 col-xs-12 text-left">
                            <ul>
                                <li class="dropdown-header"><a href="<?php echo ASSETS; ?>services/infrastructure-services"><span style="color: #08714a!important;">Infrastructure</span></a></li>
                                <li><a href="<?php echo ASSETS; ?>services/infrastructure/information">Information Security</a></li>
                                <li><a href="<?php echo ASSETS; ?>services/infrastructure/managed">Managed Services</a></li>
                                <li><a href="<?php echo ASSETS; ?>services/infrastructure/servicedesk">Service Desk</a></li>
                                <li><a href="<?php echo ASSETS; ?>services/infrastructure/enterprise">Enterprise Implementation</a></li>
                                <li><a href="<?php echo ASSETS; ?>services/infrastructure/cloud">Cloud</a></li>

                            </ul>
                        </li>
                        <li class="col-md-4 col-xs-12 text-left">
                            <ul>
                                <li class="dropdown-header"><a href="<?php echo ASSETS; ?>services/quality-assurance"><span style="color: #08714a!important;">Quality Assurance</span></a></li>
                                <li><a href="<?php echo ASSETS; ?>services/quality/performance-testing">Performance Testing Services</a></li>
                                <li><a href="<?php echo ASSETS; ?>services/quality/security-testing">Security Testing Services</a></li>
                                <li><a href="<?php echo ASSETS; ?>services/quality/mobility-testing">Mobility Testing Services</a></li>
                                <li><a href="<?php echo ASSETS; ?>services/quality/functional-testing">Functional Testing</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
				       <li class="dropdown" id="dropdown-button">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Industries<i class="fa fa-chevron-down" style="font-size: small;"></i></a>
                    <ul class="dropdown-menu mega-dropdown-menu row" id="grad1">
                        <li class="col-xs-12 text-left">
                            <ul>

                                <li><a href="<?php echo ASSETS; ?>industries/healthcare">Health Care</a></li>
                                <li><a href="<?php echo ASSETS; ?>industries/islamicbanking">Islamic Banking</a></li>
                                <li><a href="<?php echo ASSETS; ?>industries/travel">Travel & Tourism</a></li>
                                <li><a href="<?php echo ASSETS; ?>industries/retail">Retail</a></li>
								  <li><a href="<?php echo ASSETS; ?>industries/education">Education</a></li>
                                <li><a href="<?php echo ASSETS; ?>industries/manufacturing">Manufacturing</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo ASSETS; ?>products">Products</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo ASSETS; ?>clients">Clients</a>
                </li>
				    <li class="dropdown" id="dropdown-button">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">About<i class="fa fa-chevron-down" style="font-size: small;"></i></a>
                    <ul class="dropdown-menu mega-dropdown-menu row" id="grad1">
                        <li class="col-xs-12 text-left">
                            <ul>
                               <li><a href="<?php echo ASSETS; ?>about">About Us</a></li>
                                <li><a href="<?php echo ASSETS; ?>our_team">Our Team</a></li>
								<li><a href="<?php echo ASSETS; ?>services/expertise">Our Expertise</a></li>
						    </ul>	
						</li>
					</ul>							
                <li>
                    <a class="page-scroll" href="<?php echo ASSETS; ?>contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!--Navigation Ends-->