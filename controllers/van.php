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
$van0=0;
$van1=0;
$van2=0;
$van3=0;
$van4=0;
$van5=0;
$van6=0;
$van7=0;
$van8=0;
$van9=0;
$van10=0;
if ($result->num_rows > 0) {
    

  while($row = $result->fetch_assoc()) {
    switch ($row['van']) {
        case 0:
            $van0 ++;
           break;
        case 1:
            $van1 ++;
           break;
        case 2:
            $van2 ++;
           break;
        case 3:
            $van3 ++;
           break;
        case 4:
            $van4 ++;
           break;
        case 5:
            $van5 ++;
    break;
        case 6:
            $van6 ++;
           break;
        case 7:
            $van7 ++;
           break;
        case 8:
            $van8 ++;
           break;
        case 9:
            $van9 ++;
    break;
       
        case 10 :
            $van10 ++;
        break;
    }

}}
$ydata = array($van0,$van1,$van2,$van3,$van4,$van5,$van6,$van7,$van8,$van9,$van10);

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