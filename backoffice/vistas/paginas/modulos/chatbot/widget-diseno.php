
<section class="content-header">   
    <div class="container">
      <div class="row mb-4">
        <div class="col-sm-6">
          <h1>Apariencia</h1>
          <br>
          <ol>		
            <!--RADIO 1-->
            <h6>Icono del Widget</h3> <br>
            <input type="radio" class="radio_item" value="fa-comment-dots" name="item" id="radio1" checked onchange="updatePreview()">
            <label class="label_item" for="radio1"> <i class="fas fa-comment-dots fa-lg" style="font-size: 3em;"></i> </label>&emsp;

            <!--RADIO 2-->
            <input type="radio" class="radio_item" value="fa-comment-alt" name="item" id="radio2" onchange="updatePreview()">
            <label class="label_item" for="radio2"> <i class="fas fa-comment-alt fa-lg" style="font-size: 3em;"></i></label>&emsp;

            <!--RADIO 3-->
            <input type="radio" class="radio_item" value="fa-comments" name="item" id="radio3" onchange="updatePreview()">
            <label class="label_item" for="radio3"> <i class="fas fa-comments fa-lg" style="font-size: 3em;"></i></label>
          </ol>

          <ol>		
              <!--RADIO 1-->
              <h6>Diseño del Widget</h3>
              <input type="radio" class="radio" value="" name="item1" id="rad1" Checked> 
              <label class="label_item" for="rad1"> <i class="fas fa-circle fa-lg" ></i> </label>&emsp;

              <!--RADIO 2-->
              <input type="radio" class="radio" value="" name="item1" id="rad2">
              <label class="label_item align-bottom" for="rad2"> <i class="fas fa-window-minimize fa-lg" style="font-size: 4em;"></i></label>&emsp;

          </ol>

          <ol>		
              <!--Texto-->
              <h6>Mensaje del Widget</h3>
              <input type="text" id="mensaje-widget" placeholder="Escriba su mensaje">
          </ol>
          <ol>		
              <!--Botones para cambiar los colores-->
              <h6>Color del Widget</h3>
              <button type="button" class="btn btn-dark" data-dismiss="modal" onclick="changeColors('black')">Negro</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="changeColors('red')">Rojo</button>
              <button type="button" class="btn btn-success" data-dismiss="modal" onclick="changeColors('green')">Verde</button>
              <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="changeColors('blue')">Azul</button>
          </ol>
          <ol>		
              <!--Valor Numerico para el tiempo-->
              <h6>Tiempo de saludo automatico</h3>
              <input type="number" id="mensaje-widget" placeholder="3">
          </ol>
          <ol>		
              <!--Subir imagen-->
              <h6>Subir Logo</h3>
              <input type="file" id="img" name="img" accept="image/*">
          </ol>
		    </div>
        <div class="col-sm-6">
          <h1>Vista Previa</h1>
          <br>
          <br>
          <br>
          <div>
            <button class="widget-button" id="widget-button">
              <i class="selected-icon fas fa-comment-dots fa-lg" style="font-size: 1em;"></i>
            </button>
          </div>
          
      </div>
    </div>

  </section>

  

