<?php
Load::models("materiales");
View::template(NULL);
View::select(NULL);
Class MaterialesController extends AppController{

    public function crear(){
        if(Input::hasPost("materiales")){
            $m = new materiales(Input::post("materiales"));
            if(!$m->save()){
                Flash::error("ERROR!");
            }else{
                Input::delete();
                Redirect::to("admin/materiales");
            }
        }
    }

    public function editar(){
        View::select(NULL);
        $m = new Materiales();
        if(Input::hasPost("materiales")){
            if(!$m->update(Input::post("materiales"))){
                Flash::error("ERROR!");
            }else{
                Redirect::to("admin/materiales");
            }
        }
    }

    public function borrar($id){
        $m = new Materiales();
        if(!$m->delete((int)$id)){
            Flash::error("ERROR!");
        }else{
            Redirect::to("admin/materiales");
        }
    }
}
