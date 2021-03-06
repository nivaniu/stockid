<?php
$_HOME_PATH = "/home/tp-home009/nivaniu/public_html/pt/";
$_CLIENT_PATH = $_HOME_PATH."client/";

function human_filesize($bytes, $decimals = 2) {
    $size = array('B','kB','MB','GB','TB','PB','EB','ZB','YB');
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
}
function ina($str, $filename){
    $actual_link = str_replace ("index.php", "", (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[SERVER_NAME]$_SERVER[PHP_SELF]$filename");
    $a = "<a href='";
    if (filetype($filename)!="dir"){
        $a = "<a target='_blank' download href='";
    }
    return $a.$actual_link."'>".$str . "</a>";
}
function da($str, $filename){

    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[SERVER_NAME]$_SERVER[PHP_SELF]?delete=$filename";
    $a = "<a href='";
    if (filetype($filename)!="dir"){
        $a = "<a target='_blank' href='";
    }
    return $a.$actual_link."'>".$str . "</a>";

}
function getRow($nb, $filename){
    $date = date("F d Y H:i:s.", filectime($filename));
    if (filetype($filename) == "dir"){
        $row = "<tr><th scope='row'>".ina($nb,$filename)."</th><td>".ina(filetype($filename), $filename)."</td><td>".ina($filename."<br>".makeDateCreated($date),$filename)."</td><td>".ina(human_filesize(filesize($filename),0),$filename)."</td>";
        if($filename != "..") {$row = $row."<td>".da("delete", $filename)."</td></tr>";}
        return $row;
    }
    return "<tr>
<th scope='row'>".$nb."</th>
<td>".filetype($filename)."</td>
<td>".$filename."<br>".makeDateCreated($date)."</td>
<td>".human_filesize(filesize($filename),0)."</td>
<td>".ina("download",$filename)." | ".da("delete", $filename)."</td></tr>";

}
function makeDateCreated($date){
    return "Created ".$date;
}
?>