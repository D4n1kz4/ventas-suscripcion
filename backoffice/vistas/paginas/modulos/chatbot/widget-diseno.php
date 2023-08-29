
<section class="content-header custom-row">   
    <div class="container">
      <div class="row mb-4">
        <div class="col-sm-8">
          <h1>Personalización</h1>
          <br>
          <ol>		
            <!--RADIO 1-->
            <h6>Icono del Widget</h6> <br>
              <input type="radio" class="radio_item" value="fa-comment-dots" name="item" id="radio1" checked onchange="updatePreview()">
              <label class="label_item" for="radio1"><i class="fas fa-comment-dots fa-lg" style="font-size: 2.5em;"></i></label>&emsp;

              <!--RADIO 2-->
              <input type="radio" class="radio_item" value="fa-comment-alt" name="item" id="radio2" onchange="updatePreview()">
              <label class="label_item" for="radio2"><i class="fas fa-comment-alt fa-lg" style="font-size: 2.5em;"></i></label>&emsp;

              <!--RADIO 3-->
              <input type="radio" class="radio_item" value="fa-comments" name="item" id="radio3" onchange="updatePreview()">
              <label class="label_item" for="radio3"><i class="fas fa-comments fa-lg" style="font-size: 2.5em;"></i></label>
          </ol>          

          <ol>		
              <!--RADIO 1-->
              <h6>Diseño del Widget</h3>
              <br>
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

            <!--Fuente del mensaje-->
            <h6>Personalizar Fuente</h6>
            <select id="font-select" onchange="updatePreview()">
              <option value="Arial, sans-serif">Arial</option>
              <option value="Helvetica, sans-serif">Helvetica</option>
              <option value="Times New Roman, serif">Times New Roman</option>
              <option value="Courier New, monospace">Courier New</option>
              <option value="Calibri, sans-serif">Calibri</option>
              <option value="Verdana, sans-serif">Verdana</option>
              <!-- Agrega más opciones aquí si deseas -->
          </select>
            
            <!--Color del mensaje-->
            <h6>Personalizar Color</h6>
            <input type="color" id="color-picker" onchange="updatePreview()">
          </ol>

          <ol>		
            <!--Botones para cambiar los colores-->
            <h6>Colores recomendados</h3>
            <div>
              <button type="button" class="btn btn-outline-dark btn-sm btn-color-selector active" data-dismiss="modal" onclick="changeColors('black')">Negro</button>
              <button type="button" class="btn btn-outline-danger btn-sm btn-color-selector" data-dismiss="modal" onclick="changeColors('red')">Rojo</button>
              <button type="button" class="btn btn-outline-success btn-sm btn-color-selector" data-dismiss="modal" onclick="changeColors('green')">Verde</button>
              <button type="button" class="btn btn-outline-primary btn-sm btn-color-selector" data-dismiss="modal" onclick="changeColors('blue')">Azul</button>
            </div> 
            
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
        <div class="col-sm-4">
          <h1>Vista Previa</h1>
          <br>
          <br>
          <br>
          <div>
            <button class="widget-button" id="widget-button">
              <i class="selected-icon fas fa-comment-dots fa-lg"></i>
            </button>
          </div>
          
      </div>
    </div>

  </section>

  

