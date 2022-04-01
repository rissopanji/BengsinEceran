<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10120729_Rissopan Panji Prayogi</title>

    <!--CSS -->
    <link rel="stylesheet" type="text/css" href="./Style.css">
</head>
<body>
    <center>
    <h2>Daftar Harga BBM</h2>
    <h4 style="color: red;">10120729_Rissopan Panji Prayogi</h4>
    <br>
    <form action="" method="POST">
        <table>

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
                    <button type="submit" name="Submit">View</button>
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

                echo "<table>";

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
                        echo "Rp ";
                        echo $Premium*$i;
                        echo "</td>";
                        echo "<td>";
                        echo "Rp ";
                        echo $Pertalite*$i;
                        echo "</td>";
                        echo "<td>";
                        echo "Rp ";
                        echo $Pertamax*$i;
                        echo "</td>";
                        echo "<td>";
                        echo "Rp ";
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