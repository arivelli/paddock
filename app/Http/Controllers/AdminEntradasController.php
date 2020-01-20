<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;
use DB;

class AdminEntradasController extends CBController {


    public function cbInit()
    {
        $this->setTable("entradas");
        $this->setPermalink("entradas");
        $this->setPageTitle("Entradas");

        $this->addDatetime("Alta","created_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Actualizado","updated_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Fecha de ingreso","ingreso_fecha")->filterable(true);
		$this->addText("Observaciones de ingreso","ingreso_observaciones")->strLimit(150)->maxLength(5000);
		$this->addText("Estado","estado")->strLimit(150)->maxLength(255);
		$this->addImage("Foto","foto")->showIndex(false);
		$this->addDatetime("Fecha de egreso","egreso_fecha")->required(false)->filterable(true);
		$this->addText("Observaciones de egreso","egreso_observaciones")->required(false)->strLimit(150)->maxLength(5000);
		$this->addSelectTable("Vehículo","vehiculo_id",["table"=>"vehiculos","value_option"=>"id","display_option"=>"patente","sql_condition"=>""])->filterable(true);
		$this->addSubModule("Registros", AdminRegistrosController::class, "entrada_id", function ($row) {
            return [
              "ID"=> $row->primary_key, // You can get the id of table by using primary_key object
              //"Cliente"=> $row->users_name,
              //"Created"=> date("d/m/Y H:i", strtotime($row->created_at)),
              //"Vehículo" => "{$row->marcas_marca} - {$row->modelos_modelo} ({$row->vehiculos_tipos_tipo})" ,
              "Patente"=> $row->vehiculos_patente,
              /*"Marca" => DB::table('vehiculos')
              ->join('marcas', 'vehiculos.marca_id', '=', 'marcas.id')
              ->select('marcas.marca')
              ->where('vehiculos.id','=',$row->vehiculo_id)->first()*/
            ];
        });

            //->join('vehiculos_tipo', 'vehiculos.marca_id', '=', 'marcas.id');
        /*$this->hookIndexQuery(function($query) {
            // Todo: code query here

            // You can make query like laravel db builder
            $query->join('marcas', 'vehiculos.marca_id', '=', 'marcas.id');
            $query->select('entradas.*', 'vehiculos.*',  DB::raw('CONCAT(marcas.marca, " ", vehiculos.patente) AS vehiculos_patente'));
            // Don't forget to return back
            return $query;
        });*/

    }
}
