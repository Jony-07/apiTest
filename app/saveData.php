<?php

    include_once "controller.php";
    include_once "model.php";

    $viewBag = [];
    $controller = new Controller();
    
    if(isset($_POST['save']))
    {
        $model = new Model();
        extract($_POST);
        $savedCounter = 0;
        foreach($people as $person){
            $dato = json_decode($person, true);
            $resultado = $model->saveData($dato);
            if ($resultado > 0) {
                $savedCounter += 1;
            }
        } 
      
        $viewBag["message"] = "$savedCounter datos han sido guardados con exito";
        $controller->render("result", $viewBag);

    }elseif(isset($_POST['list'])){
        $model = new Model();
        $people = $model->getData();
        $viewBag['people'] = $people;
        $controller->render("list",$viewBag);
    }
    elseif(isset($_POST['chart'])){
        $model = new Model();
        $people = $model->getData();
        $viewBag['people'] = $people;
        $controller->render("chart",$viewBag);
    }


?>