<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminDiagnosticosController extends CBController {


    public function cbInit()
    {
        $this->setTable("diagnosticos");
        $this->setPermalink("diagnosticos");
        $this->setPageTitle("Diagnosticos");

        $this->addDatetime("Alta","created_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Actualizada","updated_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addText("Diagnóstico","diagnostico")->strLimit(150)->maxLength(500);
		

    }
}
