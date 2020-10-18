<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>Game Jam Video Game</title>
        <link rel="stylesheet" type="text/css" href="/ldstyle.css">
        <link rel="icon" href="/img/ld.png">
    </head>
    <script>
        function set_color() {
            document.getElementById("me").style.backgroundColor = "#FFFF00";
            setInterval(change_color, 100);
        }
        function change_color() {

            //rgb(255, 255, 0)
            //change: add 2nd number, also can make this a predictable pattern or just a fun light show!
            //maybe make border change to make it fun idk yet
            var str = document.getElementById("me").style.backgroundColor;
            var first_num = "";
            var second_num = "";
            for(var i=0; i<3; i++) {
                if (str.substring(4+i, 5+i) == ",") break;
                first_num = first_num + str.substring(4+i, 5+i); 
            }
            //for second str
            for(var i=0; i<3; i++) {
                if (str.substring(6+first_num.length + i, 7+first_num.length+i) == ",") break;
                second_num = second_num + str.substring(6+first_num.length + i, 7+first_num.length+i); 
            }
            var third_num = parseInt(str.substring(8+first_num.length+second_num.length,str.length-1))+11;
            first_num = parseInt(first_num) + 6;
            if (first_num >= 255) first_num = 1;
            first_num = first_num.toString(16);
            if (first_num.length==1) first_num="0"+first_num;
            second_num = parseInt(second_num) + 3;
            if (second_num >= 255) second_num = 1;
            second_num = second_num.toString(16);
            if (second_num.length==1) second_num="0"+second_num;

            if (third_num >= 255) third_num = 0;
            third_num = third_num.toString(16);
            if (third_num.length==1) third_num="0"+third_num;
            var new_str = "#" + first_num + second_num + third_num;
            document.getElementById("me").style.backgroundColor = new_str;
            console.log(document.getElementById("me").style.backgroundColor);
            console.log(first_num);
            console.log(second_num);
            console.log(third_num);
    }
    </script>
    <body id="home">
        <?php
        include("../ldnavbar.php");
        ?>
        <!--navbar:
            about
            projects
            resume
            socials
        -->
        <div id="me">
                Game Jam Video Game
            </div>  
        <div class="container">
            <br>
            <hr class="mainhr"> 
            <br>
            <p>During my first term at WPI, I participated in a 48-hour game jam, where I worked on a video game with a group of two other students (Harry and Geoffery). While the game was nothing impressive (all of us were very new), it was a very fun and enriching experience.</p>
            <br>
            <hr class="subhr">
            <br>
            <h4><a href="/code/myfirstgamejamgame.zip">Click here to download the video game</a></h4>
            <!--include video game and maybe source code. ALSO: include captcha for download-->
            <br>
            <hr class="subhr">
            <br>
            <h3>The Experience</h3>
            <p>I came into the game-jam without a group but was able to find some others to work with. The theme was to pick a user-submitted phrase and make a game out of it. Our chosen phrase was "If you stick 3 quail eggs and a vial of Redbull in your TV remote you can shut down the government "birds" in a flash". Considering the time frame and our experience levels, we decided to create a silly platformer, where the player was a TV remote that had to dodge birds and collect the 3 eggs and the Redbull. Upon collecting the components, the user was able to shoot lasers at the birds. I worked on developing the idea along with level-design. I also did the bulk of the coding, including handling lives, the laser, enemies, collecting the components, and other nuances. However, as I was unfamiliar with art and music, other members of the group tackled that task and ended up producing key pieces to the project. Another programmer also implemented the TV remote's jumping along with a few other nuances.</p>
            <br>
            <p>While the project was quite rudimentary and far from complete (the second level was rushed out), the game was still a blast to show off and play with the other participants of the jam. At the end of the game-jam, we also got to see other people's projects, most of which were very impressive. I hope that next time I participate in a game-jam to use the experiences learned in my prior one along with knowledge learned in my classes to build a more polished project. And even if it ends up a mess like this game, I hope to have a good time like earlier.</p>
            <br>
            <h3>Source Code Samples</h3>
            <br>
            <p>Below are three scripts used in the project. The first is the script used for the player, controlling mechanics such as moving and jumping. The second script is for the game manager, which handles ongoing tasks in the video game. Examples of tasks handled by the game manager are obtaining the number of lives, setting the current score, transitioning between levels, and setting up a new game. The final script handles enemy movement and collision with the player. This code was created by myself and one of our group members, Geoffery.</p>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <h5>Player Script</h5>
                    <object data="/code/player.pdf" type="application/pdf" class="pdfs"> 
                      <p>It appears you don't have a PDF plugin for this browser.
                       You can <a href="/code/player.pdf">click here to
                      download the PDF file.</a></p>  
                    </object>
                </div>
                <div class="col-sm-4">
                    <h5>Game Manager Script</h5>
                    <object data="/code/gamemanager.pdf" type="application/pdf" class="pdfs"> 
                      <p>It appears you don't have a PDF plugin for this browser.
                       You can <a href="/code/gamemanager.pdf">click here to
                      download the PDF file.</a></p>  
                    </object>
                </div>
                <div class="col-sm-4">
                    <h5>Enemy Script</h5>
                    <object data="/code/burb.pdf" type="application/pdf" class="pdfs"> 
                      <p>It appears you don't have a PDF plugin for this browser.
                       You can <a href="/code/burb.pdf">click here to
                      download the PDF file.</a></p>  
                    </object>
                </div>
            </div>
            <br>
        </div>
        <footer>
            <h6>This website is, in fact, created by Luke Deratzou. Any questions or issues, please contact the owner.</h6>
        </footer>
        <!--insert professional footer here-->
        

    </body>
</html>