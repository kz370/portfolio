document.addEventListener('DOMContentLoaded',()=>{
  const navbar=document.querySelector('.navbar');
  const toggle=document.querySelector('.nav-toggle');
  const links=document.querySelector('.nav-links');

  // mobile toggle
  if(toggle && links){
    toggle.addEventListener('click',()=>{
      const open=links.classList.toggle('open');
      toggle.setAttribute('aria-expanded',open);
    });
  }

  // smooth scroll
  document.querySelectorAll('a[href^="#"]').forEach(a=>{
    a.addEventListener('click',e=>{
      const href=a.getAttribute('href');
      if(href.length>1){
        const el=document.querySelector(href);
        if(el){ e.preventDefault(); el.scrollIntoView({behavior:'smooth',block:'start'}); links?.classList.remove('open'); }
      }
    });
  });

  // nav shadow on scroll
  addEventListener('scroll',()=>{
    if(scrollY>20) navbar.style.boxShadow='0 6px 20px rgba(15,23,42,.08)';
    else navbar.style.boxShadow='none';
    if(scrollY>60) navbar.style.background='rgba(248,250,252,.9)';
  },{passive:true});

  // active link
  const sections=[...document.querySelectorAll('section[id],footer[id]')];
  const navAnchors=[...document.querySelectorAll('.nav-links a')];
  const setActive=()=>{
    const y=scrollY+120;
    let cur=sections[0]?.id;
    sections.forEach(s=>{ if(s.offsetTop<=y) cur=s.id; });
    navAnchors.forEach(a=>a.classList.toggle('active',a.getAttribute('href')==='#'+cur));
  };
  addEventListener('scroll',setActive,{passive:true}); setActive();

  // reveal on scroll (respect reduced motion)
  const prefersReduced=matchMedia('(prefers-reduced-motion: reduce)').matches;
  if(!prefersReduced){
    const obs=new IntersectionObserver((entries)=>{
      entries.forEach(ent=>{
        if(ent.isIntersecting){
          ent.target.style.opacity='1';
          ent.target.style.transform='none';
          obs.unobserve(ent.target);
        }
      });
    },{threshold:.12, rootMargin:'0px 0px -40px 0px'});
    document.querySelectorAll('.bento-card, .p-card, .featured, .exp-card').forEach((el,i)=>{
      el.style.opacity='0';
      el.style.transform='translateY(14px)';
      el.style.transition=`opacity .55s cubic-bezier(.16,1,.3,1) ${i%4*60}ms, transform .55s cubic-bezier(.16,1,.3,1) ${i%4*60}ms`;
      obs.observe(el);
    });
  }

  // back to top
  const top=document.createElement('button');
  top.textContent='↑'; top.ariaLabel='Back to top';
  Object.assign(top.style,{position:'fixed',right:'18px',bottom:'18px',width:'44px',height:'44px',borderRadius:'999px',border:'1px solid #E2E8F0',background:'#fff',boxShadow:'0 8px 20px rgba(15,23,42,.12)',cursor:'pointer',opacity:'0',pointerEvents:'none',transition:'opacity .2s',zIndex:'50',fontWeight:'700'});
  document.body.appendChild(top);
  addEventListener('scroll',()=>{ const show=scrollY>560; top.style.opacity=show?'1':'0'; top.style.pointerEvents=show?'auto':'none'; },{passive:true});
  top.addEventListener('click',()=>scrollTo({top:0,behavior:'smooth'}));

  // console
  console.log('%cKhaled Morsi — Full Stack PHP • Laravel • SaaS','font:700 14px Plus Jakarta Sans; color:#2563EB');
});
