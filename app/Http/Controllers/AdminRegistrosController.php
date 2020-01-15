<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminRegistrosController extends CBController {


    public function cbInit()
    {
        $this->setTable("registros");
        $this->setPermalink("registros");
        $this->setPageTitle("Registros");

        $this->addDatetime("Alta","created_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Actualizada","updated_at")->required(false)->showAdd(false);
		$this->addSelectTable("Entrada","entrada_id",["table"=>"vehiculos_en_taller","value_option"=>"id","display_option"=>"vehiculo","sql_condition"=>""])->filterable(true);
		$this->addSelectTable("Registro Tipo","registro_tipo_id",["table"=>"registros_tipos","value_option"=>"id","display_option"=>"tipo","sql_condition"=>""])->filterable(true);
        $this->addDatetime("Fecha","fecha")->format('d-m-Y H:i:s')->filterable(true);
        $this->addText("Titulo","titulo")->filterable(true)->strLimit(150)->maxLength(255);
		$this->addWysiwyg("Detalle","detalle")->strLimit(150);
		$this->addMoney("Importe","importe")->required(true)->precision(0)->prefix("$")->thousandSeparator(".")->decimalSeparator(",")->defaultValue(0);


    }
}


