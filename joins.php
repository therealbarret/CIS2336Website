<?php
error_reporting(0);
require 'connect.php';

$sql = "SELECT * FROM People";
$results = $db->query($sql);

if ($results->num_rows){
    while($rows = $results->fetch_object()){
        
        $countries = $db->query("SELECT * FROM countries WHERE id = {$row->country}");
        $country = $country->fetch_object();
        
        echo "{$row->name} ({$country->name})<br>";
    }
}else {
    echo 'No results';
}
?>