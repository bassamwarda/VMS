
<?php require "connection.php"; //include "connection.php";
      //require "checkisuser.php";
?>
 

<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <title>الدوائر</title>
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
    <!------------------------------------------------->

    <form onsubmit="return validate();"name="frm"action="directorate/directorate1.php" method="post" class="well form-horizontal">
            <fieldset style="text-align:right">
              <legend>إدخال الدوائر والأفرع التابعة لها</legend>
                <div class="form-floating mb-3">
                    <input type="hidden" readonly class="form-control" id="dirc_id" value="1" name="dirc_id"  placeholder="التسلسل">
                     <!-- <label for="floatingInput"  >التسلسل</label> -->
               </div>
               <div class="form-floating mb-3" >
                    <input type="text" class="form-control" id="dirc_sector" name="dirc_sector" required placeholder="القطاع">
                     <label  for="floatingInput"  >القطاع</label>
               </div>
               <div class="form-floating mb-3"  >
                    <input type="text" class="form-control" id="dirc_name" name="dirc_name" required placeholder="اسم الدائرة">
                     <label  for="floatingInput" >اسم الدائرة</label>
               </div>
               <div class="form-floating mb-3">
                    <input type="text"  class="form-control" id="dirc_center" name="dirc_center" required placeholder="اسم المركز"  >
                     <label for="floatingInput">اسم المركز</label>
               </div>

               <div class="row">
            <div class="col-sm-2" >
            </div>     
            <div class="col-sm-2" >
                <button  type='button'  onclick="newrow()" name='newr'    value='جديد'   class="btn btn-lg btn-success" >جديد</button>
            </div>
            <div class="col-sm-2" >
                <button  type='submit'id="add" name='add' value='أضافة' class="btn btn-lg btn-success"> أضافة </button>
            </div>
            <div class="col-sm-2" >
                <button  type='submit' name='update'  value='تعديل' class="btn btn-lg btn-success"> تعديل </button>
            </div>
            <div class="col-sm-2">
                <button type='submit' name='delete' onclick="return confirm('هل تريد الحذف بالتأكيد');"  value='حذف' class="btn btn-lg btn-success">حذف </button>
            </div>
            <div class="col-sm-2">
            </div>
        </div>

               <hr>
               <div class="row">
                            
                    <div class="col-sm-1" >
                       
                    </div>
                    
                    <div class="col-sm-10"style="padding-right:5%">
             
                        <input class="form-control" id="myInput" type="text" placeholder="بحث...">
                    </div>
                </div>
<br>
               
           
                <?php 
                      //this is for show the new id in the input vaccin_id (new id)
                      echo '<script> document.getElementById("dirc_id").value='. selectmaxid('dir_id','directoration').';</script>' ;  
                        //this code is for selected all data of database and show that of the table 
                        $sql = "select * from directoration";
                        $result = mysqli_query($con, $sql);
                        if($result)
                        {                                               
                           echo '<div class="">'  ;
                           echo '<table class="table table-hover pre-scrollable" id="tb"  style="text-align: center;" > ';
                            echo '<thead>'.'<tr><th>'.'التسلسل' .'</th>'.'<th>'.'اسم القطاع'.'</th>'.'<th>'.'اسم الدائرة'.'</th>'.'<th>'.'اسم المركز'.'</th>'.'</tr>'.'</thead>';
                            while ($row = mysqli_fetch_assoc($result)) {
                               
                                echo '<tbody id="myTable">'.'<tr><td>'. $row["dir_id"].'  '.         '</td>';
                                echo '<td>'. $row["dir_sector_name"].'  '.       '</td>';
                                echo '<td>'. $row["dir_directorate_name"].'  '.'</td>';
                                echo '<td>'. $row["dir_center_name"].'  '.          '</td>';
                                
                                echo '</tr>';
                            }
                            echo '</table>';
                            echo '</div>';
                            
                            
                            //echo  '<br>'.$userid.$uname. $uemail.$urole.$udir;
                            //mysqli_close($con);                            
                        }else
                        {
                            echo 'error';
                        }
                ?>
                  </fieldset>
            </form>
   <!------------------------------------------------->  
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
        

<!----------------------------------->
  
       <script>
              function validate()
              {
                var dirc_id = document.getElementById( "dirc_id" );
                var dir_name = document.getElementById( "dirc_name" );
                var dir_sector = document.getElementById( "dirc_sector" );
                var dir_center = document.getElementById( "dirc_center" );
               
                if( dirc_id.value == ""|| dirc_id.value <= 0)
                  {
                    alert("يوجد خلل في التسلسل");
                    return false;
                  }
                    else if( dirc_name.value == "")
                  {
                    alert(" يوجد خلل في اسم الدائرة لا تترك الحقل فارغ ");
                    return false;
                  }   
                  else if( dirc_sector.value == "")
                  {
                    alert(" يوجد خلل في اسم القطاع لا تترك الحقل فارغ ");
                    return false;
                  }                            
                  else if( dirc_center.value == "")
                  {
                    alert(" يوجد خلل في اسم المركز لا تترك الحقل فارغ ");
                    return false;
                  }                  
                  return true;
              }

            </script>
             <script>
                //this function is for empty all input
                    function newrow()
                    {                 
                        document.getElementById("add").disabled=false;
                        document.getElementById("dirc_id").value=<?php echo selectmaxid("dir_id","directoration");?>;
                        document.getElementById("dirc_name").value=null;
                        document.getElementById("dirc_sector").value=null;
                        document.getElementById("dirc_center").value=null;
                        
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
                <script>  //this script is for set the selected row in input
                        function setrowininput()
                        {
                            var tb=document.getElementById('tb');
                            for(var i=1; i < tb.rows.length; i++)
                            {
                            tb.rows[i].onclick=function()
                                {
                        
                                  //make disabled for add button
                                    document.getElementById("add").disabled=true;
                                  
                                    document.getElementById("dirc_id").value=Number(this.cells[0].innerHTML);
                                    document.getElementById("dirc_sector").value=this.cells[1].innerHTML;
                                    document.getElementById("dirc_name").value=this.cells[2].innerHTML;
                                    document.getElementById("dirc_center").value=this.cells[3].innerHTML;
                                };
                            }
                        }   
                        setrowininput();
             </script>      

</body>
</html>
<?php
  mysqli_close($con);  
?>