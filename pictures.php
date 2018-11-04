<doctype !HTML>

<html>
<head>
        <link rel="stylesheet" href="wrecks.css" />
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header>
</header>
<h1> Photo </h1>

<?php
$toprint="";
 $name = $_GET['name'];
 $key= $_GET['key'];
 if (isset($_GET['key'])) {
  $conn_id=mysqli_connect('url', 'id', 'password', database) or exit();
$result=mysqli_query($conn_id, "select URL from photos where boatNo=".$key) or exit (); 
  if ($result) {
     
    $record= mysqli_fetch_row($result);
       while($record){
           
          $toprint= $toprint.$name."<br><p><img src=\"".$record[0]."\" alt=\"" .$name."\" /><p>";
         $record= mysqli_fetch_row($result);
         }
    $toprint= $toprint.("</tr>");
       }}
   print($toprint);
    
?>
</body>


<footer>

</footer>
</html>