# PRD — Kretya Studio Clone (Laravel)
> Referensi: https://www.kretyastudio.com/

> **Catatan soal "sama persis"**: struktur section, urutan konten, layout, tema warna (dark/monokrom), tipografi besar, dan pola animasi akan dibuat semirip mungkin mengikuti situs asli. Yang **tidak** direplikasi 1:1: kode sumber asli (situs asli pakai Framer, bukan Laravel), aset foto/video/logo klien asli, dan teks copywriting asli — itu properti Kretya Studio dan berhak cipta. Semua teks & gambar versi kita adalah orisinal/placeholder, mengikuti nada, panjang, dan penempatan yang sama persis dengan aslinya.

---

## 1. Ringkasan Aplikasi

**Nama:** `kretya-studio-clone` (Laravel)
**Jenis:** Website marketing/portfolio agency, single landing page panjang dengan beberapa section, dibangun pakai Laravel + Blade.
**Tujuan:** Meniru pengalaman kretyastudio.com sedekat mungkin — tema gelap premium, tipografi besar, animasi scroll halus, dan struktur informasi yang identik (Hero → About → Work → Service → FAQ → Testimonials → CTA → Footer).
**Target pengguna:** calon klien (startup, founder, brand) yang menilai kredibilitas studio lalu menghubungi lewat CTA.

---

## 2. Urutan & Fitur Section (persis urutan di situs asli)

### 2.1 Navbar (sticky)
- Logo/nama studio di kiri.
- Menu: **About us | Work | Service | Let's Talk**.
- Menu "Let's Talk" tampil sebagai tombol CTA (bukan link biasa).
- Saat discroll, navbar tetap terlihat (sticky/fixed), bisa mengecil (shrink) sedikit.

### 2.2 Hero Section
- Headline besar (multi-baris), contoh pola: *"A UI/UX design and web development studio shaping digital products & brands that matter."* — headline versi kita harus punya panjang & ritme baris yang mirip, isi kalimat orisinal.
- Baris info kecil: **"Currently in [Kota] – GMT+X"** diikuti 2–3 jam kota lain berjalan realtime (mis. PST, EST) — pakai JS `setInterval` update tiap detik.
- Deretan social icon (Instagram, Dribbble, Behance, Clutch) di pojok/sisi hero.
- Background hero gelap dengan aksen/gradient halus atau elemen dekoratif (garis/partikel), bukan foto besar.

### 2.3 About Section
- Judul kecil "About us".
- Paragraf pendek berisi statement studio (culture-led, creative, results-driven).
- Paragraf lebih panjang: cerita singkat (tahun berdiri, misi studio) — pola: *"[Nama Studio] was born in [tahun] from a simple idea: ..."*.
- **3 angka statistik** dengan animasi count-up saat masuk viewport, contoh format: `98+ Clients`, `9+ Country`, `3+ Years`.
- Judul "Industries we serve" + daftar tag/pill industri (SaaS, E-Commerce, Web3, AI, Finance, Health Care, Insurance, Logistics, Real Estate, E-Learning, "A lot more!").
- CTA kecil di akhir section: **"↳ Let's Talk"**.

### 2.4 Selected Works (Portfolio Grid)
- Judul "Selected works" + sub-teks singkat.
- Grid card project (6–8 item), tiap card berisi:
  - Thumbnail/preview visual project.
  - Nama project (bold, besar).
  - Satu baris deskripsi/tagline project.
  - Tag kategori kecil di bawah/atas (Website, Dashboard, Mobile App, Responsive, Branding, Prototyping, dll — bisa lebih dari satu tag per card).
  - Badge **"Coming Soon"** untuk project yang belum publish (styling beda/dim).
- Hover effect: scale ringan pada thumbnail + reveal tag.
- Link penutup: **"↳ See all works"**.

### 2.5 Service Section
- Judul besar: pola kalimat *"A Unified Approach to Digital Growth Through Strategic Design, Development, and Branding"*.
- Link kecil **"↳ Open Dribbble"**.
- **3 layanan bernomor** (01, 02, 03), tiap layanan:
  - Nomor besar (01/02/03) sebagai label dekoratif.
  - Judul layanan (mis. "UI/UX & Product Design", "Development & Technology", "Brand Identity & Strategy").
  - Paragraf deskripsi singkat.
  - Baris tag/pill output terkait (mis. Landing Page, Mobile App, Dashboard, Wireframe, dst — jumlah tag beda tiap layanan).
