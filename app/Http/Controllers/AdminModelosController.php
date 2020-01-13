<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminModelosController extends CBController {


    public function cbInit()
    {
        $this->setTable("modelos");
        $this->setPermalink("modelos");
        $this->setPageTitle("Modelos");

        $this->addDatetime("Alta","created_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false)->format('d-m-Y');
		$this->addDatetime("Actualizada","updated_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false)->format('d-m-Y H:i:s');
		$this->addSelectTable("Marca","marca_id",["table"=>"marcas","value_option"=>"id","display_option"=>"marca","sql_condition"=>""]);
        $this->addSelectTable("Tipo de vehículo","vehiculo_tipo_id",["table"=>"vehiculos_tipos","value_option"=>"id","display_option"=>"tipo","sql_condition"=>""]);
        $this->addText("Modelo","modelo")->strLimit(150)->maxLength(255);
		$this->addImage("Foto","foto")->showIndex(false)->encrypt(true)->resize(150);
		$this->addWysiwyg("Detalle","detalle")->required(false)->showIndex(false);
		
		

    }
}
