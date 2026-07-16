(function(){
  const modal = document.getElementById('appointmentModal');
  const openers = document.querySelectorAll('[data-open-appointment]');
  const closer = modal ? modal.querySelector('[data-close-appointment]') : null;
  const form = document.getElementById('appointmentForm');
  const feedback = document.getElementById('ap_feedback');

  function openModal(){ if(!modal) return; modal.setAttribute('aria-hidden','false'); document.body.style.overflow='hidden'; }
  function closeModal(){ if(!modal) return; modal.setAttribute('aria-hidden','true'); document.body.style.overflow=''; }

  openers.forEach(btn => btn.addEventListener('click', (e)=>{ e.preventDefault(); openModal(); }));
  if (closer) closer.addEventListener('click', closeModal);
  if (modal) modal.addEventListener('click', (e)=>{ if (e.target === modal) closeModal(); });
  document.addEventListener('keydown', (e)=>{ if(e.key==='Escape') closeModal(); });

  function setError(name, message){
    const small = form.querySelector(`[data-error-for="${name}"]`);
    if (small) small.textContent = message || '';
  }

  if (form) {
    form.addEventListener('submit', async (e)=>{
      e.preventDefault();
      feedback.textContent = '';
      setError('name',''); setError('email',''); setError('date','');

      const fd = new FormData(form);
      try {
        const res = await fetch('api/appointments.php', { method:'POST', body: fd, headers: { 'Accept':'application/json' }});
        const data = await res.json().catch(()=>({ ok:false, error:'Respuesta inválida' }));
        if (!res.ok || !data.ok) {
          if (data && data.errors) {
            Object.entries(data.errors).forEach(([k,v])=> setError(k, String(v)));
          }
          feedback.style.color = '#b3261e';
          feedback.textContent = (data && (data.error || data.message)) || 'No se pudo enviar. Intenta nuevamente';
          return;
        }
        feedback.style.color = '#1b5e20';
        feedback.textContent = data.message || 'Enviado correctamente';
        form.reset();
        setTimeout(()=>{ closeModal(); feedback.textContent=''; }, 1500);
      } catch(err){
        feedback.style.color = '#b3261e';
        feedback.textContent = 'Error de red. Intenta nuevamente';
      }
    });
  }
})();
