<div class="col-12 col-md-12">

<section class="content-header">
    
    <div class="container-fluid">
      <div class="row mb-4">
        <div class="col-sm-6">
          <br>
          <div class="card card-success">
          <div class="card-header">
          <h3 class="card-title">Información</h3>
          </div>
          <br>
            <ol> 
              <div class="col-sm-5">
                <label class="label">Activar widget y chatbot </label>&emsp;
                <div class="float-sm-right">
                  <input type="checkbox" checked data-toggle="toggle" data-width="100" data-height="25" data-onstyle="primary">
                </div>
              </div>
            </ol>
            <ol>
              <div class="col-sm-4">
                <!--Texto para nombre del robot-->
                <h5><i class="fa-solid fa-robot"></i> Nombre del Robot</h5>
                <input class="form-control" id="robot-escribe" name="robot-escribe" placeholder="Ej: richard">
              </div>
            </ol>
            <br>
            <ol>
            <div class="col-sm-6">
              <!--RADIO 1-->
              <h5><i class="fas fa-language fa-lg"></i> Idioma</h5>
              <input type="radio" class="radio" value="" name="item" id="radio1">
              <label class="label" for="radio1"> Español </label>&emsp;

              <!--RADIO 2-->
              <input type="radio" class="radio" value="" name="item" id="radio2">
              <label class="label" for="radio2"> Inglés </label>&emsp;

              </div>
            </ol>

            <ol>
              <div class="col-sm-8">
              <table class="table table-bordered">
                  <tr>
                  <th>
                <h5><i class="fa-regular fa-clock"></i> Horario Comercial</h5>
                <h6>Establece tu horario de atención comercial</h6>
                <br>
                  <div class="dbgCont">
                      <input type="checkbox" id="Lunes" class="dbgCheck" checked/>
                      <label for="Lunes">Lu</label>
                  </div>
                  <div class="dbgCont">
                      <input type="checkbox" id="Martes" class="dbgCheck" checked/>
                      <label for="Martes">Ma</label>
                  </div>
                  <div class="dbgCont">
                      <input type="checkbox" id="Miercoles"  class="dbgCheck" checked/>
                      <label for="Miercoles">Mi</label>
                  </div>
                  <div class="dbgCont">
                      <input type="checkbox" id="Jueves"  class="dbgCheck" checked/>
                      <label for="Jueves">Ju</label>
                  </div>
                  <div class="dbgCont">
                      <input type="checkbox" id="Viernes"  class="dbgCheck" checked/>
                      <label for="Viernes">Vi</label>
                  </div>
                  <div class="dbgCont">
                      <input type="checkbox" id="Sabado"  class="dbgCheck" />
                      <label for="Sabado">Sa</label>
                  </div>
                  <div class="dbgCont">
                      <input type="checkbox" id="Domingo"  class="dbgCheck" />
                      <label for="Domingo">Do</label>
                  </div>
                  <br>
                  <label>
                    De:<input type='time' id='datetimepicker4' value="08:00" />&emsp;A:<input type='time'  id='datetimepicker4' value="18:00"/>
                  </label>

                  </th>
                  </tr>
                </table>
                </div>
            </ol>
            <ol>
              <div class="col-sm-10">
                <table class="table table-bordered">
                  <tr>
                  <th>
                    <label class="label"><i class="fa-solid fa-moon"></i> Fuera de horario</label>&emsp;
                    <div class="float-sm-right">
                      <input type="checkbox" data-toggle="toggle" data-width="150" data-height="25" data-on="Activar" data-off="Desactivar">
                    </div>
                    <label class="label">Activa los mensajes del chatbot fuera de tu horario de atención.</label>&emsp;
                    <br>
                    
                    <a href="#">Configurar mensajes</a>
                  </th>
                  </tr>
                </table>
              </div>


            </ol>

          </div>

      </div>
    </div><!-- /.container-fluid -->

  </section>
	
</div>

