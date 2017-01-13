// Validar campos de agregar material
function valida_material(){
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
// Validar campos del agregar herramienta
function valida_herramienta(){
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

    // compruebo si el campo serial esta vacio
    if ( $(serial).val()==""){
        $("#h_serial").addClass("has-warning");
        $(serial).notify("el campo no puede estar vacio","warn");
        return false;
    // compruebo si el campo serial tiene todos sus digitos
    }else if(!comprobar_serial.test($(serial).val())){
        $("#h_serial").addClass("has-error");
        $(serial).notify("Serial incompleto");
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
