<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 3</title>
    <style>
        table {
            width: 270px;
            border-collapse: collapse;
        }
        td {
            width: 30px;
            height: 30px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
    <h2>Chess Board</h2>
    <table border="1">
        <?php
        for ($row = 0; $row < 8; $row++) {
            echo "<tr>";
            for ($col = 0; $col < 8; $col++) {
                $colorClass = ($row + $col) % 2 == 0 ? 'white' : 'black';
                echo "<td class='$colorClass'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
