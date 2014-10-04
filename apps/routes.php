<?php
/*
 * Aca se agregan las rutas
 */

Route::add('/', 'main.start');
Route::add('/other_method', 'main.start.otherMethod');
Route::add('/anonymous', function() {
	echo 'This is an anonymous function.';
});
Route::add('/categories/category/{id}/find/{product?}', function() {
	echo 'The id is: ' . Request::get('id') . '<br />';

	if (Request::exists('product')) {
		echo 'The product is: ' . Request::get('product');
	} else {
		echo 'The product not exist.';
	}
});
Route::add('/posts/post/{id}', 'main.posts.getPost');

// Ejemplo de Hash
Route::add('/hash', function() {
    $string = 'Hello world';
    echo "My string: $string <br>";

    $string_hash = Hash::create($string);
    echo "My string hashed: $string_hash <br>";
});

// Ejemplo de trabajo con modelos estandar (CRUD)
Route::add('/model', 'main.modelview');
Route::add('/model/create', 'main.modelview.create');
Route::add('/model/read/{id?}', 'main.modelview.read');
Route::add('/model/update', 'main.modelview.update');
Route::add('/model/delete/{id}', 'main.modelview.delete');

// Ejemplo de inicio de sesion y cirre de la misma
Route::add('/login', 'main.login');
Route::add('/login/login', 'main.login.login');
Route::add('/login/logout', 'main.login.logout');

// Ejemplo de API RESTful
Route::add('/api/get_post/{id?}', 'main.api.get_post');
Route::add('/api/update_post/{id}', 'main.api.update_post');
Route::add('/api/delete_post/{id}', 'main.api.delete_post');

// Ejemplo de base de datos
Route::add('/db/clients', 'main.db');
Route::add('/db/clients/insert', 'main.db.insert');
Route::add('/db/clients/get/{id?}', 'main.db.get');
Route::add('/db/clients/update', 'main.db.update');
Route::add('/db/clients/delete/{id}', 'main.db.delete');

// Pruebas de fachada
Route::add('/facade/file', function() {
    File::prueba();
    File::prueba1("1");
    File::prueba2("1", "2");
    File::prueba3("1", "2", "3");
    File::prueba4("1", "2", "3", "4");
    File::pruebaMas("1", "1", "1", "1", "1");
    File::pruebaMas2("1", "1", "1", "1", "1", "1", "1");
});

Route::add('/errore/403', function() {
    Redirect::toError(403);
});

Route::add('/error/404', function() {
    Redirect::toError(404);
});

Route::add('/error/500', function() {
    Redirect::toError(500);
});

/*
 * Idea para agregar rutas API, la vista debe ser capas de procesar las apis.
 *
 * Router::add_api('put', 'conta/factura/listar/', 'conta.factura.listar');
 * o
 * Router::add_api('conta/factura/listar/', 'conta.factura.listar');
 */

//Ruta utilizada por manage, esta ruta se puede personalizar pero no su vista 'manage'
if (Settings::inDebug()) {
//	Router::add('manage/', 'manage');
}
