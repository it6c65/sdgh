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
        $r = Load::model("registro")->find_all_by_sql("select * from registro order by id desc");
        $numero_registro = Load::model("registro")->count();
        $this->registro = $r;
        $this->num_r = $numero_registro;
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

    public function cambiar_clave(){
        View::template(NULL);
        View::select(NULL);
        $users = new Usuarios();
        if(Input::hasPost("usuarios")){
            $users->find(Input::post("usuarios.id"));
            $users->password = md5(Input::post("usuarios.password"));
            if(!$users->update()){
                Flash::error("ERROR!");
                Redirect::to("admin/index");
            }else{
                Flash::valid("Se ha cambiado la contraseña con exito!");
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
                Flash::valid("Se ha eliminado el registro con exito!");
                Redirect::to("admin/index");
            }
    }
}
