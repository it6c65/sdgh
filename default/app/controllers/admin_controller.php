<?php
View::template("home");
class AdminController extends AppController {

    protected function before_filter(){
        /* Verifica si el usuario esta logeado */
        if(!Load::model("usuarios")->logged()){
            Redirect::to("index");
            /* Luego verifica su rol en la ACL */
        }else if(!$this->acl->is_allowed($this->userRol, 
            $this->controller_name,
            $this->action_name)){
            View::template(NULL);
            View::select(NULL);
            Flash::error("Acceso denegado");
            return false;
        }
    }

    public function index() {
        Flash::info("Eres un {$this->name_user}");
    }

    public function doc() {
    }

    public function herramientas() {
        $h = Load::model("herramientas")->find_all_by_sql("select * from herramientas");
        $this->herramienta = $h;
    }

    public function materiales() {
        $m = Load::model("materiales")->find_all_by_sql("select * from materiales");
        $this->material = $m;

    }

    public function salir(){
        View::template(NULL);
    }

}
