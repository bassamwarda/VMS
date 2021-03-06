<?php require "connection.php"; 
//$userid='1';
//$user_director='1';//directorate of current user
 ?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <title>العمل </title>
        <?php
            include "navbarheader.php";
        ?> 

    <br>

      
           
              <div id="mydiv" name="mydiv">

                  <select name="myselect" id="myselect">
                      <option value=""></option>
                      <option value="2" >2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                </div>
        <button  type="button" onclick="myselectvalue()">click me</button>
        <script>
            //this function is for empty all input
              function myselectvalue()
              {
                  
                  //$( "#mydiv" ).load(window.location.href + " #mydiv" );
                  $("#mydiv").load(" #mydiv > *");
                  document.getElementById("myselect").selectedIndex=-1 ;
              }
            </script>

             
      <br><br><br><br>

    
    <?php
        include "footer.php";
    ?>      
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
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
        

      
<!--==============================================================-->


    
 

    </body>
</html>
<?php
  mysqli_close($con);  
?>