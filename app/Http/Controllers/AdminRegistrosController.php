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
		$this->addSelectTable("Entrada","entrada_id",["table"=>"entradas","value_option"=>"id","display_option"=>"ingreso_fecha","sql_condition"=>""])->showAdd(false)->showEdit(false);
		$this->addSelectTable("Registro Tipo","registro_tipo_id",["table"=>"registros_tipos","value_option"=>"id","display_option"=>"tipo","sql_condition"=>""]);
		$this->addText("Titulo","titulo")->strLimit(150)->maxLength(255);
		$this->addWysiwyg("Detalle","detalle")->strLimit(150);
		$this->addMoney("Importe","importe");
		

    }
}
