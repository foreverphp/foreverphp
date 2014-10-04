<?php
/*
 * Aca se agregan las rutas
 */

Route::add('/', 'main.start');
Route::add('/other_method', 'main.start.otherMethod');
Route::add('/anonymous', function() {
	echo 'This is an anonymous function.';
});
