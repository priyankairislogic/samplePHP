<?php
require_once "../vendor/autoload.php";

$app = new Slim(array(
    "MODE" => "development",
    "TEMPLATES.PATH" => "./templates"
));

$app->get("/", function() {
    echo "<h1>Hello Slim World</h1>";
});
    
    //echo "<h1>Hello  World from app server - git update</h1>";
?>


