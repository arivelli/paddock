<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminEntradasController extends CBController {


    public function cbInit()
    {
        $this->setTable("entradas");
        $this->setPermalink("entradas");
        $this->setPageTitle("Entradas");

        $this->addDatetime("Alta","created_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Actualizado","updated_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Fecha de ingreso","ingreso_fecha")->format('d-m-Y H:i');
		$this->addText("Observaciones de ingreso","ingreso_observaciones")->strLimit(150)->maxLength(5000);
		$this->addText("Estado","estado")->strLimit(150)->maxLength(255);
		$this->addImage("Foto","foto")->showIndex(false);
		$this->addDatetime("Fecha de egreso","egreso_fecha")->required(false)->format('d-m-Y H:i');
		$this->addText("Observaciones de egreso","egreso_observaciones")->required(false)->strLimit(150)->maxLength(5000);
		$this->addSelectTable("Vehículo","vehiculo_id",["table"=>"vehiculos","value_option"=>"id","display_option"=>"patente","sql_condition"=>""]);
		

    }
}
