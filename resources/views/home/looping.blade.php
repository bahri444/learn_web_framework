<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    $i = 1;
    while ($i <= 5) : ?>
        <div class="d-inline">
            <p class="btn btn-info">
                <?= "Laravel";
                $i++; ?></p>
        </div>
    <?php endwhile; ?>
    <br><br>
    <?php
    $j = 1;
    while ($j <= 5) : ?>
        <div class="d-inline">
            <p class="btn btn-danger">
                <?= $j++; ?></p>
        </div>
    <?php endwhile; ?>
</body>

</html>