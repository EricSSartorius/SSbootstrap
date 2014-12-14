<!DOCTYPE html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Seoul Seekers Crew -- Home</title>

    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
    
    <link href="_/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
   
   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body id="home">

    <section class="container">
      <div class="content row">
          <?php include "_/components/php/header.php"; ?>
          <?php include "_/components/php/snippet-carousel.php"; ?>
        <section class="main col col-lg-8">
          <?php include "_/components/php/article-intro.php"; ?>
          <?php include "_/components/php/article-aboutthemembers.php"; ?>
          <?php include "_/components/php/article-about.php"; ?>
          <?php include "_/components/php/article-events.php"; ?>
        </section><!-- main -->
        <section class="sidebar col col-lg-4">
          <?php include "_/components/php/aside-booking.php"; ?>
          <?php include "_/components/php/aside-members.php"; ?>
          <?php include "_/components/php/aside-accordion.php"; ?>
        </section><!-- sidebar -->
      </div><!-- content -->
    <?php include "_/components/php/footer.php"; ?>
    </section><!-- container -->

    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>
