<?php

// This file is required in www.index.php

// Function upload OOP classes if an object is created
function upload($classname) { require ROOT . 'class/' . $classname.'.php';}
spl_autoload_register('upload');
