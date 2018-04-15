<?php namespace Apps\Main\Views;

use View;

class StartView extends View {
    // Reemplaza a run
    public function index() {

        /*
         * Stream maneja toda la salida
         */

        $this->renderToResponse('start');

        // o solo render
        //$this->render('start');

        /*
         * se le pasan los siguientes parametros.
         * render(string $template, string $type, string $contentType)
         */

        //$this->render('start', 'html'); // por defecto no se pone html
        //$this->render('start', 'json');
    }

    /*
     * Ahora los parametros se asignan en las funciones de las vistas y Request solo controla los inputs, con esto
     * se pueden usar ambos a la ves.
     */
    public function funcTest(string $name, int $birthDay) {

    }
}
