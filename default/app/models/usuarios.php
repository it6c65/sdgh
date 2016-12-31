<?php 
Load::lib("auth2");

class Usuarios extends ActiveRecord{

    public function login(){
        $auth = Auth2::factory("model");
        $auth->setModel("usuarios");
        if($auth->identify()) return true;
        Flash::error($auth->getError());
        return false;
    }
    public function logout(){
        Auth::factory("model")->logout();
    }
}
