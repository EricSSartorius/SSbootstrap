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

    <body>

          <?php include "_/components/php/header.php"; ?>
          <img src="images/misc/SS-top.jpg" alt="Seoul Seekers Top">


<!-- Services Section -->
    <section class="bg-light-grey">
        <div class="container">
            <div class="row">
                <div class="main col col-lg-12">
                    <?php include "_/components/php/article-intro.php"; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section class="bg-black">
        <div class="container">  
            <div class="row">
                <div class="main col col-lg-8 portfolio-item">
                    <img src="images/misc/SS.jpg" alt="Seoul Seekers Jacket">
                </div>
                <div class="sidebar col col-lg-4 portfolio-item">
                   <?php include "_/components/php/aside-aboutthemembers.php"; ?>
                </div>   
            </div>
        </div>
    </section>

 
    <!-- Team Section -->
    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="main col col-lg-8">
                    <?php include "_/components/php/article-pastevents.php"; ?>
                </div>
                <div class="sidebar col col-lg-4">
                    <?php include "_/components/php/aside-booking.php"; ?>
                </div>
            </div>
        </div>
    </section>

  

          <?php include "_/components/php/footer.php"; ?>
      
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>




