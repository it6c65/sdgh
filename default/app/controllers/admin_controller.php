<?php
View::template("home");
class AdminController extends AppController {

    protected function before_filter(){
        if(!Load::model("usuarios")){
            Redirect::to("index");
        }
    }

    public function index() {
        $this->hola="hola mundo!!!";
    }

    public function doc() {
    }

    public function herramientas() {
        $h = Load::model("herramientas")->find_all_by_sql("select * from herramientas");
        $this->herramienta = $h;
    }

    public function materiales() {
        $h = Load::model("materiales")->find_all_by_sql("select * from materiales");
        $this->material = $m;

    }

    public function salir(){
        View::template(NULL);
    }

}
