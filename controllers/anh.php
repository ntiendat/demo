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
$anh0=0;
$anh1=0;
$anh2=0;
$anh3=0;
$anh4=0;
$anh5=0;
$anh6=0;
$anh7=0;
$anh8=0;
$anh9=0;
$anh10=0;
if ($result->num_rows > 0) {
    

  while($row = $result->fetch_assoc()) {
    switch ($row['anh']) {
        case 0:
            $anh0 ++;
           break;
        case 1:
            $anh1 ++;
           break;
        case 2:
            $anh2 ++;
           break;
        case 3:
            $anh3 ++;
           break;
        case 4:
            $anh4 ++;
           break;
        case 5:
            $anh5 ++;
    break;
        case 6:
            $anh6 ++;
           break;
        case 7:
            $anh7 ++;
           break;
        case 8:
            $anh8 ++;
           break;
        case 9:
            $anh9 ++;
    break;
       
        case 10 :
            $anh10 ++;
        break;
    }

}}
$ydata = array($anh0,$anh1,$anh2,$anh3,$anh4,$anh5,$anh6,$anh7,$anh8,$anh9,$anh10);

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