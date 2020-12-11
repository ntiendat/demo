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
$su0=0;
$su1=0;
$su2=0;
$su3=0;
$su4=0;
$su5=0;
$su6=0;
$su7=0;
$su8=0;
$su9=0;
$su10=0;
if ($result->num_rows > 0) {
    

  while($row = $result->fetch_assoc()) {
    switch ($row['su']) {
        case 0:
            $su0 ++;
           break;
        case 1:
            $su1 ++;
           break;
        case 2:
            $su2 ++;
           break;
        case 3:
            $su3 ++;
           break;
        case 4:
            $su4 ++;
           break;
        case 5:
            $su5 ++;
    break;
        case 6:
            $su6 ++;
           break;
        case 7:
            $su7 ++;
           break;
        case 8:
            $su8 ++;
           break;
        case 9:
            $su9 ++;
    break;
       
        case 10 :
            $su10 ++;
        break;
    }

}}
$ydata = array($su0,$su1,$su2,$su3,$su4,$su5,$su6,$su7,$su8,$su9,$su10);

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