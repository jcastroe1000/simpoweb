<?php
include "config.php";
//header("Content-Type: application/json; charset=UTF-8");
error_reporting(E_ALL);
$id = 1;
//$st = mysql_real_escape_string($_GET["st"]);
//$sc = mysql_real_escape_string($_GET["sc"]);
//query only by id
if ($id!=null && empty($st) && empty($sc)) {
   
    $result = $mysqli->query("SELECT id_galery,title_galery,short_description,creation_date,modification_date, "
            . "status FROM galery WHERE id_galery = '" . $id . "'");
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        
        $response ['galery'] = array(
            'id_gallery' => $row['id_galery'],
            'title' => $row['title_galery'],
            'description' => $row['short_description'],
            'status' => $row['status'],
            'creation_date' => $row['creation_date'],
            'modification_date' => $row['modification_date'],
            'images' => array(),
        );
    }
    $result2 = $mysqli2->query("SELECT route,title,description from 
        content left join content_galery on content.id_content = content_galery.id_content where 
        content_galery.id_galery = '" . $id . "' order by content.id_content  desc");
    while ($row = $result2->fetch_array(MYSQLI_ASSOC)) {
        $sh_des_im = $row['description'];
        $path= 'php/album/' . $row['route'];
        $partialImage = array(
            'path' =>  $path,
            'title' => $row ['title'],
            'short_description' => $sh_des_im,
            'long_description' => $row['long_description'],
        );
        array_push($response['galery']['images'], $partialImage);
    }
    $json2 = json_encode($response['galery']);
    
}   //query only by id and status
   
    else {
    echo  'no';
}
    
//if () {
//    echo 'las 3';
//} else {
//    
?>