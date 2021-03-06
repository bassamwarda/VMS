<?php 
	 require '../connection.php'; 
 ?>
 
 <div id="d2" name="d2">
    <br>
    <div dir="rtl">
      <div class="col-sm-4 "style="display: inline-block;float: right;">
        <h3 style="text-align:right; margin-top:1%;">حكومة اقليم كوردستان العراق</h3>
      <h3 style="text-align:right; margin-top: 1%;">وزارة الصحة</h3>
      </div>  
      <div class="col-sm-4 "style="display: inline-block;float: left;">
      <img src="assets\img\logo\logo.png"width="80px"height="80px" alt="logo">
      </div>
      <br>
      <div class="col-sm-4 "style="display: inline-block; text-align: center;">
      <h1 style="text-align:center;">تقرير عام</h1>
        </div>
   </div>
      <hr><br>
      <?php      
      // if(isset($_POST['date1'])&&isset($_POST['date2']))
      // {
        
        $sql1="";
        if (isset($_POST['checkdate'])) {
            $date1=$_POST["date1"];
            $date2=$_POST["date2"];
            $sql1="SELECT `w_id`, `w_date`, `w_next_date`, `w_pollinator_name`,
            (SELECT CONCAT(directoration.dir_sector_name,' ',directoration.dir_directorate_name,' ',
            directoration.dir_center_name) FROM directoration WHERE directoration.dir_id= `w_dir_id`)AS'dir_name' ,
            (SELECT vaccination.v_vaccination_name FROM vaccination WHERE vaccination.v_id=`w_v_id`)as 'v_vaccination_name',
            `person`.`p_id`, `pv_nationality`, CONCAT(`pv_m_f_name`,' ', `pv_m_m_name`,' ', `pv_m_l_name`)as 
            'mother_name',  CONCAT(`p_f_name`,' ', `p_m_name`,' ', `p_l_name`)as 'person_name',
              `p_birthday`, `p_gender`, `p_phone`, CONCAT(`p_city`,' ', `p_region`,' ', `p_street`)as 'addres' FROM `person` JOIN 
              `work_record`ON `person`.`p_id`=`work_record`.`w_pv_id`JOIN `person_vaccination` ON
              `work_record`.`w_pv_id`=`person_vaccination`.`p_id`  and `work_record`.`w_date` BETWEEN '$date1' and '$date2' ";    
        }
        else if (isset($_POST['checkperson'])) {
          $personid =trim($_POST['personid']);
          $sql1="SELECT `w_id`, `w_date`, `w_next_date`, `w_pollinator_name`,
          (SELECT CONCAT(directoration.dir_sector_name,' ',directoration.dir_directorate_name,' ',
          directoration.dir_center_name) FROM directoration WHERE directoration.dir_id= `w_dir_id`)AS'dir_name' ,
          (SELECT vaccination.v_vaccination_name FROM vaccination WHERE vaccination.v_id=`w_v_id`)as 'v_vaccination_name',
          `person`.`p_id`, `pv_nationality`, CONCAT(`pv_m_f_name`,' ', `pv_m_m_name`,' ', `pv_m_l_name`)as 
          'mother_name',  CONCAT(`p_f_name`,' ', `p_m_name`,' ', `p_l_name`)as 'person_name',
            `p_birthday`, `p_gender`, `p_phone`, CONCAT(`p_city`,' ', `p_region`,' ', `p_street`)as 'addres' FROM `person` JOIN 
            `work_record`ON `person`.`p_id`=`work_record`.`w_pv_id`JOIN `person_vaccination` ON
            `work_record`.`w_pv_id`=`person_vaccination`.`p_id`  and `work_record`.`w_pv_id`='$personid'";
        }
        else if (isset($_POST['checkcenter'])) {
          $centerid =trim($_POST["centerid"]);
          $date11=$_POST["date11"];
          $date22=$_POST["date22"];
          $sql1="SELECT `w_id`, `w_date`, `w_next_date`, `w_pollinator_name`,
          (SELECT CONCAT(directoration.dir_sector_name,' ',directoration.dir_directorate_name,' ',
          directoration.dir_center_name) FROM directoration WHERE directoration.dir_id= `w_dir_id`)AS'dir_name' ,
          (SELECT vaccination.v_vaccination_name FROM vaccination WHERE vaccination.v_id=`w_v_id`)as 'v_vaccination_name',
          `person`.`p_id`, `pv_nationality`, CONCAT(`pv_m_f_name`,' ', `pv_m_m_name`,' ', `pv_m_l_name`)as 
          'mother_name',  CONCAT(`p_f_name`,' ', `p_m_name`,' ', `p_l_name`)as 'person_name',
            `p_birthday`, `p_gender`, `p_phone`, CONCAT(`p_city`,' ', `p_region`,' ', `p_street`)as 'addres' FROM `person` JOIN 
            `work_record`ON `person`.`p_id`=`work_record`.`w_pv_id`JOIN `person_vaccination` ON
            `work_record`.`w_pv_id`=`person_vaccination`.`p_id`  and `work_record`.`w_dir_id`='$centerid' and  `work_record`.`w_date` BETWEEN '$date11' and '$date22' ";
      }
      else if (isset($_POST['checkvaccin'])) {
        $vaccinid =trim($_POST["vaccinid"]);
        $date111=$_POST["date111"];
        $date222=$_POST["date222"];
        $sql1="SELECT `w_id`, `w_date`, `w_next_date`, `w_pollinator_name`,
        (SELECT CONCAT(directoration.dir_sector_name,' ',directoration.dir_directorate_name,' ',
        directoration.dir_center_name) FROM directoration WHERE directoration.dir_id= `w_dir_id`)AS'dir_name' ,
        (SELECT vaccination.v_vaccination_name FROM vaccination WHERE vaccination.v_id=`w_v_id`)as 'v_vaccination_name',
        `person`.`p_id`, `pv_nationality`, CONCAT(`pv_m_f_name`,' ', `pv_m_m_name`,' ', `pv_m_l_name`)as 
        'mother_name',  CONCAT(`p_f_name`,' ', `p_m_name`,' ', `p_l_name`)as 'person_name',
          `p_birthday`, `p_gender`, `p_phone`, CONCAT(`p_city`,' ', `p_region`,' ', `p_street`)as 'addres' FROM `person` JOIN 
          `work_record`ON `person`.`p_id`=`work_record`.`w_pv_id`JOIN `person_vaccination` ON
          `work_record`.`w_pv_id`=`person_vaccination`.`p_id`  and `work_record`.`w_v_id`='$vaccinid' and  `work_record`.`w_date` BETWEEN '$date111' and '$date222' ";
    }
    else if (isset($_POST['checkvaccinAndCenter'])) {
      $centerByCenterId =trim($_POST["centerByCenterId"]);
      $vaccinByCenterId =trim($_POST["vaccinByCenterId"]);
      $date1111=$_POST["date1111"];
      $date2222=$_POST["date2222"];
      $sql1="SELECT `w_id`, `w_date`, `w_next_date`, `w_pollinator_name`,
      (SELECT CONCAT(directoration.dir_sector_name,' ',directoration.dir_directorate_name,' ',
      directoration.dir_center_name) FROM directoration WHERE directoration.dir_id= `w_dir_id`)AS'dir_name' ,
      (SELECT vaccination.v_vaccination_name FROM vaccination WHERE vaccination.v_id=`w_v_id`)as 'v_vaccination_name',
      `person`.`p_id`, `pv_nationality`, CONCAT(`pv_m_f_name`,' ', `pv_m_m_name`,' ', `pv_m_l_name`)as 
      'mother_name',  CONCAT(`p_f_name`,' ', `p_m_name`,' ', `p_l_name`)as 'person_name',
        `p_birthday`, `p_gender`, `p_phone`, CONCAT(`p_city`,' ', `p_region`,' ', `p_street`)as 'addres' FROM `person` JOIN 
        `work_record`ON `person`.`p_id`=`work_record`.`w_pv_id`JOIN `person_vaccination` ON
        `work_record`.`w_pv_id`=`person_vaccination`.`p_id` and `work_record`.`w_dir_id`='$centerByCenterId' and `work_record`.`w_v_id`='$vaccinByCenterId' and  `work_record`.`w_date` BETWEEN '$date1111' and '$date2222' ";
  }
        $result1 = mysqli_query($con, $sql1);
        if($result1)
          {     
              echo '<table  class="table table-striped table-hover  table-responsive" id="tb2" name="tb2"style="height: 400px;width:100%">';
              echo '<thead >
                    <tr>
                      <th>ت.التسجيل</th>
                      <th>ت.الشخص</th>
                      <th> الاسم الثلاثي</th>   
                      <th>المواليد</th>
                      <th>الجنس</th>
                      <th>اسم الام الثلاثي</th>
                      <th>الهاتف</th>
                      <th>الجنسية</th>
                      <th>العنوان</th>
                      <th> التلقيح</th>
                      <th>تاريخ التلقيح</th>
                      <th>تاريخ القادم</th>
                      <th> اسم الطبيب</th>
                      <th> مركز</th>        
                    </tr>
                  </thead>
                  <tbody >';
                  while ($row = mysqli_fetch_assoc($result1)) {
                    echo '<tr>';
                    echo '<td>'.$row['w_id'].' '.' </td>';
                    echo '<td>'.$row['p_id'].' '.' </td>';
                    echo '<td>'.$row['person_name'].' '.' </td>';
                    echo '<td>'.$row['p_birthday'].' '.' </td>';
                    echo '<td>'.$row['p_gender'].' '.' </td>';
                    echo '<td>'.$row['mother_name'].' '.' </td>';
                    echo '<td>'.$row['p_phone'].' '.' </td>';
                    echo '<td>'.$row['pv_nationality'].' '.' </td>';
                    echo '<td>'.$row['addres'].' '.' </td>';
                    echo '<td>'.$row['v_vaccination_name'].' '.' </td>';
                    echo '<td>'.$row['w_date'].' '.' </td>';
                    echo '<td>'.$row['w_next_date'].' '.' </td>';
                    echo '<td>'.$row['w_pollinator_name'].' '.' </td>';
                    echo '<td>'.$row['dir_name'].' '.' </td>';                    
                    echo '<tr>';
                  }
                  echo'</tbody></table>';	 
          }
        // }
        else{
          echo '<div id="d1" name="d1" dir="rtl"> <h3>اسم الشخص:  لا يوجد<h3></div>';
        }
          //mysqli_close($con);
          //header("location: vaccinated_person_info")
          ?>
  </div>
  <center>
      <input type="button"class="btn btn-lg btn-block btn-info" onclick="printDiv('d2')" value="طباعة" />
   </center>
