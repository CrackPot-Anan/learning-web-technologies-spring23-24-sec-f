<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
    width: 700px;
        }
    table{
    margin-left: 200px;
    margin-top: 40px;
}
</style>
</head>
<body>
<table>
    <tr>
        <th>
            <?php
                for($i=0; $i<3; $i++){
                    
                    for($j = 0; $j <= $i; $j++)
                    {
                        echo "*"."\n";
                    }
                    echo "\n";
                 }
                echo "\n";
            ?>
        </th>
        <th>
            <?php
                for($i=0; $i < 3; $i++){
    
                for($j = 0; $j < 3 - $i; $j++)
                {
                    echo "" .$j+1;
                 }
             echo "\n";
            }
            echo "\n";
            ?>
        </th>
        <th>
            <?php
                for($i=0; $i<3; $i++){
    
                    for($j = 0; $j <= $i; $j++)
                    {
                        echo "A ".+ $j;
                    }
                echo "\n";
            }

            ?>
        </th>

    </tr>    
</table>
    
</body>
</html>