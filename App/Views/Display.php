<?php

namespace App\Views;

class Display{
    static function message($message){
        echo "
                <div style='position: relative; padding: 10px; margin: 10px 0;'>
                    $message
                </div>";
    }
}

?>