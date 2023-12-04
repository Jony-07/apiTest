<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge</title>
    <?php include_once "resources.php";?>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-3 pt-3">
                <form action="#" method="post" role="form">
                    <div class="title text-center">
                        <h3 class="display-4">API Challenge</h3>
                    </div>
                    <div class="col-md-12 mt-3 pt-3">
                        <?php include_once "./app/getData.php"; ?>
                        <input type="submit" value="Save" name="save" id="save"
                            class="btn btn-outline-success col-md-3 offset-3">
                        <input type="submit" value="Chart" name="chart" id="chart"
                            class="btn btn-outline-primary col-md-3">
                    </div>
                </form>
            </div>

        </div>
        <?php
       /**
         <div class="row mt-3">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Lastname</th>
                        <th class="text-center">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($people))
                  {
                    foreach($people as $person)
                    {
                        ?>
        <tr>
            <td class="text-center"><?=$person['name']?></td>
            <td class="text-center"><?=$person['lastname']?></td>
            <td class="text-center"><?=$person['email']?></td>
        </tr>
        <?php
                     }}
                    ?>
        </tbody>
        </table>
    </div>
    */

    ?>
    </div>
</body>

</html>