- Layout: teks kiri, tag kanan (desktop) → stack vertikal di mobile.

### 2.6 FAQ Section
- Judul "FAQ" + sub-teks singkat ("Got questions? ...").
- Accordion 5 pertanyaan, contoh pola pertanyaan (isi versi kita, jangan salin persis):
  1. Bagaimana alur kerja kalian?
  2. Bagaimana cara mengetahui harga project?
  3. Apa proses umum untuk mulai kerja sama?
  4. Bagaimana cara memantau progress project?
  5. Apakah bisa request revisi/task tanpa batas?
- Klik pertanyaan → expand jawaban dengan animasi height (accordion), icon plus/chevron berubah jadi minus/rotate saat terbuka.

### 2.7 Testimonials Section
- Judul: pola *"Good work gets noticed. Great work gets talked about."* + sub-teks kepercayaan klien.
- **Marquee logo klien** — logo-logo (placeholder) berjalan horizontal infinite-loop.
- Card testimoni berjalan (carousel/marquee juga), tiap card:
  - Quote singkat (1–2 kalimat).
  - Nama pemberi testimoni + jabatan & perusahaan.
  - Sumber (mis. "Clutch Review").
- Link **"↳ Let's Collaborate"** dan **"↳ View all work"** di dekat judul section.

### 2.8 CTA Penutup + Footer
- Section CTA besar sebelum footer: tagline penutup (pola: *"Think smooth, smart, and super new. [Nama Studio] can do it."*).
- Footer berisi:
  - Logo/nama studio + menu ulang (About us, Work, Service, Product, Connect).
  - Social icon (Instagram, Dribbble, Behance, Clutch).
  - Email kontak (mis. hello@domain.com) — mailto link.
  - "Currently in [Kota] – GMT+X" + jam realtime lagi (sama seperti hero).
  - Copyright line (mis. "© [Nama Studio] 2026").
- **Floating sticky button** pojok bawah: **"Let's talk. 15 mins only"** — muncul di semua halaman/scroll position, link ke kontak/booking.

### 2.9 Interaksi & Animasi Global (karakter khas situs asli)
- Smooth scroll native/JS.
- Scroll-reveal fade + translateY per section & per elemen dalam section (staggered untuk list/card).
- Count-up angka statistik saat masuk viewport (trigger sekali).
- Marquee infinite-loop untuk logo klien & testimoni (pause saat hover, opsional).
- Jam realtime multi-timezone (update tiap detik) di hero & footer.
- Hover state konsisten di semua elemen interaktif (link garis bawah muncul/geser, card scale, button invert warna).
- Semua animasi pakai CSS transition/keyframes + vanilla JS Intersection Observer (tanpa library berat), biar ringan & sesuai stack Laravel + vanilla CSS/JS.

### 2.10 Responsive & Kerapian Layout (wajib per section)
- **Navbar**: desktop menu horizontal penuh → mobile jadi hamburger menu (icon 3 garis) yang buka overlay/drawer fullscreen, CTA "Let's Talk" tetap kelihatan atau masuk drawer.
- **Hero**: headline yang di desktop bisa 60–100px+ harus menyusut proporsional (`clamp()` CSS) supaya tidak overflow/kepotong di layar kecil; baris jam realtime & social icon di-stack rapi (jangan bertumpuk/kepotong).
- **About**: 3 angka statistik yang di desktop sejajar horizontal → di mobile jadi grid 2 kolom atau stack vertikal rapi dengan jarak sama rata; tag "Industries we serve" wrap otomatis, jangan overflow horizontal (scroll-x tak sengaja).
- **Selected Works**: grid card yang di desktop 2–3 kolom → tablet 2 kolom → mobile 1 kolom penuh, gambar tetap proporsional (pakai `aspect-ratio`, jangan gepeng/stretch).
- **Service**: layout kolom kiri-kanan (teks + tag) di desktop → di mobile jadi stack vertikal (teks dulu, tag di bawahnya), nomor 01/02/03 tetap jadi elemen dekoratif yang rapi, jangan menabrak teks judul.
- **FAQ**: lebar accordion menyesuaikan container, teks pertanyaan tidak boleh terpotong; jarak antar item tetap konsisten saat salah satu di-expand (tidak bikin layout shift kasar ke section bawah).
- **Testimonials**: marquee logo & card testimoni tetap scroll horizontal mulus di semua ukuran layar, card tidak boleh gepeng — beri `min-width` tetap per card lalu overflow scroll/marquee, bukan dipaksa muat semua di layar sempit.
- **CTA & Footer**: menu footer & social icon di desktop sejajar horizontal → mobile jadi stack vertikal rapi dengan jarak konsisten; floating CTA button posisinya jangan menutupi konten penting (kasih margin aman dari tepi & dari elemen lain, terutama di mobile keyboard/scroll).
- **Aturan umum kerapian**: semua section pakai container/grid dengan alignment konsisten (tidak ada elemen "nyangkut"/misalign antar section), spacing vertikal antar section tetap proporsional walau menyusut di mobile (skala turun dari `s1`/`s2` desktop, bukan hilang total), dan tidak ada horizontal scroll tidak sengaja di breakpoint manapun (cek dengan `overflow-x: hidden` di body sebagai pengaman terakhir, tapi akar masalah tetap harus diperbaiki di elemen penyebabnya).

