const dismissPageLoader = () => {
 const loader = document.getElementById('page-loader');
 document.documentElement.classList.remove('is-loading');
 loader?.remove();
};
const finishPageLoading = () => {
 window.setTimeout(dismissPageLoader, 500);
};
if (document.readyState === 'complete') {
 finishPageLoading();
} else {
 window.addEventListener('load', finishPageLoading, {once: true});
}
window.addEventListener('pageshow', event => {
 if (event.persisted) dismissPageLoader();
});

document.addEventListener('DOMContentLoaded',()=>{
 document.querySelectorAll('.linnms-nav-link[href*="#"]').forEach(link=>link.addEventListener('click',()=>{
  const menu=document.getElementById('primary-nav');
  if(menu?.classList.contains('show')&&window.bootstrap){bootstrap.Collapse.getOrCreateInstance(menu,{toggle:false}).hide()}
 }));
 document.querySelectorAll('[data-copy]').forEach(btn=>btn.addEventListener('click',async()=>{
  const el=btn.closest('[data-code]')?.querySelector('pre code');
  const code=el?.textContent;
  if(!code)return;
  try{await navigator.clipboard.writeText(code);const old=btn.innerHTML;btn.innerHTML='Tersalin <i class="bi bi-check2" aria-hidden="true"></i>';setTimeout(()=>btn.innerHTML=old,1700)}
  catch{const range=document.createRange(),sel=window.getSelection();range.selectNodeContents(el);sel.removeAllRanges();sel.addRange(range);const old=btn.innerHTML;btn.textContent='Blok teks lalu salin';setTimeout(()=>{sel.removeAllRanges();btn.innerHTML=old},2800)}
 }));
});
