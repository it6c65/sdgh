var options={valueNames:['nombre','disponibilidad'], 
    page: 12, 
    plugins:[
        ListPagination({})
    ]
};
var herramientas= new List('herramientas',options);
$("#btn-editar").click(function(){
});

$("#btn-borrar1").click(function(){
    $("#h_1").hide();
});

/*$("#btn-borrar5").click(function(){*/
    //$("#h_5").hide();
    //$.post("../core/borrar.php", "herramienta", );
/*});*/
