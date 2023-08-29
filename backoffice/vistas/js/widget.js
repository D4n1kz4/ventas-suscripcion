
// Función para actualizar la vista previa
function updatePreview() {
  const selectedIconClass = document.querySelector('.radio_item:checked').value;
  const selectedIconElement = document.querySelector('.selected-icon');
  selectedIconElement.className = `selected-icon fas ${selectedIconClass} fa-lg`;

  const selectedDesign = document.querySelector('.radio:checked').id;
  const widgetButton = document.querySelector('#widget-button');
  const widgetIcon = widgetButton.querySelector('.selected-icon');

  const widgetMessageInput = document.querySelector('#mensaje-widget');
  const widgetMessageText = widgetMessageInput.value;

  const fontSelect = document.querySelector('#font-select');
  const selectedFont = fontSelect.value;

  const colorPicker = document.querySelector('#color-picker');
  const selectedColor = colorPicker.value;

  const widgetMessage = document.createElement('span');
  widgetMessage.className = 'widget-message';
  widgetMessage.textContent = widgetMessageText;
  widgetMessage.style.fontFamily = selectedFont; // Aplica la fuente seleccionada
  widgetMessage.style.color = selectedColor;     // Aplica el color seleccionado

  // Eliminar mensaje previo si existe
  const existingWidgetMessage = document.querySelector('.widget-message');
  if (existingWidgetMessage) {
      existingWidgetMessage.remove();
  }

  if (selectedDesign === 'rad1') {
      widgetButton.classList.add('round-button');
      widgetButton.style.borderRadius = '50%';
      widgetButton.style.width = '40px';
      widgetButton.style.height = '40px';
      widgetIcon.classList.add('icon-center');
  } else if (selectedDesign === 'rad2') {
      widgetButton.classList.remove('round-button');
      widgetButton.style.borderRadius = '20px';
      widgetButton.style.width = '150px';
      widgetButton.style.height = '40px';
      widgetButton.appendChild(widgetMessage);
      widgetIcon.classList.remove('icon-center');
  }
}


// Ejecutar la función inicialmente para reflejar la selección por defecto
updatePreview();

// Agregar event listeners a los radio buttons para la actualización continua
const radioItems = document.querySelectorAll('.radio_item');
radioItems.forEach(radioItem => {
radioItem.addEventListener('change', updatePreview);
});

const radioDesigns = document.querySelectorAll('.radio');
radioDesigns.forEach(radioDesign => {
radioDesign.addEventListener('change', updatePreview);
});

// Agregar event listener para la actualización del mensaje
const mensajeWidgetInput = document.querySelector('#mensaje-widget');
mensajeWidgetInput.addEventListener('input', updatePreview);

// Seleccionar "Negro" por defecto
changeColors('black');

// Cambiar color de los íconos de los botones de selección
function changeIconColors(color) {
  const labelItems = document.querySelectorAll('.label_item');
  labelItems.forEach(labelItem => {
    const icon = labelItem.querySelector('i');
    icon.style.color = color;
  });
}

// Agregar event listeners a los botones para cambiar los colores
const colorButtons = document.querySelectorAll('.btn-color-selector');
colorButtons.forEach(button => {
  button.addEventListener('click', () => {
    // Remover la clase 'active' de todos los botones
    colorButtons.forEach(btn => btn.classList.remove('active'));

    // Agregar la clase 'active' al botón seleccionado
    button.classList.add('active');

    // Obtener el color correspondiente al botón seleccionado
    const color = button.getAttribute('data-color');
    changeColors(color);
  });
});


// Función para cambiar los colores de la vista previa
function changeColors(color) {
    const widgetButton = document.querySelector('#widget-button');
    const widgetIcon = widgetButton.querySelector('.selected-icon');
  
    // Definir colores para cada opción
    const colorMap = {
      'black': {
        buttonClass: 'btn-dark',
        iconColor: '#000000',
      },
      'red': {
        buttonClass: 'btn-danger',
        iconColor: '#c40404',
      },
      'green': {
        buttonClass: 'btn-success',
        iconColor: '#039e03',
      },
      'blue': {
        buttonClass: 'btn-primary',
        iconColor: '#1025e0',
      },
    };
  
    // Verificar si el botón tiene la clase 'round-button'
    const isRoundButton = widgetButton.classList.contains('round-button');
    
    // Obtener el diseño seleccionado previamente
    const selectedDesign = document.querySelector('.radio:checked').id;
    
    // Aplicar colores y mantener la clase 'icon-center'
    widgetButton.className = `widget-button ${colorMap[color].buttonClass}`;
    widgetIcon.style.color = colorMap[color].iconColor;
  
    // Restablecer la clase 'icon-center' si es un botón redondeado
    if (isRoundButton) {
      // Si el botón es redondo
      widgetButton.style.borderRadius = '50%'; // Cambia el radio de las esquinas para hacerlo circular
      widgetButton.style.width = '50px'; // Cambia el ancho del botón a 50px
      widgetButton.style.height = '50px'; // Cambia el alto del botón a 50px
      widgetIcon.classList.add('icon-center'); // Añade una clase para centrar el ícono en el botón
    } else {
      // Si el botón no es redondo
      widgetButton.style.borderRadius = '30px'; // Cambia el radio de las esquinas a 30px
      widgetButton.style.width = '150px'; // Cambia el ancho del botón a 150px
      widgetButton.style.height = '40px'; // Cambia el alto del botón a 40px
      widgetIcon.classList.remove('icon-center'); // Quita la clase que centraría el ícono
    }
    
    // Aplicar el diseño previamente seleccionado
    if (selectedDesign === 'rad1') {
      // Si se selecciona el diseño 1
      widgetButton.classList.add('round-button'); // Agrega la clase de botón redondo
      widgetButton.style.borderRadius = '50%'; // Cambia el radio de las esquinas para hacerlo circular
      widgetButton.style.width = '40px'; // Cambia el ancho del botón a 40px
      widgetButton.style.height = '40px'; // Cambia el alto del botón a 40px
      widgetIcon.classList.add('icon-center'); // Añade una clase para centrar el ícono en el botón
    } else if (selectedDesign === 'rad2') {
      // Si se selecciona el diseño 2
      widgetButton.classList.remove('round-button'); // Quita la clase de botón redondo
      widgetButton.style.borderRadius = '20px'; // Cambia el radio de las esquinas a 20px
      widgetButton.style.width = '150px'; // Cambia el ancho del botón a 150px
      widgetButton.style.height = '40px'; // Cambia el alto del botón a 40px
      widgetIcon.classList.remove('icon-center'); // Quita la clase que centraría el ícono
    }

    // Cambiar el color de los íconos en los botones de selección
      changeIconColors(colorMap[color].iconColor);
    
  function changeIconColors(color) {
    const icons = document.querySelectorAll('.label_item i');
    icons.forEach(icon => {
      icon.style.color = color;
    });
  }

  }

   
