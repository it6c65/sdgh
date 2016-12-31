<?php
class AuthController extends AppController {
    public function login(){
        if(Load::model("usuarios")->login()){
            Router::toAction("admin/index");
        }
    }
    public function logout(){
        Load::model("usuarios")->logout();
            Router::toAction("index");
    }
}
