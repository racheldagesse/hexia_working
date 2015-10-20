<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php 

        /**
         * print out the name of the website
         *
         * if the site title variable is not 
         * set then use a default site title.
         */
        if( !isset($site_title) ) { 
          echo "Hexia";
        }  else {
          /**
           * else if the site name 
           * is declared in a variables,
           * print out and print local `page title`.
           */
          echo "$site_title $page_title &ndash; Tyler Van Schaick"; 
        }
        ?></title>
    <meta name="description" content="<?php echo $site_description; ?>">
    <meta name="author" content="<?php echo $site_author; ?>">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
  
    <!-- Search Stuff 
    <link href="css/search.css" rel="stylesheet">  
    -->
    <!-- Custom Styles -->  
    <link href="css/mystyles.css" rel="stylesheet">
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
    
  </head>

  <body>

<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-static-top shadow">
      <div class="container">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" 
          aria-expanded="false" aria-controls="navbar">

            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          </button>
        <a href="home.php"><img src="img/logo_sm.png" class="nav-logo"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav nav-right centered" id="nav-links">
            
            <li><a href="cart.php">Cart</a></li>
            <li><a href="catalog.php">Catalog</a></li>
            <li><a href="client.php">Client</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>        
            
    <!--<div class="container size">
    <div id="sb-search" class="sb-search">
     <form>
        <input class="sb-search-input" placeholder="Search for stuff..." type="search" value="" name="search" id="search">
        <input class="sb-search-submit" type="submit" value="">
        <span class="sb-icon-search"></span>
     </form>
     </div>
   </div>-->
            
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  <!--<script src="js/classie.js"></script>
    <script src="js/uisearch.js"> </script>
      
    <script>
      new UISearch( document.getElementById( 'sb-search' ) );
    </script>-->

    </body>
</html>