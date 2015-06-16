<?php
/*
 * Aca se agregan las rutas
 */

Route::add('/', 'main.StartView');
Route::add('/other_method', 'main.StartView.otherMethod');
Route::add('/anonymous', function() {
	echo 'This is an anonymous function.';
});
