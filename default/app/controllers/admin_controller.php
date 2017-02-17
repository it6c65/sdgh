<?php
/* Usa la plantilla (template) home */
View::template("home");
/* Controlador de Administracion */
class AdminController extends AppController {
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
        /* Carga todos los datos del modelo registro en orden
            * descendente */
        $r = Load::model("registro")->find_all_by_sql("select * from registro order by id desc");
        /* Cuenta todos los datos de la tabla */
        $numero_registro = Load::model("registro")->count();
        /* Pasa los datos del registro a la vista */
        $this->registro = $r;
        /* Pasa el conteo de datos a la vista */
        $this->num_r = $numero_registro;
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

    /* Modulo para cambiar clave */
    public function cambiar_clave(){
        /* No cargar ninguna vista */
        View::template(NULL);
        View::select(NULL);
        /* Instancio el modelo usuarios */
        $users = new Usuarios();
        /* Si cambiar clave detecta el POST usuarios */
        if(Input::hasPost("usuarios")){
            /* Busca el id del usuario */
            $users->find(Input::post("usuarios.id"));
            /* Asigna la nueva clave y la cifra con MD5 */
            $users->password = md5(Input::post("usuarios.password"));
            /* actualiza la nueva clave */
            if(!$users->update()){
                /* Si no actualiza dara este error */
                Flash::error("ERROR!");
                Redirect::to("admin/index");
            }else{
                /* Si se realiza avisa y redirige a la vista index */
                Flash::valid("¡Se ha cambiado la contraseña con exito!");
                Redirect::to("admin/index");
            }
        }
    }

    public function borrar_registro(){
        View::template(NULL);
        View::select(NULL);
        if(!Load::model("registro")->delete_all()){
                Flash::error("ERROR!");
                Redirect::to("admin/index");
            }else{
                Load::model("registro")->find_all_by_sql("alter table registro auto_increment=1");
                Flash::valid("¡Se ha eliminado el registro con exito!");
                Redirect::to("admin/index");
            }
    }
}
