<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminVehículosController extends CBController {


    public function cbInit()
    {
        $this->setTable("vehiculos");
        $this->setPermalink("vehiculos");
        $this->setPageTitle("Vehículos");

        $this->addDatetime("Alta","created_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false)->format('d-m-Y');
		$this->addDatetime("Actualizado","updated_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false)->format('d-m-Y H:i:s');
		$this->addSelectTable("Tipo","vehiculo_tipo_id",["table"=>"vehiculos_tipos","value_option"=>"id","display_option"=>"tipo","sql_condition"=>""]);
		$this->addSelectTable("Marca","marca_id",["table"=>"marcas","value_option"=>"id","display_option"=>"marca","sql_condition"=>""]);
		$this->addSelectTable("Modelo","modelo_id",["table"=>"modelos","value_option"=>"id","display_option"=>"modelo","sql_condition"=>""])->foreignKey('marca_id');
		$this->addText("Patente","patente")->strLimit(150)->maxLength(255);
		$this->addSelectTable("Dueño","duenio",["table"=>"users","value_option"=>"id","display_option"=>"name","sql_condition"=>"cb_roles_id=1"]);
		$this->addImage("Foto","foto")->showIndex(false)->encrypt(true)->resize(150,150);
		$this->addSubModule("Entradas", AdminEntradasController::class, "vehiculo_id", function ($row) {
            return [
              //"ID"=> $row->primary_key, // You can get the id of table by using primary_key object
              "Cliente"=> $row->users_name,
              //"Created"=> date("d/m/Y H:i", strtotime($row->created_at)),
              "Vehículo" => "{$row->marcas_marca} - {$row->modelos_modelo} ({$row->vehiculos_tipos_tipo})" ,
              "Patente"=> $row->patente,
            ];
        });

    }
}
