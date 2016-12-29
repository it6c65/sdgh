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
class AppController extends Controller
{
    public $acl;
    public $userRol = "";

    final protected function initialize(){

       /* if(Auth::is_valid()) $this->userRol = Auth::get("rol");*/

        //$this->acl = new Acl();
        //$this->acl->add_role(new AclRole("Admin"));
        //$this->acl->add_role(new AclRole("Usuario"));
        //$this->acl->add_resource(new AclResource("home"),"index");
        //$this->acl->allow("", "index", array("index"));
        /*$this->acl->allow("Admin", "home", array("index"));*/

    }

    final protected function finalize()
    {

    }

}
