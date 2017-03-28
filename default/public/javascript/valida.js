// Validar campos de agregar material
function agregar_material(){
    // Declaro los campos a validar
    var nombre = "#materiales_nombre";
    var cantidad = "#materiales_num";
    var serial = "#materiales_serial";
    var estado = "#materiales_status";
    // Declaro las expresiones regulares a comprobar
    var comprobar_nombre = /([a-z]|[A-Z]|_){4,30}/;
    var comprobar_num = /([0-9]){1,9999}/;

    // compruebo el nombre si el nombre esta vacio
    if ( $(nombre).val()==""){
        $("#m_nombre").addClass("has-warning");
        $(nombre).notify("el campo no puede estar vacio","warn");
        return false;
    // compruebo si el nombre SOLO contiene letras
    }else if(!comprobar_nombre.test($(nombre).val())){
        $("#m_nombre").addClass("has-error");
        $(nombre).notify("No puede puede poner numeros");
        return false;
    }
    // compruebo si el campo no esta vacio
    if ( $(cantidad).val()==""){
        $("#m_num").addClass("has-warning");
        $(cantidad).notify("el campo no puede estar vacio","warn");
        return false;
    // compruebo si el campo es SOLAMENTE de numeros
    }else if(!comprobar_num.test($(cantidad).val())){
        $("#m_num").addClass("has-error");
        $(cantidad).notify("No puede puede poner letras");
        return false;
    }

    // compruebo si ha seleccionado una opcion
    if ( $(estado).val()==0){
        $("#m_status").addClass("has-warning");
        $(estado).notify("Seleccione una opcion","warn");
        return false;
    }
    return true;
}
// Validar campos de editar material
function editar_material(){
    // Declaro los campos a validar
    var nombre = "#editar_nombre";
    var cantidad = "#editar_num";
    var serial = "#editar_serial";
    var estado = "#editar_status";
    // Declaro las expresiones regulares a comprobar
    var comprobar_nombre = /([a-z]|[A-Z]|_){4,30}/;
    var comprobar_num = /([0-9]){1,9999}/;

    // compruebo el nombre si el nombre esta vacio
    if ( $(nombre).val()==""){
        $("#e_nombre").addClass("has-warning");
        $(nombre).notify("el campo no puede estar vacio","warn");
        return false;
    // compruebo si el nombre SOLO contiene letras
    }else if(!comprobar_nombre.test($(nombre).val())){
        $("#e_nombre").addClass("has-error");
        $(nombre).notify("No puede puede poner numeros");
        return false;
    }
    // compruebo si el campo no esta vacio
    if ( $(cantidad).val()==""){
        $("#e_num").addClass("has-warning");
        $(cantidad).notify("el campo no puede estar vacio","warn");
        return false;
    // compruebo si el campo es SOLAMENTE de numeros
    }else if(!comprobar_num.test($(cantidad).val())){
        $("#e_num").addClass("has-error");
        $(cantidad).notify("No puede puede poner letras");
        return false;
    }

    // compruebo si ha seleccionado una opcion
    if ( $(estado).val()==0){
        $("#e_status").addClass("has-warning");
        $(estado).notify("Seleccione una opcion","warn");
        return false;
    }
    return true;
}

