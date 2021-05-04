<?php require "connection.php"; 
//$userid='1';
//$user_director='1';//directorate of current user
 ?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <title>التسجيل </title>
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
          <div class="col-sm-1 "></div>
          <div class="col-sm-10 ">
            <form class="well form-horizontal" action="work/work1.php" onsubmit="return validate();" id="frm"name="frm" method="post" >
              <fieldset style="text-align:right">
              <legend >قائمة الإدخال </legend>
              
                  <div class="form-floating mb-3">
                      <input type="hidden"  readonly class="form-control" value="1"  name="work_id" id="work_id"   placeholder="رقم التسلسل">
                      <!-- <label for="floatingInput"  >التسلسل</label> -->
                  </div>
                  <div class="form-floating mb-3">
                      <input type="text"   class="form-control"  name="work_person_id"  id="work_person_id" dir="rtl" required  placeholder="رقم التسلسل">
                      <label for="floatingInput"> رقم تسلسل الشخص</label>
                  </div>
                  <div class="form-floating " id="mydiv" name="mydiv">
                    <select class="form-select " name="work_vaccin_name"  id="work_vaccin_name" required >
                     <option></option>
                     <?php
                      $sql = mysqli_query($con, "SELECT `v_id`, `v_vaccination_name` FROM `vaccination`");
                      $row = mysqli_num_rows($sql);
                      while ($row = mysqli_fetch_array($sql)){
                          echo "<option value='". $row['v_id'] ."'>" .$row['v_vaccination_name'] ."</option>" ;
                        }
                        ?>
                    </select>
                    <label for="work_vaccin_name">نوع التلقيح </label>
                    <script>
                        document.getElementById("work_vaccin_name").selectedIndex = "-1";
                        
                    </script>
                  </div>
                  <br><br><br>

                  <div class="form-floating mb-3">
                    <input type="date"  class="form-control" name="work_next_date" dir="rtl" id="work_next_date" required  placeholder="تاريخ القادم">
                    <label for="floatingInput" >تاريخ القادم</label>
                                
                  </div>
                  <div class="form-floating mb-3">
                      <input type="text"   class="form-control"  name="work_doctor"id="work_doctor"dir="rtl" required placeholder="اسم الطبيب" >
                      <label for="floatingInput"  >اسم الطبيب</label>
                  </div>
                  <div class="form-floating mb-3">
                      <input type="text"   class="form-control"  name="work_note"id="work_note"dir="rtl" placeholder="الملاحضات">
                      <label for="floatingInput" >الملاحضات</label>
                  </div>

                  <div class="form-floating mb-3">
                        <input type="hidden"  readonly class="form-control" value="1" required  name="work_dir_name" id="work_dir_name" min="0" dir="rtl" placeholder="اسم المركز"  >
                        <!-- <label for="floatingInput"  >اسم المركز</label> -->
                  </div> 
                  <div class="form-floating mb-3">
                        <input type="hidden"  readonly class="form-control" value="<?php echo $_SESSION['p_id'] ?> required id="user_user"min="0" name="user_user"dir="rtl"   placeholder=" تسلسل المستخدم" >
                        <!-- <label for="floatingInput"  >تسلسل المستخدم</label> -->
                        <input type="hidden"  class="form-control" id="work_director"min="0" name="work_director"dir="rtl"value="<?php echo $_SESSION['u_director_id'] ?>" >
                  </div>
                           
                  
                  <div class="row">
                      <div class="col-sm-2" ></div>   
                      <div class="col-sm-2" >
                        <button type='button' class="btn btn-lg btn-success" onclick="newrow()" name='newr'  >جديد</button>
                      </div>
                      <div class="col-sm-2" >
                        <button type="submit" class="btn btn-lg btn-success" id="add" name='add' >اضافة</button>
                      </div>
                      <div class="col-sm-2">                        
                        <button type="submit" class="btn btn-lg btn-success" name='update'>تعديل</button> 
                      </div>
                      <div class="col-sm-2" >
                        <button type="submit" class="btn btn-lg btn-success" name='delete' onclick="return confirm('هل تريد الحذف بالتأكيد'); value='حذف' " name= "delete">حذف</button>
                      </div>
                  </div>
                  <br>                                
                  <div class="row">       
                      <div class="col-sm-1" >
                      <button class="btn btn-default" onclick=" javascript:sendserch();" id="btn_search" type="button"> بحث </button>   
                  </div>                            
                    <div class="col-sm-10"style="padding-right:5%">
                    <input class="form-control" style=" background-color: rgb(255, 255, 204);" id="my_search" placeholder="البحث يكون حسب التسلسل او الأسم الثلاثي او الهاتف">
                    </div>
                  </div>

                    <script>
                      //this function is for empty all input
                      function newrow()
                      {    
                        if($('#tb2').length > 0){ document.getElementById("tb2").remove(); }
                        document.getElementById("frm").reset();
                        //document.getElementById("work_vaccin_name").reset();
                        document.getElementById("add").disabled=false;
                        document.getElementById("work_id").value=<?php echo selectmaxid('w_id','work_record');?>;
                        document.getElementById("work_vaccin_name").selectedIndex = "-1";
                       
                        //$( "#mydiv" ).load(window.location.href + " #mydiv" );
                        
                      // // document.getElementById("work_vaccin_name").selectedIndex = "-1";
                      // // $("#tb2").remove();  
                      // document.getElementById("work_person_id").value=null;
                      // // document.getElementById("work_vaccin_name").value="0";
                      // document.getElementById("work_vaccin_name").selectedIndex = "-1";
                      // //document.getElementById("work_today_date").value=null;
                      // document.getElementById("work_next_date").value = null;
                      // document.getElementById("work_doctor").value = null;
                      // document.getElementById("work_note").value = null;    
                      // document.getElementById("my_search").value=null;

                      //document.getElementById("work_dir_name").value=<?php //echo $_SESSION['u_director_id'] ?>      
                      //document.getElementById("user_user").value=<?php// echo $_SESSION['p_id'] ?>
                      }

                    </script> 
                              
                              
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
                      echo '<script> document.getElementById("work_id").value='. selectmaxid('w_id','work_record').';</script>' ;  
                        //this code is for selected all data of database and show that of the table 
                        // $sql = "SELECT user.`p_id`,`p_f_name`,`p_m_name`,`p_l_name` FROM `person`,`user` WHERE user.`u_director_id`=$user_director && person.p_id=user.p_id  ORDER BY p_id DESC;";
                        $sql="SELECT  `w_pv_id`,`p_f_name`,`p_m_name`,`p_l_name` ,`w_id`, `w_date`, `w_next_date`, `w_note`, `w_pollinator_name`, `w_user_id`, `w_dir_id`,  (select v_vaccination_name from vaccination where v_id=`w_v_id`)as v_name FROM `person`, `work_record` WHERE work_record.w_pv_id=person.p_id &&  DATE(w_date) = CURDATE()  ";
                        $result = mysqli_query($con, $sql);
                        if($result)
                        {                                               
                            echo '<div id="d1">'  ;
                            echo '</div>';   
                            echo '<table class="table table-hover  pre-scrollable " id="tb" > ';
                            echo '<thead>'.'<tr><th>التسلسل</th>'.'<th>'.'تسلسل الشخص' .'</th>'.'<th>'.'الأسم'.'</th>'.'<th>'.'اسم الأب'.'</th>'.'<th>'.'اسم الجد'.'</th>'.'<th>تاريخ اليوم</th>'.'<th>تاريخ القادم</th>'.'<th>الملاحظات</th>'.'<th>اسم الطبيب</th>'.'<th>المستخدم</th>'.'<th>الدائرة</th>'.'<th>التلقيح</th>'.'</tr>'.'</thead>';
                            while ($row = mysqli_fetch_assoc($result)) {
                                
                                echo '<tbody id="myTable">'.'<tr>'.'<td>'. $row["w_id"].'  '.         '</td>';
                                echo '<td>'. $row["w_pv_id"].'  '.       '</td>';
                                echo '<td>'. $row["p_f_name"].'  '.       '</td>';
                                echo '<td>'. $row["p_m_name"].'  '.'</td>';
                                echo '<td>'. $row["p_l_name"].'  '.          '</td>';  
                                
                                echo '<td>'. $row["w_date"].'  '.'</td>';
                                echo '<td>'. $row["w_next_date"].'  '.          '</td>';  

                                echo '<td>'. $row["w_note"].'  '.       '</td>';
                                echo '<td>'. $row["w_pollinator_name"].'  '.'</td>';
                                echo '<td>'. $row["w_user_id"].'  '.          '</td>';  
                                echo '<td>'. $row["w_dir_id"].'  '.'</td>';
                                echo '<td>'. $row["v_name"].'  '.          '</td>';  
                                echo '</tr>';
                            }
                            echo '</table>';
                                                
                        }else
                        {
                            echo '<br><h3 class="alert alert-danger">error';
                        }
                    ?>

              <!-- <div id="myid" name="myid">
              <select name="sel" id="sel">
            <option value="1" >1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
