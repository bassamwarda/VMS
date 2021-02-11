          <?php    
          require '../connection.php';
          
          if (isset($_POST['tid'])) {
            $tid2 =$_POST['tid'];
            $sql = "SELECT * FROM `person`,`person_vaccination` WHERE person.p_id=$tid2 && person_vaccination.p_id=$tid2";
          
          $result = mysqli_query($con, $sql);
          if($result)
          {                                             
            echo '<table class="table table-hover  pre-scrollable " id="tb2" name="tb2"> ';
              
              echo '<thead>'.'<tr><th>'.'التسلسل' .'</th>'.'<th>'.'الأسم'.'</th>'.'<th>'.'اسم الأب'.'</th>'.
              '<th>'.'اسم الجد'.'</th>'.'<th>'.'اسم الام'.'</th>'.'<th>'.'اسم اب الأم'.'</th>'.'<th>'.'اسم الجد الأم'.'</th>'.
              '<th>'.'الجنس'.'</th>'.'<th>'.'تاريخ الولادة'.'</th>'.'<th>'.'الجنسية'.'</th>'.'<th>'.'المدينة'.'</th>'.
              '<th>'.'المنطقة'.'</th>'.'<th>'.'الفرع'.'</th>'.'<th>'.'الهاتف'.'</th>'.'<th>'.'المستخدم'.'</th>'.
              '</tr>'.'</thead>';
                $row = mysqli_fetch_assoc($result);
                
                  echo '<tbody">'.'<tr><td>'. $row["p_id"].'  '.         '</td>';
                  echo '<td>'. $row["p_f_name"].'  '.       '</td>';
                  echo '<td>'. $row["p_m_name"].'  '.'</td>';
                  echo '<td>'. $row["p_l_name"].'  '.          '</td>';               

                  echo '<td>'. $row["pv_m_f_name"].'  '.'</td>';
                  echo '<td>'. $row["pv_m_m_name"].'  '.          '</td>';  
                  echo '<td>'. $row["pv_m_l_name"].'  '.       '</td>';
                  
                  echo '<td>'. $row["p_gender"].'  '.       '</td>';
                  echo '<td>'. $row["p_birthday"].'  '.'</td>';
                  echo '<td>'. $row["pv_nationality"].'  '.'</td>';   
                  echo '<td>'. $row["p_city"].'  '.          '</td>';  
                  echo '<td>'. $row["p_region"].'  '.       '</td>';
                  echo '<td>'. $row["p_street"].'  '.'</td>';

                  echo '<td>'. $row["p_phone"].'  '.          '</td>';
                  echo '<td>'. $row["pv_user_id"].'  '.       '</td>';                  
                  echo '</tr>';
               
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
        for(var i=1; i < tb.rows.length; i++)
        {
        tb.rows[1].onclick=function()
            {
              //make disabled for add button
                document.getElementById("add").disabled=true;
                              
                document.getElementById("ch_id").value=Number(this.cells[0].innerHTML);
                document.getElementById("ch_f_name").value=this.cells[1].innerHTML;
                document.getElementById("ch_m_name").value=this.cells[2].innerHTML;
                document.getElementById("ch_l_name").value=this.cells[3].innerHTML;            
                document.getElementById("ch_mf_name").value=this.cells[4].innerHTML;
                document.getElementById("ch_mm_name").value=this.cells[5].innerHTML;
                document.getElementById("ch_ml_name").value=this.cells[6].innerHTML;
                if (this.cells[7].innerHTML==1) {
                  document.getElementById("ch_m_gendar").checked =true;
                }else{
                  document.getElementById("ch_f_gendar").checked =true;
                }                  
                document.getElementById("ch_birthday").value = (this.cells[8].innerHTML).trim();
                document.getElementById("ch_national").value=this.cells[9].innerHTML;
                document.getElementById("ch_city").value=this.cells[10].innerHTML;
                document.getElementById("ch_region").value=this.cells[11].innerHTML;
               document.getElementById("ch_street").value=this.cells[12].innerHTML;
               document.getElementById("ch_phone").value=this.cells[13].innerHTML;
               document.getElementById("ch_user").value=Number(this.cells[14].innerHTML);
               
              };
            }
          }  
          setrowininput1();  
         
</script>   ';
?>