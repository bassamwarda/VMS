
<?php 
	 if ($_POST['searchtext'] > 0 && $_POST['searchtext']!="" ) {
	   
	 require '../connection.php'; 
 ?>
 <div id="d2">



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
      <h1 style="text-align:center;">معلوات المتلقح</h1>
        </div>
   </div>
      <hr><br>
<?php      
  $word=trim($_POST['searchtext']);
    $sql="SELECT `p_f_name`, `p_m_name`, `p_l_name` FROM `person` where p_id like '%$word'";	
    $result = mysqli_query($con, $sql);   
    $num=mysqli_num_rows($result);
	 if($num > 0)
	 {
     $row = mysqli_fetch_assoc($result);
	    echo '<div id="d1" name="d1" dir="rtl"> <h3>اسم الشخص:  '.$row["p_f_name"].' '.$row["p_m_name"].' '.$row["p_l_name"].'<h3></div>';
	 
	 
	 
	 //===============================================================
	  $sql1="SELECT `v_vaccination_name`, CONCAT(directoration.dir_sector_name,' ' , directoration.dir_directorate_name,' ' , directoration.dir_center_name ) as 'director',
                  `w_date`, `w_next_date`, `w_pollinator_name` FROM `vaccination`,`work_record`,directoration WHERE 
                  work_record.w_pv_id='$word' && work_record.w_v_id=vaccination.v_id && work_record.w_dir_id=directoration.dir_id ORDER BY vaccination.v_vaccination_name";	
    $result1 = mysqli_query($con, $sql1);
    // Associative array
	 if($result1)
	 {  
		  echo '<table dir="rtl" class="table table-striped table-hover">';
      echo '<thead dir="rtl">
            <tr>
              <th>نوع التلقيح</th>
              <th>الجرعة</th>
              <th>تاريخ التلقيح</th>
              <th>تاريخ القادم</th>
              <th>أسم الملقح</th>
              <th>أسم المركز</th>
            

            </tr>
          </thead>
          <tbody dir="rtl">';
          $iii=0;  
          
          while ($row = mysqli_fetch_assoc($result1)) {
            if ($iii!= 0 && $jjj != $row['v_vaccination_name']) {
                $iii=0;
            }
            $jjj=$row['v_vaccination_name'];
            $iii++;
            
            echo '<tr>';
                echo '<td>'.$row['v_vaccination_name'].' '.' </td>';
                echo '<td>'.$iii.' </td>';
                echo '<td>'.$row['w_date'].' '.' </td>';
                echo '<td>'.$row['w_next_date'].' '.' </td>';
                echo '<td>'.$row['w_pollinator_name'].' '.' </td>';
              echo '<td>'.$row['director'].' </td>';
              echo '</tr>';
              }
            echo'</tbody>
          </table>';	 
   }
  }
  else{
    echo '<div id="d1" name="d1" dir="rtl"> <h3>اسم الشخص:  لا يوجد<h3></div>';
  }
  }
  //mysqli_close($con);
  //header("location: vaccinated_person_info")
  ?>
  </div>
   <center>
      <input type="button"class="btn btn-lg btn-block btn-info" onclick="printDiv('d2')" value="طباعة" />
   </center>
