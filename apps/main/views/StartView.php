<?php
/*
 * Por norma general todos los nombres de clases deben usar CamelCase
 */
class StartView extends View {
    /*
     * Esta funcion es necesaria para cargar el modulo, siempre se debe
     * declarar.
     */
    public function run() {
        // Se usa un contexto global para el render
        return Response::render('homepage');
    }

    public function otherMethod() {
        echo 'Other method.';
    }
}
