<?php

echo "<h1 style='background-color:red ; color:blue;'>hii</h1>";
// print_r($_REQUEST);
echo "<table border='1'>";
echo "<tr>
    <th>key</th>
    <th>valuse</th>
</tr>";
foreach($_REQUEST as $data=>$val){
echo "<tr>
<td>".$data."</td>
<td>".$val."</td>
</tr>";
    // echo($data." : ".$val."<br>");
}
echo "</table>";
echo "<h1 style = 'background-color:red; color:pink;'>my name is : </h1";

?>