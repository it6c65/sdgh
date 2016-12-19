<?php

class HomeController extends AppController {

    public function index() {
        View::template("home");
        $this->hola="hola mundo!!!";

    }

    public function doc() {
        View::template("home");
    }

    public function herramientas() {
        View::template("home");
        $h = Load::model("herramientas")->find_all_by_sql("select h.nombre,h.num,h.serial,rh.status from herramientas h, registro_herramientas rh where h.id=rh.herramientas_id");
        $this->herramienta = $h;
    }

    public function materiales() {
        View::template("home");

    }

    public function salir(){
        View::template(NULL);
    }

}