<button  type="button" onclick="ne()">click me</button>
        <script>
            //this function is for empty all input
              function ne()
              { document.getElementById("sel").selectedIndex = "-1";}
            </script> -->
              </div>
              </fieldset>
            </form>
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
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> -->


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
<script>
    function validate()
    { 
      var work_id = document.getElementById( "work_id" );
      var work_person_id = document.getElementById( "work_person_id" );
      var work_vaccin_name = document.getElementById( "work_vaccin_name" );
      //var work_today_date = date("y-m-d");
      var work_next_date= document.getElementById( "work_next_date" );
      var work_doctor   = document.getElementById( "work_doctor" );      
      var work_dir_name = document.getElementById( "work_dir_name" );
      var user_user     = document.getElementById("user_user");
      
      if(   work_person_id.value == "")
        {
          alert(" يوجد خلل في التسلسل لا تترك الحقل فارغ ");
          return false;
        }
          else if( work_vaccin_name.value == "")
        {
          alert(" يوجد خلل في نوع التلقيح لا تترك الحقل فارغ ");
          return false;
        }                          
        else if( work_next_date.value == "")
        {
          alert(" يوجد خلل في العنوان لا تترك الحقل فارغ ");
          return false;
        }   
        else if( user_user.value == ""||  work_dir_name.value == "")
        {
          alert(" يوجد خلل في تسلسل المستخدم او الدائرة لا تترك الحقل فارغ ");
          return false;
        }               
        return true;
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
          var pid=Number(this.cells[1].innerHTML);
          //$("#d1").load("work/workselect1.php",{tid:tid ,pid:pid});

          document.getElementById("work_id").value=Number(this.cells[0].innerHTML);
                document.getElementById("work_person_id").value=this.cells[1].innerHTML;               
                document.getElementById("work_next_date").value=(this.cells[6].innerHTML).trim();
                document.getElementById("work_note").value=this.cells[7].innerHTML;
                document.getElementById("work_doctor").value=this.cells[8].innerHTML;   
                //document.getElementById("user_user").value=this.cells[9].innerHTML;   
                document.getElementById("work_dir_name").value=this.cells[10].innerHTML;            
                //document.getElementById("work_vaccin_name").options =117;//Number(this.cells[11].innerHTML);
                //========================================================
                document.getElementById("work_vaccin_name").selectedIndex = "1";
            // var textToFind = 'v1';

            //   var dd = document.getElementById('work_vaccin_name');
            //   for (var i = 0; i < dd.options.length; i++) {
            //       if (dd.options[i].text === textToFind) {
            //           dd.selectedIndex = i;
            //           alert(i);
            //           break;
            //       }
            //   }
                // var dd = document.getElementById('work_vaccin_name');
                // for (var i = 0; i < dd.options.length; i++) {
                //     if (dd.options[i].value == Number(this.cells[11].innerHTML)) {
                      
                //         dd.selectedIndex = i;
                //         document.getElementById("work_vaccin_name").selectedIndex =i.toString();
                //         alert(i);
                //         break;
                //     }
                // }
                
                 setrowininput();
        };
    }
  }                
  setrowininput();
</script>      

<script>   //this script is for set the selected row in the input
  function sendserch()
  {
    
          var searchtext=document.getElementById('my_search').value.trim();
          if (searchtext!="" && searchtext!= null) {
            //make disabled for add button
            document.getElementById("add").disabled=true;              
            $("#d1").load("work/searchperson.php",{searchtext:searchtext});
          }else {alert("مربع البحث فارغ");}
           //document.getElementById('my_search').value=null;
       
  }                
  
</script>  

    
 

    </body>
</html>
<?php
  mysqli_close($con);  
?>