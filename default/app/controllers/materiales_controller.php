<?php
/* carga el modelo materiales en todos los metodos de la clase */
Load::models("materiales");
/* no carga ninguna vista */
View::template(NULL);
View::select(NULL);
/* controlador para crear,editar y borrar materiales */
Class MaterialesController extends AppController{

    /* Agrega un nuevo material a la base de datos */
    public function crear(){
        /* Detecta si se ha mandado un metodo POST */
        if(Input::hasPost("materiales")){
            /* llama al modelo materiales con los datos del POST */
            $m = new materiales(Input::post("materiales"));
            /* Guarda los datos */
            if(!$m->save()){
                /* Si no los guarda dara este error */
                Flash::error("ERROR!");
                Redirect::to("admin/materiales");
            }else{
                /* Si se agregan, avisa y se dirigira a la vista materiales */
                Flash::valid("¡Ha sido agregado Correctamente!");
                Redirect::to("admin/materiales");
            }
        }
    }

        /* Modifica un material ya existente en la base de datos */
        public function editar(){
        /* Instancio el modelo materiales */
        $m = new Materiales();
        /* Detecta si se ha mandado un metodo POST */
        if(Input::hasPost("editar")){
            /* Busca el id del material */
            $m->find(Input::post("editar.id"));
            /* Le asigna el nombre mandado del POST */
            $m->nombre = Input::post("editar.nombre");
            /* Le asigna la cantidad de materiales mandadas por POST */
            $m->num = Input::post("editar.num");
            /* Le asigna el estatus mandado por POST */
            $m->status = Input::post("editar.status");
            /* Modifica el material */
            if(!$m->update()){
                /* Si falla dara este mensaje de error y se volvera a
                    * la vista materiales */
                Flash::error("ERROR!");
                Redirect::to("admin/materiales");
            }else{
                /* Si se modifican, avisa y se dirigira a la vista materiales */
                Flash::valid("¡Ha sido editado con Exito!");
                Redirect::to("admin/materiales");
            }
        }
    }

    /* Borrar un material 
        * @id = pide el id con el que se borrara el material */
    public function borrar($id){
        /* Instancio el modelo materiales */
        $m = new Materiales();
        /* Borrar el material por el id dado */
        if(!$m->delete((int)$id)){
            /* Si falla dara este mensaje de error y se volvera a
                * la vista de materiales */
            Flash::error("ERROR!");
            Redirect::to("admin/materiales");
        }else{
            /* Si se borra, avisa y se dirigira a la vista materiales */
            Flash::valid("Borrado con exito");
            Redirect::to("admin/materiales");
        }
    }
}
