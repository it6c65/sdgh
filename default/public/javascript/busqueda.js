// Opciones de la busqueda js
// @options = opciones
// @valueNames = valores por los que buscara
// @page = max numero de elementos por pagina
// @plugins = complementos
// ListPagination = llamo a la funcion que hace la paginacion
var options={valueNames:['nombre','disponibilidad'], 
    page: 12, 
    plugins:[
        ListPagination({})
    ]
};
// crea la lista js almacen con las opciones anteriormente declaradas
var herramientas= new List('almacen',options);

