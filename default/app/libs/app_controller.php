<?php
/**
 * @see Controller nuevo controller
 */
require_once CORE_PATH . 'kumbia/controller.php';

/**
 * Controlador principal que heredan los controladores
 *
 * Todas las controladores heredan de esta clase en un nivel superior
 * por lo tanto los metodos aqui definidos estan disponibles para
 * cualquier controlador.
 *
 * @category Kumbia
 * @package Controller
 */
Load::model("usuarios");
class AppController extends Controller
{
    /* Variable que contendra el control de acceso */
    public $acl;
    /* Rol del usuario actual */
    public $userRol = "";
    /* Nombre de usuario de la sesion actual */
    public $name_user = "";

    final protected function initialize(){
        /* Instancio un usuario de la tabla usuarios */
        $usuario_actual = new Usuarios();
        /* Busco el id del usuario que inicio sesion */
        $usuario_actual->find(Session::get("id"));
        $this->name_user = $usuario_actual->login;
        /* Si el usuario esta ya esta logueado determinar su rol en el ACL */
        if(Load::model("usuarios")->logged()) $this->userRol = $usuario_actual->nivel;

        /* Instancio una la lista de control de acceso */
        $this->acl = new Acl();
        /* Agrego los roles(o rangos) de acceso */ 
        $this->acl->add_role(new AclRole("")); // "" no ha iniciado sesion
        $this->acl->add_role(new AclRole("adm")); //adm es administrador
        $this->acl->add_role(new AclRole("usr")); //usr es usuario
        /* Agrego los recursos que seran restringidos */
        $this->acl->add_resource(new AclResource("admin"),"index","herramientas","materiales","doc","cambiar_clave","borrar_registro");
        $this->acl->add_resource(new AclResource("user"),"index","herramientas","materiales","doc");
        $this->acl->add_resource(new AclResource("herramientas"),"crear","editar","borrar");
        $this->acl->add_resource(new AclResource("index"),"index");
        /* Agrego los permisos de rol(rango) de la ACL */
        $this->acl->allow("", "index", array("index"));
        $this->acl->allow("adm", "admin", array("index","herramientas","materiales","doc","cambiar_clave","borrar_registro"));
        $this->acl->allow("adm", "herramientas", array("crear","editar","borrar"));
        $this->acl->allow("usr", "user", array("index","herramientas","materiales","doc"));

    }

    final protected function finalize()
    {

    }

}
