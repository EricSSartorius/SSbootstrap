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

      <div class="content row">
          <?php include "_/components/php/header.php"; ?>
          <img src="images/misc/SS-top.jpg" alt="Seoul Seekers Top">

<section id="intro" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                  <?php include "_/components/php/article-intro.php"; ?>
                </div>
            </div>
        </div>
</section>             

<section class="bg-black">
  <div class="container">
   <div class="main col col-lg-8">
          
          <img src="images/misc/SS.jpg" alt="Seoul Seekers Top">
        </div><!-- main -->
        <div class="sidebar col col-lg-4">
          <?php include "_/components/php/aside-aboutthemembers.php"; ?>
        </div><!-- sidebar -->
        </div>
</section>

<section class="bg-white">
  <div class="container">
   <div class="main col col-lg-8">
   <?php include "_/components/php/article-pastevents.php"; ?>
        </div><!-- main -->
        <div class="sidebar col col-lg-4">
          <?php include "_/components/php/aside-booking.php"; ?>         
        </div><!-- sidebar -->
        </div>
</section>

      </section><!-- container -->
          <?php include "_/components/php/footer.php"; ?>
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>
