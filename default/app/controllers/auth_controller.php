<?php
/* Configuro el reloj del servidor al de Venezuela */
date_default_timezone_set('America/Caracas');
class AuthController extends AppController {
    /* metodo de logeo */
    public function login(){
        /* No mostrara ninguna vista */
        View::select(NULL);
        View::template(NULL);
        /* Si el modelo usuarios usa el metodo login() */
        if(Load::model("usuarios")->login()){
            /* Toma el valor del usuario actual */
            $user = Input::post("login");
            /* Creara un nuevo registro */
            $reg = new Registro();
            /* Guarda la hora de acceso del login en el registro */
            $reg->hora = date("H:i:s");
            /* Guarda la sesion del usuario actual */
            $reg->usuarios_id = Session::get("id");
            /* Guarda el registro en la base de datos */
            $reg->save();

            /* Si es admin carga la vista Admin sino la de user */
            if($user=="Admin"){
                Redirect::to("admin/index");
            }else{
                Redirect::to("user/index");
            }
        }
    }
    /* metodo para Cerrar sesion */
    public function logout(){
        /* carga el metodo del modelo usuarios logout */
        Load::model("usuarios")->logout();
        /* redirecciona a la pagina del login */
        Redirect::to("index");
    }
}
