<?php 
header('Content-type: text/plain; charset=utf-8');
// header("content='text/plain; charset=utf-8'");


   include("../lib/connection.php");
   
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_line.php');
require_once ('jpgraph/src/jpgraph_bar.php');
$mnv = array();
// Some (random) data
$sql = "SELECT * FROM nguyenvong";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    

  while($row = $result->fetch_assoc()) {
    $mnv[]=$row['nguyen_vong'];

}}
$cout=0;
$ydata = array();

foreach ($mnv as  $k)
{
    $sql = "SELECT * FROM `thisinh` WHERE `nguyen_vong_1`='$k' or `nguyen_vong_2`='$k' or `nguyen_vong_3`='$k' ";
    $result = $conn->query($sql);


if ($result->num_rows > 0) {
    

  while($row = $result->fetch_assoc()) {
  $cout++;

}
$ydata[]=$cout;
$cout=0;
}



}





// $ydata = array($su0,$su1,$su2,$su3,$su4,$su5,$su6,$su7,$su8,$su9,$su10);

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