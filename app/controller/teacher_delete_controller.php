<?php
require '../common/connectDB.php';

if(isset($_GET['id']))
{
    $sql = "DELETE FROM teachers WHERE id=".$_GET['id'];
    $conn->exec($sql);
    $_GET['id'] = "";
    
}
// if($_GET['id'] =="") {
//     header("Refresh:0; url=http://localhost:8888/baicuoiki/find_teacher.php"); 
// }

?>
