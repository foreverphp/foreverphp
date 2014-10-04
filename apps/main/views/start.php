<?php
/*
 * Por norma general todos los nombres de clases deben usar CamelCase
 */
class Start extends View {
    /*
     * Esta funcion es necesaria para cargar el modulo, siempre se debe
     * declarar.
     */
    public function run() {
        // Se usa un contexto global para el render
        return Response::make('homepage');
    }

    public function otherMethod() {
        echo 'Other method.';
    }
}
