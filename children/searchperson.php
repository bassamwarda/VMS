          <?php    
          require '../connection.php';
          
          if (isset($_POST['searchtext'])) {
            if ($_POST['searchtext']=="") {
              echo "no result...";
            }
            else{
            $searchtext =$_POST['searchtext'];
            $na="%".$searchtext."%";
            $sql = "SELECT * FROM person,person_vaccination WHERE (`person`.`p_id` LIKE '$searchtext'||CONCAT(person.p_f_name,' ',person.p_m_name,' ',person.p_l_name ) LIKE '$na' ||person.p_phone LIKE '$searchtext') && person.p_id=person_vaccination.p_id";// or die(mysql_error());
          
          $result = mysqli_query($con, $sql);
          if($result)
          {                                             
            echo '<table class="table table-hover pre-scrollable " id="tb2" name="tb2"> ';
              
              echo '<thead>'.'<tr><th>'.'تسلسل' .'</th>'.'<th>'.'أسم'.'</th>'.'<th>'.'أسم الأب'.'</th>'.
              '<th>'.'أسم الجد'.'</th>'.'<th>'.'أسم الام'.'</th>'.'<th>'.'أسم اب الأم'.'</th>'.'<th>'.'أسم جد الأم'.'</th>'.
              '<th>'.'جنس'.'</th>'.'<th>'.'تاريخ الولادة'.'</th>'.'<th>'.'جنسية'.'</th>'.'<th>'.'مدينة'.'</th>'.
              '<th>'.'منطقة'.'</th>'.'<th>'.'فرع'.'</th>'.'<th>'.'هاتف'.'</th>'.'<th>'.'مستخدم'.'</th>'.
              '</tr>'.'</thead>';
                //$row = mysqli_fetch_assoc($result);
                 while ($row = mysqli_fetch_assoc($result)) {
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
}
?>