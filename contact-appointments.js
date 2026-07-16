(function(){
  const form = document.getElementById('contactForm');
  if (!form) return;
  const statusEl = form.querySelector('.form-status');

  function setError(inputName, msg) {
    const group = form.querySelector(`[name="${inputName}"]`)?.closest('.form-group');
    const err = group ? group.querySelector('.form-error') : null;
    if (err) err.textContent = msg || '';
  }

  function validateForm() {
    const name = form.querySelector('[name="name"]').value.trim();
    const message = form.querySelector('[name="message"]').value.trim();
    
    let isValid = true;
    
    // Clear previous errors
    ['name','message'].forEach(f => setError(f, ''));
    
    // Validate name
    if (!name) {
      setError('name', 'Por favor ingresa tu nombre');
      isValid = false;
    }
    
    // Validate message
    if (!message) {
      setError('message', 'Por favor ingresa tu mensaje');
      isValid = false;
    }
    
    return isValid;
  }

  function sendToWhatsApp(name, message) {
    const encodedName = encodeURIComponent(name);
    const encodedMessage = encodeURIComponent(message);
    
    // Create WhatsApp message
    const whatsappText = `Hola, soy ${encodedName}.%0A%0A${encodedMessage}`;
    
    // Open WhatsApp with the message
    const whatsappUrl = `https://wa.me/573106640387?text=${whatsappText}`;
    
    // Show success message
    statusEl.style.color = '#1b5e20';
    statusEl.textContent = 'Abriendo WhatsApp...';
    
    // Open in new tab after a short delay
    setTimeout(() => {
      window.open(whatsappUrl, '_blank');
      statusEl.textContent = 'Mensaje enviado a WhatsApp';
      form.reset();
    }, 500);
  }

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    
    // Clear previous status
    statusEl.textContent = '';
    
    // Validate form
    if (!validateForm()) {
      return;
    }
    
    // Get form data
    const name = form.querySelector('[name="name"]').value.trim();
    const message = form.querySelector('[name="message"]').value.trim();
    
    // Send to WhatsApp
    sendToWhatsApp(name, message);
  });
})();
