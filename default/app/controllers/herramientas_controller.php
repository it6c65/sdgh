<?php
Load::models("herramientas");
View::template(NULL);
View::select(NULL);
Class HerramientasController extends AppController{

    public function crear(){
        if(Input::hasPost("herramientas")){
            $h = new herramientas(Input::post("herramientas"));
            if(!$h->save()){
                Flash::error("ERROR!");
                Redirect::to("admin/herramientas");
            }else{
                Input::delete();
                Flash::valid("¡Ha sido agregado Correctamente!");
                Redirect::to("admin/herramientas");
            }
        }
    }

    public function editar(){
        $h = new Herramientas();
        if(Input::hasPost("editar")){
            $h->find(Input::post("editar.id"));
            $h->nombre = Input::post("editar.nombre");
            $h->num = Input::post("editar.num");
            $h->status = Input::post("editar.status");
            $h->serial = Input::post("editar.serial");
            if(!$h->update()){
                Flash::error("ERROR!");
                Redirect::to("admin/herramientas");
            }else{
                Flash::valid("¡Ha sido editado con Exito!");
                Redirect::to("admin/herramientas");
            }
        }
    }

    public function borrar($id){
        $h = new Herramientas();
        if(!$h->delete((int)$id)){
            Flash::error("ERROR!");
            Redirect::to("admin/herramientas");
        }else{
            Flash::valid("Borrado con exito");
            Redirect::to("admin/herramientas");
        }
    }
}
