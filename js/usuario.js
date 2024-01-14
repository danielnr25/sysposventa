$('#txt_usuario').keypress(function (e) {
	if (e.which === 13) {
		signup();
	}
});

$('#btn-login').click(function () {
	signup();
});


$('#txt_contra').keypress(function (e) {
	if (e.which === 13) {
		signup();
	}
});

function signup() {
	let usuario = $('#txt_usuario').val();
	let clave = $('#txt_contra').val();

	if (verificarFormulario()) {
		$.ajax({
			url: "controllers/UserController.php",
			type: "POST",
			data: {
				accion: 'INICIAR_SESION',
				usuario: usuario,
				clave: clave
			},
			dataType: "json",
		}).done(function (resp) {
			if (resp.correcto == 1) {
				let timerInterval;
				Swal.fire({
					title: "<b>BIENVENIDO AL SISTEMA</b>",
					html: "Sera redireccionado en <b></b> milliseconds.",
					timer: 800,
					heightAuto: false,
					timerProgressBar: true,
					didOpen: () => {
						Swal.showLoading();
						const b = Swal.getHtmlContainer().querySelector("b");
						timerInterval = setInterval(() => {
							b.textContent = Swal.getTimerLeft();
						}, 100);
					},
					willClose: () => {
						clearInterval(timerInterval);
					},
				}).then((result) => {
					if (result.dismiss === Swal.DismissReason.timer) {
						window.open('views/index.php', '_self');
					}
				})
				//window.location.href = 'index.php';
			} else {
				Swal.fire(
					'<b style="color:red;">Advertencia</b>',
					resp.mensaje,
				);
				$('#txt_usuario').val('');
				$('#txt_contra').val('');
			}
		});
	}

}


function verificarFormulario() {
	let condicion = true;
	let usuario = $('#txt_usuario').val();
	let clave = $('#txt_contra').val();
	let errorUsu = document.getElementById('errorusu');
	let errorPass = document.getElementById('errorpass');
	if (usuario == '') {
		condicion = false;
		errorUsu.innerHTML = 'Ingresa tu usuario';
		errorUsu.className = 'incorrecto';

		errorPass.innerHTML = '';
		errorPass.className = '';

	} else if (clave == '') {
		condicion = false;

		errorPass.innerHTML = 'Ingresa tu contraseña';
		errorPass.className = 'incorrecto';

		errorUsu.innerHTML = '';
		errorUsu.className = '';
	} else {
		errorUsu.innerHTML = '';
		errorUsu.className = '';

		errorPass.innerHTML = '';
		errorPass.className = '';
	}

	return condicion;
}

