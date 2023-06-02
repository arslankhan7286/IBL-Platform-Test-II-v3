<?php
/**
 * Plugin Name: Greeting Block
 */
function greeting_block_register_block() {
    register_block_type( __DIR__ );
}
add_action( 'init', 'greeting_block_register_block' );