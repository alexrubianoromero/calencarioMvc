<?php

class calendarioView{


    public function menuPrincipal()
    {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        </head>
        <body>
            <h1>Menu Calendario</h1>

            <div id='calendar'></div>
            <?php  $this->exampleModal(); ?>

        </body>
        </html>
        <script src="../js/calendario.js"></script>
        <script>
            
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
    
  
        </script>    
        <?php
    }


    public function exampleModal()
    {
        ?>
         <!--aqui comienza el modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agendamiento de Citas </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                     <?php  $this->mostrarFormuNuevoEvento();  ?>
                </div>
                <div class="modal-footer">

                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btnAgregar">Agregar</button>
                    <button type="button" class="btn btn-success" id="btnModificar">Modificar</button>
                    <button type="button" class="btn btn-danger" id="btnEliminar" >Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <!-- aqui termina el modal -->

        <?php
    }

    public function mostrarFormuNuevoEvento()
    {
        ?>
         <div class="container row">
                        <div class="col-lg-4">
                        <label>Placa:</label>
                        <input type="text" class="form-control" id ="placa">
                        </div>
                        <div class="col-lg-4">
                        <label>Hora:</label>
                        <div class="input-group flatpickr" data-autoclose="true">
                                    <input type="text" id="txtHora" value="10:30" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                        <label>Email:</label>
                        <input type="text" class="form-control" id ="email">
                        </div>
                        <div class="col-lg-12" >
                            <label for="">Motivo de la visita:</label>
                            <textarea id="txtDescripcion" name="txtDescripcion" rows="3" class="form-control" ></textarea>
                        </div>    
                        <div class="form-group col-lg-12" >
                            <label for=""> Color : </label>
                        <input type="color"  value="#ff0000" id="txtColor" name="txtColor" class="form-control" style="height:36x;">
                        </div>  

                    </div>

        <?php
    }
}



?>