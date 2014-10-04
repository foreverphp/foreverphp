<?php
class Api extends View {
	public function __construct() {
		parent::__construct();
		$this->restful = true;
	}

	public function get_post() {
		$valido = BasicAuth::validate();

		if ($valido) {
			echo BasicAuth::username() . ' - ' . BasicAuth::password();
		}

		$ctx = new Context();
		$ctx2 = new Context();

		if (Request::exists('id')) {
			$ctx->set('title', 'Mi titulo');
			$ctx->set('description', 'Mi primer post');
			$ctx->set('author', Request::get('id'));
		} else {
			$ctx->set('error', 'Error básico');
			$ctx->set('error_code', 404);

			$data2[] = array(
				'id' => 1,
				'post' => array(
					'title' => 'Mi titulo 1',
					'description' => 'Mi primer post 1'
				 )
			);
			$data2[] = array(
				'id' => 2,
				'post' => array(
					'title' => 'Mi titulo 2',
					'description' => 'Mi primer post 2'
				 )
			);
		}

		$this->render_to_json($ctx, 200);
	}

	public function update_post($request) {

	}

	public function delete_post($request) {

	}
}
