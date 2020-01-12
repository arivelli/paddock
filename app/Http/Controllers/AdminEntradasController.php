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
		$this->addDatetime("Fecha de ingreso","ingreso_fecha")->format('d-m-Y H:i:s');
		$this->addText("Observaciones de ingreso","ingreso_observaciones")->strLimit(150)->maxLength(5000);
		$this->addSelectOption("Estado","estado")->options(['reservado'=>'Reservado','recibido'=>'Recibido','presupuestado'=>'Presupuestado','rechazado'=>'Presupuesto Rechazado','aprobado'=>'Presupuesto Aprobado','reparado'=>'Reparado','sin_reparacion'=>'Sin Reparación','entregado'=>'Entregado']);
		$this->addImage("Fotos","fotos")->showIndex(false);
		$this->addDatetime("Fecha de egreso","egreso_fecha")->format('d-m-Y H:i:s');
		$this->addText("Observaciones de egreso","egreso_observaciones")->strLimit(150)->maxLength(5000);
		$this->addSelectTable("Vehículo","vehiculo",["table"=>"vehiculos","value_option"=>"id","display_option"=>"patente","sql_condition"=>""]);
		

    }
}
