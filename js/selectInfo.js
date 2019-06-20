let pagina = 0;

$(function(){
  $('#botonSig').click(function(){
    this.pagina= this.pagina +10;
    getInitData(this.pagina);
    
  })

  $('#botonAtras').click(function(){
    this.pagina= this.pagina - 10;
    getInitData(this.pagina);
    
  })

 // $('.modal').modal();


  

/*function sigueinte(){
  this.pagina= this.pagina +10;
  getInitData(this.pagina);
  }*/

function getInitData(indice){
  $('#table-body').html(' ');
  var i = indice;
for(i; 1<(indice+10); i++){

  $.get('./mostrar.php', function(data){
console.log(data);
    $.each(data.infoFirmas, function(key, value){
      
      $('#table-body').append(`
        <tr>
          <td>${value['nombre']}</td>
          <td>${value['cargo']}</td>
          <td>${value['prefijo']}</td>
          <td>${value['telefono']}</td>
          <td>${value['interno']}</td>
          <td>${value['email']}</td>
          <td>${value['sede']}</td>
          <td>${value['fecha']}</td>
        </tr>
        `)
    })

}, 'json')
.fail(function() {
  alert( "Se presentó un error" );
})

}
  }
  

 
});
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 /* function logoutRequest(){
    $.ajax({
      url: './selectInfo.php',
      dataType: "text",
      cache: false,
      processData: false,
      contentType: false,
      type: 'GET',
      success: function(php_response){

      },
      error: function(){
        alert("error en la comunicación con el servidor");
      }
    })
  }*/
  
  //function addViaje()
  