$(function(){
    $('#botonFirma').click(function(event){
      var text = document.getElementById('vistaPrevia');
      var range = document.createRange();
      range.selectNodeContents(text);
      window.getSelection().removeAllRanges();
      window.getSelection().addRange(range);
      document.execCommand('copy');
      window.getSelection().removeRange(range);
      text.focus();
      document.execCommand('paste');
      var enviarhtml = text.innerHTML;
      var nombre = $('#Nombre').val();
      var cargo = $('#Cargo').val();
      var telefono = $('#Tel').val();
      var interno = $('#Interno').val();
      var prefijo = $('#Prefijo').val();
      var email = $('#Email').val();
      var sede = $('#Sede').val();
      
      if(nombre != '' && cargo != '' && telefono != ''  && prefijo != '' && email != '' ){
          event.preventDefault();
          $.ajax({
            url: './insertarDatos.php',
            dataType: "json",
            cache: false,
            data: {nombre: nombre, cargo: cargo,interno: interno, prefijo: prefijo, telefono: telefono, email: email, sede: sede, enviarhtml: enviarhtml},
            type: 'POST',
            success: function(php_response){
              //alert(php_response.msg);
            },
            error: function(){
             // alert("error en la comunicación con el servidor");
            }
          });

//javascript para el Modal
let modal = document.getElementById('miModal');
let flex = document.getElementById('flex');
let abrir = document.getElementById('abrir');
let cerrar = document.getElementById('close');

abrir.addEventListener('click', function(){
    modal.style.display = 'block';
});

cerrar.addEventListener('click', function(){
    modal.style.display = 'none';
});

window.addEventListener('click', function(e){
    console.log(e.target);
    if(e.target == flex){
        modal.style.display = 'none';
    }
});

      }else{
          alert("Debe rellenar todos los campos");
      }  
    });

    //funcion de envio de  datos para el boton del media query
    $('#botonQuery').click(function(event){
      var text = document.getElementById('vistaPrevia');
      var range = document.createRange();
      range.selectNodeContents(text);
      window.getSelection().removeAllRanges();
      window.getSelection().addRange(range);
      document.execCommand('copy');
      window.getSelection().removeRange(range);
      text.focus();
      document.execCommand('paste');
        var enviarhtml = text.innerHTML;
        var nombre = $('#Nombre').val();
        var cargo = $('#Cargo').val();
        var telefono = $('#Tel').val();
        var interno = $('#Interno').val();
        var prefijo = $('#Prefijo').val();
        var email = $('#Email').val();
        var sede = $('#Sede').val();
        if(nombre != '' && cargo != '' && telefono != ''  && prefijo != '' && email != '' ){
          event.preventDefault();
          $.ajax({
            url: './insertarDatos.php',
            dataType: "json",
            cache: false,
            data: {nombre: nombre, cargo: cargo,interno: interno, prefijo: prefijo, telefono: telefono, email: email, sede: sede, enviarhtml: enviarhtml},
            type: 'POST',
            success: function(){
              //alert("lolo");
            },
            error: function(){
            // alert("error en la comunicación con el servidor");
            }
          });

let modal1 = document.getElementById('miModal1');
let flex1 = document.getElementById('flex1');
let abrir1 = document.getElementById('abrir1');
let cerrar1 = document.getElementById('close1');

abrir1.addEventListener('click', function(){
    modal1.style.display = 'block';
});

cerrar1.addEventListener('click', function(){
    modal1.style.display = 'none';
});

window.addEventListener('click', function(e){
    console.log(e.target);
    if(e.target == flex1){
        modal1.style.display = 'none';
    }
});




      }else{
          alert("Debe rellenar todos los campos");
      }

    });
    
});
  
    