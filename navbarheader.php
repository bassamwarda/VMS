<?php
    session_start();
    ?>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/slicknav.css"><!-- this (slicknav) is for mobile when smal screen-->
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/login.css">
            <style>
                .btn-circle.btn-xl {
                    /* width: 75px; */
                    height: 50px;
                    padding: 10px 16px;
                    border-radius: 15px;
                    font-size: 18px;
                    line-height: 1.33;
                }

                .btn-circle {
                    /* width: 20px; */
                    height: 20px;
                    padding: 6px 0px;
                    border-radius: 5px;
                    text-align: center;
                    font-size: 12px;
                    line-height: 1.42857;
                }
            </style>
   </head>
   <body  dir="rtl">
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text" >
                    <img src="assets/img/logo/logo.png" alt="logo">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="slider-area slider-height" data-background="assets/img/hero/h1_hero.jpg">
            <div class="header-area header-transparent">
                    <div class="main-header  header-sticky">
                        <div class="container-fluid">
                            <div  class="row align-items-center" >
                                <!-- Logo -->
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                    <!-- Mobile Menu -->
                                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">
                                        <div class="mobile_menu d-block d-lg-none"style="float:left "></div>
                                    </div>
                                    <div class="logo">
                                        <a href="home.php"><img src="assets/img/logo/logo.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">
                                <div class="menu-main d-flex align-items-start justify-content-end">
                                    <!-- Main-menu -->
                                        <div class="main-menu f-right d-none d-lg-block">
                                            <nav> 
                                                <ul id="navigation">                                                      
                                                <li class="" id="lihome"><a class="fs-5" href="home.php">الصفحة الرئيسية</a></li>
                                                    
                                                

                                                    <!-- =============================================================== -->
                                                    <?php
                                                            if(isset(  $_SESSION["u_name"]))
                                                            {
                                                            if ($_SESSION['u_role_id']==1) {
                                                                echo '
                                                                <li id="insertdata"><a href="#"class="fs-5">إدخال</a>
                                                                <ul class="submenu">
                                                                    <li id="chilren"><a href="children.php" class="fs-5"> متلقح</a></li> 
                                                                    <li id="users"><a href="user.php" class="fs-5"> مستخدم</a></li> 
                                                                    <li id="vaccintype"><a href="Vaccin.php" class="fs-5">انواع التلقيحات</a></li> 
                                                                    <li id="directorate"><a href="directorate.php" class="fs-5">الدوائر</a></li>
                                                                    <li id="work"><a href="work.php" class="fs-5">التسجيل</a></li> 
                                                                </ul>
                                                            </li>
                                                            <li id="lireport" ><a href="#"class="fs-5">التقارير</a>
                                                                <ul class="submenu">
                                                                    <li id="chilren"><a href="report.php" class="fs-5"> متلقح</a></li>  
                                                                </ul>
                                                            </li>
                                                            
                                                            ';

                                                             }
                                                            elseif ($_SESSION['u_role_id']==2) {

                                                                echo '
                                                                <li id="insertdata"><a href="#"class="fs-5">إدخال</a>
                                                                <ul class="submenu">
                                                                    <li id="users"><a href="user.php" class="fs-5"> مستخدم</a></li> 
                                                                    <li id="vaccintype"><a href="Vaccin.php" class="fs-5">انواع التلقيحات</a></li> 
                                                                    <li id="directorate"><a href="directorate.php" class="fs-5">الدوائر</a></li>
                                                                </ul>
                                                            </li>';
                                                            }
                                                            elseif ($_SESSION['u_role_id']==3) {
                                                                
                                                                echo '
                                                                <li id="insertdata"><a href="#"class="fs-5">إدخال</a>
                                                                <ul class="submenu">
                                                                    <li id="chilren"><a href="children.php" class="fs-5"> متلقح</a></li> 
                                                                    <li id="work"><a href="work.php" class="fs-5">التسجيل</a></li> 
                                                                </ul>
                                                            </li> ';
                                                             

                                                            }
                                       
                                                            }
                                                          /*
                                                    <!-- <li id="insertdata" id="insertdata"><a href="#"class="fs-5"class="fs-5">إدخال</a>
                                                        <ul class="submenu">
                                                            <li id="chilren"><a href="children.php" class="fs-5"> متلقح</a></li> 
                                                            <li id="users"><a href="user.php" class="fs-5"> مستخدم</a></li> 
                                                            <li id="vaccintype"><a href="Vaccin.php" class="fs-5">انواع التلقيحات</a></li> 
                                                            <li id="directorate"><a href="directorate.php" class="fs-5">الدوائر</a></li>
                                                            <li id="work"><a href="work.php" class="fs-5">التسجيل</a></li> 

                                                        </ul>
                                                    </li> -->*/
                                                        ?>
                                                    <!-- ============================================================== -->
                                                    <li id="liview"><a href="#"class="fs-5">عرض</a>
                                                        <ul class="submenu">
                                                            <li><a class="fs-5" href="vaccinated_person_info.php">معلومات المتلقحين</a></li>
                                                        </ul>
                                                    </li> 
                                                    <li id="licontact"><a class="fs-5" href="contact.php">الأتصال بنا</a></li>
                                                    <li id="liabout"><a class="fs-5" href="about.php">حول</a></li>
                                                    <li>

                                                        <?php 
                                                            if(isset(  $_SESSION["u_name"]))
                                                            {
                                                                echo '<div class="btn-group"dir="ltr">
                                                                <button class="btn btn-secondary  btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                '.$_SESSION["u_name"].' </button>
                                                                <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="messages.php">
                                                                        <button type="button" class="btn btn-primary fs-5">
                                                                            <span class="badge bg-secondary">'.$_SESSION["message"].'</span> الرسائل
                                                                        </button>
                                                                        
                                                                    </a>
                                                                </li>
                                                                    <li><p class="container"><i>'.$_SESSION["u_name"].'عزيزي المشترك </i><br> هل تريد تسجيل الخروج ?</p></li>
                                                                    <li>
                                                                      <a href="lg/logout.php"><button type="button" value=logout name=logout class="btn btn-success btn-sm">تسجيل الخروج <br></button></a>                                                            
                                                                    </li>
                                                                </ul>
                                                                </div>
                                                             </div>';  
                                                            }
                                                            else
                                                            {
                                                               echo" <button type='button' onclick="." document.getElementById('id01').style.display='block'"." class='btn btn-secondary  fs-5'>";
                                                               echo "دخول</button>";
                                                            }
                                                            
                                                        ?>
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                            <div id="id01"class="modal" >
                                                            <form class="form-horizontal modal-content animate"action="lg/welcome.php" method="post" id="id01" >    
                                                                <div class="imgcontainer">
                                                                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                                                    <img src="assets/img/user.jpg" alt="Avatar" class="avatar">
                                                                </div>      
                                                                <div class="container">
                                                                    <div class="form-floating mb-3 ">
                                                                    <input  type="text" class="form-control" id="floatingInput" placeholder="name@example.com"name="uname" >
                                                                    <label  for="floatingInput">اسم المستخدم</label>
                                                                    </div>

                                                                    <div class="form-floating mb-3">
                                                                        <input type="password" class="form-control " id="floatingPassword" placeholder="رقم السري" name="password" >
                                                                        <label for="floatingPassword" >رقم السري</label>
                                                                    </div>
                                                                </div>
                                                                    <div class="container">
                                                                        <center>
                                                                        <button type="submit" name="user_login" class="btn btn-lg btn-success">دخول</button>
                                                                        <button type="button" onclick="document.getElementById('id01').style.display='none'"class="btn btn-lg btn-danger">خروج</button>
                                                                        </center>
                                                                    </div>
                                                                    <h6></h6>
                                                            </form>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <script>
                                                            // Get the modal
                                                            var modal = document.getElementById('id01');
                                                
                                                            // When the user clicks anywhere outside of the modal, close it
                                                            window.onclick = function(event) {
                                                                if (event.target == modal) {
                                                                    modal.style.display = "none";
                                                                }
                                                            }
                                                        </script>          
                                                    </li>
                                                </ul>
                                            
                                                
                                            </nav>
                                        </div>                                        
                                </div>
                                </div>   
                                
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- Header End -->
    </header>