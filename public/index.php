<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge</title>
    <style type="text/css">
    body {
        background: linear-gradient(90.21deg,
                rgba(170, 54, 124, 0.5) -5.91%,
                rgba(74, 47, 189, 0.5) 111.58%);

        background-size: cover;
    }
    </style>
    <?php include_once "resources.php";?>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-3 pt-3">
                <form action="http://localhost/apitest/app/savedata.php" method="post" role="form">
                    <div class="title text-center">
                        <h3 class="display-4">API Challenge</h3>
                    </div>
                    <div class="col-md-12 mt-3 pt-3">
                        <?php include_once "./app/getData.php"; ?>
                        <input type="submit" value="Save" name="save" id="save"
                            class="btn btn-success col-md-3 offset-1">
                        <input type="submit" value="List" name="list" id="list" class="btn btn-primary col-md-3">
                        <input type="submit" value="Chart" name="chart" id="chart" class="btn btn-warning col-md-3">
                    </div>
                </form>
            </div>

        </div>
        <?php

    ?>
    </div>
</body>

</html>