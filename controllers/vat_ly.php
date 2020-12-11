<?php 
header('Content-type: text/plain; charset=utf-8');
// header("content='text/plain; charset=utf-8'");


   include("../lib/connection.php");
   
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_line.php');
require_once ('jpgraph/src/jpgraph_bar.php');
 
// Some (random) data
$sql = "SELECT * FROM thisinh";
$result = $conn->query($sql);
$vat_ly0=0;
$vat_ly1=0;
$vat_ly2=0;
$vat_ly3=0;
$vat_ly4=0;
$vat_ly5=0;
$vat_ly6=0;
$vat_ly7=0;
$vat_ly8=0;
$vat_ly9=0;
$vat_ly10=0;
if ($result->num_rows > 0) {
    

  while($row = $result->fetch_assoc()) {
    switch ($row['vat_ly']) {
        case 0:
            $vat_ly0 ++;
           break;
        case 1:
            $vat_ly1 ++;
           break;
        case 2:
            $vat_ly2 ++;
           break;
        case 3:
            $vat_ly3 ++;
           break;
        case 4:
            $vat_ly4 ++;
           break;
        case 5:
            $vat_ly5 ++;
    break;
        case 6:
            $vat_ly6 ++;
           break;
        case 7:
            $vat_ly7 ++;
           break;
        case 8:
            $vat_ly8 ++;
           break;
        case 9:
            $vat_ly9 ++;
    break;
       
        case 10 :
            $vat_ly10 ++;
        break;
    }

}}
$ydata = array($vat_ly0,$vat_ly1,$vat_ly2,$vat_ly3,$vat_ly4,$vat_ly5,$vat_ly6,$vat_ly7,$vat_ly8,$vat_ly9,$vat_ly10);

function bd($a){
    $ydata = $a;
    $graph = new Graph(300*2,200*2);
$graph->SetScale('intlin');
$graph->SetShadow();
$graph->SetMargin(40,30,20,40);
$bplot = new BarPlot($a);
$bplot->SetFillColor('orange');
$graph->Add($bplot);
$graph->title->Set(' ');
$graph->xaxis->title->Set(' ');
$graph->yaxis->title->Set('');
$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->Stroke();
}
bd($ydata);
?>