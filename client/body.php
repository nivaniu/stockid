
<?php
$arr = scandir('.');
echo getcwd();
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

foreach ($arr as &$value) {
$link = $actual_link.$value;
   echo("<a href='".$link."'>".$value . "</a><br>");
}
?>

<style>
    .container-table100{
        -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    font-family: sans-serif;
    box-sizing: border-box;
    max-width: 1366px;
    margin: 0 auto;
    min-height: 100vh;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    padding: 33px 100px;}
    .wrap-table100{
        -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    width: 100%;
    }
    .table100 {
        -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: #fff;
    width: 100%;
    position: relative;
    }
    .contentDiv{
    
    background-color:#eeeeee;
    }
    .sicon{
width:40px;}
.wrap-table100-nextcols{
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    overflow: hidden!important;
    overflow-anchor: none;
    touch-action: auto;
    position: relative;
    width: 100%;
    padding-left: 310px;
    padding-bottom: 28px;
}
.table100-firstcol {
    background-color: #fff;
    z-index: 1000;
    width: 310px;
    top: 0;
    left: 0;
}.ps {
    overflow: hidden!important;
    overflow-anchor: none;
    -ms-overflow-style: none;
    touch-action: auto;
    -ms-touch-action: auto;
}.js-pscroll {
    position: relative;
    overflow: hidden;
}.wrap-table100-nextcols {
    width: 100%;
    overflow: auto;
    padding-left: 310px;
    padding-bottom: 28px;
}.table100.ver1 tr {
    border-bottom: 1px solid #f2f2f2;
}th {
    text-align: left;
}th, td {
    font-weight: unset;
    padding-right: 10px;
}.column1 {
    width: 100%;
    padding-left: 40px;
}.column2 {
    width: 225px;
    padding-left: 55px;
}.column3 {
    width: 205px;
}.column4 {
    width: 195px;
}.column5 {
    width: 235px;
}.column6 {
    width: 170px;
}.column7 {
    width: 330px;
}.column8 {
    width: 305px;
}

.table100 th {
    padding-top: 21px;
    padding-bottom: 21px;
}.table100.ver1 th {
    font-family: Roboto-Bold;
    font-size: 14px;
    color: #333;
    line-height: 1.4;
    text-transform: uppercase;
}.table100.ver1 tr {
    border-bottom: 1px solid #f2f2f2;
}.table100 td {
    padding-top: 16px;
    padding-bottom: 16px;
}.table100.ver1 td {
    font-family: Roboto-Medium;
    font-size: 15px;
    line-height: 1.4;
}.table100.ver1 .table100-firstcol td {
    color: #666;
}


.ps__rail-x {
    display: none;
    opacity: 0;
    transition: background-color .2s linear,opacity .2s linear;
    -webkit-transition: background-color .2s linear,opacity .2s linear;
    height: 15px;
    bottom: 0;
    position: absolute;
}.ps--active-x>.ps__rail-x, .ps--active-y>.ps__rail-y {
    display: block;
    background-color: transparent;
}.table100 .ps__rail-x {
    z-index: 1010;
    height: 6px;
    background-color: transparent;
    opacity: 1!important;
    bottom: 10px;
}.ps__rail-y {
    display: none;
    opacity: 0;
    transition: background-color .2s linear,opacity .2s linear;
    -webkit-transition: background-color .2s linear,opacity .2s linear;
    width: 15px;
    right: 0;
    position: absolute;
}.ps__thumb-x {
    background-color: #aaa;
    border-radius: 6px;
    transition: background-color .2s linear,height .2s ease-in-out;
    -webkit-transition: background-color .2s linear,height .2s ease-in-out;
    height: 6px;
    bottom: 2px;
    position: absolute;
}.table100 .ps__rail-x .ps__thumb-x {
    height: 100%;
    bottom: 0;
    background-color: transparent;
    opacity: 1!important;
}.ps__thumb-y {
    background-color: #aaa;
    border-radius: 6px;
    transition: background-color .2s linear,width .2s ease-in-out;
    -webkit-transition: background-color .2s linear,width .2s ease-in-out;
    width: 6px;
    right: 2px;
    position: absolute;
}
</style>


<div class="contentDiv">
<div class="container-table100">
<div class="wrap-table100">
<div class="table100 ver1">
<div class="table100-firstcol">
<table>
<thead>
<tr class="row100 head">
<th class="cell100 column1">Employees</th>
</tr>
</thead>
<tbody>
<tr class="row100 body">
<td class="cell100 column1"><img class="sicon" src="https://img.icons8.com/cotton/64/000000/folder-invoices--v1.png">
</td>
<td class="cell100 column1">Brandon Green</td></tr>
<tr class="row100 body">
<td class="cell100 column1">Kathy Daniels</td>
</tr>
<tr class="row100 body">
<td class="cell100 column1">Elizabeth Alvarado</td>
</tr>
<tr class="row100 body">
<td class="cell100 column1">Michael Coleman</td>
</tr>
<tr class="row100 body">
<td class="cell100 column1">Jason Cox</td>
</tr>
<tr class="row100 body">
<td class="cell100 column1">Christian Perkins</td>
</tr>
<tr class="row100 body">
<td class="cell100 column1">Emily Wheeler</td>
</tr>
</tbody>
</table>
</div>

</div>
</div>
</div>
</div>
