<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/style.css">
    <?php
    include_once "resources.php";
    ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row pt-2 mt-2">
            <div class="col-md-4 offset-4">
                <h3>Datos extraidos de la API</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="http://localhost/apitest/" class="btn btn-warning btn-block col-md-4">Return</a>
            </div>
        </div>
        <div class="row mt-4 pt-3">
            <table id="people" class="table table-bordered mt-3 pt-3">
                <thead class="Te" style="background-color: #FF8B8B">
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Lastname</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Age</th>
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
                        <td class="text-center"><?=$person['age']?></td>
                    </tr>
                    <?php
                     }}
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script>
$(document).ready(function() {
    $('#people').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    });
});
</script>

</html>