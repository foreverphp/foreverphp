<?php
class Db extends View {
	public function run() {
		return Response::make('db', new Context(array('datos' => '(Sin datos)')));
	}

	public function insert() {
		if (Request::exists('rut') && Request::exists('nombre')) {
			$queryParams = "insert into clients (rut, nombre) values (?, ?)";

			QueryRaw::addParameter(QueryRaw::QR_PARAM_STRING, Request::get('rut'));
			QueryRaw::addParameter(QueryRaw::QR_PARAM_STRING, Request::get('nombre'));

			QueryRaw::query($queryParams);
			QueryRaw::execute();
		}
	}

	public function get() {
		if (Request::exists('id')) {
			if (Request::get('id') != '') {
				$query = "select rut, nombre from clients where id = ?";
				QueryRaw::addParameter(QueryRaw::QR_PARAM_INTEGER, Request::get('id'));
			} else {
				return false;
			}
		} else {
			$query = 'select * from clients';
		}

		QueryRaw::query($query, QueryRaw::QR_FETCH_BOTH);
		$result = QueryRaw::execute(QueryRaw::QR_RETURN_JSON);

		if (!$result) {
			echo false;
		} else {
			// Retorno los registros
			echo $result;
		}

		return null;
	}

	public function update() {
		if (Request::exists('id')) {
			if (Request::get('id') != '') {
				$query = "update clients set rut = ?, " .
						 "nombre = ? " .
						 "where id = ?";

			 	QueryRaw::addParameter(QueryRaw::QR_PARAM_STRING, Request::get('rut'));
				QueryRaw::addParameter(QueryRaw::QR_PARAM_STRING, Request::get('nombre'));
				QueryRaw::addParameter(QueryRaw::QR_PARAM_INTEGER, Request::get('id'));

				QueryRaw::query($query);
				QueryRaw::execute();
			}
		}
	}

	public function delete() {
		if (Request::exists('id')) {
			if (Request::get('id') != '') {
				$query = "delete from clients where id = ?";

				QueryRaw::addParameter(QueryRaw::QR_PARAM_STRING, Request::get('id'));

				QueryRaw::query($query);
				QueryRaw::execute();
			}
		}
	}
}
