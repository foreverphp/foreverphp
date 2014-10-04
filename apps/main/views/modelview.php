<?php
// Importo el modelo a trabajar
App::import('model', 'test');

class ModelView extends View {
    public function run() {
        $this->render_to_response('modelview', new Context(array('datos' => '(Sin datos)')));
    }

    public function create() {
        if (Request::exists('rut') && Request::exists('nombre')) {
            $query_params = "insert into clients (rut, nombre) values (?, ?)";

            QueryRaw::add_parameter(FP_DB_PARAM_STRING, Request::get('rut'));
            QueryRaw::add_parameter(FP_DB_PARAM_STRING, Request::get('nombre'));

            QueryRaw::query($query_params);
            QueryRaw::execute();
        }
    }

    public function read() {
        if (Request::exists('id')) {
            if (Request::get('id') != '') {
                $query = "select rut, nombre from clients where id = ?";
                QueryRaw::add_parameter(FP_DB_PARAM_INTEGER, Request::get('id'));
            } else {
                return false;
            }
        } else {
            $query = 'select * from clients';
        }

        QueryRaw::query($query, FP_DB_FETCH_BOTH);
        $result = QueryRaw::execute(FP_DB_RETURN_JSON);

        if (!$result) {
            echo false;
        } else {
            // Retorno los registros
            echo $result;
        }
    }

    public function update() {
        if (Request::exists('id')) {
            if (Request::get('id') != '') {
                $query = "update clients set rut = ?, " .
                         "nombre = ? " .
                         "where id = ?";

                QueryRaw::add_parameter(FP_DB_PARAM_STRING, Request::get('rut'));
                QueryRaw::add_parameter(FP_DB_PARAM_STRING, Request::get('nombre'));
                QueryRaw::add_parameter(FP_DB_PARAM_INTEGER, Request::get('id'));

                QueryRaw::query($query);
                QueryRaw::execute();
            }
        }
    }

    public function delete() {
        if (Request::exists('id')) {
            if (Request::get('id') != '') {
                $query = "delete from clients where id = ?";

                QueryRaw::add_parameter(FP_DB_PARAM_STRING, Request::get('id'));

                QueryRaw::query($query);
                QueryRaw::execute();
            }
        }
    }
}
