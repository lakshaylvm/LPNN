<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link href="./Vendors/css/grid.css" rel="stylesheet" />
    <link href="./Vendors/css/normalize.css" rel="stylesheet" />
    <title>notes:)</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="./Resources/css/main.css">  
    <!-- JS -->
    <script src="./Resources/js/subject.js" type="text/javascript" defer></script>
</head>
<body> <header>
    <nav class="navigation">
      <div>
        <img src="Resources/img/logo.jpeg"  id="logo" alt="logo" />
        <ul class="main-nav">
          <!-- <li><a href="#" id="pp">UPLOAD</a></li> -->
          <li><a href="./index.php " id="up">LOG OUT</a></li>
        </ul>
        </div>
    </nav>
  </header>
  <div class = "small-container">
    <div class=" row">
        
        <!-- Sidebar  -->
        <nav id="sidebar" class="col-2">
            <div class="sidebar-header">
                <h2>Choose Semester</h2>
            </div>
            <div class="left-container">
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#semfirst" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">First Semester</a>
                    <ul class="collapse list-unstyled" id="semfirst">
                        <li id="phy">
                            <a href="#" >Physics</a>
                        </li>
                        <li  id="maths1">
                            <a href="#">Maths 1</a>
                        </li>
                        <li id="bee">
                            <a href="#">BEE</a>
                        </li>
                        <li id="english">
                            <a href="#">English</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#semsecond" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Second Semester</a>
                    <ul class="collapse list-unstyled" id="semsecond">
                        <li id="maths2">
                            <a href="#">Maths 2</a>
                        </li>
                        <li id="pps">
                            <a href="#">PPS</a>
                        </li>
                        <li id="chem">
                            <a href="#">Chemistry</a>
                        </li>
                        <li id="wt">
                            <a href="#">WT</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#semthird" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Third Semester</a>
                    <ul class="collapse list-unstyled" id="semthird">
                        <li class="firstsubject"><a href="#">DBMS</a></li>
                        <li class="firstsubject"><a href="#">Maths 3</a></li>
                        <li class="firstsubject"><a href="#">Data Structure</a></li>
                        <li class="firstsubject"><a href="#">Python</a></li>
                        <li class="firstsubject"><a href="#">Digital Electronics</a></li>
                        <li class="firstsubject"><a href="#">Economics</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#semfourth" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Fourth Semester</a>
                    <ul class="collapse list-unstyled" id="semfourth">
                        <li class="firstsubject"><a href="#">Web Technology</a></li>
                        <li class="firstsubject"><a href="#">Discrete Mathematics</a></li>
                        <li class="firstsubject"><a href="#">OOPS</a></li>
                        <li class="firstsubject"><a href="#">Operating System</a></li>
                        <li class="firstsubject"><a href="#">Organizational Behaviour</a></li>
                        <li class="firstsubject"><a href="#">COA</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#semfifth" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Fifth Semester</a>
                    <ul class="collapse list-unstyled" id="semfifth">
                        <li class="firstsubject"><a href="#">Microprocessor</a></li>
                <li class="firstsubject"><a href="#">Computer Networks</a></li>
                <li class="firstsubject"><a href="#">ADA</a></li>
                <li class="firstsubject"><a href="#">JAVA</a></li>
                <li class="firstsubject"><a href="#">Software Engg.</a></li>
                <li class="firstsubject"><a href="#">TOC/FLA</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#semsixth" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Sixth Semester</a>
                    <ul class="collapse list-unstyled" id="semsixth">
                        <li class="firstsubject"><a href="#">MWC</a></li>
                        <li class="firstsubject"><a href="#">ADBMS</a></li>
                        <li class="firstsubject"><a href="#">Data Science</a></li>
                        <li class="firstsubject"><a href="#">Advanced Java</a></li>
                        <li class="firstsubject"><a href="#">Artificial Intelligence</a></li>
                        <li class="firstsubject"><a href="#">Compiler Design</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#semseventh" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Seventh Semester</a>
                    <ul class="collapse list-unstyled" id="semseventh">
                        <li class="firstsubject"><a href="#">Uploading Soon...</a></li>
                        <li class="firstsubject"><a href="#">Uploading Soon...</a></li>
                        <li class="firstsubject"><a href="#">Uploading Soon...</a></li>
                        <li class="firstsubject"><a href="#">Uploading Soon...</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#semeighth" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Eighth Semester</a>
                    <ul class="collapse list-unstyled" id="semeighth">
                <li class="firstsubject"><a href="#">Uploading Soon...</a></li>
                <li class="firstsubject"><a href="#">Uploading Soon...</a></li>
                <li class="firstsubject"><a href="#">Uploading Soon...</a></li>
                    </ul>
                </li>
            </ul>

            </div>
        </nav>
       
        <div class="col">
            <div id="physics" class="row">
                <div class="col" id="donate1">
                    <a href="./Resources/files/Unit[1] - Electronic Materials.pdf" target="_blank"> <img src="./Resources/img/t9i-edit-book-covers-online.jpg-840.jpg" class ="rounded pt-2 mr-5" height="97%" width="30%"></a>  
                <a href="./Resources/files/Unit[1] - Electronic Materials.pdf" target="_blank"> <img src="./Resources/img/t9i-edit-book-covers-online.jpg-840.jpg" class ="rounded pt-2 ml-5" height="97%" width="30%"></a> 
               
            
                </div> 
                 <div class="col" id="donate2" >
                    <a href="./Resources/files/Unit[1] - Electronic Materials.pdf" target="_blank"> <img src="./Resources/img/t9i-edit-book-covers-online.jpg-840.jpg" class ="rounded pt-2 mr-5" height="97%" width="30%"></a>  
                    <a href="./Resources/files/Unit[1] - Electronic Materials.pdf" target="_blank"> <img src="./Resources/img/t9i-edit-book-covers-online.jpg-840.jpg" class ="rounded pt-2 ml-5" height="97%" width="30%"></a> 
                </div>
            </div>
            <div class="col text-center" id="blur">
                <!-- 
                echo"Hey, Welcome my friend welcome!!!!!!!!".$_SESSION['username'];?> -->
                <?php
                 echo "aao ".$_SESSION['name']; ?>
            </div>
        </div>  
           

            <div class="col-1" id="donate"><h3>News Feed</h3> </div>
        
</div>
        
</div>
       
   
    

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script> -->
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>