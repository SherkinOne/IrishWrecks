<?php
 $toprint="<table alt=\"Table of Wrecks\" ><tr><th colspan=\"2\"> Name </th><th colspan=\"2\"> Year</th> <th colspan=\"3\">County </th></tr>";
 $type = $_POST['call'];
 $name = $_POST['name'];
 if (isset($_POST['call'])) {
   
$conn_id=mysqli_connect('url', 'id', 'password', database) or exit();
if ($type=="ship"){
    $result=mysqli_query($conn_id, "select name, year, county  from Wrecks where type=\"".$type."\"") or exit (); }
    else {  
        $result=mysqli_query($conn_id, "select name, year, county  from Wrecks where name=\"".$name."\"") or exit (); 
    }

if ($result) {

 $record=mysqli_fetch_row($result);
    while($record){
        $toprint= $toprint.("<tr>");
// if hascphotos then link
       
      for ( $i=0; $i<3; $i++){
            $toprint= $toprint.("<td>");
            $toprint= $toprint.($record[$i]);
            $toprint=$toprint. ("</td>");
      }
$toprint=$toprint.("</tr>");
  $record=mysqli_fetch_row($result);
    }

$toprint=$toprint."</table>";
mysqli_close($conn_id);
}
else {$toprint="<p> Could not connect to the database </p>";}

print($toprint);
 }
?>
