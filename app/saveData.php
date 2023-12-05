<?php

    include_once "controller.php";
    include_once "model.php";

    $viewBag = [];
    $controller = new Controller();
    
    if(isset($_POST['save']))
    {
        $model = new Model();

    }elseif(isset($_POST['chart'])){
        $model = new Model();
    }


?>