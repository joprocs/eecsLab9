<?php
echo "<link rel='stylesheet' href='style.css'>";
echo "<body class ='receipt'>";
echo "Welcome" . $_POST["email"] . "!<br> Your password is " .$_POST["pass"] . "<br>";


$items = ["Yellow Stripped Cotton Towel", "Clear Rainbow Beach Ball","Blue House with Legs"];
$prices = [35.00,29.00,1000000.00];
$receiptheaders= ["", "Quantity", "Unit Cost","Subtotal"];
$sum= 0;
$ship = "";

echo "<h3>Receipt</h3>";
echo "<table border = \"1\" ";

for($i= 0; $i< 6; $i++)
{
    echo "<tr>"; //9 rows
    for($j=0; $j<4; $j++) 
    {
       if ($i == 0)   //case i==0
       {
           echo "<th>" . $receiptheaders[$j]. "</th>"; //row headers
       } 
       else if ($i == 1) //case i==1
       {
            if ($j == 0) //inside case of j==0
            {
                echo "<th>" .$items[0]. "</th>";
            }
            else if($j ==1) // inside case of j==1
            {
                echo "<td>" .$_POST["bt1"]. "<td>";
            }
            else if ($j == 2) //inside case of j==2
            {
                echo "<td>" . number_format($prices[0],2). "</td>";
            }
            else if ($j==3)
            {
                echo "<td>" . number_format($_POST["bt1"] * $prices[0],2). "</td";
                $sum = $sum + $_POST["bt1"] * $prices[0];
            }
       }
       else if ($i == 2) //case i==2
       {
            if ($j == 0) //inside case of j==0
            {
                echo "<th>" .$items[1]. "</th>";
            }
            else if($j ==1) // inside case of j==1
            {
                echo "<td>" .$_POST["bb1"]. "<td>";
            }
            else if ($j == 2) //inside case of j==2
            {
                echo "<td>" . number_format($prices[1],2). "</td>";
            }
            else if ($j==3)
            {
                echo "<td>" . number_format($_POST["bb1"] * $prices[1],2). "</td";
                $sum = $sum + $_POST["bb1"] * $prices[1];
            }
       
        }
        else if ($i == 3) //case i==3
        {
            if ($j == 0) //inside case of j==0
            {
                echo "<th>" .$items[2]. "</th>";
            }
            else if($j ==1) // inside case of j==1
            {
                echo "<td>" .$_POST["bh1"]. "<td>";
            }
            else if ($j == 2) //inside case of j==2
            {
                echo "<td>" . number_format($prices[2],2). "</td>";
            }
            else if ($j==3)
            {
                echo "<td>" . number_format($_POST["bh1"] * $prices[2],2,".",","). "</td";
                $sum = $sum + $_POST["bh1"] * $prices[2];
            }
       
        }
        else if ($i== 4) //shipping
        {
            if ($j == 0) //inside case of j==0
            {
                echo "<th> Shipping </th>";
            }
            else if ($j == 1) //either overnite, 3day,7day
            {
                if ($_POST["ship7"] == 0)
                {
                    $ship = "Free";
                }
                else if ($_POST["ship3"] == 5)
                {
                    $ship = "Three Day";
                }
                else if ($_POST["ship1"] == 50)
                {
                    $ship = "Overnight";
                }
                echo "<td colspan=2>" . $ship . "</td>";
            }
            else if ($j == 2)
            {
                echo "";
            }
            else if ($j == 3)
            {
                echo "<td>" . number_format($_POST["freeship"]). "</td>";
                $sum = $sum + $_POST["freeship"];
            }

        }
        else if ($i== 5) //total
        {
            if ($j==0)
            {
                echo "<th colspan=3> Total Cost</th>";
            }
           if ($j == 3)
            {
                echo "<td>" .number_format($sum, 2). "<td>";
            }
        }
}
echo "</tr>";
}

echo "</table"










?>