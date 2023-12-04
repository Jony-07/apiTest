<?php

    class Controller{
    
        function render($view,$viewBag = array()) {
        
            $file = "../public/".$view.".php";
            if(is_file($file)){
                extract($viewBag);
                ob_start();
                require($file);
                $content = ob_get_contents();
                ob_end_clean();
                echo $content;
            }
            else{
                echo "El archivo ".$view." no existe";
            }
        }
        
    }
    
?>