
  document.addEventListener('DOMContentLoaded', function() {
   var calendarEl = document.getElementById('calendar');
   var calendar = new FullCalendar.Calendar(calendarEl, {
     initialView: 'dayGridMonth',
     selectable: true,
     selectMirror:false,
     dateClick: function(info) {
       mostrarModal();
       // alert('prueba de enento ');
       //  document.getElementById('exampleModal').style.display="block";
       // $('#exampleModal').modal('show');
         alert('Clicked on: ' + info.dateStr);
         // alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
         // alert('Current view: ' + info.view.type);
         // info.dayEl.style.backgroundColor = 'red';
     }
   });
   calendar.render();
  });
  
  $('#btnAgregar').click(function(){
         RecolectarDatosGui();
         // $("#calendario").fullCalendar('renderEvent',NuevoEvento);//se quita segun video 16
         EnviarInformacion('agregar',NuevoEvento);
     });
  
     function RecolectarDatosGui(){
          NuevoEvento = {
             id:$('#txtId').val(),
             title:$('#txtTitulo').val(),
             start:$('#txtFecha').val()+" "+$('#txtHora').val(),
             color:$('#txtColor').val(),
             descripcion:$('#txtDescripcion').val(),
             email:$('#txtEmail').val(),
             txtColor:"#FFFFFF",
             end:$('#txtFecha').val()+" "+$('#txtHora').val()
         }
     }   
  
  
  function mostrarModal(){
         $("#exampleModal").modal("show");
     }
    
  