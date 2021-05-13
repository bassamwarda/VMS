          <?php    
          require '../connection.php';
          
          if (isset($_POST['searchtext'])) {
            if ($_POST['searchtext']=="") {
              echo "no result...";
            }
            else{
            $searchtext =$_POST['searchtext'];
            $na="%".$searchtext."%";
            $sql = "SELECT * FROM person,user WHERE (`person`.`p_id` LIKE '$searchtext'||CONCAT(person.p_f_name,' ',person.p_m_name,' ',person.p_l_name ) LIKE '$na' ||person.p_phone LIKE '$searchtext') && person.p_id=user.p_id";// or die(mysql_error());
            $result = mysqli_query($con, $sql);
            $num = mysqli_num_rows($result); 
            if ($num>0) {
              
            
          if($result)
          {                                             
            echo '<table class="table table-hover  pre-scrollable table-responsive " id="tb2" name="tb2"> ';
              
              echo '<thead>'.'<tr><th>'.'التسلسل' .'</th>'.'<th>'.'الأسم'.'</th>'.'<th>'.'اسم الأب'.'</th>'.
              '<th>'.'اسم الجد'.'</th>'.'<th>'.'نوع الوظيفة'.'</th>'.'<th>'.'اسم المستخدم'.'</th>'.'<th>'.'كلمة السر'.'</th>'.
              '<th>'.'الجنس'.'</th>'.'<th>'.'تاريخ الولادة'.'</th>'.'<th>'.'المدينة'.'</th>'.
              '<th>'.'المنطقة'.'</th>'.'<th>'.'الفرع'.'</th>'.'<th>'.'الهاتف'.'</th>'.'<th>'.'الأيميل'.'</th>'.'<th>'.'المستخدم'.'</th>'.
              '<th>'.'الدائرة'.'</th>'.'</tr>'.'</thead>';
                //$row = mysqli_fetch_assoc($result);
                 while ($row = mysqli_fetch_assoc($result)) {
                  echo '<tbody">'.'<tr><td>'. $row["p_id"].'  '.         '</td>';
                  echo '<td>'. $row["p_f_name"].'  '.       '</td>';
                  echo '<td>'. $row["p_m_name"].'  '.'</td>';
                  echo '<td>'. $row["p_l_name"].'  '.          '</td>';               

                  echo '<td>'. $row["u_role_id"].'  '.'</td>';
                  echo '<td>'. $row["u_name"].'  '.          '</td>';  
                  echo '<td>'. $row["u_password"].'  '.       '</td>';
                  
                  echo '<td>'. $row["p_gender"].'  '.       '</td>';
                  echo '<td>'. $row["p_birthday"].'  '.'</td>';
                  echo '<td>'. $row["p_city"].'  '.          '</td>';  
                  echo '<td>'. $row["p_region"].'  '.       '</td>';
                  echo '<td>'. $row["p_street"].'  '.'</td>';
                  
                  echo '<td>'. $row["p_phone"].'  '.          '</td>';
                  echo '<td>'. $row["u_email"].'  '.'</td>';   
                  echo '<td>'. $row["u_id"].'  '.       '</td>';      
                  echo '<td>'. $row["u_director_id"].'  '.       '</td>';               
                  echo '</tr>';
               }
              echo '</table>';  
          }else
          {
             echo("Error description: " . $con-> error);
             die('error');
          }
        }else {
          echo "no result...";
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
                              
                document.getElementById("user_id").value=Number(this.cells[0].innerHTML);
                document.getElementById("user_f_name").value=this.cells[1].innerHTML;
                document.getElementById("user_m_name").value=this.cells[2].innerHTML;
                document.getElementById("user_l_name").value=this.cells[3].innerHTML;            
                document.getElementById("user_role").value=Number(this.cells[4].innerHTML);
                document.getElementById("user_name").value=this.cells[5].innerHTML;
                document.getElementById("user_password").value=this.cells[6].innerHTML;
                if (this.cells[7].innerHTML==1) {
                  document.getElementById("user_m_gendar").checked =true;
                }else{
                  document.getElementById("user_f_gendar").checked =true;
                }                  
                document.getElementById("user_birthday").value = (this.cells[8].innerHTML).trim();
                document.getElementById("user_city").value=this.cells[9].innerHTML;
                document.getElementById("user_region").value=this.cells[10].innerHTML;
                document.getElementById("user_street").value=this.cells[11].innerHTML;
               document.getElementById("user_phone").value=Number(this.cells[12].innerHTML);
               document.getElementById("user_email").value=this.cells[13].innerHTML;
               document.getElementById("user_user").value=Number(this.cells[14].innerHTML);
               
              };
            }
          }  
          setrowininput1();  
         
</script>   ';
}
?>