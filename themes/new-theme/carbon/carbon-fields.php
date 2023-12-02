<?php

use Carbon_Fields\Carbon_Fields;
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
	Container::make( 'theme_options', 'Настройки темы' )
	         ->add_fields( array(
		         Field::make( 'text', 'crb_email', 'E-mail' ),
		         Field::make( 'text', 'crb_phone', 'Телефон' )
	         ) );

}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once( __DIR__ . '/../vendor/autoload.php' );
	define( 'Carbon_Fields\DIR', get_parent_theme_file_path( 'vendor/htmlburger/carbon-fields' ) );
	Carbon_Fields::boot();
}