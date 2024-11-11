document.querySelector('.contact-form').addEventListener('submit',function(event) {
    event.preventDefault();
/* Si es valido entonces todos los campos de contact 
se podran enviar pero si es falso y dejas algun espacio
en blanco te saldra en rojo, pero si rellena el campo te saldra de color gris. */
    let isValid = true;
    const form = this;
        const inputs = this.querySelectorAll('input[required], textarea[required]');
        inputs.forEach(input => {
            if (!input.value.trim()) {
                isValid = false;
                input.style.borderColor = 'red';
            } else {
                input.style.borderColor = '#ddd';
            }
        });
        if (!isValid) {
           event.preventDefault();
           alert('Por favor, completa todos los campos requeridos');            
        }
});