<?php require "connection.php"; ?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
    <title>إدخال المتلقحين</title>
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
            <div class="col-sm-0.5 ">
            </div>
                <div class="col-sm-10.5 ">



<!--====================================================================================-->
           
        <form onsubmit="return validate(); " id="frm"name="frm" class="well form-horizontal" style="text-align:right" action="children/children1.php" method="post">
        <fieldset>       
        <div class="row">
            <div class="col-sm-1 ">
            </div>
            <div class="col-sm-10 ">
            <legend>إدخال معلومات المتلقح</legend>         
            <div class="form-floating mb-3">
                <input type="hidden"   class="form-control"   input id="ch_id"; name="ch_id"dir="rtl" placeholder="رقم التسلسل"  required readonly class="form-control" value="1"    >
                <!-- <label for="floatingInput"> رقم التسلسل</label> -->
            </div>
            <div class="form-floating mb-3">
                <input type="text"  id="ch_f_name";  name="ch_f_name"dir="rtl" placeholder="اسم" required  class="form-control" >
                <label for="floatingInput">اسم</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text"   id="ch_m_name"; name="ch_m_name"dir="rtl" required  placeholder="اسم الأب" class="form-control" >
                <label for="floatingInput">اسم الأب</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text"   id="ch_l_name"; name="ch_l_name"dir="rtl" required  placeholder="اسم الجد" class="form-control" >
                <label for="floatingInput">اسم الجد</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text"   id="ch_mf_name"; name="ch_mf_name" dir="rtl"placeholder="اسم الأم" class="form-control" >
                <label for="floatingInput">اسم الأم</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text"   id="ch_mm_name"; name="ch_mm_name" dir="rtl"placeholder="اسم اب(للأم)" class="form-control" >
                <label for="floatingInput">اسم اب الأم</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text"   id="ch_ml_name"; name="ch_ml_name" dir="rtl"placeholder="اسم جد الأم" class="form-control" >
                <label for="floatingInput">اسم  جدالأم</label>
            </div>                        
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" value="1" placeholder="الجنس" name="ch_gendar" id="ch_m_gendar" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="ch_m_gendar">ذكر</label>

                <input type="radio" class="btn-check" name="ch_gendar" value="0" id="ch_f_gendar" placeholder="الجنس" autocomplete="off">
                <label class="btn btn-outline-primary" for="ch_f_gendar"> انثى</label>
            </div>
            <br> 
            <br>
            <div class="form-floating mb-3">
                <input type="date"  placeholder="تاريخ الولادة" required  id="ch_birthday"; name="ch_birthday" dir="rtl" class="form-control" >
                <label for="floatingInput">تاريخ الولادة</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text"  value="عراقي"   id="ch_national"; name="ch_national" dir="rtl"placeholder="الجنسية" class="form-control" >
                <label for="floatingInput">الجنسية</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text"  required     id="ch_city"; name="ch_city" dir="rtl"placeholder="المدينة" class="form-control" >
                <label for="floatingInput">المدينة</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text"  required     id="ch_region"; name="ch_region" dir="rtl"placeholder="المنطقة" class="form-control" >
                <label for="floatingInput">المنطقة</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" required  id="ch_street" name="ch_street" dir="rtl"placeholder="فرع" class="form-control" >
                <label for="floatingInput">فرع</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" required  id="ch_phone" name="ch_phone" dir="rtl"placeholder="(750)555-1212" class="form-control" >
                <label for="floatingInput">0750  الهاتف</label>
            </div>
            <div class="form-floating mb-3">
                <input type="hidden" required min="0"  id="ch_user"; name="ch_user" dir="rtl"placeholder="تسلسل المستخدم" class="form-control"value="<?php echo $_SESSION['p_id']?>" >
                <!-- <label for="floatingInput">تسلسل المستخدم</label> -->
                <input type="hidden"  class="form-control" id="ch_director"min="0" name="ch_director"dir="rtl"value="<?php echo $_SESSION['u_director_id'] ?>" >
            </div>

            <div class="row">
                <div class="col-sm-2" >
                </div>     
                <div class="col-sm-2" >
                <button  type='button'  onclick="newrow()" name='newr'    value='جديد'   class="btn btn-lg btn-success" >جديد</button>
                </div>
                <div class="col-sm-2" >
                    <button  type='submit'id="add" name='add'  value='أضافة' class="btn btn-lg btn-success"> أضافة </button>
                </div>
                <div class="col-sm-2" >
                    <button  type='submit' name='update'  value='تعديل' class="btn btn-lg btn-success"> تعديل </button>
                </div>
                <div class="col-sm-2">
                    <button type='submit' name='delete' onclick="return confirm('هل تريد الحذف بالتأكيد');"  value='حذف' class="btn btn-lg btn-success">حذف </button>
                </div>
                <div class="col-sm-2" >
                </div>
            </div>           
             <br>        
                <div class="row">       
                    <div class="col-sm-1" >
                    <button class="btn btn-primary btn-sm" onclick="javascript:sendserch();" id="btn_search" type="button"> بحث </button>
                    </div>
                    <div class="col-sm-10"style="padding-right:5%">
                    <input class="form-control" style=" background-color: rgb(255, 255, 204);" id="my_search" placeholder="البحث يكون حسب التسلسل او الأسم الثلاثي او الهاتف">

                    </div>
                </div>
            <br><br><br>
            </div>
        <div class="col-sm-1 ">
        </div>
    </div>
        <script>
            var input = document.getElementById("my_search");
            input.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
            event.preventDefault();
            document.getElementById("btn_search").click();
            }
            });
        </script>
        <?php 
        //this is for show the new id in the input vaccin_id (new id)
        echo '<script> document.getElementById("ch_id").value='. selectmaxid('p_id','person').';</script>' ;  
            //this code is for selected all data of database and show that of the table 
            $sql = "SELECT person_vaccination.`p_id`,`p_f_name`,`p_m_name`,`p_l_name` FROM `person`,`person_vaccination` WHERE DATE( person_vaccination.`pv_today_date`) = CURDATE() && person_vaccination.`pv_user_id`=".$_SESSION['p_id']." && person.p_id=person_vaccination.p_id  ORDER BY p_id DESC;";
            $result = mysqli_query($con, $sql);
            if($result)
            {                                               
                echo '<div id="d1">'  ;
                echo '</div>';   
                
                echo '<table class="table table-hover  pre-scrollable " id="tb" > ';
                echo '<thead>'.'<tr><th>'.'التسلسل' .'</th>'.'<th>'.'الأسم'.'</th>'.'<th>'.'اسم الأب'.'</th>'.'<th>'.'اسم الجد'.'</th>'.'</tr>'.'</thead>';
                while ($row = mysqli_fetch_assoc($result)) {
                    
                    echo '<tbody id="myTable">'.'<tr>'.'<td>'. $row["p_id"].'  '.         '</td>';
                    echo '<td>'. $row["p_f_name"].'  '.       '</td>';
                    echo '<td>'. $row["p_m_name"].'  '.'</td>';
                    echo '<td>'. $row["p_l_name"].'  '.          '</td>';                  
                    echo '</tr>';
                }
                echo '</table>';   
            }else
            {
                echo 'error';
            }
        ?>
    </div>
    <div id="myid" name="myid"></div>           
