<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>02loginTest.php</title>
    <style>
            .table{
                width: 200px;
                margin: auto;
                border: 3px #00baff solid;
            }

            tr, td{
                border: 3px #00baff solid;
            }

    </style>
</head>
<body>

    <?php
        $name="QQ";
        $age="99";
        $addr="Taipei";
    ?>

    <table class="table">
        <tr class="name">
            <td>Name</td>
            <td><?=$name?></td>
        </tr>
        <tr class="age">
            <td>Age</td>
            <td><?=$age?></td>
        </tr>
        <tr class="addr">
            <td>Address</td>
            <td><?=$addr?></td>
        </tr>
    </table>

</body>
</html>