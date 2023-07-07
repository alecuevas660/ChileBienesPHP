<?php
require 'app.php';

function incluirTemplate ($nombres, $inicio = false) {
    include TEMPLATES_URL . "/${nombres}.php";
}