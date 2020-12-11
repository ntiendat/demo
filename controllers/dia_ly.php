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
$dia_ly0=0;
$dia_ly1=0;
$dia_ly2=0;
$dia_ly3=0;
$dia_ly4=0;
$dia_ly5=0;
$dia_ly6=0;
$dia_ly7=0;
$dia_ly8=0;
$dia_ly9=0;
$dia_ly10=0;
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    switch ($row['dia_ly']) {
        case 0:
            $dia_ly0 ++;
           break;
        case 1:
            $dia_ly1 ++;
           break;
        case 2:
            $dia_ly2 ++;
           break;
        case 3:
            $dia_ly3 ++;
           break;
        case 4:
            $dia_ly4 ++;
           break;
        case 5:
            $dia_ly5 ++;
    break;
        case 6:
            $dia_ly6 ++;
           break;
        case 7:
            $dia_ly7 ++;
           break;
        case 8:
            $dia_ly8 ++;
           break;
        case 9:
            $dia_ly9 ++;
    break;
       
        case 10 :
            $dia_ly10 ++;
        break;
    }

}}
$ydata = array($dia_ly0,$dia_ly1,$dia_ly2,$dia_ly3,$dia_ly4,$dia_ly5,$dia_ly6,$dia_ly7,$dia_ly8,$dia_ly9,$dia_ly10);

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