$('#txt_usuario').keypress(function (e) {
  if (e.which === 13) {
    console.log('Hola mundo');
    //signup();
  }
});


$('#txt_contra').keypress(function (e) {
  if (e.which === 13) { // 13 = enter key --> which = codigo de la tecla
    console.log('contraseña');
    //signup();
  }else{
    console.log(e.which);
    console.log('No es enter');
  }
});


$('#btn-login').click(function(){
  signup();
});


function signup(){
  console.log("signup");
}