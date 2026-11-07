document.addEventListener('DOMContentLoaded',()=>{
 document.querySelectorAll('[data-copy]').forEach(btn=>btn.addEventListener('click',async()=>{
  const code=btn.closest('.snippet')?.querySelector('pre code')?.textContent;
  if(!code)return;
  try{await navigator.clipboard.writeText(code);const old=btn.innerHTML;btn.innerHTML='Tersalin <i class="bi bi-check2" aria-hidden="true"></i>';setTimeout(()=>btn.innerHTML=old,1700)}
  catch{const range=document.createRange(),sel=window.getSelection();const el=btn.closest('.snippet').querySelector('pre code');range.selectNodeContents(el);sel.removeAllRanges();sel.addRange(range);const old=btn.innerHTML;btn.textContent='Blok teks lalu salin';setTimeout(()=>{sel.removeAllRanges();btn.innerHTML=old},2800)}
 }));
 const headingLinks=[...document.querySelectorAll('.aside-sticky > a[href^="#"]')];
 if(headingLinks.length&&'IntersectionObserver' in window){const observer=new IntersectionObserver(entries=>{entries.forEach(entry=>{if(entry.isIntersecting){headingLinks.forEach(a=>a.classList.toggle('active',a.hash==='#'+entry.target.id))}})},{rootMargin:'-110px 0px -70% 0px'});document.querySelectorAll('.doc-section[id]').forEach(s=>observer.observe(s))}
 const vendorSearch=document.querySelector('[data-oid-search]');
 if(vendorSearch){
  const vendors=[...document.querySelectorAll('[data-oid-vendor]')];
  const empty=document.querySelector('[data-oid-empty]');
  vendorSearch.addEventListener('input',()=>{
   const query=vendorSearch.value.trim().toLocaleLowerCase('id');
   let matches=0;
   vendors.forEach(vendor=>{
    const visible=vendor.dataset.oidVendor.includes(query);
    vendor.hidden=!visible;
    if(visible)matches++;
   });
   empty.hidden=matches!==0;
  });
 }
});
