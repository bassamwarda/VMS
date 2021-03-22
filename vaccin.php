<?php
require "connection.php";
?>
<!doctype html>
<html class="no-js" lang="zxx"  >
    <head>
        <title>التلقيحات</title>
        <?php
            include "navbarheader.php";
        ?>
        <script>
            document.getElementById("insertdata").classList.add("active") ;            
        </script> 
    <main>
    <br>

        <div class="container shadow p-3 mb-5 bg-white rounded">
            <div class="row">
            <div class="col-sm-1 ">
            </div>
                <div class="col-sm-10 ">



<!--====================================================================================-->

        <form onsubmit="return validate();" style="text-align:center"dir="rtl" lang="ar" name="frm" class="well form-horizontal" action="vaccin/vaccin1.php" method="post" >
            <fieldset >
              <legend >إدخال معلومات التلقيح</legend>
                <!-- Text input-->

                <div class="form-floating mb-3">
                    <input type="hidden"   readonly id="vacc_id" value="1" name="vacc_id"  class="form-control" placeholder="التسلسل">
                    <!-- <label for="floatingInput"> التسلسل</label> -->
                </div>
                <!-- Text input-->
                <div class="form-floating mb-3" >
                    <input type="text" lang="ar" id="vacc_name" name="vacc_name" dir="rtl"  class="form-control" placeholder=" اسم التلقيح" required>
                    <label for="floatingInput">اسم التلقيح</label>
                </div>
                <!-- Text input-->

                <div class="form-floating mb-3">
                    <input type="number"    id="vacc_age"min="0" name="vacc_age"dir="rtl" placeholder=" العمر المناسب" class="form-control"  type="number">
                    <label for="floatingInput">  العمر المناسب</label>
                </div>
                <!-- Text input-->

                <div class="form-floating mb-3">
                    <input    id="vacc_no"min="0" name="vacc_no"lang="ar" placeholder=" عدد الجرعات" class="form-control"  type="number">
                    <label for="floatingInput"> الجرعات</label>
                </div>
                <!-- Text input-->
                <!-- Text input-->

                <div class="form-floating mb-3">
                 <input id="vacc_user"min="0" name="vacc_user"dir="rtl"   readonly  placeholder=" تسلسل المستخدم" class="form-control"  type="hidden"value="<?php echo $_SESSION['p_id'] ?>">
                 <!-- <label for="floatingInput"> تسلسل المستخدم</label> -->
                 </div>
                 <!-- Text input-->
                    <center>
                    <button  type='button'  onclick="newrow()" name='newr'    value='جديد'   class="btn btn-lg btn-success" >جديد</button>
                    <button  type='submit'id="add" name='add'  value='أضافة' class="btn btn-lg btn-success"> أضافة </button>
                    <button  type='submit' name='update'  value='تعديل' class="btn btn-lg btn-success"> تعديل </button>
                    <button type='submit' name='delete' onclick="return confirm('هل تريد الحذف بالتأكيد');"  value='حذف' class="btn btn-lg btn-success">حذف </button>
                    </center>
                
                <!-- Text input-->
                <hr>
                <input class="form-control" id="myInput" type="text" placeholder="بحث...">

                <!-- T-->

                <?php 
                      //this is for show the new id in the input vaccin_id (new id)
                      echo '<script> document.getElementById("vacc_id").value='. selectmaxid('v_id','vaccination').';</script>' ;  
                        //this code is for selected all data of database and show that of the table 
                        $sql = "select * from vaccination";
                        $result = mysqli_query($con, $sql);
                        if($result)
                        {                                               
                           echo '<div class="">'  ;
                           echo '<table class="table table-hover  pre-scrollable" id="tb"  style="text-align: center;" > ';
                            echo '<thead>'.'<tr><th>'.'التسلسل' .'</th>'.'<th>'.'العمر المناسب'.'</th>'.'<th>'.'اسم التلقيح'.'</th>'.'<th>'.'الجرعات'.'</th>'.'<th>'.'المستخدم'.'</th>'.'</tr>'.'</thead>';
                            while ($row = mysqli_fetch_assoc($result)) {
                               
                                echo '<tbody id="myTable">'.'<tr><td>'. $row["v_id"].'  '.         '</td>';
                                echo '<td>'. $row["v_right_age"].'  '.       '</td>';
                                echo '<td>'. $row["v_vaccination_name"].'  '.'</td>';
                                echo '<td>'. $row["v_dosing"].'  '.          '</td>';
                                echo '<td>'. $row["v_user_id"].'  '.         '</td>'.'</tbody>';
                                echo '</tr>';
                            }
                            echo '</table>';
                            echo '</div>';                     
                        }else
                        {
                            echo 'error';
                        }
                ?>                   
               
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
        



        <script>
    function validate()
    {
     var vacc_id = document.getElementById( "vacc_id" );
     var vacc_age = document.getElementById( "vacc_age" );
     var vacc_name = document.getElementById( "vacc_name" );
     var vacc_no = document.getElementById( "vacc_no" );
     var vacc_user = document.getElementById( "vacc_user" );
     if( vacc_id.value == ""|| vacc_id.value <= 0)
       {
        alert("يوجد خلل في التسلسل");
        return false;
       }
       else if( vacc_name.value == "")
       {
        alert(" يوجد خلل في اسم التلقيح لا تترك الحقل فارغ ");
        return false;
       }
       else if( vacc_age.value == "" ||vacc_age.value < 0)
       {
        alert("يوجد خلل في العمر المناسب");
        return false;
       }               
       else if( vacc_no.value == "" || vacc_no.value <1)
       {
        alert("يوجد خلل في الجرعات");
        return false;
       }
       else if( vacc_user.value == ""||vacc_user.value<0 )
       {
        alert("يوجد خلل في تسلسل المستخدم");
        return false;
       }
       return true;
    }

  </script>
 <script>//this script is for filter the table(search)
  $(document).ready(function(){
  $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
  });
  });
</script>
<script>   //this script is for set the selected row in input
    function setrowininput()
    {
        var tb=document.getElementById('tb');
        for(var i=1; i < tb.rows.length; i++)
        {
        tb.rows[i].onclick=function()
            {
              //make disabled for add button
                document.getElementById("add").disabled=true;
              
                document.getElementById("vacc_id").value=Number(this.cells[0].innerHTML);
                document.getElementById("vacc_age").value=Number(this.cells[1].innerHTML);
                document.getElementById("vacc_name").value=this.cells[2].innerHTML;
                document.getElementById("vacc_no").value=Number(this.cells[3].innerHTML);
                document.getElementById("vacc_user").value=Number(this.cells[4].innerHTML);
            };
        }
    }   
    setrowininput();
</script>   

                            
  <script>
  //this function is for empty all input
      function newrow()
      {
          document.getElementById("add").disabled=false;
          document.getElementById("vacc_id").value=<?php echo selectmaxid("v_id","vaccination");?>;
          document.getElementById("vacc_name").value=null;
          document.getElementById("vacc_age").value=null;
          document.getElementById("vacc_no").value=null;
          document.getElementById("vacc_user").value=null;
          
      }
 
   </script> 
    </body>
</html>
<?php
  mysqli_close($con);  
?>