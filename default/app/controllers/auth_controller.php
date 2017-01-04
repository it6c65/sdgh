<?php
class AuthController extends AppController {
    public function login(){
        View::select(NULL);
        View::template(NULL);
        if(Load::model("usuarios")->login()){
            Redirect::to("admin/index");
        }
    }
    public function logout(){
        Load::model("usuarios")->logout();
        Redirect::to("index");
    }
}
