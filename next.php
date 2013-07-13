<html>
<body>
<?php 
$institute   = $_POST['institute'];
$status      = $_POST['status'];
$affiliation = $_POST['affiliation'];
$event        = $_POST['event'];
$signature1   = $_POST['signature1'];
$designation1 = $_POST['designation1'];
$signature2   = $_POST['signature2'];
$designation2 = $_POST['designation2'];
$signature3 = $_POST['signature3'];
$designation3 = $_POST['designation3'];
$details = array
(
"$institute","$status","$affiliation","$event","$signature1","$designation1","$signature2","$designation2","$signature3","$designation3"
);
$fp = fopen("institute.csv","a");
fputcsv($fp,$details);
fclose($fp);
?>

<form method="post" action="candidate.html">
<input type="submit" value="Enter candidate details manually"><br>c
</form>
</body>
</html>
