

var cuenta = 10;
var i;

function PonerCategorias(){


    cuenta = cuenta -1;
    for (i = 0; i <= cuenta; i++){


		//var div_grupoTcategorias=document.createElement('div');
		//div_grupoTcategorias.setAttribute('class', 'Tcategorias'+i);

        var el_aCategoria=document.createElement('a');
		el_aCategoria.setAttribute('class', 'aCategoria');
        el_aCategoria.setAttribute('id', 'aCategoria'+i);
		el_aCategoria.setAttribute('onclick', 'RedireccionBuscarEtiqueta(this);');

        var el_bCategoria=document.createElement('b');
		el_bCategoria.setAttribute('class', 'bCategoria');
        el_bCategoria.setAttribute('id', 'bCategoria'+i);
		el_bCategoria.setAttribute('href', '#');

        var txt_aCategoria=document.createTextNode("#Random"+i);
        var txt_bCategoria=document.createTextNode("|");

        el_aCategoria.appendChild(txt_aCategoria);
        el_bCategoria.appendChild(txt_bCategoria);

        TodasCategorias = document.getElementById('Tcategorias');

        TodasCategorias.appendChild(el_aCategoria);
        TodasCategorias.appendChild(el_bCategoria);



    }


}