// Validar campos del agregar herramienta
function agregar_herramienta(){
    // Declaro los campos a validar
    var nombre = "#herramientas_nombre";
    var cantidad = "#herramientas_num";
    var serial = "#herramientas_serial";
    var estado = "#herramientas_status";
    // Declaro las expresiones regulares a comprobar
    var comprobar_nombre = /([a-z]|[A-Z]|_){4,30}/;
    var comprobar_num = /([0-9]){1,9999}/;
	var comprobar_serial=/([a-z]|[A-Z]|[0-9]|_){8}/;

    // compruebo el nombre si el nombre esta vacio
    if ( $(nombre).val()==""){
        $("#h_nombre").addClass("has-warning");
        $(nombre).notify("el campo no puede estar vacio","warn");
        return false;
    // compruebo si el nombre SOLO contiene letras
    }else if(!comprobar_nombre.test($(nombre).val())){
        $("#h_nombre").addClass("has-error");
        $(nombre).notify("No puede puede poner numeros");
        return false;
    }
    // compruebo si el campo no esta vacio
    if ( $(cantidad).val()==""){
        $("#h_num").addClass("has-warning");
        $(cantidad).notify("el campo no puede estar vacio","warn");
        return false;
    // compruebo si el campo es SOLAMENTE de numeros
    }else if(!comprobar_num.test($(cantidad).val())){
        $("#h_num").addClass("has-error");
        $(cantidad).notify("No puede puede poner letras");
        return false;
    }

    if( comprobar_serial($(serial).val()) ){
        $("h_serial").addClass("has-error");
        $(serial).notify("No puede ser mayor de 8 caracteres");
        return false;
    }

    // compruebo si ha seleccionado una opcion
    if ( $(estado).val()==0){
        $("#h_status").addClass("has-warning");
        $(estado).notify("Seleccione una opcion","warn");
        return false;
    }
    return true;
}
// Validar campos de editar Herramienta
function editar_herramienta(){
    // Declaro los campos a validar
    var nombre = "#editar_nombre";
    var cantidad = "#editar_num";
    var serial = "#editar_serial";
    var estado = "#editar_status";
    // Declaro las expresiones regulares a comprobar
    var comprobar_nombre = /([a-z]|[A-Z]|_){4,30}/;
    var comprobar_num = /([0-9]){1,9999}/;

    // compruebo el nombre si el nombre esta vacio
    if ( $(nombre).val()==""){
        $("#e_nombre").addClass("has-warning");
        $(nombre).notify("el campo no puede estar vacio","warn");
        return false;

    // compruebo si el nombre SOLO contiene letras
    }else if(!comprobar_nombre.test($(nombre).val())){
        $("#e_nombre").addClass("has-error");
        $(nombre).notify("No puede puede poner numeros");
        return false;
    }

    // compruebo si el campo no esta vacio
    if ( $(cantidad).val()==""){
        $("#e_num").addClass("has-warning");
        $(cantidad).notify("el campo no puede estar vacio","warn");
        return false;

    // compruebo si el campo es SOLAMENTE de numeros
    }else if(!comprobar_num.test($(cantidad).val())){
        $("#e_num").addClass("has-error");
        $(cantidad).notify("No puede puede poner letras");
        return false;
    }

    if( !comprobar_serial($(serial).val()) ){
        $("h_serial").addClass("has-error");
        $(serial).notify("No puede ser mayor de 8 caracteres");
        return false;
    }

    // compruebo si ha seleccionado una opcion
    if ( $(estado).val()==0){
        $("#e)status").addClass("has-warning");
        $(estado).notify("Seleccione una opcion","warn");
        return false;
    }
    return true;
}

// Valida los campos para cambiar clave
function change_password(){
    // Camnpos a validar (HTML ids)
    var user = "#usuarios_id";
    var pass = "#usuarios_password";
    var conf = "#confirmation";
    // comprueba si un usuario esta seleccionado
    if ($(user).val()==0){
        $("#cc_user").addClass("has-danger");
        $(user).notify("Seleccione un usuario",{position:"right middle"});
        return false;
    }
    // comprueba que el campo de contraseña no este vacio
    if ($(pass).val()==""){
        $("#cc_pass").addClass("has-danger");
        $(pass).notify("La nueva contraseña no puede estar vacia",{position:"right middle"});
        return false;
    }
    // comprueba que el campo de confirmacion no este vacio
    if ($(conf).val()==""){
        $("#cc_conf").addClass("has-danger");
        $(conf).notify("La confirmacion de la contraseña no puede estar vacia",{position:"right middle"});
        return false;
    // comprueba que el campo de confirmacion de clave sea igual al campo contraseña
    }else if($(conf).val()!=$(pass).val()){
        $("#cc_conf").addClass("has-danger");
        $(conf).notify("Los campos de contraseña no son iguales",{position:"right middle"});
        return false;
    }

    return true;
}
