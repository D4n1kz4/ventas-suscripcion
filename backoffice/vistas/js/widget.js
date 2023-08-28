
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

const widgetMessage = document.createElement('span');
widgetMessage.className = 'widget-message';
widgetMessage.textContent = widgetMessageText;

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
        iconColor: '#0303b3',
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
      widgetButton.style.borderRadius = '50%';
      widgetButton.style.width = '50px';
      widgetButton.style.height = '50px';
      widgetIcon.classList.add('icon-center');
    } else {
      widgetButton.style.borderRadius = '30px';
      widgetButton.style.width = '150px';
      widgetButton.style.height = '40px';
      widgetIcon.classList.remove('icon-center');
    }
  
    // Aplicar el diseño previamente seleccionado
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
      widgetIcon.classList.remove('icon-center');
    }
  }
  