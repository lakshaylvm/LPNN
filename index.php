<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./Resources/css/index.css" rel="stylesheet" />
    <link href="./Vendors/css/grid.css" rel="stylesheet" />
    <link href="./Vendors/css/normalize.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script src="./Resources/js/app.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner:wght@400;600&family=Montserrat:ital,wght@0,100;0,300;0,600;1,300&display=swap"
      rel="stylesheet"
    />
    <!-- <script type="text/javascript" src="/password.js" defer></script> -->
    <title>LPNN!!</title>
  </head>
  <body>
  
    <div  class="close" id="blur"></div>
    <header>
      <nav class="navigation">
        <div class="row">
          <img src="Resources/img/logo.jpeg" class="logo" alt="logo" />
          <ul class="main-nav">
            <li><a href="#" id="pp">Log In</a></li>
            <li><a href="#" id="up">Sign Up</a></li>
          </ul>
        </div>
      </nav>
    </header>
<!-----------------------------------------box---------------------------------------->
    <section class="plans">
      <div class="row">
        <h2>Welcome TO LPNN!!</h2>
        <p id="fullForm">Learning path for newbies and novices </p>
      </div>
      <div class="row">
        <div class="col span-1-of-4">
          <div class="plan-box">
            <div class="card">
            <div class="back">
              <p class="pBack"><span style="font-size: 40px;">L:</span>
              stands for learning. It is a process that leads to change, which occurs as a result of experience and increases the potential for improved performance and future learning. The change in the learner may happen at the level of knowledge, attitude or behavior. As a result of learning, learners come to see concepts, ideas, and/or the world differently.</p>              
            </div>
            <div class="front">
              <img src="./Resources/img/suar.jpeg" class="backImg" >
            </div>           
          </div>
        </div>
        </div>
        <div class="col span-1-of-4">
          <div class="plan-box">
            <div class="card">
            <div class="back">
              <p class="pBack"><span style="font-size: 40px;">P:</span> stands for path . It is described as the chosen route taken by a learner through a range ofe-learning activities, which allows them to build knowledge progressively. With learning path, the control of choice moves away from the tutor to the learner. For any particular topic, such a path would provide both a theory of instruction and a guideline for teachers and curriculum developers"</p>
            </div>
            <div class="front">
                <img src="./Resources/img/sakshi.jpeg" class="backImg">
            </div>
          </div>
            
          </div>
        </div>
        <div class="col span-1-of-4">
          <div class="plan-box">
            <div class="card">
              <div class="back">
                <p class="pBack"><span style="font-size: 40px;">N:</span>stands for newbies. It  is a point for those students who has just started learning a activity and fresher in the current field. Superiors of the newbies will help them by giving thier notes or study material by uploading in the LPNN!!</p>
              </div>
            <div class="front">
                <img src="./Resources/img/lolodile.jpeg" class="backImg">
            </div>
            </div>      
          </div>
        </div>
        <div class="col span-1-of-4">
          <div class="plan-box">
            <div class="card">
              <div class="back">
                <p class="pBack"><span style="font-size: 40px;">N:</span>stands for novices. Novices are those person who are new and without experience in a field, situation, etc. It  is a point for those freshers who has just started working . They can access the notes of their teachers and Superiors for better guidance to approch their goals.</p>
              </div>
            <div class="front">
                <img src="./Resources/img/baba.jpg" class="backImg">
            </div>
            </div>

            
          </div>
        </div>
      </div>
    </section>
  <!----------------------------------------footer------------------------------------------------->
    <footer>
      <div class="row">
        <div class="col span-1-of-2">
          <h4>ABOUT:</h4><br>
          <p id="lvm">
            LPNN is a point for the teachers and students which help to intreact with each other easily. With simple steps teacher and superiors can upload notes . We are here to make learning easy to easier.They can access the notes of their teachers and Superiors for better guidance to approch their goals. 
          </p>
        </div>
        <div class="col span-1-of-2">
          <div>
            <h4>DEVELOPERS:</h4>
            <ul id="devo">
              <li class="devo"><a href="https://github.com/Arsenal-47" target="_blank"><i style="font-size:40px" class="fa">&#xf09b;</i></a></li>
              <li class="devo"><a href="https://github.com/NamanJain1711" target="_blank"><i style="font-size:40px" class="fa">&#xf09b;</i></a></li>
              <li class="devo"><a href="https://github.com/lakshaylvm" target="_blank"><i style="font-size:40px" class="fa">&#xf09b;</i></a></li>
              <li class="devo"><a href="https://github.com/Pankaj-01" target="_blank"><i  style="font-size:40px" class="fa">&#xf09b;</i></a></li>
            </ul>
          </div>
          <h4 id="copyh4">Copyright © 2022 All Rights Reserved by LPNN!!</h4>
        </div>
      </div>
  </footer>
   
    <!----------------------------------------------- LOGIN ------------------------------------------>
    <div class="user_info user_login" id="log">
    <div class="col login ">
      <h1>LOGIN</h1>
      <form method="post" action="./login.php" class="contact-form">
        <div class="row text">
          <div class="row username">
            <div class="col span-1-of-3">
              <label for="name">UserName</label>
            </div>
            <div class="col span-2-of-3">
              <input
                type="text"
                name="username"
                id="name"
                placeholder="User Name"
                required
              />
            </div>
          </div>
          <div class="row">
            <div class="col span-1-of-3">
              <label for="email">Password</label>
            </div>
            <div class="col span-2-of-3">
              <input
                type="password"
                name="password"
                id="password"
                placeholder="Your Password"
                required
              />
            </div>
          </div>

          <div class="row">
            <div class="col span-1-of-3">
              <label>&nbsp;</label>
            </div>
            <div class="col span-2-of-3">
              <input type="submit" value="LOGIN"/>
            </div>
          </div>
          <div id="btn">
            Don't have account ? <a href="#" id="signup-bttn">Sign up</a>
          </div>
        </div>
      </form>
    </div>
    </div>

    <!-------------------------------------------- signup ----------------------------------------------->
    <div class="user_info user_login" id="signups">
    <div class="col signup-main">
      <h1 class="log">SIGN UP</h1>
      <form method="post" action="./conn.php" class="contact-form">
        <div class="row text">
          <div class="row sign">
            <div class="col span-1-of-3">
              <label for="name">Name</label>
            </div>
            <div class="col span-2-of-3">
              <input
                type="text"
                name="name"
                id="name"
                placeholder="Name"
                required
              />
            </div>
          </div>
          <div class="row sign">
            <div class="col span-1-of-3">
              <label for="name">UserName</label>
            </div>
            <div class="col span-2-of-3">
              <input
                type="text"
                name="username"
                id="name"
                placeholder="User Name"
                required
              />
            </div>
          </div>
          <div class="row sign">
            <div class="col span-1-of-3">
              <label for="email" >Password</label>
            </div>
            <div class="col span-2-of-3">
              <input
                type="password"
                name="password"
                id="password"
                placeholder="Password"
                required
              />
              <span id = "message" style="color:red"> </span> 
            </div>
          </div>
          <div class="row sign">
            <div class="col span-1-of-3">
              <label for="confirm">Confirm</label>
            </div>
            <div class="col span-2-of-3">
              <input
                type="password"
                name="confirm"
                placeholder="Confirm Password"
                required
                id="txtConfirmPassword"
              />
            </div>
          </div>
          <div class="row sign">
            <div class="col span-1-of-3">
              <label for="name">User</label>
            </div>
            <div class="col span-2-of-3">
              <ul>
             <li> <input
                type="radio"
                name="user"
                id="name"
                placeholder="Teacher"
                value="teacher"
                required
              />
              <label>Teacher</label></li>
              <li><input
                type="radio"
                name="user"
                id="name"
                placeholder="Student"
                value="student"
                required
              />
              <label>Student</label></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col span-1-of-3">
              <!-- <label>&nbsp;</label> -->
            </div>
            <div class="col span-2-of-3">
              <input type="submit" value="Sign up" id="thuk" />
            </div>
          </div>
          <div id="ftr">
            Already have an account! <a href="#" id="logs">Log in</a>
          </div>
        </div>
      </form>
    </div>
    </div>
    
  </body>
</html>

