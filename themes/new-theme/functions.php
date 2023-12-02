<?php

require_once 'carbon/carbon-fields.php';

use EvoMark\WpVite\WpVite;

$vite = new WpVite();

$vite->enqueue([
	'input' => "src/main.ts",
	'namespace' => 'theme-vite'
]);
