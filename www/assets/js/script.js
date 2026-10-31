// Bootstrap mengelola collapse navbar dan dropdown melalui data-bs-*.
// JavaScript lokal hanya untuk fungsi spesifik LINNMS (auth config, salin, filter OID).
document.addEventListener('DOMContentLoaded', () => {
  // Isi dengan URL resmi saat endpoint aplikasi tersedia; kosong berarti nonaktif.
  const AUTH_URLS = { login: '', register: '' };

  document.querySelectorAll('[data-auth-link]').forEach(link => {
    const raw = AUTH_URLS[link.dataset.authLink]?.trim();
    if (!raw) return;
    try {
      const url = new URL(raw, location.href);
      if (!['https:', 'http:'].includes(url.protocol)) return;
      link.href = url.href;
      link.classList.remove('disabled');
      link.removeAttribute('aria-disabled');
      link.removeAttribute('tabindex');
      link.removeAttribute('role');
      const hint = link.querySelector('small');
      if (hint) hint.textContent = link.dataset.authLink === 'login' ? 'Buka halaman masuk' : 'Buat akun';
    } catch { /* Pertahankan tautan nonaktif jika URL tidak valid. */ }
  });

  document.querySelectorAll('[data-copy]').forEach(button => {
    button.addEventListener('click', async () => {
      const code = button.closest('.snippet')?.querySelector('pre code');
      if (!code) return;
      const original = button.innerHTML;
      try {
        await navigator.clipboard.writeText(code.textContent);
        button.textContent = 'Tersalin';
      } catch {
        const selection = getSelection();
        const range = document.createRange();
        range.selectNodeContents(code);
        selection.removeAllRanges();
        selection.addRange(range);
        button.textContent = 'Pilih teks lalu salin';
      }
      setTimeout(() => {
        getSelection()?.removeAllRanges();
        button.innerHTML = original;
      }, 1800);
    });
  });

  const search = document.querySelector('#oid-search');
  const rows = [...document.querySelectorAll('#oid-table tbody tr')];
  const filters = [...document.querySelectorAll('[data-oid-filter]')];
  const count = document.querySelector('#oid-count');
  const empty = document.querySelector('#oid-empty');
  let category = 'all';
  const updateOid = () => {
    const term = (search?.value || '').toLocaleLowerCase('id').trim();
    let visible = 0;
    rows.forEach(row => {
      const show = (category === 'all' || row.dataset.type === category) &&
        row.textContent.toLocaleLowerCase('id').includes(term);
      row.hidden = !show;
      if (show) visible++;
    });
    if (count) count.textContent = visible + ' entri ditemukan';
    if (empty) empty.classList.toggle('d-none', visible > 0);
  };
  search?.addEventListener('input', updateOid);
  filters.forEach(button => button.addEventListener('click', () => {
    category = button.dataset.oidFilter;
    filters.forEach(b => {
      const selected = b === button;
      b.setAttribute('aria-pressed', String(selected));
      b.classList.toggle('active', selected);
    });
    updateOid();
  }));
  updateOid();

  const links = [...document.querySelectorAll('.aside-sticky > a[href^="#"]')];
  if (links.length && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          links.forEach(a => a.classList.toggle('active', a.hash === '#' + entry.target.id));
        }
      });
    }, { rootMargin: '-110px 0px -70% 0px' });
    document.querySelectorAll('.doc-section[id]').forEach(section => observer.observe(section));
  }
});