<?php
class AuthController extends AppController {
    public function login(){
        View::select(NULL);
        View::template(NULL);
        if(Load::model("usuarios")->login()){
            $user = Input::post("login");
            if($user=="Admin"){
                Redirect::to("admin/index");
            }else{
                Redirect::to("user/index");
            }
        }
    }
    public function logout(){
        Load::model("usuarios")->logout();
        Redirect::to("index");
    }
}
