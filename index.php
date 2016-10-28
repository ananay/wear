<?php
/*
  @Author: ananayarora
  @Date:   2016-10-25T09:58:56+05:30
  @Last modified by:   ananayarora
  @Last modified time: 2016-10-25T13:23:02+05:30
*/

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <link rel="stylesheet" href="css/master.css" media="screen" title="no title">
        <script type="text/javascript" src="https://use.fontawesome.com/1ecbda70a5.js"></script>
        <link rel="stylesheet" href="css/aaryak.css" media="screen" title="no title">
    </head>
    <body>
        <div class="watch">
            <img src="img/mockup.png" class="mockup" alt="" />
            <div class="watch_bg">

            </div>
            <div class="face">
                <span class="welcome_time"></span>
                <br />
                <div class="container">
                    <div class="main_screen">
                        <div class="content">
                            <img src="img/picture.jpg" class="profile_pic" alt="" />
                            <span class="name">Ananay Arora</span>
                            <br />
                            <div class="cards">

                                <div class="card mini fb_color">
                                    <i class="fa fa-facebook"></i>
                                    <span class="text">Ishika Gupta liked your photo</span>
                                </div>

                                <div class="card mini spotify_color">
                                    <i class="fa fa-spotify"></i>
                                    <span class="text">Now Playing : Kygo - Stay</span>
                                    <br />
                                    <div class="spotify_buttons">
                                        <i class="fa fa-backward"></i>
                                        <i class="fa fa-pause"></i>
                                        <i class="fa fa-forward"></i>
                                    </div>
                                </div>

                                <?php

                                $t = file_get_contents("http://ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=8&q=http%3A%2F%2Fnews.google.com%2Fnews%3Foutput%3Drss");

                                $j = json_decode($t, true);
                                $arr = $j['responseData']['feed']['entries'];
                                foreach ($arr as $key => $value) {
                                    echo "<div class='card'>";
                                    echo "<b>".$value['title']."</b>";
                                    echo "<span class=\"story\">".$value['contentSnippet']."</span>";
                                    echo "</div>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="tap">Tap to begin</span>
            <img src="img/glass.png" class="glass" alt="" />
        </div>
    </body>
</html>
