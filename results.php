<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="travel buddy" />
    <meta name="description" content="travel">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="favicon.ico" type="faves/earth.ico">
    <link rel="icon" href="favicon.ico" type="faves/earth.ico">
    <title>Travel Buddy</title>

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body> 
     <!-- fixed navigation bar -->
    <div class="navbar navbar-fixed-top navbar-inverse"role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button"class="navbar-toggle"data-toggle="collapse"data-target="#b-menu-1">
            <span class="sr-only"> navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                <a class="navbar-brand"href="#">Travel Buddy website</a>
            </div>
            <div class="collapse navbar-collapse"id="b-menu-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Menu 1</a></li>
                    <li><a href="#">Menu 2</a></li>
                    <li><a href="#">Menu 3</a></li>
                    <li class="dropdown">
                        <a href="#"class="dropdown-toggle"data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Option 1</a></li>
                            <li><a href="#">Option 2</a></li>
                            <li><a href="#">Option 3</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.nav-collapse -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.navbar -->
    
    <!-- 2-column layout -->
        <div class="row row-offcanvas row-offcanvas-right">
            <div class="col-xs-12 col-sm-9">

                <!-- jumbotron -->
                <div class="jumbotron">
                    <h1>Meet Your Travel Buddy</h1>
                    <p>enter area for matches</p>
                </div>

                <div class="row">



<?php        
        $j = file_get_contents('profiles.json');
        $data = json_decode($j, true);
 
        $n=$_POST['name'];
        $e=$_POST['email'];
        $s=$_POST['start'];
        $d=$_POST['destination'];
        $g=$_POST['gender'];
        $p=$_POST['prefgender'];
        echo $n;
        echo $e;
        echo $s;
        echo $d;
        echo $g;
        echo $p;
    


        foreach($data as $k => $o){
            if ($g==$o['prefgender'] && $p==$o['gender'] && $d==$o['destination']) {
           

   
           echo '<div class="name">
           <h4>'.$o['name'].'</h4>
           <p>'.$o['email'].'</p>
           </div>';
                }
        };
            
            

            
            
            ?>
    
    </body>
</html>