<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>SCP JSON-PHP</title>
</head>

<body class="container">
    <?php
    //Variables that will hold our JSON content
    $scp = json_decode(file_get_contents('scp.json'));

    //Loop throu $cars using foreach
    foreach ($scp as $display) {
        echo "
             <div class = 'card card-body shadow'>
                <h2 class = 'card-title'>$display->SCP_subject</h2>
                <h2 class = 'card-title'>$display->class</h2>
                <h2 class = 'card-title'>$display->contaiment</h2>
                <p class = 'card-text' id='read'><strong>Model: </strong>$display->paragraph_1</p>
                <h2 class = 'card-title'>$display->description</h2>
                <p class = 'card-text'><strong>Engine: </strong>$display->paragraph_2</p>
                <img class = 'card-img-top'> $display->image
                <h2 class = 'card-title'>$display->reference</h2>
                <p class = 'card-text'><strong>Engine: </strong>$display->paragraph_3</p>
                <p><button class='btn btn-danger' id='$display->id(1)'>Read SCP</button></p>
             </div>
         ";
    }


    ?>

    <script src="speak.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>