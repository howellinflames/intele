<?php $sql="SELECT item_name,prd_num FROM tbl_inventory"; 

$sql="SELECT prd_num,item_name FROM tbl_inventory order by item_name"; 

/* You can add order by clause to the sql statement if the names are to be displayed in alphabetical order */

echo "<select name=item value=''>Items</option>"; // list box select command

foreach ($dbo->query($sql) as $row){//Array or records stored in $row

echo "<option value=$row[prd_num]>$row[item_name]</option>"; 

/* Option values are added by looping through the array */ 

}

 echo "</select>";// Closing of list box
?>