<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminModeloController extends CBController {


    public function cbInit()
    {
        $this->setTable("modelo");
        $this->setPermalink("modelo");
        $this->setPageTitle("Modelo");

        $this->addDatetime("Alta","created_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false)->format('d-m-Y');
		$this->addDatetime("Actualizada","updated_at")->required(false)->showAdd(false)->showEdit(false)->format('d-m-Y H:i:s');
		$this->addSelectTable("Marca","marca",["table"=>"marcas","value_option"=>"id","display_option"=>"marca","sql_condition"=>""]);
		$this->addText("Modelo","modelo")->strLimit(150)->maxLength(255);
		

    }
}
