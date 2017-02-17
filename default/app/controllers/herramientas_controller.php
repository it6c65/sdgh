<?php
/* carga el modelo herramientas en todos los metodos de la clase */
Load::models("herramientas");
/* no carga ninguna vista */
View::template(NULL);
View::select(NULL);
/* controller para crear,editar y borrar herramientas */
Class HerramientasController extends AppController{

    /* Agrega una nueva herramienta a la base de datos */
    public function crear(){
        /* Detecta si se ha mandado un metodo POST */
        if(Input::hasPost("herramientas")){
            /* llama al modelo herramientas con los datos del POST */
            $h = new herramientas(Input::post("herramientas"));
            /* Guarda los datos */
            if(!$h->save()){
                /* Si no los guarda dara este error */
                Flash::error("ERROR!");
                Redirect::to("admin/herramientas");
            }else{
                /* Si se agregan, avisa y se dirigira a la vista herramientas */
                Flash::valid("¡Ha sido agregado Correctamente!");
                Redirect::to("admin/herramientas");
            }
        }
    }

    /* Modifica un herramienta ya existente en la base de datos */
    public function editar(){
        /* Instancio el modelo herramientas */
        $h = new Herramientas();
        /* Detecta si se ha mandado un metodo POST */
        if(Input::hasPost("editar")){
            /* Busca el id de la herramienta */
            $h->find(Input::post("editar.id"));
            /* Le asigna el nombre mandado del POST */
            $h->nombre = Input::post("editar.nombre");
            /* Le asigna la cantidad de herramientas mandadas por POST */
            $h->num = Input::post("editar.num");
            /* Le asigna el estatus mandado por POST */
            $h->status = Input::post("editar.status");
            /* Le asigna el serial mandado por POST */
            $h->serial = Input::post("editar.serial");
            /* Modifica la herramienta */
            if(!$h->update()){
                /* Si falla dara este mensaje de error y se volvera a
                    * la vista herramientas */
                Flash::error("ERROR!");
                Redirect::to("admin/herramientas");
            }else{
                /* Si se modifican, avisa y se dirigira a la vista herramientas */
                Flash::valid("¡Ha sido editado con Exito!");
                Redirect::to("admin/herramientas");
            }
        }
    }

    /* Borrar un herramienta 
        * @id = pide el id con el que se borrara la herramienta */
    public function borrar($id){
        /* Instancio el modelo herramientas */
        $h = new Herramientas();
        /* Borrar la herramienta por el id dado */
        if(!$h->delete((int)$id)){
            /* Si falla dara este mensaje de error y se volvera a
                * la vista herramientas */
            Flash::error("ERROR!");
            Redirect::to("admin/herramientas");
        }else{
            /* Si se borra, avisa y se dirigira a la vista herramientas */
            Flash::valid("Borrado con exito");
            Redirect::to("admin/herramientas");
        }
    }
}
