<?php require_once 'class.google_graph.php'; ?>

<html>
<head>

</head>
<body>

<?php

for($i=0;$i<40;$i++):
	$data[] = rand(1,1000);
endfor;

$g = new graph();
$g->data = $data;
$g->opts = array('w'=>500,'h'=>100);
#$g->areaColors = 'D,ff0000,0,0,5';

echo $g->render();

?>

</body>
</html>