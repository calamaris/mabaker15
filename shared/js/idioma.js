var objIdioma={
	"data":[
		{"sel":".tProducto", "content": ["Productos", "Products"]},
		{"sel":".tCatalogo", "content": ["Catálogo de productos", "Products Catalog"]},
		{"sel":".tChoco", "content": ["Chocolate", "Chocolate"]},
		{"sel":".tFondant", "content": ["Fondant", "Fondant"]},
		{"sel":".tgelatina", "content": ["Gelatina artística", "Artistic Jelly"]},
		{"sel":".tGalleta", "content": ["Galletas decoradas", "Decorates cookies"]},
		{"sel":".tBombon", "content": ["Bombón", "marshmallow"]},
		{"sel":".tPastel", "content": ["Pastel de crema", "Cream cake"]},
		{"sel":".tPanaderia", "content": ["Panadería", "Bakery"]}
	]
}

function cambiaIdioma () {
	for(i in objIdioma.data){
		var selector=objIdioma.data[i].sel;
		var content=objIdioma.data[i].content[lang];
		$(selector).html(content);
	}
}
