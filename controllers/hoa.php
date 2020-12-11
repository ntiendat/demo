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
$hoa0=0;
$hoa1=0;
$hoa2=0;
$hoa3=0;
$hoa4=0;
$hoa5=0;
$hoa6=0;
$hoa7=0;
$hoa8=0;
$hoa9=0;
$hoa10=0;
if ($result->num_rows > 0) {
    

  while($row = $result->fetch_assoc()) {
    switch ($row['hoa']) {
        case 0:
            $hoa0 ++;
           break;
        case 1:
            $hoa1 ++;
           break;
        case 2:
            $hoa2 ++;
           break;
        case 3:
            $hoa3 ++;
           break;
        case 4:
            $hoa4 ++;
           break;
        case 5:
            $hoa5 ++;
    break;
        case 6:
            $hoa6 ++;
           break;
        case 7:
            $hoa7 ++;
           break;
        case 8:
            $hoa8 ++;
           break;
        case 9:
            $hoa9 ++;
    break;
       
        case 10 :
            $hoa10 ++;
        break;
    }

}}
$ydata = array($hoa0,$hoa1,$hoa2,$hoa3,$hoa4,$hoa5,$hoa6,$hoa7,$hoa8,$hoa9,$hoa10);

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