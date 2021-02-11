<?php
include "connection.php"

?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <title>الرسائل </title>
        <?php
            include "navbarheader.php";
        ?>      
<main>
    <br>

        <div class="container shadow p-3 mb-5 bg-white rounded">
            <div class="row">
            <div class="col-sm-1 ">
            </div>
                <div class="col-sm-10 ">
<form action="contact/message1.php" method="POST">
    <fieldset style="text-align:right">
              <legend>الرسائل الواردة من المواطنين</legend>
                    <?php
                    
                          
                          $sql="SELECT * FROM `contact` WHERE `con_u_id`=  ".$_SESSION["p_id"];
                          $result = mysqli_query($con, $sql);
                          if(mysqli_num_rows($result) > 0)
                          {
                            echo '<table class="alert alert-success table table-hover pre-scrollable" id="tb"  style="text-align: center;" > ';
                            echo '<thead>'.'<tr><th>'.'#' .'</th>'.'<th>'.'تسلسل الشخص'.'</th>'.'<th>'.'الرسالة'.'</th>'.'<th>'.'</tr>'.'</thead>';
                              while ($row = mysqli_fetch_assoc($result)) {
                                 
                                echo '<tbody id="myTable">'.'<tr class=""><td>'. $row["con_id"].'  '.         '</td>';
                                echo '<td>'. $row["con_ch_id"].'  '.       '</td>';
                                echo '<td>'. $row["con_message"].'  '.'</td>';
                                echo '<td><input type="submit" name="delete" value="حذف"class=" btn-danger"id="'.$row["con_id"].'">'.'</td>';
                                echo '</tr>';
                                
                                
                                
                                /*$_SESSION["con_id"]=  $row["con_id"];
                                $_SESSION["con_ch_id"]=$row["con_ch_id"];
                                $_SESSION["con_message"]=$row["con_message"];
                                  $_SESSION["con_u_id"]=$row["con_u_id"];
                                  $_SESSION["con_isread"]=$row["con_isread"];*/
                              }
                              
                              echo '</table>';
                          }
                          else
                          { 
                            echo' <div class="alert alert-info" role="alert">
                            لا يوجد رسائل حاليا
                          
                            </div>';
                            }
                            
                            ?>
                    
                            <input type="hidden" name="con_id" id="con_id">
               </fieldset>
                    </form>
     
                    <script>  //this script is for set the selected row in input
                        function setrowininput()
                        {
                            var tb=document.getElementById('tb');
                            for(var i=1; i < tb.rows.length; i++)
                            {
                            tb.rows[i].onclick=function()
                                {               
                                    document.getElementById("con_id").value=Number(this.cells[0].innerHTML);
                                };
                            }
                        }   
                        setrowininput();
             </script>      
                
                  
                    





                    
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
        
    </body>
</html>