---

## 3. Do & Don'ts

### ✅ Do
- Ikuti **urutan section persis** seperti daftar di atas: Navbar → Hero → About → Selected Works → Service → FAQ → Testimonials → CTA/Footer.
- Tema **dark/monokrom** sebagai default (dikonfirmasi dari gaya asli situs referensi).
- Gunakan teks & gambar orisinal/placeholder — ikuti pola kalimat & panjang yang mirip, jangan salin persis.
- Commit ke git **setiap kali selesai satu perubahan/fitur**.
- Jalankan & cek langsung di browser (`php artisan serve`) setiap ada perubahan visual.
- **Wajib responsive & rapi** di semua breakpoint — ikuti detail per section di Bagian 2.10 (tidak ada elemen kepotong, misalign, overflow horizontal tidak sengaja, atau layout berantakan di mobile/tablet).
- Kode self-explanatory (nama variabel/komponen/method jelas), tanpa perlu komentar berlebihan.

### ❌ Don'ts
1. **Jangan akses file `.env`** — secret/config sensitif tidak boleh dibaca, ditampilkan, atau ikut ter-commit.
2. **Jangan hardcode data ke database** — data project/testimoni/FAQ/dll taruh di file config/seeder yang jelas sumbernya, bukan ditulis manual langsung ke migration/production DB.
3. **Testing = manual run di browser**, bukan automated test suite. Tidak wajib pakai testing tool; kalau nanti mau ditambah automated test (PHPUnit/Pest dsb), itu boleh sebagai nilai tambah, bukan requirement wajib di awal.
4. **Jangan tambah komentar di tiap baris kode** — komentar hanya untuk logika yang benar-benar tidak jelas/kompleks.
5. **Jangan copy teks/aset asli** dari kretyastudio.com kata-per-kata atau file gambar/video mereka langsung — gunakan versi orisinal/placeholder.

---

## 4. Aturan Git

- Setiap kali **selesai satu unit perubahan** (selesai 1 section, fix 1 bug, styling 1 komponen) → **langsung commit**, jangan menumpuk jadi satu commit besar.
- Commit message singkat & deskriptif, contoh:
  - `feat: hero section dengan jam realtime & animasi text reveal`
  - `feat: about section dengan count-up stats`
  - `style: dark theme variables & navbar sticky`
  - `fix: alignment card portfolio grid di mobile`
- `.env`, `node_modules`/`vendor`, file build/output **tidak boleh** ikut commit — pastikan `.gitignore` benar sejak awal (`composer create-project laravel/laravel` sudah menyediakan `.gitignore` default, jangan dihapus/dilonggarkan).

---

## 5. Design System

### 5.1 Tema Warna (Dark/Monokrom — konfirmasi gaya situs asli)
- Background utama: hitam pekat / near-black (mis. `#0A0A0A`–`#111111`).
- Teks utama: putih/off-white (mis. `#F5F5F5`).
- Teks sekunder/muted: abu-abu (mis. `#8A8A8A`) untuk sub-teks & caption.
- 1 accent color (opsional, boleh tetap monokrom penuh) untuk hover/link/CTA — kalau mau strict monokrom, accent bisa berupa varian abu terang/putih dengan opacity beda.
- Kontras tinggi, tanpa warna mencolok — kesan premium & minim.

### 5.2 Spacing
- Spacing scale 1 (`s1`): **250px** — jarak vertikal antar section/blok standar (desktop).
- Spacing scale 2 (`s2`): **350px** — jarak vertikal antar section besar (sebelum/sesudah Hero, sebelum CTA penutup).
- Padding horizontal mobile: fleksibel **50px–100px** tergantung lebar layar (mengecil ke 50px di layar sempit, melebar ke 100px mendekati tablet).
- Max content width container: `1200px`–`1400px`, di-center.

