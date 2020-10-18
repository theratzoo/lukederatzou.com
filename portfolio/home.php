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
        <title>Portfolio</title>
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
                Portfolio
            </div>  
        <div class="container">
            <br />
            <hr class="main" /> 
            <br />
            <p>One of my favorite aspects of Computer Science is being able to apply the knowledge learned in the classroom to solve real-world issues and help others. I have completed several rigorous projects, along with plans to start a few others.</p>
            <br />
            <hr class="mainhr" />
            <br />
            <h2 class="text-center">List of Projects</h2>
            <br />
            <hr class="mainhr" />
            <br />
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="/img/portable-physicist-icon.jpg" alt="portable physicist icon">
                        <div class="card-body">
                            <h5 class="card-title">Portable Physicist</h5>
                            <p class="card-text">Portable Physicist is an iOS app developed to assist both students and teachers with physics. Portable Physicist includes quick calculators, unit conversions, practice problems, quizzes, and other features essential to any student studying physics.</p>
                            <a href="portable-physicist" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="/img/dntcentral-icon.png" alt="dntcentral icon">
                        <div class="card-body">
                            <h5 class="card-title">Death and Taxes Central</h5>
                            <p class="card-text">Death and Taxes Central is a website containing information on a Magic: the Gathering deck archetype. D&T Central includes guides, discussions, articles, videos, and tons of other resources regarding the Death and Taxes deck.</p>
                            <a href="dntcentral" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="/img/drag-and-drop-icon.jpg" alt="drag and drop icon">
                        <div class="card-body">
                            <h5 class="card-title">Drag-and-drop Equation Editor</h5>
                            <p class="card-text">In a class at WPI, the final project was to create a drag-and-drop equation editor in Java. The project was very difficult, to the point that few were able to complete it. However, my partner and I were able to complete the daunting assignment.</p>
                            <a href="drag-and-drop" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="/img/game-jam-icon.jpg" alt="game jam icon">
                        <div class="card-body">
                            <h5 class="card-title">Game-jam Video Game</h5>
                            <p class="card-text">During a 48-hour game jam at WPI, I collaborated with a small team to develop a game based on a fun prompt. While the video game was far from polished, the experiences gained were very valuable.</p>
                            <a href="game-jam-game" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="/img/kmp-icon.jpg" alt="drag and drop icon">
                        <div class="card-body">
                            <h5 class="card-title">Substring Research Project</h5>
                            <p class="card-text">During one of my college classes, CS 2223 Algorithms, I worked in a team of five to conduct research on substring search. We analyzed the performance of the KMP substring algorithm through testing.</p>
                            <a href="substring-research" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="/img/coming-soon.png" alt="meow icon">
                        <div class="card-body">
                            <h5 class="card-title">IGDA Summer Video Game</h5>
                            <p class="card-text">This summer, I am working with a group of seven on a video game called Meowtations. It is a platformer rogue-lite built in Unity. I have been working on programming the game.</p>
                            <a href="meowtations" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mainhr" />
            <br />
             <br />
             <br />
        </div>
        <footer>
            <h6>This website is, in fact, created by Luke Deratzou. Any questions or issues, please contact the owner.</h6>
        </footer>
        <!--insert professional footer here-->
        

    </body>
</html>