</fieldset>
</form>


<!--====================================================================================-->
                    
                </div>
                <div class="col-sm-1"></div>
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
      var ch_f_name = document.getElementById( "ch_f_name" );
      var ch_m_name = document.getElementById( "ch_m_name" );
      var ch_l_name = document.getElementById( "ch_l_name" );
      var ch_birthday = document.getElementById( "ch_birthday" );
      //p_gender
      var ch_national = document.getElementById( "ch_national" );
      var ch_city = document.getElementById( "ch_city" );
      var ch_region = document.getElementById( "ch_region" );      
      var ch_street = document.getElementById( "ch_street" );
      
      
      if( ch_f_name.value == ""||  ch_m_name.value == ""||  ch_l_name.value == "")
        {
          alert(" يوجد خلل في الأسم لا تترك الحقل فارغ ");
          return false;
        }
          else if( ch_birthday.value == "")
        {
          alert(" يوجد خلل في التاريخ لا تترك الحقل فارغ ");
          return false;
        }   
        else if( ch_national.value == "")
        {
          alert(" يوجد خلل في الجنسية لا تترك الحقل فارغ ");
          return false;
        }                            
        else if( ch_city.value == ""|| ch_region.value == ""|| ch_street.value == "")
        {
          alert(" يوجد خلل في العنوان لا تترك الحقل فارغ ");
          return false;
        }                  
        return true;
    }

</script>

<script>
//this function is for empty all input
  function newrow()
  {    
    
       // [ch_id] [ch_f_name][ch_m_name][ch_l_name][ch_mf_name][ch_mm_name][ch_ml_name][ch_gendar][ch_birthday][ch_national]
       // [ch_city][ch_region][ch_street][ch_phone][ch_user][add] => أضافة )
      document.getElementById("add").disabled=false;
      document.getElementById("ch_id").value=<?php echo selectmaxid("p_id","person");?>;
      document.getElementById("ch_f_name").value=null;
      document.getElementById("ch_m_name").value=null;
      document.getElementById("ch_l_name").value=null;
      document.getElementById("ch_mf_name").value=null;
      document.getElementById("ch_mm_name").value=null;
      document.getElementById("ch_ml_name").value=null;
      document.getElementById("ch_m_gendar").checked = true;
      document.getElementById("ch_f_gendar").checked = false;
      document.getElementById("ch_birthday").value=null
      document.getElementById("ch_national").value="عراقي" ;
      document.getElementById("ch_city").value=null;
      document.getElementById("ch_region").value=null;
      document.getElementById("ch_street").value=null;
      document.getElementById("ch_phone").value=null;
      document.getElementById("ch_user").value=<?php echo $_SESSION['p_id']?>;      
      document.getElementById("ch_director").value=<?php echo $_SESSION['u_director_id']?>;      
      document.getElementById("my_search").value=null;  
      $("#tb2").remove();  
  }

</script>
<script>//this script is for filter the table(search)
  $(document).ready(function(){
  $("#my_search").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
  });
  });
</script>


<script>   //this script is for set the selected row in the input
  function setrowininput()
  {
    var tb=document.getElementById('tb');
    for(var i=1; i < tb.rows.length; i++)
    {    
      tb.rows[i].onclick=function()
        {
          //make disabled for add button
          document.getElementById("add").disabled=true;
          var tid=Number(this.cells[0].innerHTML);
          $("#d1").load("children/childrenselect1.php",{tid:tid});
           // setrowininput1();
        };
    }
  }                
  setrowininput();
</script>      

<script>   //this script is for set the selected row in the input
  function sendserch()
  {
    
          //make disabled for add button
          document.getElementById("add").disabled=true;
          var searchtext=document.getElementById('my_search').value;
          $("#d1").load("children/searchperson.php",{searchtext:searchtext});
           //document.getElementById('my_search').value=null;
       
  }                
  
</script>  



    </body>
</html>
<?php
  mysqli_close($con);  
?>