// SHOP - Immersive interactions
(function(){
  const $ = (sel, ctx=document) => ctx.querySelector(sel);
  const $$ = (sel, ctx=document) => Array.from(ctx.querySelectorAll(sel));

  // Filters
  const filters = $$('.filter');
  const cards = $$('.product-card');
  filters.forEach(btn => btn.addEventListener('click', ()=>{
    filters.forEach(b=>b.classList.remove('active'));
    btn.classList.add('active');
    const f = btn.dataset.filter;
    cards.forEach(c=>{
      const show = f==='all' || c.dataset.category===f;
      c.style.display = show ? 'flex' : 'none';
      if (show){ c.style.opacity='1'; c.style.transform='translateY(0)'; }
    });
  }));

  // Add to cart (mock)
  const cartCount = $('#cartCount');
  let count = 0;
  $$('[data-add], [data-add-book]').forEach(btn=>{
    btn.addEventListener('click', ()=>{
      count++; cartCount.textContent = count;
      btn.textContent = 'Añadido ✓';
      btn.disabled = true;
      setTimeout(()=>{ btn.textContent = btn.hasAttribute('data-add-book') ? 'Reservar ejemplar' : 'Agregar'; btn.disabled = false; }, 1200);
    });
  });

  // Newsletter modal
  const newsletterModal = $('#newsletterModal');
  const openNews = $('[data-open-newsletter]');
  const closeBtns = $$('[data-close]');
  if (openNews && newsletterModal){ openNews.addEventListener('click', ()=> newsletterModal.setAttribute('aria-hidden','false')); }
  closeBtns.forEach(b=> b.addEventListener('click', ()=> newsletterModal.setAttribute('aria-hidden','true')));
  newsletterModal && newsletterModal.addEventListener('click', (e)=>{ if (e.target===newsletterModal) newsletterModal.setAttribute('aria-hidden','true'); });

  // Newsletter submit (mock)
  const form = $('#newsletterForm');
  const feedback = $('#newsletterFeedback');
  form && form.addEventListener('submit', (e)=>{
    e.preventDefault();
    const fd = new FormData(form);
    const name = fd.get('name');
    const email = fd.get('email');
    if(!name || !email){ feedback.textContent = 'Por favor completa todos los campos.'; return; }
    feedback.textContent = '¡Gracias! Te avisaremos muy pronto.';
    setTimeout(()=>{ newsletterModal.setAttribute('aria-hidden','true'); form.reset(); feedback.textContent=''; }, 1500);
  });

  // Parallax orbs
  const orbs = $$('.orb');
  window.addEventListener('mousemove', (e)=>{
    const x = (e.clientX / window.innerWidth - 0.5) * 10;
    const y = (e.clientY / window.innerHeight - 0.5) * 10;
    orbs.forEach((o,i)=>{
      o.style.transform = `translate(${x*(i+1)}px, ${y*(i+1)}px)`;
    });
  });

  console.log('🪄 Shop initialized');
})();
