<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=8" />
    <title><?=$title?></title>
    <link rel="shortcut icon" href="<?=base_url()?>images/ict_tran2 - .jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="author" content="IT UP">
	<meta name="Keywords" lang="en" content="ICT UP, University of Phayao, UP, ICTUP, Admission, Phayao" />
	<meta name="Keywords" lang="th" content="คณะ ict ม.พะเยา,คณะไอซีที ม.พะเยา,ม.พะเยา,มหาวิทยาลัยพะเยา" />
	<meta name="Description" content="บริการวิชาการ ข่าวสาร นิสิต ศิษย์เก่า คณะเทคโนโลยีสารสนเทศและการสื่อสาร มหาวิทยาลัยพะเยา" />


    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>asset/template1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>asset/template1/css/jumbotron.css" rel="stylesheet">
    
    <link href="<?=base_url()?>asset/slide.css" rel="stylesheet">

    <link href="<?=base_url()?>asset/style.css" rel="stylesheet">
    
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!--[if IE]>
    <style type='text/css'>
    .jumbotron-pin-t { 
		border-collapse:collapse; 
		border:solid #ccc 1px;
        border-radius: 5px;
		margin-bottom:-10px;        
    }
	.jumbotron-pin-b { 
		border-collapse:collapse; 
		border:solid #ccc 1px;
        border-radius: 5px;
    	margin-top:-10px;  
    }
    .jumbotron-body{
    	border-collapse:collapse; 
		border:solid #ccc 1px;
        border-radius: 5px;
    }
    </style>


    


    <![endif]-->
    <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>



    
    </style>

    <?php if($this->uri->segment(1) == "content"){?>

      <script type="text/javascript" src="asset/fancyapps/lib/jquery.min.js"></script>
      <script type="text/javascript" src="asset/fancyapps/lib/jquery.fancybox-1.3.4.pack.js"></script>
      <script type="text/javascript" src="asset/fancyapps/lib/jquery.easing-1.3.pack.js"></script>
      <script type="text/javascript" src="asset/fancyapps/lib/jquery.mousewheel-3.0.4.pack.js"></script>
      <link rel="stylesheet" href="asset/fancyapps/source/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
    <?php 
    }
    ?>

    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->

    <!-- Scroll To Top  JS-->
    
    <script type="text/javascript" src="<?=base_url()?>asset/jstotop/arrow79.js"></script>

    <noscript>Not seeing a <a href="http://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>

    <!-- End Scroll To Top  JS-->

    <!-- Latest compiled and minified JavaScript -->
    </head>
    <body  class="jumbotron-body " style="background-image: url(images/i-ict2.jpg);  background-repeat: repeat-x;"  >
    <!-- 
	<div class="jumbotron-pin-t " style="position:relative">
        <div style="width:100%; margin:0 auto; padding-left:-10px;">
            <div class="row site-wrapper" align="center">
                <img src="<?=base_url()?>images/banner-ict.png"  width="100%" style="height:150px"/>
            </div>
        </div>
    </div>
    -->

    <div class="row" >
        <div class="col-sm-8 col-md-8">
            <img src="<?=base_url()?>images/banner-ict1.png"  width="100%" height="81px" class="img-responsive" alt="Responsive image" />
        </div>
        <div class="col-sm-4 col-md-4 " >
            <form class="navbar-form navbar-right " role="search" action="/home/search" method="get" id="search-form" name="search-form" >
                <div class="form-group" >
                    <span class="glyphicon glyphicon-search"></span> ค้นหา : <input type="text" class="form-control  " placeholder="keyword...." id="query" name="query">
                </div>
                <button type="button" class="btn btn-success" id="search" name="search">Search</button>
            </form>
        </div>
    </div>
        
        
 