### 5.3 Breakpoints
| Breakpoint | Ukuran |
|---|---|
| Mobile | < 640px |
| Tablet | 640px – 1024px |
| Desktop | > 1024px |

### 5.4 Tipografi
- Font sans-serif modern (geometric/grotesk), heading besar (hero 60–100px+ desktop, menyusut proporsional di mobile).
- Hierarki: Hero > Section title > Sub-heading > Body > Caption/label kecil.
- Label kecil (mis. "01", "02", "03", "Selected works", nomor section) pakai uppercase + letter-spacing lebar.
- Line-height longgar di body text untuk kesan premium.

### 5.5 Komponen
- **Button/CTA**: rounded penuh atau rounded besar, hover invert warna (putih↔hitam) atau scale kecil.
- **Card portfolio**: rounded corner medium, border tipis (bukan shadow, karena dark theme), hover reveal tag/overlay.
- **Pill/tag**: rounded full, border tipis atau background abu gelap, dipakai untuk kategori & industri.
- **Accordion FAQ**: garis pemisah tipis (border-bottom) antar item, icon plus/chevron animasi rotate saat expand.
- **Marquee**: logo/teks berjalan infinite loop, arah kiri (default), pause on hover opsional.
- **Floating CTA button**: fixed di pojok kanan bawah, selalu di atas konten (z-index tinggi), rounded penuh.

### 5.6 Motion
- Easing halus (`ease-out`/`cubic-bezier` custom), durasi 300–600ms untuk hover/transisi kecil.
- Scroll-reveal per section: fade + translateY 20–40px, trigger sekali via Intersection Observer.
- Count-up angka: durasi ~1.5–2s, easing ease-out, trigger sekali saat masuk viewport.
- Marquee: animasi CSS `@keyframes` translateX infinite linear, durasi disesuaikan panjang konten (jangan terlalu cepat).
- Hindari animasi berat/berlebihan yang bikin lag di mobile — prioritaskan `transform`/`opacity` saja.

---

## 6. Tumpukan Teknologi
- **Backend/templating**: Laravel + Blade.
- **Styling**: Vanilla CSS (custom properties/CSS variables untuk warna & spacing, tanpa Tailwind kecuali diminta ulang).
- **Interaksi**: Vanilla JavaScript (Intersection Observer untuk scroll-reveal, `setInterval` untuk jam realtime, CSS keyframes untuk marquee).
- **Data project/testimoni/FAQ**: disimpan di config file PHP (`config/portfolio.php` dsb) atau seeder — **bukan** hardcode manual ke database production.
- Tidak ada backend/database wajib untuk versi awal (murni marketing site), kecuali nanti form contact butuh endpoint kirim email.

### Struktur file inti (usulan)
- `resources/views/layouts/app.blade.php` — layout utama (head, header, footer wrapper).
- `resources/views/home.blade.php` — halaman utama, include semua section sebagai partial.
- `resources/views/partials/` — `navbar.blade.php`, `hero.blade.php`, `about.blade.php`, `works.blade.php`, `service.blade.php`, `faq.blade.php`, `testimonials.blade.php`, `cta-footer.blade.php`.
- `public/css/style.css` — variabel dark theme, spacing scale, tipografi, komponen, motion.
- `public/js/app.js` — scroll-reveal, count-up, jam realtime, marquee init, accordion FAQ.
- `config/portfolio.php` — data array project (nama, deskripsi, tag, status coming-soon).
- `config/testimonials.php` — data array testimoni & logo klien.
- `config/faq.php` — data array pertanyaan-jawaban.

---

## 7. Verifikasi
- `php artisan serve`, cek tiap section di browser (desktop & mobile width).
- Bandingkan urutan & isi section satu-satu dengan daftar di Bagian 2 di atas.
- Cek semua hover state, accordion FAQ, marquee, count-up, jam realtime jalan tanpa error console.
- Cek responsive di 3 breakpoint (mobile/tablet/desktop).
- Commit git di tiap tahap sesuai Bagian 4.

---

## 8. Catatan Terbuka
- Nama studio, tagline, isi konten project/testimoni/FAQ — masih perlu draft teks original dari kamu (atau aku bantu buatkan draft placeholder yang polanya sama).
- Warna accent (kalau mau selain full monokrom) — perlu ditentukan.