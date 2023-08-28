<div class="col-12 col-md-12">

<section class="content-header">
    
    <div class="card-body">
    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true"><i class="fa-regular fa-comments"></i> Conversación</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false"><i class="fa-solid fa-bolt"></i> Respuestas Personalizadas</a>
        </li>
            <li class="nav-item">
            <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false"><i class="fa-solid fa-robot"></i> Mensajes Automáticos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false"><i class="fa-solid fa-moon"></i> Modo Fuera de Horario</a>
        </li>
    </ul>

    <div class="tab-content" id="custom-content-below-tabContent">


    <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">


    </div>
    

    <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
        <div class="col-sm-8">
            <div class="form-group">
                <h4>Modo fuera de horario</h4>
                <label>Configura palabras claves que suelen escribir tus visitantes y no hayas incluido como botones de la conversación, para interpretarlas y darles una respuesta</label><br>
                <input class="form-control" id="cliente-text" name="cliente-text" placeholder="Frase o palabras claves" value="Título para identificar tus palabras claves">
                
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <h4>Si el cliente escribe:</h4>
                    <input class="form-control" id="cliente-text" name="cliente-text" placeholder="Frase o palabras claves">
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <h4>Tipo de concordancia:</h4>
                    <select class="custom-select form-control-border" id="exampleSelectBorder">
                    <option>Exacta</option>
                    <option>Contingente</option>
                    <option>Inteligente</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <h4>Entonces el bot responderá:</h4>
                    <textarea class="form-control" rows="3" placeholder="Respuesta a las palabras claves"></textarea>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <h4>Asignación de usuarios::</h4>
                    <select class="custom-select form-control-border" id="exampleSelectBorder">
                    <option>usuario 1</option>
                    <option>usuario 2</option>
                    <option>etc</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <h4>Acciones de la respuesta::</h4>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="customCheckbox2" checked>
                        <label for="customCheckbox2" class="custom-control-label">Pausar la conversación hasta el próximo mensaje del visitante</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right">
            <input type="button" class="btn btn-default" value='Add Button' id='addButton'/>
            <input type='button' class="btn btn-danger" value='Remove Button' id='removeButton'>
        </div>
        <hr/>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        <input type="text" class="form-control" name="size[]" placeholder="Size" />
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <input type="text" class="form-control" name="clr[]" placeholder="Color" />
                    </div>
                </div>
                <hr/>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab"><br>

        <div class="card card-primary">
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label>Luego de 1 minuto de inactividad del visitante</label>
                        <textarea class="form-control" rows="3" placeholder="Hola, ¿te puedo ayudar con algo más?"></textarea>
                        <br>
                        <label>Modificar Tiempo</label><br>
                        <label><i class="fa-solid fa-minus fa-2xl"></i>&emsp;<input type="number" id="minuto" name="minuto" min="1" max="60" value="1">&emsp;<i class="fa-solid fa-plus fa-2xl"></i></label>
                    </div>
                </div>

                
            </form>
        </div>
        <div class="card card-primary">
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label>Cuando el visitante se pone en contacto luego de 24 horas</label>
                        <textarea class="form-control" rows="3" placeholder="Hola, ¿te puedo ayudar con algo más?"></textarea>
                        <br>
                        <label><i class="fa-solid fa-minus fa-2xl"></i>&emsp;<input type="number" id="hora" name="hora" min="1" max="24" value="1">&emsp;<i class="fa-solid fa-plus fa-2xl"></i></label>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel" aria-labelledby="custom-content-below-settings-tab"><br>

        <h4>Modo fuera de horario</h4>
        <h6>Aquí puedes configurar qué dirá el bot a tus visitantes fuera del horario comercial</h6>

        <div class="form-group">
        <label>Saludo inicial</label>
        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
        </div>
        <div class="form-group">
        <label>Despedida</label>
        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
        </div>
    </div>

  </section>
	
</div>
