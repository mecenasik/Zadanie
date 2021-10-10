<html>
    <head>
        <meta charset="UTF-8">
        <title>Zadanie - Wyświetlenie z bazy</title>
    </head>
    <body>
<?php
$con=mysqli_connect("localhost","root","","zadanie");

$result = mysqli_query($con,"SELECT * FROM panstwa");

echo "<table border='1'>
<tr><h3> panstwo </h3></tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['panstwo'] . "</td>";
echo "</tr>";
};

mysqli_close($con);
?>
    </body>
</html>