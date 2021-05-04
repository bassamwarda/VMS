<?php require "connection.php"; ?>
<!doctype html>
<html class="no-js" lang="zxx" >
    <head>
        <title>معلومات المتلقحين</title>
        <?php
            include "navbarheader.php";
        ?> 
        <script>
            document.getElementById("liview").classList.add("active") ;            
        </script>
    <main>
    <br>

        <div class="container shadow p-3 mb-5 bg-white rounded">
            <div class="row">
            <div class="col-sm-1 ">
            </div>
                <div class="col-sm-10 ">

                <form action="vaccinated_person_info/v_p_i.php" method="post">

                <div class="form-floating mb-3"  >
                    <input type="text"  class="form-control" id="searchtext"  name="searchtext"  placeholder="رقم التسلسل">
                     <label for="floatingInput"  dir="rtl"   >رقم التسلسل</label>
               </div>
               <center>
               <button type="button" class="btn btn-lg btn-success"  id="btn_search"  onclick="javascript:sendserch();" > بحث</button>
               </center>

               <div id="d1" name="d1"> </div>

                 </form>
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
        var input = document.getElementById("searchtext");
        input.addEventListener("keydown", function(event) {
          if (event.keyCode === 13) {
           event.preventDefault();
           document.getElementById("btn_search").click();
          }
        });
        </script>
	 <script> 
        // function printDiv() { 
        //     var divContents = document.getElementById("d2").innerHTML; 
        //     var a = window.open('', '', 'height=500, width=500'); 
        //     a.document.write(divContents); 
        //     // a.document.close(); 
        //     a.print() 
        //     a.document.close();
        // } 

        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
	<script>
		function sendserch() {
			  var searchtext=document.getElementById('searchtext').value;
			  $("#d1").load("vaccinated_person_info/v_p_i.php",{searchtext:searchtext});
		  }          
	</script>    

    </body>
</html>
<?php
  mysqli_close($con);  
?>