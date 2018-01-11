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
    <title>Travel Pal</title>

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
                <a class="navbar-brand"href="#"><h2 style="font-family:'SurfingCapital';text-transform: uppercase;">Travel Pal</h2></a>
            </div>
            <div class="collapse navbar-collapse"id="b-menu-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="http://www.citytechcedev.org/fssa/bridget/">Home</a></li>
                    <li><a href="http://www.citytechcedev.org/fssa/bridget/">My Past Destinations</a></li>
                    <li><a href="http://www.citytechcedev.org/fssa/bridget/">My Wish List</a></li>
                    <li class="dropdown">
                        <a href="#"class="dropdown-toggle"data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">My Profile</a></li>
                            <li><a href="#">My Pals</a></li>
                            <li><a href="#">My Destinations</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.nav-collapse -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.navbar -->
    
     

     <!-- header -->
    <div id="slider"class="carousel slide"data-ride="carousel">
        <div class="carousel-inner">
            <!-- slides -->
            <div class="item active">
                <img src="img/travelcontent1.jpg">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 style="font-family:'SurfingCapital';text-transform: uppercase;">
                        <h1 style="font-family:'SurfingCapital';text-transform: uppercase;">Meet Your Match</h1>
                        <p>Here's your travel pal!</p>
                </div>
                    </div>
                </div>
            </div>
        </div>
           
                
		<div id="resultsdisplay"class="matches">

<?php        
        $j = file_get_contents('profiles.json');
        $data = json_decode($j, true);
 
        $n=$_POST['name'];
        $e=$_POST['email'];
        $s=$_POST['start'];
        $d=$_POST['destination'];
        $g=$_POST['gender'];
        $p=$_POST['prefgender'];
        echo "<p>First Name: ";
        echo $n;
        echo "</p>";
        echo "<p>Email: ";
        echo $e;
        echo "</p>";
        echo "<p>Start: ";
        echo $s;
        echo "</p>";
        echo "<p>Destination: ";
        echo $d;
        echo "</p>";
        echo "<p>Gender: ";
        echo $g;
        echo "</p>";
        echo "<p>Travel Pal Gender: ";
        echo $p;
        echo "</p>";
            
        echo "<br>";    
        echo "<br>";   
        echo "<br>";   
        echo "<br>";   
            
        echo "<p>Your Matches! ";
    


        foreach($data as $k => $o){
            if ($g==$o['prefgender'] && $p==$o['gender'] && $d==$o['destination']) {
           

   
           echo '<div class="name">
           <h4>'.$o['name'].'</h4>
           <p>'.$o['email'].'</p>
           </div>';
                }
        };
            
            

            
           
            ?>
          
    </div>
    
    
    </body>
</html>