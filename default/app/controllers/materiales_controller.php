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
                Redirect::to("admin/materiales");
            }else{
                Input::delete();
                Flash::valid("¡Ha sido agregado Correctamente!");
                Redirect::to("admin/materiales");
            }
        }
    }
        public function editar(){
        $m = new Materiales();
        if(Input::hasPost("editar")){
            $m->find(Input::post("editar.id"));
            $m->nombre = Input::post("editar.nombre");
            $m->num = Input::post("editar.num");
            $m->status = Input::post("editar.status");
            if(!$m->update()){
                Flash::error("ERROR!");
                Redirect::to("admin/materiales");
            }else{
                Flash::valid("¡Ha sido editado con Exito!");
                Redirect::to("admin/materiales");
            }
        }
    }

    public function borrar($id){
        $m = new Materiales();
        if(!$m->delete((int)$id)){
            Flash::error("ERROR!");
            Redirect::to("admin/herramientas");
        }else{
            Flash::valid("Borrado con exito");
            Redirect::to("admin/materiales");
        }
    }
}
