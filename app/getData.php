<?php
    $url = "https://randomuser.me/api/?results=200&inc=gender,name,email,dob,phone";
    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
    $reponse = curl_exec($ch);
    if(curl_errno($ch)){
        echo "Error: " . curl_error($ch);
    }
    curl_close($ch);
    $data = json_decode($reponse, true);
    foreach($data['results'] as $dato){
        $gender = $dato['gender'];
        $pronoun = $dato['name']['title'];
        $name = $dato['name']['first'];
        $lastname = $dato['name']['last'];
        $email = $dato['email'];
        $dob = $dato['dob']['date'];
        $age = $dato['dob']['age'];
        $phone = $dato['phone'];

        echo '<input type="hidden" name="people[]" value=\'{"gender":"'.$gender.'","pronoun":"'.$pronoun.'","name":"'.$name.'"
            ,"lastname":"'.$lastname.'","email":"'.$email.'","dob":"'.$dob.'","age":"'.$age.'","phone":"'.$phone.'"}\'/>';
    }
?>