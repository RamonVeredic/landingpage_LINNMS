document.addEventListener('DOMContentLoaded',()=>{
 const menu=document.querySelector('.menu-toggle');
 const nav=document.querySelector('#primary-nav');
 if(menu&&nav){
  const closeMobile=()=>{nav.classList.remove('open');menu.setAttribute('aria-expanded','false');menu.setAttribute('aria-label','Buka navigasi')};
  menu.addEventListener('click',()=>{const open=menu.getAttribute('aria-expanded')==='true';if(open){closeMobile()}else{nav.classList.add('open');menu.setAttribute('aria-expanded','true');menu.setAttribute('aria-label','Tutup navigasi')}});
  nav.querySelectorAll('a[href]').forEach(a=>a.addEventListener('click',closeMobile));
  document.addEventListener('keydown',e=>{if(e.key==='Escape'&&nav.classList.contains('open')){closeMobile();menu.focus()}});
  window.addEventListener('resize',()=>{if(window.innerWidth>820&&nav.classList.contains('open'))closeMobile()});
 }
 document.querySelectorAll('[data-copy]').forEach(btn=>btn.addEventListener('click',async()=>{
  const code=btn.closest('.snippet')?.querySelector('pre code')?.textContent;
  if(!code)return;
  try{await navigator.clipboard.writeText(code);const old=btn.innerHTML;btn.innerHTML='Tersalin <i class="bi bi-check2" aria-hidden="true"></i>';setTimeout(()=>btn.innerHTML=old,1700)}
  catch{const range=document.createRange(),sel=window.getSelection();const el=btn.closest('.snippet').querySelector('pre code');range.selectNodeContents(el);sel.removeAllRanges();sel.addRange(range);const old=btn.innerHTML;btn.textContent='Blok teks lalu salin';setTimeout(()=>{sel.removeAllRanges();btn.innerHTML=old},2800)}
 }));
 const oidInput=document.querySelector('#oid-search'),oidRows=[...document.querySelectorAll('#oid-table tbody tr')],oidButtons=[...document.querySelectorAll('[data-oid-filter]')],oidCount=document.querySelector('#oid-count');
 let oidType='all';
 function filterOid(){const term=(oidInput?.value||'').toLocaleLowerCase('id');let visible=0;oidRows.forEach(row=>{const show=(oidType==='all'||row.dataset.type===oidType)&&row.textContent.toLocaleLowerCase('id').includes(term);row.hidden=!show;if(show)visible++});if(oidCount)oidCount.textContent=visible+' entri ditemukan';const empty=document.querySelector('#oid-empty');if(empty)empty.style.display=visible?'none':'block'}
 oidInput?.addEventListener('input',filterOid);oidButtons.forEach(btn=>btn.addEventListener('click',()=>{oidType=btn.dataset.oidFilter;oidButtons.forEach(b=>b.setAttribute('aria-pressed',String(b===btn)));filterOid()}));filterOid();
 const headingLinks=[...document.querySelectorAll('.aside-sticky > a[href^="#"]')];
 if(headingLinks.length&&'IntersectionObserver' in window){const observer=new IntersectionObserver(entries=>{entries.forEach(entry=>{if(entry.isIntersecting){headingLinks.forEach(a=>a.classList.toggle('active',a.hash==='#'+entry.target.id))}})},{rootMargin:'-110px 0px -70% 0px'});document.querySelectorAll('.doc-section[id]').forEach(s=>observer.observe(s))}
});
