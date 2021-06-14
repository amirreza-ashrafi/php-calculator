<?php

    $current_value = 0;
    $input = [];

    function getInputAsString($values){
        $output = "";
        foreach ($values as $value){
            $output .= $value;
        }
        return $output;
    }

    function calculateInput($inputUser){
        $array = [];
        $char = "";
            foreach($inputUser as $num)
            {
                if (is_numeric($num) || $num === "."){
                    $char .= $num;
                }
                elseif (!is_numeric($num)) {
                    if (!empty($char)) {
                        $array[] = $char;
                        $char = "";}
                    $array[] = $num;
                }
            }if (!empty($char)) {
                $array[] = $char;
            }
        $current = 0;
        $action = null;
            for ($i=0; $i <= count($array)-1; $i++){
                if(is_numeric($array[$i])){
                    if($action){
                        if($action === "+"){
                            $current += $array[$i];
                        }elseif ($action === "-"){
                            $current -= $array[$i];
                        }elseif ($action === "X"){
                            $current *= $array[$i];
                        }elseif ($action === "/"){
                            $current /= $array[$i];
                        }
                        $action = null;
                    }
                    else{
                        if ($current === 0){
                            $current = $array[$i];
                        }
                    }
                }else{
                    $action = $array[$i];
                }
            }
        return $current;
    }

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if (isset($_POST['input'])){
            $input = json_decode($_POST['input']);
        }
        if (isset($_POST)){
            foreach ($_POST as $key=>$value) {
                if ($key === "equal"){
                    $current_value = calculateInput($input);
                    $input = [];
                    $input[] = $current_value;
                }
                elseif ($key === "ce"){
                    array_pop($input);
                }
                elseif ($key === "clear"){
                    $input = [];
                    $current_value = 0;
                }
                elseif ($key === "back"){
                    $lastPointer = count($input) -1;
                    if (is_numeric($input[$lastPointer])){
                        array_pop($input);
                    }
                }
                elseif ($key !== "input") {
                    $input[] = $value;
                }
            }
        }
    }
?>
