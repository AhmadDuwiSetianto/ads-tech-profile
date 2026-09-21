@extends('layouts.frontend')
@section('title', 'Tentang Kami | ADS | Tech')

@section('content')
<section class="py-28 lg:py-36 bg-white min-h-screen">
  <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12 space-y-24">
    
    <!-- 1. Header & Intro -->
    <div class="text-center max-w-3xl mx-auto space-y-5" data-aos="fade-up">
      <div class="inline-flex items-center justify-center gap-2 px-3.5 py-1 rounded-full bg-blue-50 text-brand-blue text-xs font-bold uppercase tracking-wider border border-blue-100">
        Tentang Bisnis Kami
      </div>
      <!-- Ukuran disesuaikan menjadi text-3xl sm:text-4xl agar selaras dengan desain section lain -->
      <h1 class="text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight leading-snug">
        Kenali Perusahaan Kami Lebih Dalam
      </h1>
      <!-- Deskripsi tambahan -->
      <p class="text-base sm:text-lg text-slate-600 leading-relaxed max-w-2xl mx-auto">
        Pelajari lebih lanjut tentang perjalanan, dedikasi, dan komitmen kami dalam menghadirkan solusi teknologi terdepan yang dirancang khusus untuk mendorong kesuksesan bisnis Anda di era digital.
      </p>
    </div>

    <!-- 2. Main Description Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-6 flex justify-center" data-aos="fade-right">
        <img src="{{ asset('images/ads web.png') }}" alt="About ADS Tech" class="w-full max-w-lg h-auto object-contain">
      </div>
      <div class="lg:col-span-6 space-y-6 text-left" data-aos="fade-left">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-brand-navy leading-snug">Solusi Teknologi Inovatif untuk Pertumbuhan Bisnis Anda</h2>
        <p class="text-slate-600 text-base leading-relaxed">
          Perusahaan kami berfokus pada pengembangan perangkat lunak dan layanan konsultasi IT. Kami berkomitmen memberikan solusi teknologi terbaik dengan pengembang ahli dan berpengalaman dalam teknologi terkini, serta selalu menghasilkan produk berkualitas, tepat waktu, dan sesuai anggaran.
        </p>
        <p class="text-slate-600 text-base leading-relaxed">
          Kami juga memberikan dukungan teknis dan perawatan untuk sistem perangkat lunak secara terus-menerus guna memastikan keberlanjutan operasional bisnis Anda.
        </p>
      </div>
    </div>

    <!-- 3. Why Choose Us? -->
    <div class="space-y-12" data-aos="fade-up">
      <div class="text-center max-w-2xl mx-auto">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-brand-navy tracking-tight">Mengapa Memilih Kami?</h2>
        <p class="text-sm text-slate-500 mt-2">Keunggulan dan komitmen kami dalam setiap proyek yang dikerjakan.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="flex flex-col items-start text-left space-y-3">
          <div class="w-10 h-10 rounded-xl bg-brand-pale text-brand-blue flex items-center justify-center font-bold text-base shadow-sm">01</div>
          <h3 class="font-bold text-brand-navy text-lg">Inovasi Teknologi Terkini</h3>
          <p class="text-sm text-slate-600 leading-relaxed">Kami senantiasa memanfaatkan stack teknologi modern dan handal guna memaksimalkan performa serta kualitas setiap proyek.</p>
        </div>

        <div class="flex flex-col items-start text-left space-y-3">
          <div class="w-10 h-10 rounded-xl bg-brand-pale text-brand-blue flex items-center justify-center font-bold text-base shadow-sm">02</div>
          <h3 class="font-bold text-brand-navy text-lg">Solusi Kreatif & Unik</h3>
          <p class="text-sm text-slate-600 leading-relaxed">Bekerja dengan pendekatan profesional untuk memberikan solusi yang kreatif serta adaptif dalam pengembangan perangkat lunak.</p>
        </div>

        <div class="flex flex-col items-start text-left space-y-3">
          <div class="w-10 h-10 rounded-xl bg-brand-pale text-brand-blue flex items-center justify-center font-bold text-base shadow-sm">03</div>
          <h3 class="font-bold text-brand-navy text-lg">Fokus Kebutuhan Bisnis</h3>
          <p class="text-sm text-slate-600 leading-relaxed">Pemahaman mendalam terhadap model bisnis Anda agar produk yang dihasilkan memberikan dampak fungsional yang nyata.</p>
        </div>

        <div class="flex flex-col items-start text-left space-y-3">
          <div class="w-10 h-10 rounded-xl bg-brand-pale text-brand-blue flex items-center justify-center font-bold text-base shadow-sm">04</div>
          <h3 class="font-bold text-brand-navy text-lg">Tepat Waktu & Anggaran</h3>
          <p class="text-sm text-slate-600 leading-relaxed">Kami berkomitmen merampungkan pengerjaan dengan standar mutu tinggi, sesuai tenggat waktu dan estimasi anggaran.</p>
        </div>

        <div class="flex flex-col items-start text-left space-y-3 md:col-span-2 lg:col-span-1">
          <div class="w-10 h-10 rounded-xl bg-brand-pale text-brand-blue flex items-center justify-center font-bold text-base shadow-sm">05</div>
          <h3 class="font-bold text-brand-navy text-lg">Komunikasi Efektif</h3>
          <p class="text-sm text-slate-600 leading-relaxed">Menjaga transparansi dan komunikasi yang intensif dengan Anda sepanjang siklus pengembangan perangkat lunak.</p>
        </div>
      </div>
    </div>

    <!-- 4. Our Vision and Mission -->
    <div class="space-y-12 text-center" data-aos="fade-up">
      <div class="max-w-3xl mx-auto space-y-4">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-brand-navy tracking-tight">Visi dan Misi Perusahaan</h2>
        <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
          Kami percaya bahwa setiap bisnis memiliki potensi besar untuk mendominasi pasar digital. Komitmen ini kami wujudkan melalui arah visi dan misi yang jelas untuk mengawal setiap inovasi digital klien kami:
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 text-left pt-4">
        <!-- Vision Block -->
        <div class="space-y-4">
          <div class="inline-block px-3.5 py-1 rounded-full bg-blue-50 text-brand-blue text-xs font-bold uppercase tracking-wider border border-blue-100">Visi</div>
          <h3 class="text-xl font-bold text-brand-navy">Visi Perusahaan</h3>
          <p class="text-slate-600 text-base leading-relaxed">
            Menjadi mitra pengembang teknologi terkemuka yang menghadirkan solusi web dan perangkat lunak profesional untuk mentransformasikan potensi bisnis lokal maupun global ke level yang lebih tinggi.
          </p>
        </div>

        <!-- Mission Block -->
        <div class="space-y-4">
          <div class="inline-block px-3.5 py-1 rounded-full bg-blue-50 text-brand-blue text-xs font-bold uppercase tracking-wider border border-blue-100">Misi</div>
          <h3 class="text-xl font-bold text-brand-navy">Misi Perusahaan</h3>
          <div class="space-y-3.5">
            <div class="flex items-start gap-3">
              <div class="w-5 h-5 rounded-full bg-brand-blue/10 text-brand-blue flex items-center justify-center shrink-0 mt-0.5 font-bold text-xs">✓</div>
              <p class="text-slate-600 text-sm sm:text-base leading-relaxed">Merancang dan mengembangkan website serta aplikasi berbasis web yang responsif, aman, dan berstandar industri tinggi.</p>
            </div>
            <div class="flex items-start gap-3">
              <div class="w-5 h-5 rounded-full bg-brand-blue/10 text-brand-blue flex items-center justify-center shrink-0 mt-0.5 font-bold text-xs">✓</div>
              <p class="text-slate-600 text-sm sm:text-base leading-relaxed">Memberikan layanan konsultasi IT yang solutif guna menjawab tantangan operasional dan pemasaran digital klien.</p>
            </div>
            <div class="flex items-start gap-3">
              <div class="w-5 h-5 rounded-full bg-brand-blue/10 text-brand-blue flex items-center justify-center shrink-0 mt-0.5 font-bold text-xs">✓</div>
              <p class="text-slate-600 text-sm sm:text-base leading-relaxed">Menjalin kemitraan jangka panjang yang dilandasi oleh transparansi, ketepatan waktu, dan pelayanan purnajual yang prima.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection