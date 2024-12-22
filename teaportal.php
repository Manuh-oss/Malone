<?php
  session_start();
  $password = htmlspecialchars($_COOKIE['pass']);
  $username = htmlspecialchars($_COOKIE['user']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="portal.css">
</head>
<body>
    <header>
        <div class="logo">
            <img width="40px" src="hd_a7dccd243da2f4aa7fb8b2289e299288.jpg" alt="">
            <div class="name">
                <h5>SIBIAH STAR</h5>
                <h6>SCHOOL </h6>
            </div>
         </div>
    </header>
    <div class="main">
        <div class="manu">           
            <a href="stuportal.php">
                <button>Dashboard</button>
            </a><br>
            <a href="profile.php">
                <button>Profile<i class="fa fa-user"></i></button>
            </a><br>
            <a href="result.php">
                <button>result</button>
            </a><br>
            <a href="marks.php">
                <button>Upload</button>
            </a>
            <a href="rules.html">
                <button>Rules</button>
            </a><br>
            <a href="tasign.html">
                <button>Assignment</button>
            </a>
        </div>
        <div  class="container">
            <h1 style="color:black;">Welcome <?php echo  $password;?>!</h1>
            <div class="news">
                <h1>News</h1>
              <div class="slideshowcontainer">
                <div class="slide fade">
                    <img src="hd_02cf9d7ca9af1fc485da0c3fa85d7e67.jpg" >
                </div>
                <div class="slide fade">
                    <img src="hd_6fe98510015f21f4d2b6d50574c23fda.jpg" >
                </div>
                <div class="slide fade">
                    <img src="hd_a7dccd243da2f4aa7fb8b2289e299288.jpg" >
                </div>
                <div class="slide fade">
                    <img src="hd_d56afd29562d39e32c853c395892a15d.jpg" >
                </div>
              </div>

            </div>
            </div>
    </div>
    <section>
        <h2 style="margin-left: 155px;">School timetable</h2>
        <table style="margin-left: 150px;">
                <tr> <h6>
                <th></th>
                <th>8:00-8:40</th>
                <th>8:40-9:20</th>
                <th>9:20-9:30</th>
                <th>9:30-10:10</th>
                <th>10:10-10:50</th>
                <th>10:50-11:10</th>
                <th>11:10-11:50</th>
                <th>11:50-12:30</th>
                <th>12:30-1:10</th>
                <th>1:10-2:00</th>
                <th>2:00-2:40</th>
                <th>2:40-3:20</th>
                <th>3:20-4:00</th>
            </tr>
            <tr>
                <td>Monday</td>
                <td></td>
                <td></td>
                <td><H1>B</H1></td>
                <td></td>
                <td></td>
                <td><H1>B</H1></td>
                <td></td>
                <td></td>
                <td></td>
                <td><H1>L</H1></td>
                <td></td>
                <td></td>
                <td></td>
                <td><H1>G</H1></td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td></td>
                <td></td>
                <td><H1>R</H1></td>
                <td></td>
                <td></td>
                <td><H1>R</H1></td>
                <td></td>
                <td></td>
                <td></td>
                <td><H1>U</H1></td>
                <td></td>
                <td></td>
                <td></td>
                <td><H1>A</H1></td>
            </tr>  <tr>
                <td>Wednesday</td>
                <td></td>
                <td></td>
                <td><H1>E</H1></td>
                <td></td>
                <td></td>
                <td><H1>E</H1></td>
                <td></td>
                <td></td>
                <td></td>
                <td><H1>N</H1></td>
                <td></td>
                <td></td>
                <td></td>
                <td><H1>M</H1></td>
            </tr>  <tr>
                <td>Thursday</td>
                <td></td>
                <td></td>
                <td><H1>A</H1></td>
                <td></td>
                <td></td>
                <td><H1>A</H1></td>
                <td></td>
                <td></td>
                <td></td>
                <td><H1>C</H1></td>
                <td></td>
                <td></td>
                <td></td>
                <td><H1>E</H1></td>
            </tr>  <tr>
                <td>Friday</td>
                <td></td>
                <td></td>
                <td><H1>K</H1></td>
                <td></td>
                <td></td>
                <td><H1>K</H1></td>
                <td></td>
                <td></td>
                <td></td>
                <td><H1>H</H1></td>
                <td></td>
                <td></td>
                <td></td>
                <td><H1>S</H1></td>
            </tr> 
        </table>
    </section>
    <script>
     let slideIndex = 0;
            showSlides()
            function showSlides() {
                let slides = document.getElementsByClassName("slide");

                for( let i = 0; i < slides.length; i++){
                     slides[i].style.display = "none";
                }
                slideIndex++;
                if(slideIndex > slides.length){slideIndex = 1}

                slides[slideIndex - 1].style.display= "block";
                setTimeout(showSlides, 3000);
            }
    </script>
</body>
</html>