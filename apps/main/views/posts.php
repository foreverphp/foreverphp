<?php
class Posts extends View {
    /*
     * Esta funcion es necesaria para cargar el modulo, siempre se debe
     * declarar
     */
    public function run() {
        /*$data = array(
            'title' => 'My First View'
        );

        $this->render_to_response('start', $data);*/
    }

    public function get_post() {
        echo 'This id is: ' . Request::get('id');
    }
}
