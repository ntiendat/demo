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
$GDCD0=0;
$GDCD1=0;
$GDCD2=0;
$GDCD3=0;
$GDCD4=0;
$GDCD5=0;
$GDCD6=0;
$GDCD7=0;
$GDCD8=0;
$GDCD9=0;
$GDCD10=0;
if ($result->num_rows > 0) {
    

  while($row = $result->fetch_assoc()) {
    switch ($row['GDCD']) {
        case 0:
            $GDCD0 ++;
           break;
        case 1:
            $GDCD1 ++;
           break;
        case 2:
            $GDCD2 ++;
           break;
        case 3:
            $GDCD3 ++;
           break;
        case 4:
            $GDCD4 ++;
           break;
        case 5:
            $GDCD5 ++;
    break;
        case 6:
            $GDCD6 ++;
           break;
        case 7:
            $GDCD7 ++;
           break;
        case 8:
            $GDCD8 ++;
           break;
        case 9:
            $GDCD9 ++;
    break;
       
        case 10 :
            $GDCD10 ++;
        break;
    }

}}
$ydata = array($GDCD0,$GDCD1,$GDCD2,$GDCD3,$GDCD4,$GDCD5,$GDCD6,$GDCD7,$GDCD8,$GDCD9,$GDCD10);

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