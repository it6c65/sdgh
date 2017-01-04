<?php 

class Usuarios extends ActiveRecord{

    //Metodo de logear

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
        if($auth->identify()){
            return true;
        }else{
        //Si es FALSE, mostrara el error y retornara false
        // en todo el metodo
            Flash::error($auth->getError());
            return false;
        } 
    }
    public function logout(){
        Auth2::factory("model")->logout();
    }
}
