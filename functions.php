<?php

//DEFINE PATH
define( 'PATH', get_template_directory() . '/' );
// Define INC
define( 'INC', PATH . 'includes/' );
//Include the enqueues
require_once INC . 'enqueues.php';
//Include the Theme Functions
require_once INC . 'theme_functions.php';

