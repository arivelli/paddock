<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminVehículosController extends CBController {


    public function cbInit()
    {
        $this->setTable("vehiculos");
        $this->setPermalink("vehiculos");
        $this->setPageTitle("Vehículos");

        $this->addDatetime("Alta","created_at")->required(false)->showAdd(false)->showEdit(false)->format('d-m-Y');
		$this->addDatetime("Actualizado","updated_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false)->format('d-m-Y H:i:s');
		$this->addSelectOption("Tipo","tipo")->options(['Ciclomotor'=>'Ciclomotor','Scooter'=>'Scooter','Moto'=>'Moto','Cuatri'=>'Cuatri']);
		$this->addText("Marca","marca")->strLimit(150)->maxLength(255);
		$this->addText("Modelo","modelo")->strLimit(150)->maxLength(255);
		$this->addText("Patente","patente")->strLimit(150)->maxLength(255);
		$this->addSelectTable("Dueño","duenio",["table"=>"users","value_option"=>"id","display_option"=>"name","sql_condition"=>"cb_roles_id=1"]);
		$this->addImage("Foto","foto")->showIndex(false)->encrypt(true)->resize(150,150);
		

    }
}
