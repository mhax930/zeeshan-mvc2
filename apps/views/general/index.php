<?php 
  //Template::fileSuperMaster("top"); 
  //$GET_LIST_FROM_METHOD = $this->_data[0]["GET_LIST_FROM_METHOD"]["GET_LIST_FROM_METHOD"];
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="<?php echo Services::getBaseUrl2(); ?>public/css/normalize.min.css">
        <link rel="stylesheet" href="<?php echo Services::getBaseUrl2(); ?>public/css/main.css">

        <script src="<?php echo Services::getBaseUrl2(); ?>public/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title">Welcome</h1>
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <header>
                        <h1>Hi</h1>
                        <p>
                            Welcome to Zeeshan MVC

                            <?php 
                                if(isset($this->_data[0]["new_user"]))
                                    echo $this->_data[0]["new_user"];
                            ?>
                        </p>
                    </header>
                
                </article>

                <aside>
                    <h3>Who Developed Zeeshan MVC</h3>
                    <p>Zeeshan MVC is developed and Designed by Malik Muhammad Zeeshan.</p>
                </aside>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <h3>Copyright &copy; Malik Muhammad Zeeshan 2016-2090</h3>
            </footer>
        </div>

        <script src="<?php echo Services::getBaseUrl2(); ?>public/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="<?php echo Services::getBaseUrl2(); ?>public/js/main.js"></script>
    </body>
</html>

