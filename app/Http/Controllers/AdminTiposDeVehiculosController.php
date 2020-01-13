<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminTiposDeVehiculosController extends CBController {


    public function cbInit()
    {
        $this->setTable("registros_tipos");
        $this->setPermalink("tipos_de_registros");
        $this->setPageTitle("Tipos de Registros");

        $this->addDatetime("Alta","created_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false)->format('d-m-Y H:i:s');
		$this->addDatetime("Actualizada","updated_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false)->format('d-m-Y H:i:s');
		$this->addText("Tipo","tipo")->strLimit(150)->maxLength(150);
		

    }
}
