<?php
/* carga la plantilla (template) home */
View::template("home");
/* Controller para las acciones de un usuario */
class UserController extends AppController {

    /* Antes de cargar el controlador */
    protected function before_filter(){
        /* Verifica si el usuario esta logeado 
            * Si no es asi, lo redirige al login */
        if(!Load::model("usuarios")->logged()){
            Redirect::to("index");
        /* Luego verifica su rol en la ACL */
        }else if(!$this->acl->is_allowed($this->userRol, 
            $this->controller_name,
            $this->action_name)){
            /* No carga ninguna vista */
            View::template(NULL);
            View::select(NULL);
            /* Mensaje de error */
            Flash::error("Acceso denegado");
            return false;
        }
    }

    /* Pagina de inicio */
    public function index() {
        /* Mensaje que indica el usuario actual */
        Flash::info("Actualmente eres {$this->name_user}");
    }

    /* Seccion de documentacion */
    public function doc() {
    }

    /* Seccion de herramientas */
    public function herramientas() {
        /* Carga todos los datos del modelo herramientas */
        $h = Load::model("herramientas")->find_all_by_sql("select * from herramientas");
        /* Pasa los datos a la vista */
        $this->herramienta = $h;
    }

    /* Seccion de materiales */
    public function materiales() {
        /* Carga todos los datos del modelo materiales */
        $m = Load::model("materiales")->find_all_by_sql("select * from materiales");
        /* Pasa los datos a la vista */
        $this->material = $m;

    }

}
