<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcome.css">
    <link rel="stylesheet" href="./modal-video.min.css">
    <link rel="stylesheet" href="welcome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" >
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" type="text/css" href="/path/to/modal-video.min.css">
    <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="/path/to/modal-video.js"></script>
    <title>UnchartedTHEGame</title>
</head>
<body>
    <div class="header">
        <div class="contain">
            <header class="sticky">
                <div class="navbar">
                    <div class="logo">
                        <a href="https://www.unchartedthegame.com/en-us/"><img src="./logo.jpg" width="125px"></a>
                    </div>
                    <nav>
                        <h1>U.N.C.H.<span>A</span>.R.T.E.D</h1>
                    </nav>
                </div>
            </header> 
            <div class="row">
                        <div class="col-2">
                            <h1><span>U</span> NCHARTED</h1>
                            <p>“ The main series of games follows Nathan Drake, a 
                            <br>treasure hunter who travels across the world to uncover various historical mysteries "<br>
                                – </p>
                                <a href="https://www.unchartedthegame.com/en-us/" class="btn"> Explore Now &#8594;</a>
                            </div>
                            <div class="col-2">
                                <img src="./background.jpg">
                            </div>
                        </div>
                    </div> 
        </div>
    </div>          
    <div class="container">
        <div class="card">
            <div class="content">
                <h2>Nathan Drake</h2>
                <p>Nathan "Nate" Drake is the primary protagonist in Uncharted: Drake's Fortune. Voiced by Nolan North,
                    Nate is an American explorer and treasure-hunter said to be a descendant of the legendary explorer Sir Francis Drake.</p>
                <a href="#" data-toggle="modal" data-target="play-video1">View More</a>
            </div>
            <img src="./images/nathan.png">
        </div>
        <div class="card">
            <div class="content">
                <h2>Sam Drake</h2>
                <p>Samuel "Sam" Drake (born Samuel Morgan) is the deuteragonist
                    He is a professional thief and treasure hunter, as well as the older brother of Nathan Drake.</p>
                <a href="#" data-toggle="modal" data-target="play-video2">Read More</a>
                <!-- <button class="js-modal-btn" data-video-id="playvideo1">View More</button> -->
            </div>
            <img src="./images/sam.png">
        </div>
    </div>
    <div class="modal fade" id="play-video1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="model-content">
                <div class="modal-body">
                    <video width="100%" controls>
                        <source src="./videoplayback.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
 


    <a href="logout.php" class="btn">Logout</a>
</body>
</html>