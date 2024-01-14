$(document).ready(function () {
	$('.js-example-basic-single').select2({
		theme: 'bootstrap4'
	});

	$('.js-example-basic-multiple').select2({
		theme: 'bootstrap4'
	});
});


var verificar = false;
function openModalRegistrar(id) {
	if (verificar == false) {
		$(".form-control").removeClass("is-invalid").removeClass("is-valid");
		$("#modalRegistrar").modal({ backdrop: "static", keyboard: false });
		$("#modalRegistrar").modal("show");
		$("#id" + id).val('');
	}
}

function AbrirPagina(urlx) {
	$.ajax({
		method: 'POST',
		url: urlx
	})
		.done(function (retorno) {
			$('.content-page').html(retorno);
		});
}


function soloNumeros(e) {
	tecla = (document.all) ? e.keyCode : e.which;
	if (tecla == 8) {
		return true;
	}
	// Patron de entrada, en este caso solo acepta numeros
	patron = /[0-9]/;
	tecla_final = String.fromCharCode(tecla);
	return patron.test(tecla_final);
}

function numerosDecimales(e) {
	tecla = (document.all) ? e.keyCode : e.which;
	if (tecla == 8) {
		return true;
	}
	// Patron de entrada, en este caso solo acepta numeros
	patron = /[0-9.]/;
	tecla_final = String.fromCharCode(tecla);
	return patron.test(tecla_final);
}

function validar_email(email) {
	var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email) ? true : false;
}

function soloLetras(e) {
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
	especiales = "8-37-39-46";
	tecla_especial = false
	for (var i in especiales) {
		if (key == especiales[i]) {
			tecla_especial = true;
			break;
		}
	}
	if (letras.indexOf(tecla) == -1 && !tecla_especial) {
		return false;
	}
}

var idioma_espanol = {
	select: {
		rows: ""
	},
	"sProcessing": "Procesando...",
	"sLengthMenu": "Mostrar _MENU_ registros",
	"sZeroRecords": "No se encontraron resultados",
	"sEmptyTable": "Ning&uacute;n dato disponible en esta tabla",
	"sInfo": "Mostrando <b style='color:#1b2c39'>(_START_ al _END_)</b> de <b style= 'color:#7067EB'>_TOTAL_</b> registros",
	"sInfoEmpty": "Registro del (0 al 0) total 0 registros",
	"sInfoFiltered": "(Filtrado de un total de <b style='color:blue'>_MAX_</b> registros)",
	"sInfoPostFix": "",
	"sSearch": "<b>Buscar:</b>",
	"sUrl": "",
	"sInfoThousands": ",",
	"sLoadingRecords": "<b> No se encontraron datos </b>",
	"oPaginate": {
		"sFirst": "Primero",
		"sLast": "Último",
		"sNext": "<small style='color:blue'>Siguiente</small>",
		"sPrevious": "<small style='color:#000006'>Anterior</small>"
	},
	"oAria": {
		"sSortAscending": ":Activar para ordenar la columna de manera ascendente",
		"sSortDescending": ":Activar para ordenar la columna de manera descendente"
	}

}


var opcionActiva = null;
function verificarSeleccionado(element, menuvertical = 1) {
	//console.log(element);
	$(opcionActiva).parent().parent().parent().removeClass("menu-is-opening menu-open");
	$(opcionActiva).parent().parent().css("display", "none");
	$(opcionActiva).parent().parent().prev().removeClass("active");
	$(opcionActiva).removeClass("bg-teal-active active");
	$(opcionActiva).parent().parent().prev().css("border-left-color", "");

	//console.log($(element).parent());
	if (!$(element).parent().hasClass("active") && menuvertical == 1) {
		$(element).parent().parent().parent().addClass("menu-is-opening menu-open");
		$(element).parent().parent().css("display", "block");
		$(element).parent().parent().prev().addClass("active");
		$(element).addClass("bg-teal-active active");
		$(element).parent().parent().prev().css("border-left-color", "#458d94");

		opcionActiva = element;
	}
}


function toastExito(mensaje) {
	var Toast = Swal.mixin({
		toast: true,
		position: 'top-end',
		showConfirmButton: false,
		timer: 3000
	});

	Toast.fire({
		icon: 'success',
		title: mensaje
	});
}

function toastError(mensaje) {
	var Toast = Swal.mixin({
		toast: true,
		position: 'top-end',
		showConfirmButton: false,
		timer: 3000
	});

	Toast.fire({
		icon: 'error',
		title: mensaje
	});

}