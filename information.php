<!DOCTYPE html>
<html lang="en">
<head>
  <title>معلومات عامة </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="bootstrap_3\css\bootstrap.min.css">
 
  <script src="bootstrap_3\js\jquery.min.js"></script>
  <script src="bootstrap_3\js\bootstrap.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.nav-toggle').click(function () {
          var collapse_content_selector = $(this).attr('href');
          var toggle_switch = $(this);
          $(collapse_content_selector).toggle(function () {
              if ($(this).css('display') == 'none') {
                  toggle_switch.html('...قراءة المزيد');
              } else {
                  toggle_switch.html('...عرض اقل');
              }
          });
      });
  
  });
    </script>
    
  <link rel="stylesheet" href="css\login.css">
</head>
<body dir="rtl">
   <!--=====================Navbar============================-->
   <?php
    require "navbar.php";
    ?>
   <!--=================================================-->        
 <div class="jumbotron text-center">
      <div class="navbar-left" style=" width:20%;height: 80px;margin-top: 5%;">
        <a href="https://www.facebook.com/" target="_blank"> <img src="image\facebook.png" width="30%"height="80%" alt="facebook"></a>
        <a href="https://www.instagram.com/" target="_blank"> <img src="image\instagram1.png" width="30%"height="80%" alt="instagram"></a>
        <a href="https://www.youtube.com/" target="_blank"> <img src="image\youtube.png" width="30%"height="80%" alt="youtube"></a>  
      </div>
      <div >
        <h2 style="text-align:center; margin-top: 3%;"> معلومات عامة</h2>
      </div>
</div>
<!--===========================Artical=================================-->
<!--Artical-->
 <div class="container">  
  <div class="row">
    <div class="container col-sm-12 jumbotron lead text-right  bg-info">   
        <div class="row ">
          <div class="col-sm-6">
            <p class="">
              <h3>B.	لقاح توكسيد الكزاز لكل إمرأة</h3><br>
              1.	الجرعة الاولى بعد 15 سنة من العمر<br>
              2.	الجرعة الثانية بعد شهر من الجرعة الاولى<br>
              3.	الجرعة الثالثة بعد 6 اشهر من الجرعة الثانية<br>
              4.	الجرعة الرابعة بعد سنة من الجرعة الثالثة<br>
              5.	الجرعة الخامسة بعد سنة من الجرعة الرابعة<br>
            <h3>  C.	لقاح التهاب الكبد (الفايروسB للكبار)</h3><br>
              a)	لقاح الكبد (الفايروس B) للكبار<br>
              1.	لقاح التهاب الكبد الجرعة الاولى<br>
              2.	لقاح التهاب الكبد الجرعة الثانية<br>
              3.	لقاح التهاب الكبد الجرعة الثالثة<br>
              b)	لقاحات اخرى<br>
          </p> 
          </div>
            <div class="col-sm-6">
              <h2>انواع التلقيحات: </h2>
              <h3>أ.لقاح الأطفال</h3>
              <h3>ب.لقاح توكسيد الكزاز لكل إمرأة</h3>
              <h3>ج.لقاح التهاب الكبد (الفايروسB)</h3>
              <br>
                    <p>                                
                    <h3>A.	لقاح الأطفال</h3><br>
                      1)	بعد الولادة (الاسبوع الاول) الزيارة الاولى<br>
                      •	لقاح السل BCG<br>
                      •	لقاح الكبد الفايروسي نمط ب Hep BI<br>
                      •	لقاح شلل الاطفال الفموي opvo<a href="#collapse" class="nav-toggle">...قراءة المزيد</a>
                    </p>                    
                      <p id="collapse" style="display:none ">                           
                          A.	لقاح الأطفال<br>
                          1)	بعد الولادة (الاسبوع الاول) الزيارة الاولى<br>
                          •	لقاح السل BCG<br>
                          •	لقاح الكبد الفايروسي نمط ب Hep BI<br>
                          •	لقاح شلل الاطفال الفموي opvo<br>
                          2)	بعد شهرين الزيارة الثانية<br>
                          •	لقاح شلل الاطفال الفموي (الجرعة الاولى)<br>
                          •	لقاح السداسي (الجرعة الاولى)<br>
                          •	لقاح الفايروسي الدوار (الروتا) Rota v  (الجرعة الاولى)<br>
                          •	لقاح المكورات الرئوية (الجرعة الاولى)<br>
                          3)	بعد 4 اشهر الزيارة الثالثة<br>
                          •	لقاح شلل الاطفال الفموي (الجرعة الثانية)<br>
                          •	لقاح السداسي (الجرعة الثانية)<br>
                          •	لقاح الفايروسي الدوار (الروتا) Rota v  (الجرعة الثانية)<br>
                          •	لقاح المكورات الرئوية (الجرعة الثانية)<br>
                          4)	بعد 6 اشهر الزيارة الرابعة<br>
                          •	لقاح شلل الاطفال الفموي (الجرعة الثانية)<br>
                          •	لقاح السداسي (الجرعة الثانية)<br>
                          •	لقاح الفايروسي الدوار (الروتا) Rota v  (الجرعة الثانية)<br>
                          •	لقاح المكورات الرئوية (الجرعة الثانية)<br>        
                          5)	بعد 9 اشهر الزيارة الخامسة<br>
                          •	لقاح الحصبة المنفردة<br>
                          •	فيتامين A  100000 (مائة الف وحدة دولية)<br>
                          6)	بعد 10 اشهر الزيارة  السادسة<br>
                          •	لقاح الحصبة المختلطة MMR (الجرعة الثانية)<br>
                          7)	بعد 18 اشهر الزيارة السابعة<br>
                          •	لقاح الخماسي (جرعة منشطة اولى)<br>
                          •	لقاح شلل الاطفال الفموي (الجرعة منشطة اولى)<br>
                          •	فيتامين A  200000 (مائتان الف وحدة دولية)<br>
                          8)	لقاح 4-6 سنوات الزيارة الثامنة<br>
                          •	لقاح الخماسي (جرعة منشطة ثانية)<br>
                          •	لقاح شلل الاطفال الفموي (الجرعة منشطة ثانية)<br>
                          •	لقاح الحصبة المختلطة MMR (الجرعة الثانية)<br>
                          •	فيتامين A  200000 (مائتان الف وحدة دولية)<br>                            
                      </p>                                           
            </div>         
        </div>
    </div>
    
  </div>
</div>
<!--=============================start footer===============================-->
<?php
  require "footer.php";
?>
<!--=============================end footer===============================-->

</body>

</html>