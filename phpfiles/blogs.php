<table>
<?php
$string = file_get_contents("files/services.json");

$json_a = json_decode($string,true);
for($i=0;$i< sizeof($json_a);$i++){
echo '<tr>';

    echo '<td>'.$json_a[$i]['title'].'</td><td>'.$json_a[$i]['price'].'</td>';
echo '</tr>';

}

?>
</table>