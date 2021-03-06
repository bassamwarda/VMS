<!doctype html>
<html class="no-js" lang="zxx">
    <head>
    <title>التقارير</title>
    <?php
            include "navbarheader.php";
            include "connection.php";
        ?> 
    <main>
    <br>

<div class="container shadow p-3 mb-5 bg-white rounded">
    <div class="row">
    <div class="col-sm-1 ">
    </div>
        <div class="col-sm-10 ">
            <!--====================================================================================-->
            <div class='row'>
                <div class="col-sm-12 col-md-12 col-lg-12" align="center">
                    <h1>صفحة التقارير</h1>
                    <hr>
                    <br>
                    </div>
                </div>

            <div class='row border '>
                <div class="col-sm-12 col-md-12 col-lg-12 ">
                    <br>


                
                    <form action="report/report.php" method="post">
                        <div class="form-check">
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3">
                                    <label class="form-check-label fs-5" for="checkdate">جميع مابين تاريخين </label>
                                    <input class="form-check-input" type="checkbox"onclick='Functionperson("checkdate")' name="checkdate" id="checkdate">        
                                </div>
                                <div class="col-sm-3 col-md-3 col-lg-3">
                                    <label class="form-check-label fs-5" for="checkperson">شخص محدد </label>
                                    <input class="form-check-input" type="checkbox"onclick='Functionperson("checkperson")'name="checkperson" id="checkperson">        
                                </div>
                                <div class="col-sm-3 col-md-3 col-lg-3">
                                    <label class="form-check-label fs-5" for="checkcenter">الجميع حسب المركز </label>
                                    <input class="form-check-input" type="checkbox"onclick='Functionperson("checkcenter")' name="checkcenter" id="checkcenter">        
                                </div>
                                <div class="col-sm-3 col-md-3 col-lg-3">
                                    <label class="form-check-label fs-5" for="checkvaccin">الجميع حسب التلقيح </label>
                                    <input class="form-check-input" type="checkbox"onclick='Functionperson("checkvaccin")' name="checkvaccin" id="checkvaccin">        
                                </div>
                                <div class="col-sm-3 col-md-3 col-lg-3">
                                    <label class="form-check-label fs-5" for="checkvaccinAndCenter">التلقيح و المركز </label>
                                    <input class="form-check-input" type="checkbox"onclick='Functionperson("checkvaccinAndCenter")' name="checkvaccinAndCenter" id="checkvaccinAndCenter">        
                                </div>
                            
                            <!-- </div> -->
                            
                            <script>
                                function Functionperson(x) {
                                    if(x=="checkdate"){
                                        var checkBox = document.getElementById("checkdate");
                                        var text = document.getElementById("datediv");
                                        if (checkBox.checked == false){
                                            text.setAttribute("hidden","true");
                                        } else {
                                            document.getElementById("checkperson").checked=false;
                                            document.getElementById("checkcenter").checked=false;
                                            document.getElementById("checkvaccin").checked=false;
                                            document.getElementById("checkvaccinAndCenter").checked=false;
                                            text.removeAttribute("hidden");
                                            document.getElementById("persondiv").setAttribute("hidden","true");
                                            document.getElementById("centerdiv").setAttribute("hidden","true");
                                            document.getElementById("vaccindiv").setAttribute("hidden","true");
                                            document.getElementById("vaccinAndCenterdiv").setAttribute("hidden","true");
                                        }
                                    }
                                    // ==================================================================
                                    if(x=="checkperson"){
                                        var checkBox = document.getElementById("checkperson");
                                        var text = document.getElementById("persondiv");
                                        if (checkBox.checked == false){
                                            text.setAttribute("hidden","true");
                                        } else {
                                            document.getElementById("checkdate").checked=false;
                                            document.getElementById("checkvaccin").checked=false;
                                            document.getElementById("checkcenter").checked=false;
                                            document.getElementById("checkvaccinAndCenter").checked=false;
                                            text.removeAttribute("hidden");
                                            
                                            document.getElementById("datediv").setAttribute("hidden","true");
                                            document.getElementById("centerdiv").setAttribute("hidden","true");
                                            document.getElementById("vaccindiv").setAttribute("hidden","true");
                                            document.getElementById("vaccinAndCenterdiv").setAttribute("hidden","true");
                                        }
                                    }
                                        // ==================================================================
                                    if(x=="checkvaccinAndCenter"){
                                        var checkBox = document.getElementById("checkvaccinAndCenter");
                                        var text = document.getElementById("vaccinAndCenterdiv");
                                        if (checkBox.checked == false){
                                            text.setAttribute("hidden","true");
                                        } else {
                                            document.getElementById("checkdate").checked=false;
                                            document.getElementById("checkvaccin").checked=false;
                                            document.getElementById("checkcenter").checked=false;
                                            document.getElementById("checkperson").checked=false;
                                            text.removeAttribute("hidden");
                                            
                                            document.getElementById("datediv").setAttribute("hidden","true");
                                            document.getElementById("centerdiv").setAttribute("hidden","true");
                                            document.getElementById("vaccindiv").setAttribute("hidden","true");
                                            document.getElementById("persondiv").setAttribute("hidden","true");
                                        }
                                    }
                                    // ==================================================================
                                    if(x=="checkcenter"){
                                        var checkBox = document.getElementById("checkcenter");
                                        var text = document.getElementById("centerdiv");
                                        if (checkBox.checked == false){
                                            text.setAttribute("hidden","true");
                                        } else {
                                            document.getElementById("checkdate").checked=false;
                                            document.getElementById("checkvaccin").checked=false;
                                            document.getElementById("checkperson").checked=false;
                                            document.getElementById("checkvaccinAndCenter").checked=false;
                                            text.removeAttribute("hidden");
                                            document.getElementById("datediv").setAttribute("hidden","true");
                                            document.getElementById("persondiv").setAttribute("hidden","true");
                                            document.getElementById("vaccindiv").setAttribute("hidden","true");
                                            document.getElementById("vaccinAndCenterdiv").setAttribute("hidden","true");

                                        }
                                    }
                                    // ==================================================================
                                    if(x=="checkvaccin"){
                                        var checkBox = document.getElementById("checkvaccin");
                                        var text = document.getElementById("vaccindiv");
                                        if (checkBox.checked == false){
                                            text.setAttribute("hidden","true");
                                        } else {
                                            document.getElementById("checkdate").checked=false;
                                            document.getElementById("checkcenter").checked=false;
                                            document.getElementById("checkperson").checked=false;
                                            document.getElementById("checkvaccinAndCenter").checked=false;
                                            text.removeAttribute("hidden");
                                            document.getElementById("datediv").setAttribute("hidden","true");
                                            document.getElementById("persondiv").setAttribute("hidden","true");
                                            document.getElementById("centerdiv").setAttribute("hidden","true");
                                            document.getElementById("vaccinAndCenterdiv").setAttribute("hidden","true");
                                        }
                                    }
                                
                                }
                            </script>
                            <!-- ============================================================ -->
                            <br>

                            <div class="input-group mb-3"dir="ltr" id="datediv" hidden>
                                <input type="date" class="form-control" id="date2"name="date2" placeholder=" من هذا التاريخ" >
                                <span class="input-group-text">الى</span>
                                <input type="date" class="form-control" id="date1"name="date1" placeholder="الى هذا التاريخ">
                                <span class="input-group-text">من</span>
                            </div>
                            <!-- ============================================================ -->
                            <div class="input-group mb-3"dir="ltr" id="persondiv" hidden>
                                <input type="text" class="form-control" id="personid"name="personid" placeholder="رقم التسلسل">
                                <span class="input-group-text">التسلسل</span>
                            </div>
                            <!-- ============================================================ -->
                            <div class="input-group mb-3"dir="ltr" id="centerdiv" hidden>
                                <div class="input-group mb-3">
                                    <select class="form-select " name="centerid"  id="centerid" required >
                                        <option></option>
                                            <?php
                                            $sql = mysqli_query($con, "SELECT `dir_id`, `dir_sector_name`, `dir_directorate_name`, `dir_center_name` FROM `directoration`");
                                            $row = mysqli_num_rows($sql);
                                            while ($row = mysqli_fetch_array($sql)){
                                                echo "<option value='". $row['dir_id'] ."'>" .$row['dir_sector_name']."  " .$row['dir_directorate_name']."  " .$row['dir_center_name'] ."</option>" ;
                                                }
                                                ?>
                                    </select>
                                    <script>
                                        document.getElementById("centerid").selectedIndex = "-1";
                                    </script>
                                    <span  for="centerid"class="input-group-text">المركز</span>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="date" class="form-control" id="date11"name="date11" placeholder="الى هذا التاريخ">
                                    <span class="input-group-text">من</span>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="date" class="form-control" id="date22"name="date22" placeholder=" من هذا التاريخ" >
                                    <span class="input-group-text">الى</span>
                                </div>
                            </div>

                            <!-- ============================================================ -->
                            <div class="input-group mb-3"dir="ltr" id="vaccindiv" hidden>        
                                <div class="input-group mb-3">
                                    <select class="form-select " name="vaccinid"  id="vaccinid" required >
                                        <option></option>
                                        <?php
                                        $sql = mysqli_query($con, "SELECT `v_id`, `v_vaccination_name` FROM `vaccination`");
                                        $row = mysqli_num_rows($sql);
                                        while ($row = mysqli_fetch_array($sql)){
                                            echo "<option value='". $row['v_id'] ."'>" .$row['v_vaccination_name'] ."</option>" ;
                                            }
                                            ?>
                                    </select>
                                    <script>
                                        document.getElementById("vaccinid").selectedIndex = "-1";
                                    </script>
                                    <span  for="vaccinid"class="input-group-text">نوع التلقيح</span>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="date" class="form-control" id="date222"name="date222" placeholder=" من هذا التاريخ" >
                                    <span class="input-group-text">الى</span>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="date" class="form-control" id="date111"name="date111" placeholder="الى هذا التاريخ">
                                    <span class="input-group-text">من</span>
                                </div>
                            </div>
                            
                            <!-- ============================================================ -->
                            <div class="input-group mb-3 br"dir="ltr" id="vaccinAndCenterdiv" hidden>
                                <div class="input-group mb-3">
                                    <select class="form-select " name="centerByCenterId"  id="centerByCenterId" required >
                                        <option></option>
                                        <?php
                                        $sql = mysqli_query($con, "SELECT `dir_id`, `dir_sector_name`, `dir_directorate_name`, `dir_center_name` FROM `directoration`");
                                        $row = mysqli_num_rows($sql);
                                        while ($row = mysqli_fetch_array($sql)){
                                            echo "<option value='". $row['dir_id'] ."'>" .$row['dir_sector_name']."  " .$row['dir_directorate_name']."  " .$row['dir_center_name'] ."</option>" ;
                                            }
                                            ?>
                                    </select>
                                    <script>
                                        document.getElementById("centerByCenterId").selectedIndex = "-1";
                                    </script>
                                    <span  for="centerByCenterId"class="input-group-text">المركز</span>
                                </div>
                                <div class="input-group mb-3">
                                    <select class="form-select " name="vaccinByCenterId"  id="vaccinByCenterId" required >
                                        <option></option>
                                        <?php
                                        $sql = mysqli_query($con, "SELECT `v_id`, `v_vaccination_name` FROM `vaccination`");
                                        $row = mysqli_num_rows($sql);
                                        while ($row = mysqli_fetch_array($sql)){
                                            echo "<option value='". $row['v_id'] ."'>" .$row['v_vaccination_name'] ."</option>" ;
                                            }
                                            ?>
                                    </select>
                                    <script>
                                        document.getElementById("vaccinByCenterId").selectedIndex = "-1";
                                    </script>
                                    <span  for="vaccinByCenterId"class="input-group-text">التلقيح</span>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="date" class="form-control" id="date1111"name="date1111" placeholder="الى هذا التاريخ">
                                    <span class="input-group-text">من</span>
                                </div>
                                
                                <div class="input-group mb-3">
                                    <input type="date" class="form-control" id="date2222"name="date2222" placeholder=" من هذا التاريخ" >
                                    <span class="input-group-text">الى</span>
                                </div>
                            </div>
                            <!-- ============================================================ -->
                           
                            <button type="button" id="submit" name='submit' value="shearch" onclick=" javascript:sendserch();" class="btn fs-5 al float-end">بحث</button>
                            
                            </div>
                        </div>
                        <div id="d1" name="d1"> </div>
                    </form> 
                </div>
            </div>  

            <br>



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
                if (document.getElementById('checkperson').checked){
                    var personid=document.getElementById('personid').value;
                    $("#d1").load("report/report.php",{personid:personid , checkperson:checkperson.value});
                }
                if (document.getElementById('checkvaccinAndCenter').checked){
                    var vaccinByCenterId=document.getElementById('vaccinByCenterId').value;
                    var centerByCenterId=document.getElementById('centerByCenterId').value;
                    var date1111=document.getElementById('date1111').value;
                    var date2222=document.getElementById('date2222').value;
                    $("#d1").load("report/report.php",{date1111:date1111 , date2222:date2222,vaccinByCenterId:vaccinByCenterId,centerByCenterId:centerByCenterId , checkvaccinAndCenter:checkvaccinAndCenter.value});
               }
                if (document.getElementById('checkdate').checked){
                    var date1=document.getElementById('date1').value;
                    var date2=document.getElementById('date2').value;
                    $("#d1").load("report/report.php",{date1:date1 , date2:date2,checkdate:checkdate.value});
                }
                
                 
                if (document.getElementById('checkcenter').checked){
                    var date11=document.getElementById('date11').value;
                    var date22=document.getElementById('date22').value;
                    var centerid=document.getElementById('centerid').value;
                    $("#d1").load("report/report.php",{date11:date11 , date22:date22,centerid:centerid , checkcenter:checkcenter.value});
                } 
                 if (document.getElementById('checkvaccin').checked){
                    var vaccinid=document.getElementById('vaccinid').value;
                    var date111=document.getElementById('date111').value;
                    var date222=document.getElementById('date222').value;
                    $("#d1").load("report/report.php",{date111:date111 , date222:date222,vaccinid:vaccinid , checkvaccin:checkvaccin.value});
                }
          
            }          
        </script>

</body>
</html>
<?php
mysqli_close($con);  
?>
    </body>
</html>