var options={valueNames:['nombre','disponibilidad'], 
    page: 12, 
    plugins:[
        ListPagination({})
    ]
};
var herramientas= new List('herramientas',options);
$("#btn-editar").click(function(){
});

$("#btn-borrar").click(function(){
    $("#h_1").hide();
});
