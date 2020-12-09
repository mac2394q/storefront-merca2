function sendEventApp(sendType, route, params, ContentResponse) {
    run = true;
    if (run == true) {
        run = false;
        $.ajax({
            data: params,
            url: route,
            type: sendType,
            dataType: 'html',
            beforeSend: function () {
                $(ContentResponse).html("Cargando espere por favor");
            },
            success: function (response) {
                $(ContentResponse).html(response);
            },
            error: function () {
                console.log('error ');
            },
            complete: function () {}
        }).fail(function (jqXHR, textStatus, errorThrown) {
            if (jqXHR.status === 0) {
                $(ContentResponse).html('Sin conexion: Verifica tu conexion.');
            } else if (jqXHR.status == 404) {
                $(ContentResponse).html('Página solicitada no encontrada[404].');
            } else if (jqXHR.status == 500) {
                $(ContentResponse).html('Error interno del servidor [500].');
            } else if (textStatus === 'parsererror') {
                $(ContentResponse).html('Solicitud de archivo json fallida o error de parser');
            } else if (textStatus === 'timeout') {
                $(ContentResponse).html('Error de tiempo de espera.');
            } else if (textStatus === 'abort') {
                $(ContentResponse).html('Petición abortada..');
            } else {
                $(ContentResponse).html('Error no detectado : ' + jqXHR.responseText);
            }
        });
    }
}

function sendEventApp_(sendType, route, params, sync, ContentResponse) {
    run = true;
    if (run == true) {
        run = false;
        $.ajax({
            async: sync,
            data: params,
            url: route,
            type: sendType,
            dataType: 'html',
            beforeSend: function () {
                $(ContentResponse).html("Cargando espere por favor");
            },
            success: function (response) {
                $(ContentResponse).html(response);
            },
            error: function () {
                console.log('error ');
            },
            complete: function () {}
        }).fail(function (jqXHR, textStatus, errorThrown) {
            if (jqXHR.status === 0) {
                $(ContentResponse).html('Sin conexion: Verifica tu conexion.');
            } else if (jqXHR.status == 404) {
                $(ContentResponse).html('Página solicitada no encontrada[404].');
            } else if (jqXHR.status == 500) {
                $(ContentResponse).html('Error interno del servidor [500].');
            } else if (textStatus === 'parsererror') {
                $(ContentResponse).html('Solicitud de archivo json fallida o error de parser');
            } else if (textStatus === 'timeout') {
                $(ContentResponse).html('Error de tiempo de espera.');
            } else if (textStatus === 'abort') {
                $(ContentResponse).html('Petición abortada..');
            } else {
                $(ContentResponse).html('Error no detectado : ' + jqXHR.responseText);
            }
        });
    }
}

function sendEventFormDataApp(sendType, route, formData, ContentResponse) {
    console.log("sendEventFormDataApp");
    var run = true;
    if (run == true) {
        run = false;
        $.ajax({
            data: formData,
            url: route,
            type: sendType,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $(ContentResponse).html('Cargando Espere por favor');
            },
            success: function (response) {
                $(ContentResponse).html(response);
            },
            error: function () {
                console.log('error ');
            },
            complete: function () {}
        }).fail(function (jqXHR, textStatus, errorThrown) {
            if (jqXHR.status === 0) {
                $(ContentResponse).html('Sin conexion: Verifica tu conexion.');
            } else if (jqXHR.status == 404) {
                $(ContentResponse).html('Página solicitada no encontrada[404].');
            } else if (jqXHR.status == 500) {
                $(ContentResponse).html('Error interno del servidor [500].');
            } else if (textStatus === 'parsererror') {
                $(ContentResponse).html('Solicitud de archivo json fallida o error de parser');
            } else if (textStatus === 'timeout') {
                $(ContentResponse).html('Error de tiempo de espera.');
            } else if (textStatus === 'abort') {
                $(ContentResponse).html('Petición abortada..');
            } else {
                $(ContentResponse).html('Error no detectado : ' + jqXHR.responseText);
            }
        });
    }
}

function replaceAll(text) {
    //text=text.replace(/\./g,"");
    //text=text.replace(/\$/g,"");
    text = text.replace(/[^a-z0-9]/gi, '');
    return text;
}

