<?php

namespace App\Views;

class Layout{
    public static function header($title = "Iskola") {
        echo <<<HTML
        <!DOCTYPE html>
        <html lang="hu">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>$title</title>

            <link href="/css/school.css" rel="stylesheet" type="text/css">
            <link href="/fontawesome/css/all.css" rel="stylesheet" type="text/css">
        </head>
        <body>
        HTML;
        self::navbar();
        self::handleMessages();
        echo '<div class="container">';

    }

    public static function handleMessages(): void{
        //To do
    }

    public static function navbar() {
        echo <<<HTML
        <nav class="navbar">
            <ul class="nav-list">
                <li class="nav-button"><a href="/"><button style="button" title="Kezdőlap"></li>
                <li class="nav-button"><a href="/subjects"><button style="button" title="Tantárgyak"></li>
            </ul>
        </nav>
        HTML;
    }

    public static function footer() {
        echo <<<HTML
        </div>
            <footer>
                <hr>
                <p>2025 &copy; Selmeczy György</p>
            </footer>
        </body>
        </html>
        HTML;
    }


}