<?php
/*
 * Aca se agregan las rutas
 */
Route::add('/', 'Main.StartView');
Route::add('/other_method', 'Main.StartView.otherMethod');
Route::add('/anonymous', function() {
	echo 'This is an anonymous function.';
});
