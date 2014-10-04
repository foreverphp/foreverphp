<?php
class Login extends View {
	public function run() {
		if (Session::exists('username')) {
			$this->render_to_response('login/in_login', new Context(array('username' => Session::get('username'))));
		} else {
			$this->render_to_response('login/login', new Context());
		}
	}

	public function login() {
		if (Request::exists('username')) {
			$username = Request::get('username');
			$password = Request::get('password');

			$message = 'Error al iniciar sesión.';
			$status_code = 403;

			if ($username == 'lordbytes' && $password == 'lordbytes' && Request::is_method('post')) {
				$message = 'Bienvenido, has iniciado correctamente tu sesión.';
				$status_code = 200;

				// Creo la session
				Session::set('username', $username);
				Session::set('username', $password);
			}

			$ctx = new Context();
			$ctx->set('message', $message);
			$ctx->set('status_code', $status_code);

			$this->render_to_json($ctx, $status_code);
		} else {
			Router::redirect('/login');
		}
	}

	public function logout() {
		Session::destroy();
		Router::redirect('/login');
	}
}
