          <?php    
          require '../connection.php';
          
          if (isset($_POST['searchtext'])) {
            if ($_POST['searchtext']=="") {
              echo "no result...";
            }
            else{
            $searchtext =$_POST['searchtext'];
            $na="%".$searchtext."%";
            echo '<script> document.getElementById("work_id").value='. selectmaxid('w_id','work_record').';</script>' ;  
            $sql = "SELECT `w_pv_id`,`p_f_name`,`p_m_name`,`p_l_name` ,`w_id`, `w_date`, `w_next_date`, `w_note`, `w_pollinator_name`, `w_user_id`, `w_dir_id`, (select v_vaccination_name from vaccination where v_id=`w_v_id`)as v_name, w_v_id
             FROM `person`, `work_record`  WHERE (`person`.`p_id` LIKE '$searchtext'||work_record.w_id LIKE '$searchtext'||CONCAT(person.p_f_name,' ',person.p_m_name,' ',person.p_l_name ) LIKE '$na' ||person.p_phone LIKE '$searchtext') && person.p_id=work_record.w_pv_id  ORDER BY v_name";// or die(mysql_error());
          
          $result = mysqli_query($con, $sql);
          if($result)
          {                                             
            echo '<table class="table table-hover  pre-scrollable " id="tb2" name="tb2"> ';
              
              echo '<thead>'.'<tr><th>التسلسل</th>'.'<th>'.'تسلسل الشخص' .'</th>'.'<th>'.'الأسم'.'</th>'.'<th>'.'اسم الأب'.'</th>'.'<th>'.'اسم الجد'.'</th>'.'<th>تاريخ اليوم</th>'.'<th>تاريخ القادم</th>'.'<th>الملاحظات</th>'.'<th>اسم الطبيب</th>'.'<th>المستخدم</th>'.'<th>الدائرة</th>'.'<th>رقم التلقيح</th>'.'<th>اسم التلقيح</th>'.'<th>الجرعة</th>'.'</tr>'.'</thead>';
              $iii=0;
              //$row = mysqli_fetch_assoc($result);
                 while ($row = mysqli_fetch_assoc($result)) {
                  if ($iii!= 0 && $jjj != $row['v_name']) {
                    $iii=0;
                }
                $jjj=$row['v_name'];
                $iii++;
                  echo '<tbody">'.'<tr>'.'<td>'. $row["w_id"].'  '.         '</td>';
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
                  echo '<td>'. $row["w_v_id"].'  '.          '</td>';  
                  echo '<td>'. $row["v_name"].'  '.          '</td>'; 
                  echo '<td>'. $iii.'  '.          '</td>';  
                  echo '</tr>';
               }
              echo '</table>';  
          }else
          {
             echo("Error description: " . $con-> error);
             die('error');
          }
      }     

echo ' <script>   //this script is for set the selected row in input
    function setrowininput1()
    {
        var tb=document.getElementById("tb2");
        for(var i=1; i < tb2.rows.length; i++)
        {
        tb.rows[i].onclick=function()
            {
              //make disabled for add button
                document.getElementById("add").disabled=true;
                              
                document.getElementById("work_id").value=Number(this.cells[0].innerHTML);
                document.getElementById("work_person_id").value=this.cells[1].innerHTML;               
                document.getElementById("work_next_date").value=(this.cells[6].innerHTML).trim();
                document.getElementById("work_note").value=this.cells[7].innerHTML;
                document.getElementById("work_doctor").value=this.cells[8].innerHTML;            
                document.getElementById("work_vaccin_name").value=(this.cells[11].innerHTML).trim();
               
              };
            }
          }  
          setrowininput1();  
         
</script>   ';
}
?>