function verificarDispositivo() {
    var status = false;
    if (navigator.userAgent.match(/Android/i) ||
        navigator.userAgent.match(/webOS/i) ||
        navigator.userAgent.match(/iPhone/i) ||
        navigator.userAgent.match(/iPad/i) ||
        navigator.userAgent.match(/iPod/i) ||
        navigator.userAgent.match(/BlackBerry/i) ||
        navigator.userAgent.match(/Windows Phone/i)) {
        return true;
    }
}

function navigation(route, params, ContentResponse) {
    run = true;
    if (run == true) {
        run = false;
        $.ajax({
            url: route,
            data: params,
            type: 'post',
            success: function (response) {
                $(ContentResponse).html(response);
            },
            error: function () {
                console.log('error ');
            },
            complete: function () {}
        }).fail(function (jqXHR, textStatus, errorThrown) {
            if (jqXHR.status === 0) {
                $(ContentResponse).html('Sin conexion: Verifica tu conexion.');
            } else if (jqXHR.status == 404) {
                $(ContentResponse).html('Página solicitada no encontrada[404].');
            } else if (jqXHR.status == 500) {
                $(ContentResponse).html('Error interno del servidor [500].');
            } else if (textStatus === 'parsererror') {
                $(ContentResponse).html('Solicitud de archivo json fallida o error de parser');
            } else if (textStatus === 'timeout') {
                $(ContentResponse).html('Error de tiempo de espera.');
            } else if (textStatus === 'abort') {
                $(ContentResponse).html('Petición abortada..');
            } else {
                $(ContentResponse).html('Error no detectado : ' + jqXHR.responseText);
            }
        });
    }

}

function appendObjectToLocalStorage(obj) {
    var localStorageKeyName = 'data';
    var carrito = [],
        dataInLocalStorage = localStorage.getItem(localStorageKeyName);
    if (dataInLocalStorage !== null) {
        carrito = JSON.parse(dataInLocalStorage);
    }
    carrito.push(obj);
    localStorage.setItem(localStorageKeyName, JSON.stringify(carrito));
}
//document.getElementsByName("actividadUsuario")[0].value
function indicator__value() {
    var localStorageKeyName = 'data';
    //var indicador = document.getElementById('indicadorCarrito');
    var indicador = 0;
    var carrito = [],
        dataInLocalStorage = localStorage.getItem(localStorageKeyName);
    if (dataInLocalStorage !== null) {
        carrito = JSON.parse(dataInLocalStorage);
    }
    carrito.forEach(function (x, i) {
        indicador++;
    });
    $("#" + "indicadorCarrito").html(indicador);
}

function indicator__subtotal() {
    alert('test');
    var localStorageKeyName = 'data';
    var indicador = 0;
    var carrito = [],
        dataInLocalStorage = localStorage.getItem(localStorageKeyName);
    if (dataInLocalStorage !== null) {
        carrito = JSON.parse(dataInLocalStorage);
    }
    var subtTotal = 0;
    carrito.forEach(function (x, i) {
        subtTotal = subtTotal + (parseFloat(x.precio) * parseFloat(x.cant));
    });
    $("#" + "subtotal").html("$" + subtTotal);
    $("#" + "subtotal2").html("$" + subtTotal);
}

