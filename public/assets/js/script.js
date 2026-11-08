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
 // Tandai bagian instalasi yang sedang dibaca, baik di sidebar maupun tautan metode.
 const manualSections = [...document.querySelectorAll('.manual-method[id]')];
 const manualSectionLinks = [...document.querySelectorAll('.manual-nav-sub a[href^="#"], .manual-method-nav a[href^="#"]')];
 if (manualSections.length && manualSectionLinks.length) {
  let manualScrollFrame = null;
  const updateManualSectionNav = () => {
   manualScrollFrame = null;
   const rootStyles = window.getComputedStyle(document.documentElement);
   const sectionStyles = window.getComputedStyle(manualSections[0]);
   const offset = (parseFloat(rootStyles.scrollPaddingTop) || 0) +
    (parseFloat(sectionStyles.scrollMarginTop) || 0) + 12;
   let currentSection = null;
   for (const section of manualSections) {
    if (section.getBoundingClientRect().top <= offset) currentSection = section;
   }
   if (window.scrollY + window.innerHeight >= document.documentElement.scrollHeight - 4) {
    currentSection = manualSections[manualSections.length - 1];
   }
   for (const link of manualSectionLinks) {
    const active = currentSection !== null && link.hash === `#${currentSection.id}`;
    link.classList.toggle('active', active);
    if (active) link.setAttribute('aria-current', 'location');
    else link.removeAttribute('aria-current');
   }
  };
  const scheduleManualSectionNav = () => {
   if (manualScrollFrame === null) {
    manualScrollFrame = window.requestAnimationFrame(updateManualSectionNav);
   }
  };
  window.addEventListener('scroll', scheduleManualSectionNav, {passive: true});
  window.addEventListener('resize', scheduleManualSectionNav);
  window.addEventListener('hashchange', scheduleManualSectionNav);
  scheduleManualSectionNav();
 }
 document.querySelectorAll('[data-copy]').forEach(btn=>btn.addEventListener('click',async()=>{
  const el=btn.closest('[data-code]')?.querySelector('pre code');
  const code=el?.textContent;
  if(!code)return;
  try{await navigator.clipboard.writeText(code);const old=btn.innerHTML;btn.innerHTML='Tersalin <i class="bi bi-check2" aria-hidden="true"></i>';setTimeout(()=>btn.innerHTML=old,1700)}
  catch{const range=document.createRange(),sel=window.getSelection();range.selectNodeContents(el);sel.removeAllRanges();sel.addRange(range);const old=btn.innerHTML;btn.textContent='Blok teks lalu salin';setTimeout(()=>{sel.removeAllRanges();btn.innerHTML=old},2800)}
 }));
});
