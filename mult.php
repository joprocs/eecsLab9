<!doctype html>
 <html>
<body>
 <?php

$table = 100;
echo "Multiplication table: $table <br>";
echo "<table border = \"1\" >";

for ($r= 1; $r <= 100; $r ++)
{
    echo "<tr> \n";
    for( $c=1; $c <=100; $c ++) 
    {
         $l= $c *$r;
         echo "<td> $l </td>\n";
    }
    echo "</tr>";
}
echo "</table>"
?>
</body>

</html>
