<?php
class Test extends Model {
    protected $db = 'default';  // Opcional: Nombre de la configuracion de base de datos a usar
    protected $table = 'test';  // Opcional: Nombre de la tabla a usar, por defecto usaria el nombre del modelo

    public function __construct() {
        $this->add_field(new IntegerField('id', array('auto_increment' => true)));
        $this->add_field(new VarcharField('rut', array('lenght' => 10, 'null' => false)));
        $this->add_field(new VarcharField('nombre', array('lenght' => 50, 'null' => false)));
    }
}
