<?php require "connection.php"; ?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <title>إدخال مستخدمين</title>
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
            <div class="col-sm-0.5  col-md-0.5 col-lg-0.5"></div>
            <div class="col-sm-10.5  col-md-10.5 col-lg-10.5">
                <form class="well form-horizontal" action="user/user1.php" onsubmit="return validate();" id="frm"name="frm" method="post" >
                    <fieldset style="text-align:right">
                        <div class="row">
                            <div class="col-sm-1 col-md-1 col-lg-1 "></div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                <legend>إدخال معلومات المستخدم</legend>        
                                <div class="form-floating mb-3">
                                    <input type="hidden"  readonly class="form-control" value="1"  id="user_id" name="user_id"  placeholder="رقم التسلسل">
                                    <!-- <label for="floatingInput"  >التسلسل</label> -->
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text"  class="form-control" id="user_f_name" name="user_f_name" required placeholder="الأسم">
                                    <label for="floatingInput"  >الأسم</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text"  class="form-control"  id="user_m_name" name="user_m_name" required placeholder="اسم الأب">
                                    <label for="floatingInput"  >اسم الأب</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text"  class="form-control" id="user_l_name" name="user_l_name" required placeholder="اسم الجد">
                                    <label for="floatingInput" dir="rtl"   >اسم الجد</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select"  aria-label="Default select example"name="user_role" required id="user_role" dir="rtl"  >
                                        <option selected>رتبة الموظف (ماذا يعمل)</option>
                                        <option value=""></option>
                                        <?php
                                            $sql = mysqli_query($con, "SELECT `role_id`, `role_title` FROM `roles`");
                                            $row = mysqli_num_rows($sql);
                                            while ($row = mysqli_fetch_array($sql)){
                                            echo "<option value='". $row['role_id'] ."'>" .$row['role_title'] ."</option>" ;
                                            }
                                        ?>
                                    </select>
                                </div><br><br><br>
                                <div class="form-floating mb-3">
                                    <input type="text" id="user_name" name="user_name" class="form-control" اسم المستخدم required placeholder="اسم المستخدم الذي من خلاله يتمكن من تسجيل الدخول">
                                    <label for="floatingInput" dir="rtl"   >اسم المستخدم الذي من خلاله يتمكن من تسجيل الدخول</label>
                                </div>                                                  
                                <div class="form-floating mb-3">
                                    <input type="password"  class="form-control"  id="user_password" required name="user_password"  placeholder="كلمة المرور">
                                    <label for="floatingInput"  >كلمة المرور</label>                                                        
                                </div>
                                <div class="form-check form-switch" style="text-align:right ;">
                                    <label  class="form-check-label d-none d-lg-block" for="flexSwitchCheckDefault"  >اظهار/اخفاء</label>
                                    <input class="form-check-input" type="checkbox" onclick="show_hide_pass()">       
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group" required dir="trl" >
                                    <input type="radio" class="btn-check" name="user_gender" id="user_m_gendar"value="1" autocomplete="off" checked>
                                    <label class="btn btn-outline-primary" for="user_m_gendar">ذكر</label>
                                    <input type="radio" class="btn-check" name="user_gender" id="user_f_gendar" name="user_gender"  placeholder="الجنس"  autocomplete="off">
                                    <label class="btn btn-outline-primary" for="user_f_gendar">انثى </label>
                                </div>
                                <br> <br>
                                <div class="form-floating mb-3">
                                    <input type="date"  class="form-control" id="user_birthday" name="user_birthday" required dir="rtl" placeholder="تاريخ الولادة">
                                    <label for="floatingInput" dir="rtl"   >تاريخ الولادة</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text"  class="form-control" id="user_city" name="user_city" required dir="rtl" placeholder="المدينة" >
                                    <label for="floatingInput" dir="rtl"  > المدينة</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text"  class="form-control"  id="user_region" required name="user_region"dir="rtl" placeholder="المنطقة">
                                    <label for="floatingInput" dir="rtl"   >المنطقة</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text"  class="form-control" id="user_street" name="user_street" required dir="rtl"placeholder="فرع">
                                    <label for="floatingInput" dir="rtl"   >فرع</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text"  class="form-control"id="user_phone"min="0" required name="user_phone" dir="rtl" placeholder="123-4567(750)">
                                    <label for="floatingInput" dir="rtl" > 07500000000  الهاتف</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email"  class="form-control"  id="user_email" name="user_email" dir="rtl"placeholder="ايميل الخاص">
                                    <label for="floatingInput" dir="rtl"   >الأيميل</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="hidden"  class="form-control" id="user_user"min="0" name="user_user"dir="rtl"  required placeholder=" تسلسل المستخدم" value=" <?php echo $_SESSION['p_id'] ?>">
                                    <!-- <label for="floatingInput" dir="rtl"   >تسلسل المستخدم</label> -->
                                    <input type="hidden"  class="form-control" id="user_director"min="0" name="user_director"dir="rtl"value="<?php echo $_SESSION['u_director_id'] ?>" >
                                </div>
                                <div class="row">
                                    <div class="col-sm-2" ></div>     
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
                                    <div class="col-sm-2" ></div>
                                </div><br><br>
                                <div class="row">
                                    <div class="col-sm-1 col-md-1 col-lg-1" >
                                        <button class="btn btn-default" onclick="javascript:sendserch();" id="btn_search" type="button"> بحث </button>
                                    </div>
                                    <div class="col-sm-10 col-md-10 col-lg-10"style="padding-right:5%">
                                        <input class="form-control" style=" background-color: rgb(255, 255, 204);" id="my_search" placeholder="البحث يكون حسب التسلسل او الأسم الثلاثي او الهاتف">
                                        <hr>
                                    </div>
                                <div class="col-sm-1 col-md-1 col-lg-1 "></div>
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
                                echo '<script> document.getElementById("user_id").value='. selectmaxid('p_id','user').';</script>' ;  
                                    //this code is for selected all data of database and show that of the table 
                                    $sql = "SELECT user.`p_id`,`p_f_name`,`p_m_name`,`p_l_name` FROM `person`,`user` WHERE user.`u_director_id`=".$_SESSION['u_director_id']." && person.p_id=user.p_id  ORDER BY p_id DESC;";
                                    $result = mysqli_query($con, $sql);
                                    if($result)
                                    {                                      
                                        echo '<div id="d1" >'  ;
                                        echo '</div>';   
                                        echo '<div class="container" >'  ;
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
                                        echo '</div>';   

                                    }else
                                    {
                                        echo 'error';
                                    }
                            ?>
                            <div class="col-sm-1 col-md-1 col-lg-1 "></div>
                            <!-- <div id="myid" name="myid"></div> -->
                        </div>
                    </fieldset>
                </form> 
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1 "></div>
        </div>            
    </div>
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
    function show_hide_pass() {
      var x = document.getElementById("user_password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>

    
<script>
    function validate()
    {       
      var ch_f_name = document.getElementById( "user_f_name" );
      var ch_m_name = document.getElementById( "user_m_name" );
      var ch_l_name = document.getElementById( "user_l_name" );
      var ch_birthday = document.getElementById( "user_birthday" );
      //p_gender
      var ch_national = document.getElementById( "user_national" );
      var ch_city = document.getElementById( "user_city" );
      var ch_region = document.getElementById( "user_region" );      
      var ch_street = document.getElementById( "user_street" );
      var user_role = document.getElementById( "user_role" );
      
      
      if( user_f_name.value == ""||  user_m_name.value == ""||  user_l_name.value == "")
        {
          alert(" يوجد خلل في الأسم لا تترك الحقل فارغ ");
          return false;
        }
          else if( user_birthday.value == "")
        {
          alert(" يوجد خلل في التاريخ لا تترك الحقل فارغ ");
          return false;
        }  
        else if( user_role.value == "")
        {
          alert(" يوجد خلل في نوع الوظيفة لا تترك الحقل فارغ ");
          return false;
        }                          
        else if( user_city.value == ""|| user_region.value == ""|| user_street.value == "")
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
      document.getElementById("add").disabled=false;
      document.getElementById("user_id").value=<?php echo selectmaxid("p_id","user");?>;
      document.getElementById("user_f_name").value=null;
      document.getElementById("user_m_name").value=null;
      document.getElementById("user_l_name").value=null;
      document.getElementById("user_role").value = null;
      document.getElementById("user_name").value = null;
      document.getElementById("user_password").value = null;
     
      document.getElementById("user_m_gendar").checked = true;
      document.getElementById("user_f_gendar").checked = false;
      document.getElementById("user_birthday").value=null;      
      document.getElementById("user_city").value=null;
      document.getElementById("user_region").value=null;
      document.getElementById("user_street").value=null;
      document.getElementById("user_phone").value=null;
      document.getElementById("user_email").value=null;
      document.getElementById("user_user").value=null;  
      document.getElementById("my_search").value=null;    
      
     /* document.getElementById("u_mm_name").value=null;
      document.getElementById("u_ml_name").value=null;
      document.getElementById("ch_national").value=null;
      */
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
          $("#d1").load("user/userselect1.php",{tid:tid});
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
          $("#d1").load("user/searchperson.php",{searchtext:searchtext});
           //document.getElementById('my_search').value=null;
       
  }                
  
</script>  



    </body>
</html>
<?php
  mysqli_close($con);  
?>