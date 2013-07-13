<html>
<body>
<?php
$sal = $_POST['sal'];
$fn = $_POST['fname'];
$mn = $_POST['mname'];
$ln = $_POST['lname'];
$institute = $_POST['institute'];
$city = $_POST['city'];
$photo= $_FILES["file"]["name"];

move_uploaded_file($_FILES["file"]["tmp_name"],$_FILES["file"]["name"]);

$list= array
(
"$sal","$fn","$mn","$ln","$institute","$city","$photo"
);
$fp = fopen("formdata.csv","a"); // $fp is now the file pointer to file $filename
fputcsv($fp,$list);
fclose($fp);

$command = exec('pdflatex new.tex');
echo $command;
?>

<form action="new.pdf" method="post">
<input type="submit" value="view pdf">
</form>
</body>
</html>
