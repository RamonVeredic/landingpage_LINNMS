const dismissPageLoader = () => {
 const loader = document.getElementById('linnms__loader__page');
 document.documentElement.classList.remove('linnms__loading__is');
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
 document.querySelectorAll('.linnms__nav__link[href*="#"]').forEach(link=>link.addEventListener('click',()=>{
  const menu=document.getElementById('primary-nav');
  if(menu?.classList.contains('show')&&window.bootstrap){bootstrap.Collapse.getOrCreateInstance(menu,{toggle:false}).hide()}
 }));
 document.querySelectorAll('.manual-code pre').forEach(pre=>pre.addEventListener('wheel',event=>{
  if(event.ctrlKey||event.deltaY===0)return;
  const atTop=pre.scrollTop<=0;
  const atBottom=pre.scrollTop+pre.clientHeight>=pre.scrollHeight-1;
  if((event.deltaY<0&&atTop)||(event.deltaY>0&&atBottom)){
   event.preventDefault();
   window.scrollBy(0,event.deltaY);
  }
 },{passive:false}));
 document.querySelectorAll('[data-copy]').forEach(btn=>btn.addEventListener('click',async()=>{
  const el=btn.closest('[data-code]')?.querySelector('pre code');
  const code=el?.textContent;
  if(!code)return;
  try{await navigator.clipboard.writeText(code);const old=btn.innerHTML;btn.innerHTML='Tersalin <i class="bi bi-check2" aria-hidden="true"></i>';setTimeout(()=>btn.innerHTML=old,1700)}
  catch{const range=document.createRange(),sel=window.getSelection();range.selectNodeContents(el);sel.removeAllRanges();sel.addRange(range);const old=btn.innerHTML;btn.textContent='Blok teks lalu salin';setTimeout(()=>{sel.removeAllRanges();btn.innerHTML=old},2800)}
 }));
});
