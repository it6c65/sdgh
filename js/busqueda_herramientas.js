var options={valueNames:['nombre','disponibilidad'], 
    page: 12, 
    plugins:[
        ListPagination({})
    ]
};
var herramientas= new List('herramientas',options);
$("#btn-editar1").click(function(){
    $("#confirm-editar").modal("show");
    $.post("../core/editar.php",{herramienta:1},function(result){
        $("#name_h").attr("value",result);
        $("#number_h").attr("value",result);
        $("#serial_h").attr("value",result);
        $("#status_h").attr("value",result);
    });
});
