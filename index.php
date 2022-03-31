<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <br><br><br>
    <form action="" method="POST">
        <table border="2">
            <tr>
                <th style = "text-align: left">Liter Awal</th>        
                <th style = "text-align: left">Liter Akhir</th>        
            </tr>
            <tr>
                <td>
                    <input type="Number" name="Awal">
                </td>
                <td>
                    <input type="Number" name="Akhir">
                </td>
                <td>
                    <button type="submit" name="Submit">Hitung</button>
                </td>
            </tr>
        </table>
            <?php
                echo "<br><br>";
                if (isset($_POST['Submit'])) {
                    $Awal = $_POST['Awal']; 
                    $Akhir = $_POST['Akhir'];  
                    $Premium = 6450;
                    $Pertalite = 7650;
                    $Pertamax = 12500;
                    $Solar = 5150;

                echo "<table border=1>";

                echo "<th>Liter</th>";
                echo "<th>Premium</th>";
                echo "<th>Pertalite</th>"; 
                echo "<th>Pertamax</th>";
                echo "<th>Solar</th>";

                    for($i=$Awal; $i <=$Akhir; $i++){
                        echo "<tr>";
                        echo "<td>";
                        echo $i;
                        echo "</td>";
                        echo "<td>";
                        echo $Premium*$i;
                        echo "</td>";
                        echo "<td>";
                        echo $Pertalite*$i;
                        echo "</td>";
                        echo "<td>";
                        echo $Pertamax*$i;
                        echo "</td>";
                        echo "<td>";
                        echo $Solar*$i;
                        echo "</td>";
                        echo "</tr>";
                    }

                }
                ?>
                </form>
    </center>
</body>
</html>

