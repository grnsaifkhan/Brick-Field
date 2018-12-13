<!DOCTYPE html>
<html>
<style>
    body{
            margin:0px;
            border:0px;
        }
        #header{

            width: 100%;
            height: 120px;
            background: #36474f;
            color:white;
            font-family: helvetica;
        }
        #main{

            width:150px;
            height:550px;
            background:#36474f;
            float: left;
            font-family: helvetica;

        }
        #data{

            height:550px;
            background: #445963;
            color: white;
            font-family: helvetica;
            font-size: 15px;
            overflow: hidden;

        }
        #adminlogo{
            background: white;
            border-radius: 70px;
            height: 60px;


        }
        table {
        border-collapse: collapse;
        width: 100%;
}

        th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        border-right: 1px solid #ddd;
        border-top: 1px solid #ddd;
            }
        ul li{

            padding: 20px;
            border-bottom: 2px solid grey;
            color: #fbfbfb;

        }
        ul li:hover{

            background:#445963;
            color: #fff06e;
        }


</style>

<head><head> <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet"></head></head>
<body>

<div id="header">
    <img src="images/brick_logo.png" alt="adminlogo" id="adminlogo"><br><h3><font color="#ea1c0d">Brick </font>Field</h3>

</div>
<div id="main">

<br><br>
<form target="_blank" action="productorder_buyer.php" method="post" id="insertForm">
  

  <input type="submit" name="product order" value="product order">
</form>
</div>

<div id="data">

<center><h3><font color="#00bcd4">PRODUCT INFORMATION</font></h3></center>


<?php
echo "<table style='border: solid 1px black;'>";
  echo "<tr><th>Id</th><th>Product Type</th><th>Size</th><th>Quantity</tr>";

class TableRows extends RecursiveIteratorIterator { 
     function __construct($it) { 
         parent::__construct($it, self::LEAVES_ONLY); 
     }

     function current() {
         return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
     }

     function beginChildren() { 
         echo "<tr>"; 
     } 

     function endChildren() { 
         echo "</tr>" . "\n";
     } 
} 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectbrickfield";

try {
     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $stmt = $conn->prepare("SELECT id, type,size,quantity FROM productinfo"); 
     $stmt->execute();

     // set the resulting array to associative
     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
         echo $v;
     }
}
catch(PDOException $e) {
     echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";

?>


</div>


</body>
</html>