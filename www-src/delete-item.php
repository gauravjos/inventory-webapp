<html>
<head>
  <title></title>
</head>
<body>
<?php
	include("site_title.php");
	include("admin-auth.php");
	// database is now selected and connected - index is $conn
?>
<h1><?php echo $site_title; ?></h1>
<hr>
<?php
    $item_id = $_GET["item_id"];
    $deleteitemquery = "DELETE FROM item WHERE id = '".$item_id."';";
    if(mysql_query($deleteitemquery, $conn))
    {
    	echo "Item successfully deleted.";
    }
    else
    {
    	echo "Error, item was not deleted.";
    }
    echo "<br><a href='view-items.php'>Back to item list</a>";
?>
</body>
</html>
