<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminTiposDeVehículosController extends CBController {


    public function cbInit()
    {
        $this->setTable("vehiculos_tipos");
        $this->setPermalink("tipos_de_vehiculos");
        $this->setPageTitle("Tipos de vehículos");

        $this->addDatetime("Alta","created_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false)->format('d-m-Y H:i:s');
		$this->addDatetime("Actualizada","updated_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false)->format('d-m-Y H:i:s');
		$this->addText("Tipo","tipo")->strLimit(150)->maxLength(255);
		$this->addImage("Foto","foto")->encrypt(true)->resize(150);
		$this->addWysiwyg("Detalle","detalle")->showIndex(false);
		

    }
}
