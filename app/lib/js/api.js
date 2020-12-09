var nombre_soporte_wpp = document.getElementsByName('nombre_soporte_wpp')[0].value;
var telefono_soporte_wpp = document.getElementsByName('telefono_soporte_wpp')[0].value;
var mail_soporte_wpp = document.getElementsByName('mail_soporte_wpp')[0].value;
var mensaje_soporte_wpp = document.getElementsByName('mensaje_soporte_wpp')[0].value;
var bodyMessage = replaceAllChar(nombre_soporte_wpp, ' ', '%20') + " %0A " + replaceAllChar(telefono_soporte_wpp, ' ', '%20') + " %0A " + mail_soporte_wpp + " %0A " + replaceAllChar(mensaje_soporte_wpp, ' ', '%20');
//console.log(bodyMessage);
var url_api = "https://api.whatsapp.com/send?";
var phone_destination = "phone=573104425470";
var text = "text=" + bodyMessage;
var source = "source=";
var data = "data=";
//window.location.href = url_api + phone_destination + "&" + text + "&" + source + "&" + data;
window.open(url_api + phone_destination + "&" + text + "&" + source + "&" + data, "Diseño Web");

$(document).on('click', '#enviarMensaje', function (e) {

});