<?php
require "connection.php";
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
    <title>الأتصال بنا</title>
    <?php
        include "navbarheader.php";
    ?> 
    <script>
        document.getElementById("licontact").classList.add("active") ;            
    </script>
    <main>
    <br>

        <div class="container shadow p-3 mb-5 bg-white rounded">
            <div class="row">
            <div class="col-sm-1 ">
            </div>
                <div class="col-sm-10 ">



<!--====================================================================================-->
<form onsubmit="return validate();" class="well form-horizontal" style="text-align:right" action="contact/contact1.php" method="post">
           <fieldset>
           <legend>الرجاء الاتصال بنا في حال حدث اي خطاء ما:</legend>
           <div class="form-floating mb-3">
                    <input name="ch_id"id="ch_id"dir="rtl" placeholder="رقم التسلسل" class="form-control"  type="text">
                    <label for="floatingInput"> رقم التسلسل</label>
           </div>

           <div class="form-floating">
                <textarea 
                name="ch_message"id="ch_message" dir="rtl" placeholder="اكتب الخطاء هنا وما هي البيانات الشخص الصحيحة" rows="5" cols="50"maxlength="250"
                 class="form-control" ></textarea>
                <label for="floatingTextarea">اكتب الخطاء هنا وما هي البيانات الشخص الصحيحة</label>
         </div>
         <br><br>
         <button type="submit" id="submit" name='submit'   value="ارسال" class="btn btn-lg btn-success"> ارسال </button>

         <br>          <br>

          <div div class="alert alert-dark" role="alert">
          عزيزي المواطن: تاكد من المعلومات الخاصة بك وعند حدوث اي خطأ يرجى التواصل معنا لنصحح البيانات الخاصة بملف الخاص بك مع جزيل الشكر
           </div>

           </fieldset>
          </form>

<!--====================================================================================-->
                    
                </div>
                <div class="col-sm-1">
                 </div>
            </div>            
        </div>
        
        <br><br><br><br>

    </main>
    
    <?php
        include "footer.php";
    ?>      
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- JS here -->
    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        <script>
              function validate()
              {
                var ch_id = document.getElementById( "ch_id" );
                var ch_message = document.getElementById( "ch_message" );
               
                if( ch_id.value == ""|| ch_id.value <= 0)
                  {
                    alert("يوجد خلل في التسلسل");
                    return false;
                  }
                    else if( ch_message.value == "")
                  {
                    alert(" يوجد خلل في الرسالة رجاءً لا تترك الحقل فارغ ");
                    return false;
                  }                
                  return true;
              }

            </script>
    </body>
</html>
<?php
  mysqli_close($con);  
?>