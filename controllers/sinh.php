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
$sinh0=0;
$sinh1=0;
$sinh2=0;
$sinh3=0;
$sinh4=0;
$sinh5=0;
$sinh6=0;
$sinh7=0;
$sinh8=0;
$sinh9=0;
$sinh10=0;
if ($result->num_rows > 0) {
    

  while($row = $result->fetch_assoc()) {
    switch ($row['sinh']) {
        case 0:
            $sinh0 ++;
           break;
        case 1:
            $sinh1 ++;
           break;
        case 2:
            $sinh2 ++;
           break;
        case 3:
            $sinh3 ++;
           break;
        case 4:
            $sinh4 ++;
           break;
        case 5:
            $sinh5 ++;
    break;
        case 6:
            $sinh6 ++;
           break;
        case 7:
            $sinh7 ++;
           break;
        case 8:
            $sinh8 ++;
           break;
        case 9:
            $sinh9 ++;
    break;
       
        case 10 :
            $sinh10 ++;
        break;
    }

}}
$ydata = array($sinh0,$sinh1,$sinh2,$sinh3,$sinh4,$sinh5,$sinh6,$sinh7,$sinh8,$sinh9,$sinh10);

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