<?php

class Usuarios extends ActiveRecord{

    //Metodo para iniciar sesion

    public function login(){
        /*Declaro el tipo de adaptador con el que logeo*/
        /*que sera un modelo de la base de datos*/
        $auth = Auth2::factory("model");
        //Declaro el modelo que logeara
        $auth->setModel("usuarios");
        //Declaro el algoritmo con el que cifrará las clave
        $auth->setAlgos("md5");
        //Autentifica, si es correcta, el metodo retornara TRUE
        //En todo el metodo
        if($auth->identify()) return true;
        //Si es FALSE, mostrara el error y retornara false
        // en todo el metodo
        Flash::error($auth->getError());
        return false;
    }
    /* Cierra sesion */
    public function logout(){
        Auth2::factory("model")->logout();
    }
    /* Valida si si el usuario esta logeado */
    public function logged(){
        return Auth2::factory("model")->isValid();
    }
}
