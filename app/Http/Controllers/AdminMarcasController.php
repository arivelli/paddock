<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminMarcasController extends CBController {


    public function cbInit()
    {
        $this->setTable("marcas");
        $this->setPermalink("marcas");
        $this->setPageTitle("Marcas");

        $this->addDatetime("Alta","created_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Actualizada","updated_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addText("Marca","marca")->strLimit(150)->maxLength(255);
		$this->addImage("Foto","foto")->required(false)->showIndex(false)->encrypt(true)->resize(150);
		

    }
}
