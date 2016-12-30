<?php
Load::models("herramientas");
View::template(NULL);
View::select(NULL);
Class HerramientasController extends AppController{

    public function crear(){
        if(Input::hasPost("herramientas")){
            $h = new herramientas(Input::post("herramientas"));
            if(!$h->save()){
                Flash::error("FALLO :S");
            }else{
                Flash::valid("Exito!");
                Input::delete();
                Redirect::to("home/herramientas");
            }
        }
    }

    public function editar($id){
        Load::model("herramientas");
        $h = new Herramientas();
        if(Input::hasPost("herramientas")){
            if(!$h->update(Input::post("herramientas"))){
                Flash::error("FALLO :S");
            }else{
                Flash::valid("Exito!");
                return Router::redirect("home/herramientas");
            }
        }else{
            $this->h = $h->find((int)$id);
        }
    }

    public function borrar($id){
        $h = new Herramientas();
        if(!$h->delete((int)$id)){
            Flash::error("FALLO :S");
        }else{
            Flash::valid("Exito!");
        }
        Redirect::to("home/herramientas");
    }
}