function dropcart__products_list_render() {
    var url = 'http://merca2.cf/vendor/merca2/images/sprite.svg#cart-20';
    var indicador = 0;
    var localStorageKeyName = 'data';
    var render;
    var urlImageSVG = "http://merca2.cf/vendor/merca2/images/";
    var urlImagenProducto = "http://portalx.net/erp_sarp/documents/produit/";
    var urlProduct = routesAppPlatform() + "shop/productos.php?typeView=profile&rowid=";
    var subtTotal = 0;
    var carrito = [],
        dataInLocalStorage = localStorage.getItem(localStorageKeyName);
    if (dataInLocalStorage !== null) {
        carrito = JSON.parse(dataInLocalStorage);
    }
    carrito.forEach(function (x, i) {
        var urlProductview = urlProduct + x.id;
        indicador++;
        subtTotal = subtTotal + (parseFloat(x.precio) * parseFloat(x.cant));
        var imagen = x.img;
        render += '<div class="dropcart__product">'
        render += '   <div class="product-image dropcart__product-image">'
        render += '        <a href="' + urlProductview + '" class="product-image__body"><img class="product-image__img" src="' + imagen + '" alt=""></a>'
        render += '   </div>'
        render += '   <div class="dropcart__product-info">'
        render += '        <div class="dropcart__product-name"><a href="' + urlProductview + '">' + x.label + '</a></div>'
        render += '        <ul class="dropcart__product-options">'
        render += '        </ul>'
        render += '        <div class="dropcart__product-meta"><span class="dropcart__product-quantity">' + x.cant + '</span> x <span class="dropcart__product-price">$' + x.precio + ' - ' + x.pxc + '</span></div>'
        render += '   </div>'
        render += '        <button type="button" name="' + x.label + '" dir="' + i + '" id="eliminarItemCarrito" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">'
        render += '           <svg width="10px" height="10px">'
        render += '               <use xlink:href="' + urlImageSVG + 'sprite.svg#cross-10"></use>'
        render += '           </svg>'
        render += '        </button>'
        render += '</div>';
    });
    if (parseInt(indicador) > 0) {
        $("#" + "btnCarrito").html('<a class="btn btn-secondary" href="' + routesAppPlatform() + 'shop/shop.php?typeView=cart">Carrito</a>');
    } else {
        $("#" + "btnCarrito").html('<a class="btn btn-secondary" href="' + routesAppPlatform() + 'shop/shop.php?typeView=empty">Carrito</a>');
    }
    if (parseInt(indicador) > 0) {
        $("#" + "btnCarrito_").html('<a  href="' + routesAppPlatform() + 'shop/shop.php?typeView=cart" class="indicator__button"><span class="indicator__area"><svg width="20px" height="20px"><use xlink:href="' + url + '"></use></svg> <span id="indicadorCarritoRender2" class="indicator__value">0</span></span></a>');
    } else {
        $("#" + "btnCarrito_").html('<a  href="' + routesAppPlatform() + 'shop/shop.php?typeView=empty" class="indicator__button"><span class="indicator__area"><svg width="20px" height="20px"><use xlink:href="' + url + '"></use></svg> <span id="indicadorCarritoRender2" class="indicator__value">0</span></span></a>');
    }
    $("#" + "indicadorCarritoRender").html(indicador);
    $("#" + "indicadorCarritoRender2").html(indicador);
    $("#" + "dropcart__products-list_render").html(render);
    $("#" + "subtotal").html("$" + subtTotal);
    $("#" + "subtotal2").html("$" + subtTotal);
}
$(document).on('click', '#addCarrito', function (e) {
    var label = $(this).attr('title'),
        cant = $(this).attr('name'),
        id = $(this).attr('dir'),
        img = $(this).attr('reserved'),
        precio = $(this).attr('lang').replace(/,/g, "");
    var carrito = {
        label: label,
        cant: cant,
        id: id,
        img: img,
        precio: precio,
        pxc: parseFloat(precio) * parseFloat(cant)
    };
    swal({
            title: "Agregar a Carrito de Compras",
            text: "Esta seguro de agregar " + label + "  al carrito de compras. ? ",
            icon: "success",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                // Append to my localStorage
                appendObjectToLocalStorage(carrito);
                dropcart__products_list_render();
                // swal({
                //     title: "Producto Agregado",
                //     text: label + " Fue agregado al carrito de compras",
                //     icon: "success",
                //     button: false,
                //     timer: 6000
                // });
            }
        });
    // Clean data
    label.value = '';
    cant.value = '';
    id.value = '';
    img.value = '';
    precio.value = '';
});
$(document).on('click', '#addCarritoX', function (e) {
    var cantidad = document.getElementsByName("qty_" + $(this).attr('name'))[0].value;
    var label = $(this).attr('dir'),
        cant = cantidad,
        id = $(this).attr('name'),
        img = document.getElementsByName("img_" + $(this).attr('name'))[0].value,
        precio = $(this).attr('lang').replace(/,/g, "");
    var carrito = {
        label: label,
        cant: cant,
        id: id,
        img: img,
        precio: precio,
        pxc: parseFloat(precio) * parseFloat(cant)
    };
    swal({
            title: "Agregar a Carrito de Compras",
            text: "Esta seguro de agregar " + cantidad + " de " + label + "  al carrito de compras ",
            icon: "success",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                // Append to my localStorage
                appendObjectToLocalStorage(carrito);
                dropcart__products_list_render();
                swal({
                    title: "Producto Agregado",
                    text: label + " Fue agregado al carrito de compras",
                    icon: "success",
                    button: false,
                    timer: 6000
                });
            }
        });
    // Clean data
    label.value = '';
    cant.value = '';
    id.value = '';
    img.value = '';
    precio.value = '';
});
$(document).on('click', '#eliminarItemCarrito', function (e) {
    var id = $(this).attr('dir');
    var label = $(this).attr('name');
    var localStorageKeyName = 'data';
    swal({
            title: "Eliminar Producto del Carrito de Compras",
            text: "Esta seguro que desea eliminar  " + label + " del carrito de compras",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                var carrito = [],
                    dataInLocalStorage = localStorage.getItem(localStorageKeyName);
                carrito = JSON.parse(dataInLocalStorage);
                carrito.splice(id, 1);
                localStorage.setItem(localStorageKeyName, JSON.stringify(carrito));
                dropcart__products_list_render();
            }
        });
});
$(document).on('click', '#eliminarItemCarrito2', function (e) {
    var id = $(this).attr('dir');
    var label = $(this).attr('name');
    var localStorageKeyName = 'data';
    swal({
            title: "Eliminar Producto del Carrito de Compras",
            text: "Esta seguro que desea eliminar  " + label + " del carrito de compras",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                var carrito = [],
                    dataInLocalStorage = localStorage.getItem(localStorageKeyName);
                carrito = JSON.parse(dataInLocalStorage);
                carrito.splice(id, 1);
                localStorage.setItem(localStorageKeyName, JSON.stringify(carrito));
                dropcart__products_list_render();
                viewCart();
            }
        });
});
$(document).on('click', '#buscarProducto', function (e) {
    var categorias = document.getElementsByName('selectorMenuCategoria')[0].value;
    var etiquetaBusquedad = document.getElementsByName('etiquetaBusquedad_')[0].value;
    console.log("busquedad -> " + etiquetaBusquedad);
    var typeView = "search";
    var route = routesAppPlatform() + "shop/productos.php?typeView=" + typeView + "&etiqueta=" + etiquetaBusquedad + "&categoria=" + categorias;
    console.log(route);
    window.location.replace(route);
});
$(document).on('click', '#buscarProducto2', function (e) {
    var categorias = document.getElementsByName('selectorMenuCategoria')[0].value;
    var etiquetaBusquedad = document.getElementsByName('etiquetaBusquedad2')[0].value;
    console.log("busquedad -> " + etiquetaBusquedad);
    var typeView = "search";
    var route = routesAppPlatform() + "shop/productos.php?typeView=" + typeView + "&etiqueta=" + etiquetaBusquedad + "&categoria=" + categorias;
    console.log(route);
    window.location.replace(route);
});
$(document).on('click', '#wpSend', function (e) {
    // console.log(route);
    // window.location.replace(route);
    window.open("https://stroyka.html.themeforest.scompiler.ru/themes/green-ltr/account-edit-address.html", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
});

function typeView() {
    var typeView = document.getElementsByName('typeView')[0].value;
    switch (typeView) {
        case 'cart':
            viewCart();
            break;
        case 'empty':
            break;
        case 'checkout':
            checkout();
            break;
    }
}

function viewCart() {
    var indicador = 0;
    var localStorageKeyName = 'data';
    var render;
    var urlImageSVG = "http://merca2.cf/vendor/merca2/images/";
    var urlImagenProducto = "http://portalx.net/erp_sarp/documents/produit/";
    var urlProduct = routesAppPlatform() + "shop/productos.php?typeView=profile&rowid=";
    var subtTotal = 0;
    var carrito = [],
        dataInLocalStorage = localStorage.getItem(localStorageKeyName);
    if (dataInLocalStorage !== null) {
        carrito = JSON.parse(dataInLocalStorage);
    }
    carrito.forEach(function (x, i) {
        var urlProductview = urlProduct + x.id;
        indicador++;
        subtTotal = subtTotal + (parseFloat(x.precio) * parseFloat(x.cant));
        var imagen = x.img;
        render += '<tr class="cart-table__row">'
        render += '    <td class="cart-table__column cart-table__column--image"><div class="product-image"><a href="' + urlProductview + '" class="product-image__body"><img class="product-image__img" src="' + x.img + '" alt=""></a></div></td>'
        render += '    <td class="cart-table__column cart-table__column--product"><a href="" class="cart-table__product-name">' + x.label + '</a></td>'
        render += '    <td class="cart-table__column cart-table__column--price" data-title="Precio">' + x.precio + '</td>'
        render += '    <td class="cart-table__column cart-table__column--quantity" data-title="Cantidad">' + x.cant + '</td>'
        render += '    <td class="cart-table__column cart-table__column--total" data-title="Total">' + x.pxc + '</td>'
        render += '    <td class="cart-table__column cart-table__column--remove"><button type="button" name="' + x.label + '" dir="' + x.i + '" id="eliminarItemCarrito2" class="btn btn-light btn-sm btn-svg-icon"><svg width="12px" height="12px"><use xlink:href="' + urlImageSVG + 'sprite.svg#cross-12"></use> </svg></button></td>'
        render += '</tr>';
    });
    // if(parseInt(indicador)>0){ $("#" + "btnCarrito").html('<a class="btn btn-secondary" href="'+routesAppPlatform()+'shop/shop.php?typeView=cart">Carrito</a>'); }
    // else{ $("#" + "btnCarrito").html('<a class="btn btn-secondary" href="'+routesAppPlatform()+'shop/shop.php?typeView=empty">Carrito</a>'); }
    $("#" + "bodyRender").html(render);
    // $("#" + "indicadorCarrito2").html(indicador);
    // $("#" + "dropcart__products-list_render").html(render);
    $("#" + "total").html("$" + subtTotal);
    $("#" + "subtotal").html("$" + subtTotal);
    $("#" + "subtotal_cart").html("$" + subtTotal);
    $("#" + "total_cart").html("$" + subtTotal);
}

function checkout() {
    var indicador = 0;
    var localStorageKeyName = 'data';
    var render;
    var urlImageSVG = "http://merca2.cf/vendor/merca2/images/";
    var urlImagenProducto = "http://portalx.net/erp_sarp/documents/produit/";
    var urlProduct = routesAppPlatform() + "shop/productos.php?typeView=profile&rowid=";
    var subtTotal = 0;
    var carrito = [],
        dataInLocalStorage = localStorage.getItem(localStorageKeyName);
    if (dataInLocalStorage !== null) {
        carrito = JSON.parse(dataInLocalStorage);
    }
    carrito.forEach(function (x, i) {
        var urlProductview = urlProduct + x.id;
        indicador++;
        subtTotal = subtTotal + (parseFloat(x.precio) * parseFloat(x.cant));
        var imagen = x.img;
        render += '<tr>'
        render += ' <td>' + x.label + '</td>'
        render += '  <td>' + x.pxc + '</td>'
        render += '</tr>';
    });
    $("#" + "bodyRenderCheckout").html(render);
    $("#" + "subtotal_checkout").html("$" + subtTotal);
    $("#" + "total_checkout").html("$" + subtTotal);
}
$(document).on('click', '#logout', function (e) {
    var route = routeRequest();
    navigation(route, arrayRequest = {
        'controller': 'sesionController',
        'method': 'cerrarSesion',
    }, '#smg');
});
$(document).on('click', '#login', function (e) {
    var email = document.getElementsByName('email')[0].value;
    var clave = document.getElementsByName('clave')[0].value;

    var route = routeRequest();

    if (email.length > 0 && clave.length > 0) {
        navigation(route, arrayRequest = {
            'controller': 'sesionController',
            'method': 'validarSesion',
            'email': email,
            'clave': clave
        }, '#smgLogin');
    } else {
        swal({
            title: "Error de validación",
            text: "Actualmente hay campos obligatorios pendientes !",
            icon: "warning",
            button: false,
            timer: 6000
        });
    }

});
$(document).on('click', '#login2', function (e) {
    var email = document.getElementsByName('mail2')[0].value;
    var clave = document.getElementsByName('clave2')[0].value;
    var route = routeRequest();
    if (email.length > 0 && clave.length > 0) {
        navigation(route, arrayRequest = {
            'controller': 'sesionController',
            'method': 'validarSesion',
            'email': email,
            'clave': clave
        }, '#smgLogin');
    } else {
        swal({
            title: "Error de validación",
            text: "Actualmente hay campos obligatorios pendientes !",
            icon: "warning",
            button: false,
            timer: 6000
        });
    }
});
$(document).on('click', '#registrarAfiliado', function (e) {
    var nombre_1 = document.getElementsByName('primerNombre')[0].value;
    var nombre_2 = document.getElementsByName('segundoNombre')[0].value;
    var nombre = nombre_1 + " " + nombre_2;
    var identificacion = document.getElementsByName('identificacion')[0].value;
    var direccion = document.getElementsByName('direccion')[0].value;
    var ciudad = document.getElementsByName('ciudad')[0].value;
    var telefono = document.getElementsByName('telefono')[0].value;
    var telefono2 = document.getElementsByName('telefono2')[0].value;
    var codigo = document.getElementsByName('referido')[0].value;
    var email = document.getElementsByName('email_')[0].value;
    var usuario = document.getElementsByName('usuario')[0].value;
    var clave = document.getElementsByName('clave_')[0].value;
    var route = routeRequest();
    var terminos = document.getElementById('checkout-terms');

    if (nombre.length > 1 && identificacion.length > 1 && direccion.length > 5 &&
        ciudad.length > 5 && telefono.length > 5 && email.length > 6 && usuario.length > 5 && clave > 5) {


        if (terminos.checked) {
            navigation(route, arrayRequest = {
                'controller': 'tercerosController',
                'method': 'registrarTerceros',
                'nombre': nombre,
                'identificacion': identificacion,
                'direccion': direccion,
                'ciudad': ciudad,
                'telefono': telefono,
                'telefono2': telefono2,
                'codigo': codigo,
                'email': email,
                'usuario': usuario,
                'clave': clave
            }, '#smgRegistro');
        } else {
            swal({
                title: "Terminos y Condiciones",
                text: "Debe Aceptar los terminos y condiciones para registrarse. ",
                icon: "warning",
                button: false,
                timer: 6000
            });
        }
    } else {
        swal({
            title: "Campos faltantes obligatorios",
            text: "Debe llenar los campos ubligatorios del formulario ",
            icon: "warning",
            button: false,
            timer: 6000
        });
    }
});

function countStorage(arrayData) {
    var count = 0;
    var localStorageKeyName = 'data';
    if (arrayData !== null) {
        carrito = JSON.parse(arrayData);
        carrito.forEach(function (x, i) {
            console.log(x.label);
            count++;
        });
        return count;
    } else {
        return count;
    }
}
$(document).on('click', '#realizarPedido', function (e) {
    console.log('RealizarPedido');
    var localStorageKeyName = 'data';
    var arrayData = localStorage.getItem(localStorageKeyName);
    var numberProduct = parseInt(countStorage(arrayData));
    var total = 0;
    var afiliado = false;
    var estadoSesion = document.getElementsByName('sesion')[0].value;
    var idsesion = document.getElementsByName('id')[0].value;

    
  
    console.log(estadoSesion);
    if (numberProduct == 0) {
        swal({
            title: "Carrito de Compras",
            text: "Actualmente no posee productos en su carrito de compras ",
            icon: "warning",
            button: false,
            dangerMode: true,
            timer: 6000
        });
    } else {
        if (estadoSesion == 0) {
            // var crearAfiliado = document.getElementById('checkout-create-account');
            // if (crearAfiliado.checked) {
            //     var nombre_1 = document.getElementsByName('primerNombre')[0].value;
            //     var nombre_2 = document.getElementsByName('segundoNombre')[0].value;
            //     var nombre = nombre_1 + " " + nombre_2;
            //     var identificacion = document.getElementsByName('identificacion')[0].value;
            //     var direccion = document.getElementsByName('direccion')[0].value;
            //     var ciudad = document.getElementsByName('ciudad')[0].value;
            //     var telefono = document.getElementsByName('telefono')[0].value;
            //     var telefono2 = document.getElementsByName('telefono2')[0].value;
            //     var codigo = document.getElementsByName('referido')[0].value;
            //     var email = document.getElementsByName('email_')[0].value;
            //     afiliado = true;
            //     formData.append("nombre", nombre);
            //     formData.append("identificacion", identificacion);
            //     formData.append("direccion", direccion);
            //     formData.append("ciudad", ciudad);
            //     formData.append("telefono", telefono);
            //     formData.append("telefono2", telefono2);
            //     formData.append("codigo", codigo);
            //     formData.append("email", email);
            // }
        }
        var terminos = document.getElementById('checkout-terms');
        var formData = new FormData();

        if (terminos.checked) {
            if (estadoSesion == 1) {
               
                    var carrito = JSON.parse(arrayData);
                    formData.append("afiliado", afiliado);
                    formData.append("idsesion", idsesion);
                    formData.append("nproductos", numberProduct);
                    formData.append("domicilio", 3000);

                    formData.append("controller", 'pedidosController');
                    formData.append("method", 'registroAfiliadoPedido');
                    carrito.forEach(function (x, i) {
                        formData.append("nombre" + i, x.label);
                        formData.append("idproducto" + i, x.id);
                        formData.append("cantidad" + i, x.cant);
                        formData.append("precio" + i, x.precio);
                        formData.append("pxc" + i, x.pxc);
                        total += x.pxc;
                    });
                    formData.append("total", total);
                    if (total >= 10000) {
                    var route = routeRequest();
                    console.log('send');
                    sendEventFormDataApp('post', route, formData, '#smg_checkout');
                    swal({
                        title: "Pedido realizado con exito",
                        text: "Puedes ver el estado y seguimiento de su pedido en la opcion seguimiento de orden. ",
                        icon: "success",
                        button: false,
                        timer: 6000
                    });
                    localStorage.clear();
                    dropcart__products_list_render();
                    viewCart();

                } else {
                    swal({
                        title: "Valor de la compra",
                        text: "Recuerde que los pedidos deben ser superiores o igual a $10.000. ",
                        icon: "warning",
                        button: false,
                        timer: 6000
                    });
                }
            } else {
                swal({
                    title: "Estado de la sesion",
                    text: "Debe iniciar sesion para realizar su pedido. ",
                    icon: "warning",
                    button: false,
                    timer: 6000
                });
            }
        } else {
            swal({
                title: "Terminos y Condiciones ",
                text: "Debe aceptar los terminos y condiciones para proceder a solitar su pedido",
                icon: "warning",
                button: false,
                timer: 6000
            });
        }
    }
});
$(document).on('click', '#enviarMensaje', function (e) {
    var nombre_soporte_wpp = document.getElementsByName('nombre_soporte_wpp')[0].value;
    var telefono_soporte_wpp = document.getElementsByName('telefono_soporte_wpp')[0].value;
    var mail_soporte_wpp = document.getElementsByName('mail_soporte_wpp')[0].value;
    var mensaje_soporte_wpp = document.getElementsByName('mensaje_soporte_wpp')[0].value;
    var bodyMessage = replaceAllChar(nombre_soporte_wpp, ' ', '%20') + " %0A " + replaceAllChar(telefono_soporte_wpp, ' ', '%20') + " %0A " + mail_soporte_wpp + " %0A " + replaceAllChar(mensaje_soporte_wpp, ' ', '%20');
    //console.log(bodyMessage);
    var url_api = "https://api.whatsapp.com/send?";
    var phone_destination = "phone=573053508110";
    var text = "text=" + bodyMessage;
    var source = "source=";
    var data = "data=";
    window.open(url_api + phone_destination + "&" + text + "&" + source + "&" + data, "Diseño Web");
});

function replaceAllChar(text, replaceSymbol, replaceString) {
    var phrase = text;
    var stripped = phrase.split(replaceSymbol).join(replaceString);
    return stripped;
}

$('#email_').on('change', function (e) {
    document.getElementsByName('usuario')[0].value = document.getElementsByName('email_')[0].value;

});