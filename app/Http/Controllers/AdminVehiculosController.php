<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminVehiculosController extends CBController {


    public function cbInit()
    {
        $this->setTable("vehiculos");
        $this->setPermalink("vehiculos");
        $this->setPageTitle("Vehiculos");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Tipo","tipo")->strLimit(150)->maxLength(255);
		$this->addText("Marca","marca")->strLimit(150)->maxLength(255);
		$this->addText("Modelo","modelo")->strLimit(150)->maxLength(255);
		$this->addText("Patente","patente")->strLimit(150)->maxLength(255);
		$this->addSelectTable("Dueño","duenio",["table"=>"users","value_option"=>"id","display_option"=>"name","sql_condition"=>""]);
		

    }
}
