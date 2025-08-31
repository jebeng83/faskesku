<div>
   @push('styles')
   <style>
      /* Style untuk printing */
      @media print {
         .no-print {
            display: none !important;
         }

         .print-only {
            display: block !important;
         }

         .form-control {
            border: none;
            padding: 0;
            margin-bottom: 0.2rem;
         }

         .card {
            border: none;
            box-shadow: none;
         }

         .position-fixed {
            display: none;
         }

         button {
            display: none;
         }

         select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: none;
         }

         .form-check-input {
            margin-left: 0;
         }

         .container {
            width: 100%;
            max-width: 100%;
         }

         body {
            font-size: 12pt;
         }

         h1,
         h2,
         h3,
         h4,
         h5,
         h6 {
            page-break-after: avoid;
         }

         table {
            page-break-inside: avoid;
         }
      }

      /* Simpan style untuk 2 kolom di print mode */
      @media print {
         .col-md-6 {
            width: 50%;
            float: left;
         }

         .row::after {
            content: "";
            display: table;
            clear: both;
         }
      }

      .status-badge {
         font-size: 0.9rem;
         margin-left: 8px;
      }

      .lab-input {
         padding: 10px;
         border-radius: 5px;
         margin-left: 25px;
         border: 1px solid #e2e8f0;
         background-color: #f8f9fa;
         display: none;
      }

      .lab-input.active {
         display: block;
      }

      /* Override untuk menampilkan input yang memiliki nilai */
      .lab-input input[value]:not([value=""]),
      .lab-input select:has(option[selected]:not([value=""])) {
         background-color: #e8f4ff !important;
      }

      .hasil-lab-row {
         border-bottom: 1px solid #dee2e6;
      }

      .riwayat_penyakit_lainnya {
         display: none;
      }

      .riwayat_penyakit_lainnya.active {
         display: block;
      }

      .riwayat-btn {
         margin-right: 5px;
         margin-bottom: 5px;
      }

      .text-navy-blue {
         color: #0056b3;
      }

      .anc-navigation {
         background-color: white;
         box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
         position: sticky;
         top: 0;
         z-index: 100;
         padding: 10px 15px;
         margin-bottom: 20px;
         border-radius: 5px;
         display: flex;
         flex-wrap: nowrap;
         overflow-x: auto;
         -webkit-overflow-scrolling: touch;
         scrollbar-width: none;
         /* For Firefox */
      }

      .anc-navigation::-webkit-scrollbar {
         display: none;
         /* For Chrome, Safari, and Opera */
      }

      .anc-navigation a {
         white-space: nowrap;
         padding: 8px 16px;
         margin-right: 10px;
         border-radius: 20px;
         color: #495057;
         font-weight: 500;
         transition: all 0.3s ease;
         font-size: 0.85rem;
      }

      .anc-navigation a:hover {
         background-color: #e9ecef;
         text-decoration: none;
         color: #0056b3;
      }

      .anc-navigation a.active {
         background-color: #0056b3;
         color: white;
      }

      .colored-toast.swal2-icon-success {
         background-color: #a5dc86 !important;
      }

      /* Mengurangi margin dan padding berlebih */
      .card-body {
         padding: 1rem;
      }

      .form-group {
         margin-bottom: 0.8rem;
      }

      h5.mb-3 {
         margin-bottom: 0.75rem !important;
      }

      /* Membuat tampilan lebih kompak */
      .form-group.row {
         margin-bottom: 0.5rem;
      }

      .nav-pills {
         margin-bottom: 0.5rem;
      }

      /* Menyesuaikan dengan #patient-content */
      #temu-wicara,
      #keadaan-pulang,
      #data-wajib,
      #ukur-bb-tb,
      #ukur-td,
      #tablet-tambah-darah,
      #pemeriksaan-lab,
      #tatalaksana-kasus {
         padding-top: 0.5rem;
      }

      /* Animasi loading */
      .spinner-wave {
         width: 100px;
         height: 100px;
         margin: auto;
         position: relative;
      }

      .spinner-wave div {
         position: absolute;
         bottom: 0;
         width: 15px;
         height: 15px;
         background-color: #3498db;
         border-radius: 50%;
         animation: wave 1.2s infinite ease-in-out;
      }

      .spinner-wave div:nth-child(1) {
         left: 0;
         animation-delay: 0s;
      }

      .spinner-wave div:nth-child(2) {
         left: 25px;
         animation-delay: 0.2s;
      }

      .spinner-wave div:nth-child(3) {
         left: 50px;
         animation-delay: 0.4s;
      }

      .spinner-wave div:nth-child(4) {
         left: 75px;
         animation-delay: 0.6s;
      }

      @keyframes wave {

         0%,
         100% {
            transform: translateY(0);
         }

         50% {
            transform: translateY(-20px);
         }
      }

      /* Styles untuk informasi ibu hamil */
      .info-ibu-hamil {
         background-color: #f8f9fa;
         border-left: 4px solid #17a2b8;
         padding: 15px;
         margin-bottom: 20px;
         border-radius: 4px;
      }

      .info-ibu-hamil h5 {
         color: #17a2b8;
         margin-bottom: 10px;
      }

      .info-ibu-hamil .row {
         margin-bottom: 5px;
      }

      .alert-not-registered {
         background-color: #fff3cd;
         border-left: 4px solid #ffc107;
         color: #856404;
         padding: 15px;
         margin-bottom: 20px;
         border-radius: 4px;
      }

      /* Warna biru tua untuk judul section */
      .text-navy-blue {
         color: #0d47a1 !important;
      }

      /* Style untuk bagian form */
      .form-group {
         border-left: 3px solid #e3f2fd;
         padding-left: 15px;
         margin-bottom: 20px;
         padding-top: 10px;
         padding-bottom: 10px;
      }

      /* Style untuk riwayat penyakit */
      #riwayat_lainnya {
         display: none;
      }

      .riwayat_penyakit_lainnya.active #riwayat_lainnya {
         display: block;
         margin-top: 0.5rem;
         transition: all 0.3s ease;
      }

      .riwayat_penyakit_lainnya {
         transition: all 0.3s ease;
      }

      /* Styling untuk tombol hitung */
      .btn-sm.btn-primary {
         transition: all 0.2s ease;
      }

      .btn-sm.btn-primary:hover {
         background-color: #1565c0;
         transform: translateY(-1px);
      }

      .btn-sm.btn-primary:active {
         transform: translateY(1px);
      }

      /* Styling untuk form lab */
      .lab-input {
         transition: max-height 0.3s ease, opacity 0.3s ease, margin 0.3s ease;
         max-height: 0;
         opacity: 0;
         overflow: hidden;
         margin-top: 0;
      }

      .lab-input.active {
         max-height: 100px;
         opacity: 1;
         margin-top: 0.5rem;
      }

      /* Styling untuk tombol hitung */
      .btn-sm.btn-primary {
         transition: all 0.2s ease;
      }

      .btn-sm.btn-primary:hover {
         background-color: #1565c0;
         transform: translateY(-1px);
      }

      .btn-sm.btn-primary:active {
         transform: translateY(1px);
      }

      /* Styling untuk navigasi ANC modern */
      .anc-navigation {
         background: #fff;
         overflow: hidden;
      }

      .anc-nav-item {
         display: flex;
         align-items: center;
         justify-content: center;
         padding: 1rem;
         color: #495057;
         text-decoration: none;
         font-weight: 500;
         text-align: center;
         transition: all 0.3s ease;
         border-right: 1px solid rgba(0, 0, 0, 0.05);
         border-bottom: 1px solid rgba(0, 0, 0, 0.05);
         height: 100%;
         min-height: 70px;
      }

      .anc-nav-item:hover {
         background-color: #f8f9fa;
         color: #007bff;
         text-decoration: none;
      }

      .anc-nav-item.active {
         color: #fff;
         background-color: #007bff;
         border-color: #007bff;
      }

      .anc-nav-item i {
         font-size: 1.25rem;
         margin-right: 0.5rem;
         min-width: 20px;
         text-align: center;
      }

      /* Responsive adjustments */
      @media (max-width: 768px) {
         .anc-nav-item {
            padding: 0.75rem 0.5rem;
            font-size: 0.85rem;
            flex-direction: column;
            min-height: 60px;
         }

         .anc-nav-item i {
            margin-right: 0;
            margin-bottom: 0.25rem;
         }
      }

      /* SweetAlert2 Custom Styles */
      .colored-toast.swal2-icon-success {
         background-color: #a5dc86 !important;
      }

      .colored-toast.swal2-icon-error {
         background-color: #f27474 !important;
      }

      .colored-toast .swal2-title {
         color: white;
      }

      .colored-toast .swal2-close {
         color: white;
      }

      .colored-toast .swal2-html-container {
         color: white;
      }

      .swal2-popup.swal2-toast {
         box-shadow: 0 0 0.625em #d9d9d9;
         padding: 1em;
         font-size: 1rem;
      }

      /* Animasi untuk toast */
      @keyframes slideInFromTop {
         0% {
            transform: translateY(-150%);
            opacity: 0;
         }

         100% {
            transform: translateY(0);
            opacity: 1;
         }
      }

      .swal2-popup.swal2-toast {
         animation: slideInFromTop 0.5s ease-out forwards;
      }
   </style>
   @endpush

   <!-- Debug Info untuk development -->
   @if(app()->environment('local') || app()->environment('development'))
   <div class="debug-info p-2 mb-2 border border-secondary rounded bg-light" style="font-size: 12px;">
      <strong>Debug Info:</strong>
      <ul class="mb-0 pl-3">
         <li>noRawat: {{ $noRawat ?? 'Tidak ada' }}</li>
         <li>noRm: {{ $noRm ?? 'Tidak ada' }}</li>
      </ul>
   </div>
   @endif

   <!-- Error Messages -->
   @if (session()->has('error'))
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <h5><i class="icon fas fa-ban"></i> Error!</h5>
      {{ session('error') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
      </button>
   </div>
   @endif

   @if (session()->has('success'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
      <h5><i class="icon fas fa-check"></i> Success!</h5>
      {{ session('success') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
      </button>
   </div>
   @endif

   <!-- Loading Indicator -->
   <div wire:loading class="text-center p-3">
      <div class="spinner-wave">
         <div></div>
         <div></div>
         <div></div>
         <div></div>
      </div>
      <p class="mt-2 text-primary">Memproses data...</p>
   </div>

   <!-- Main Content -->
   <div wire:loading.remove>
      @if(!$validIbuHamil && $errorMessage)
      <div class="alert-not-registered">
         <h5><i class="fas fa-exclamation-triangle mr-2"></i>Pasien Bukan Ibu Hamil Aktif</h5>
         <p>{{ $errorMessage }}</p>
         <p>Pasien harus terdaftar sebagai ibu hamil aktif di sistem untuk mengakses form Pemeriksaan ANC. Silakan
            daftarkan pasien terlebih dahulu melalui menu Data Ibu Hamil.</p>
      </div>
      @else

      <!-- Informasi Dasar Ibu Hamil -->
      <div class="info-ibu-hamil">
         <h5><i class="fas fa-female mr-2"></i>Informasi Ibu Hamil</h5>
         <div class="row">
            <div class="col-md-6">
               <div class="row">
                  <div class="col-md-4 font-weight-bold">Nama</div>
                  <div class="col-md-8">: {{ $dataIbuHamil['nama'] ?? '-' }}</div>
               </div>
               <div class="row">
                  <div class="col-md-4 font-weight-bold">Usia</div>
                  <div class="col-md-8">: {{ $dataIbuHamil['usia'] ?? '-' }} tahun</div>
               </div>
               <div class="row">
                  <div class="col-md-4 font-weight-bold">HPHT</div>
                  <div class="col-md-8">: {{ $dataIbuHamil['hpht'] ?? '-' }}</div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="row">
                  <div class="col-md-4 font-weight-bold">HPL</div>
                  <div class="col-md-8">: {{ $dataIbuHamil['hpl'] ?? '-' }}</div>
               </div>
               <div class="row">
                  <div class="col-md-4 font-weight-bold">Kehamilan</div>
                  <div class="col-md-8">: {{ $dataIbuHamil['usia_kehamilan'] ?? '-' }} </div>
               </div>
               @if($id_hamil)
            </div>
         </div>
      </div>

      <form wire:submit.prevent="save">
         <div class="card mb-4 shadow-sm">
            {{-- <div class="card-body p-0">
               <div class="anc-navigation">
                  <div class="row mx-0">
                     <div class="col-md-3 p-0">
                        <a class="anc-nav-item active" href="#anamnesis"
                           onclick="event.preventDefault(); document.getElementById('anamnesis').scrollIntoView({behavior: 'smooth'})">
                           <i class="fas fa-clipboard-list"></i> <span class="text-primary">Anamnesis</span>
                        </a>
                     </div>
                     <div class="col-md-3 p-0">
                        <a class="anc-nav-item" href="#data-wajib"
                           onclick="event.preventDefault(); document.getElementById('data-wajib').scrollIntoView({behavior: 'smooth'})">
                           <i class="fas fa-clipboard-check"></i> Data Wajib
                        </a>
                     </div>
                     <div class="col-md-3 p-0">
                        <a class="anc-nav-item" href="#ukur-bb-tb"
                           onclick="event.preventDefault(); document.getElementById('ukur-bb-tb').scrollIntoView({behavior: 'smooth'})">
                           <i class="fas fa-weight"></i> T1: BB & TB
                        </a>
                     </div>
                     <div class="col-md-3 p-0">
                        <a class="anc-nav-item" href="#ukur-td"
                           onclick="event.preventDefault(); document.getElementById('ukur-td').scrollIntoView({behavior: 'smooth'})">
                           <i class="fas fa-heartbeat"></i> T2: TD
                        </a>
                     </div>
                  </div>

                  <div class="row mx-0">
                     <div class="col-md-3 p-0">
                        <a class="anc-nav-item" href="#status-gizi"
                           onclick="event.preventDefault(); document.getElementById('status-gizi').scrollIntoView({behavior: 'smooth'})">
                           <i class="fas fa-ruler"></i> T3: Status Gizi
                        </a>
                     </div>
                     <div class="col-md-3 p-0">
                        <a class="anc-nav-item" href="#tinggi-fundus-uteri"
                           onclick="event.preventDefault(); document.getElementById('tinggi-fundus-uteri').scrollIntoView({behavior: 'smooth'})">
                           <i class="fas fa-child"></i> T4: Tinggi Fundus
                        </a>
                     </div>
                     <div class="col-md-3 p-0">
                        <a class="anc-nav-item" href="#djj-presentasi"
                           onclick="event.preventDefault(); document.getElementById('djj-presentasi').scrollIntoView({behavior: 'smooth'})">
                           <i class="fas fa-baby"></i> T5: DJJ & Presentasi
                        </a>
                     </div>
                     <div class="col-md-3 p-0">
                        <a class="anc-nav-item" href="#status-imunisasi"
                           onclick="event.preventDefault(); document.getElementById('status-imunisasi').scrollIntoView({behavior: 'smooth'})">
                           <i class="fas fa-syringe"></i> T6: Imunisasi TT
                        </a>
                     </div>
                  </div>

                  <div class="row mx-0">
                     <div class="col-md-3 p-0">
                        <a class="anc-nav-item" href="#tablet-tambah-darah"
                           onclick="event.preventDefault(); document.getElementById('tablet-tambah-darah').scrollIntoView({behavior: 'smooth'})">
                           <i class="fas fa-pills"></i> T7: Tablet Fe
                        </a>
                     </div>
                     <div class="col-md-3 p-0">
                        <a class="anc-nav-item" href="#pemeriksaan-lab"
                           onclick="event.preventDefault(); document.getElementById('pemeriksaan-lab').scrollIntoView({behavior: 'smooth'})">
                           <i class="fas fa-flask"></i> T8: Lab
                        </a>
                     </div>
                     <div class="col-md-3 p-0">
                        <a class="anc-nav-item" href="#tatalaksana-kasus"
                           onclick="event.preventDefault(); document.getElementById('tatalaksana-kasus').scrollIntoView({behavior: 'smooth'})">
                           <i class="fas fa-procedures"></i> T9: Tatalaksana
                        </a>
                     </div>
                     <div class="col-md-3 p-0">
                        <a class="anc-nav-item" href="#temu-wicara"
                           onclick="event.preventDefault(); document.getElementById('temu-wicara').scrollIntoView({behavior: 'smooth'})">
                           <i class="fas fa-comments"></i> T10: Konseling
                        </a>
                     </div>
                  </div>

                  <div class="row mx-0">
                     <div class="col-md-6 p-0">
                        <a class="anc-nav-item" href="#tindak-lanjut"
                           onclick="event.preventDefault(); document.getElementById('tindak-lanjut').scrollIntoView({behavior: 'smooth'})">
                           <i class="fas fa-clipboard-check"></i> Tindak Lanjut
                        </a>
                     </div>
                     <div class="col-md-6 p-0">
                        <a class="anc-nav-item" href="#keadaan-pulang"
                           onclick="event.preventDefault(); document.getElementById('keadaan-pulang').scrollIntoView({behavior: 'smooth'})">
                           <i class="fas fa-home"></i> Keadaan Pulang
                        </a>
                     </div>
                  </div>
               </div>
            </div> --}}
         </div>

         <!-- Anamnesis -->
         <div class="form-group" id="anamnesis">
            <h5 class="mb-3 font-weight-bold text-navy-blue d-flex align-items-center">
               <span class="badge badge-primary mr-2">1</span> <span class="text-primary">Anamnesis</span>
            </h5>

            <div class="form-group row">
               <label for="keluhan_utama" class="col-sm-2 col-form-label">Keluhan Utama</label>
               <div class="col-sm-10">
                  <textarea class="form-control @error('keluhan_utama') is-invalid @enderror" rows="2"
                     wire:model.defer="keluhan_utama" id="keluhan_utama"></textarea>
                  @error('keluhan_utama')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <div class="form-group row">
               <label for="riwayat_kehamilan" class="col-sm-2 col-form-label">Riwayat Obstetri</label>
               <div class="col-sm-10">
                  <div class="row">
                     <div class="col-md-2">
                        <div class="form-group">
                           <label for="gravida">G (Gravida)</label>
                           <input type="number" class="form-control @error('gravida') is-invalid @enderror"
                              wire:model.defer="gravida" id="gravida" min="0">
                           @error('gravida')
                           <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="form-group">
                           <label for="partus">P (Partus)</label>
                           <input type="number" class="form-control @error('partus') is-invalid @enderror"
                              wire:model.defer="partus" id="partus" min="0">
                           @error('partus')
                           <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="form-group">
                           <label for="abortus">A (Abortus)</label>
                           <input type="number" class="form-control @error('abortus') is-invalid @enderror"
                              wire:model.defer="abortus" id="abortus" min="0">
                           @error('abortus')
                           <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="form-group">
                           <label for="hidup">Hidup</label>
                           <input type="number" class="form-control @error('hidup') is-invalid @enderror"
                              wire:model.defer="hidup" id="hidup" min="0">
                           @error('hidup')
                           <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="form-group row">
               <label for="riwayat_penyakit" class="col-sm-2 col-form-label">Riwayat Penyakit</label>
               <div class="col-sm-10">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="form-check mb-2">
                           <input class="form-check-input" type="checkbox" id="hipertensi"
                              wire:model.defer="riwayat_penyakit.hipertensi">
                           <label class="form-check-label" for="hipertensi">Hipertensi</label>
                        </div>
                        <div class="form-check mb-2">
                           <input class="form-check-input" type="checkbox" id="diabetes"
                              wire:model.defer="riwayat_penyakit.diabetes">
                           <label class="form-check-label" for="diabetes">Diabetes Mellitus</label>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-check mb-2">
                           <input class="form-check-input" type="checkbox" id="jantung"
                              wire:model.defer="riwayat_penyakit.jantung">
                           <label class="form-check-label" for="jantung">Penyakit Jantung</label>
                        </div>
                        <div class="form-check mb-2">
                           <input class="form-check-input" type="checkbox" id="asma"
                              wire:model.defer="riwayat_penyakit.asma">
                           <label class="form-check-label" for="asma">Asma</label>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-check mb-2">
                           <input class="form-check-input" type="checkbox" id="lainnya_check"
                              wire:model.defer="riwayat_penyakit.lainnya_check">
                           <label class="form-check-label" for="lainnya_check">Lainnya</label>
                        </div>
                        <div class="riwayat_penyakit_lainnya" id="riwayat_lainnya_container">
                           <input type="text" class="form-control mt-1" id="riwayat_lainnya"
                              wire:model.defer="riwayat_penyakit.lainnya" placeholder="Sebutkan" id="riwayat_lainnya">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Data Wajib Diisi -->
         <div class="form-group" id="data-wajib">
            <h5 class="mb-3 font-weight-bold text-navy-blue d-flex align-items-center">
               <span class="badge badge-primary mr-2">2</span>
               <span class="text-primary">Data Wajib Diisi</span>
            </h5>

            <div class="form-group row">
               <label for="tanggal_anc" class="col-sm-2 col-form-label">Tanggal ANC</label>
               <div class="col-sm-4">
                  <div class="input-group">
                     <input type="text" class="form-control @error('tanggal_anc') is-invalid @enderror" id="tanggal_anc"
                        wire:model.defer="tanggal_anc_input" placeholder="DD/MM/YYYY, HH:MM"
                        value="{{ isset($tanggal_anc) ? \Carbon\Carbon::parse($tanggal_anc)->format('d/m/Y, H:i') : now()->format('d/m/Y, H:i') }}">
                     <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                     </div>
                     @error('tanggal_anc')
                     <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>
                  <small class="text-muted">Format: DD/MM/YYYY, HH:MM (contoh: 30/03/2025, 06:49)</small>
               </div>

               <label for="diperiksa_oleh" class="col-sm-2 col-form-label">Diperiksa Oleh</label>
               <div class="col-sm-4">
                  <select class="form-control @error('diperiksa_oleh') is-invalid @enderror"
                     wire:model.defer="diperiksa_oleh" id="diperiksa_oleh">
                     <option value="">- Pilih Petugas -</option>
                     @if(isset($petugas) && $petugas->count() > 0)
                     @foreach($petugas as $p)
                     <option value="{{ $p->nama }}">{{ $p->nama }}</option>
                     @endforeach
                     @endif
                  </select>
                  @error('diperiksa_oleh')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <div class="form-group row">
               <label for="usia_kehamilan" class="col-sm-2 col-form-label">Usia Kehamilan</label>
               <div class="col-sm-4">
                  <div class="input-group">
                     <input type="number" class="form-control @error('usia_kehamilan') is-invalid @enderror"
                        wire:model.defer="usia_kehamilan" id="usia_kehamilan">
                     <div class="input-group-append">
                        <span class="input-group-text">Minggu</span>
                     </div>
                     @error('usia_kehamilan')
                     <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>
               </div>

               <label for="trimester" class="col-sm-2 col-form-label">Trimester</label>
               <div class="col-sm-4">
                  <div class="d-flex">
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="trimester" id="trimester1"
                           wire:model.defer="trimester" value="1">
                        <label class="form-check-label" for="trimester1">1</label>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="trimester" id="trimester2"
                           wire:model.defer="trimester" value="2">
                        <label class="form-check-label" for="trimester2">2</label>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="trimester" id="trimester3"
                           wire:model.defer="trimester" value="3">
                        <label class="form-check-label" for="trimester3">3</label>
                     </div>
                  </div>
                  @error('trimester')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <div class="form-group row">
               <label for="kunjungan_ke" class="col-sm-2 col-form-label">Kunjungan K</label>
               <div class="col-sm-4">
                  <select class="form-control @error('kunjungan_ke') is-invalid @enderror"
                     wire:model.defer="kunjungan_ke" id="kunjungan_ke">
                     <option value="">- Pilih -</option>
                     <option value="1">K1</option>
                     <option value="2">K2</option>
                     <option value="3">K3</option>
                     <option value="4">K4</option>
                     <option value="5">K5</option>
                     <option value="6">K6</option>
                  </select>
                  @error('kunjungan_ke')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>
         </div>

         <!-- Timbang Berat Badan dan Ukur Tinggi Badan -->
         <div class="form-group" id="ukur-bb-tb">
            <h5 class="mb-3 font-weight-bold text-navy-blue d-flex align-items-center">
               <span class="badge badge-primary mr-2">3</span> <span class="text-primary">Timbang Berat Badan dan Ukur
                  Tinggi Badan (T1)</span>
            </h5>

            <div class="form-group row">
               <label for="berat_badan" class="col-sm-2 col-form-label">Berat Badan (saat ini)</label>
               <div class="col-sm-4">
                  <div class="input-group">
                     <input type="number" step="0.1" class="form-control @error('berat_badan') is-invalid @enderror"
                        wire:model.defer="berat_badan" id="berat_badan">
                     <div class="input-group-append">
                        <span class="input-group-text">kg</span>
                     </div>
                     @error('berat_badan')
                     <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>
               </div>

               <label for="tinggi_badan" class="col-sm-2 col-form-label">Tinggi Badan</label>
               <div class="col-sm-4">
                  <div class="input-group">
                     <input type="number" step="0.1" class="form-control @error('tinggi_badan') is-invalid @enderror"
                        wire:model.defer="tinggi_badan" id="tinggi_badan">
                     <div class="input-group-append">
                        <span class="input-group-text">cm</span>
                     </div>
                     @error('tinggi_badan')
                     <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>
               </div>
            </div>

            <div class="form-group row">
               <div class="col-sm-2"></div>
               <div class="col-sm-4">
                  <button type="button" class="btn btn-sm btn-primary" wire:click.prevent="hitungIMT">
                     <i class="fas fa-calculator mr-1"></i> Hitung IMT
                  </button>
               </div>
            </div>

            <div class="form-group row">
               <label for="imt" class="col-sm-2 col-form-label">IMT Saat ini</label>
               <div class="col-sm-4">
                  <input type="text" class="form-control bg-light" wire:model.defer="imt" id="imt" readonly>
               </div>

               <label for="kategori_imt" class="col-sm-2 col-form-label">Kategori IMT</label>
               <div class="col-sm-4">
                  <input type="text" class="form-control bg-light" wire:model.defer="kategori_imt" id="kategori_imt"
                     readonly>
               </div>
            </div>

            <div class="form-group row">
               <label for="jumlah_janin" class="col-sm-2 col-form-label">Jumlah Janin</label>
               <div class="col-sm-10">
                  <div class="d-flex">
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jumlah_janin" id="janin_tidak_diketahui"
                           wire:model.defer="jumlah_janin" value="Tidak Diketahui">
                        <label class="form-check-label" for="janin_tidak_diketahui">Tidak Diketahui</label>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jumlah_janin" id="janin_tunggal"
                           wire:model.defer="jumlah_janin" value="Tunggal">
                        <label class="form-check-label" for="janin_tunggal">Tunggal</label>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jumlah_janin" id="janin_ganda"
                           wire:model.defer="jumlah_janin" value="Ganda">
                        <label class="form-check-label" for="janin_ganda">Ganda</label>
                     </div>
                  </div>
                  @error('jumlah_janin')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
               </div>
            </div>
         </div>

         <!-- Ukur Tekanan Darah -->
         <div class="form-group" id="ukur-td">
            <h5 class="mb-3 font-weight-bold text-navy-blue d-flex align-items-center">
               <span class="badge badge-primary mr-2">4</span> <span class="text-primary">Ukur Tekanan Darah (T2)</span>
            </h5>

            <div class="form-group row">
               <label for="td_sistole" class="col-sm-2 col-form-label">TD Sistole</label>
               <div class="col-sm-4">
                  <div class="input-group">
                     <input type="number" class="form-control @error('td_sistole') is-invalid @enderror"
                        wire:model.defer="td_sistole" id="td_sistole">
                     <div class="input-group-append">
                        <span class="input-group-text">mm</span>
                     </div>
                     @error('td_sistole')
                     <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>
               </div>

               <label for="td_diastole" class="col-sm-2 col-form-label">TD Diastole</label>
               <div class="col-sm-4">
                  <div class="input-group">
                     <input type="number" class="form-control @error('td_diastole') is-invalid @enderror"
                        wire:model.defer="td_diastole" id="td_diastole">
                     <div class="input-group-append">
                        <span class="input-group-text">HG</span>
                     </div>
                     @error('td_diastole')
                     <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>
               </div>
            </div>
         </div>

         <!-- Status Gizi -->
         <div class="form-group" id="status-gizi">
            <h5 class="mb-3 font-weight-bold text-navy-blue d-flex align-items-center">
               <span class="badge badge-primary mr-2">5</span> <span class="text-primary">Status Gizi (T3)</span>
            </h5>

            <div class="form-group row">
               <label for="lila" class="col-sm-2 col-form-label">Lingkar Lengan Atas (LILA)</label>
               <div class="col-sm-4">
                  <div class="input-group">
                     <input type="number" step="0.1" class="form-control @error('lila') is-invalid @enderror" id="lila"
                        wire:model.defer="lila">
                     <div class="input-group-append">
                        <span class="input-group-text">cm</span>
                     </div>
                     @error('lila')
                     <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>
                  <button type="button" class="btn btn-sm btn-primary mt-2" wire:click.prevent="tentukanStatusGizi">
                     <i class="fas fa-calculator mr-1"></i> Hitung Status Gizi
                  </button>
               </div>

               <label for="status_gizi" class="col-sm-2 col-form-label">Status Gizi</label>
               <div class="col-sm-4">
                  <input type="text" class="form-control bg-light" wire:model="status_gizi" id="status_gizi" readonly>
               </div>
            </div>
         </div>

         <!-- Tinggi Fundus Uteri -->
         <div class="form-group" id="tinggi-fundus-uteri">
            <h5 class="mb-3 font-weight-bold text-navy-blue d-flex align-items-center">
               <span class="badge badge-primary mr-2">6</span> <span class="text-primary">Tinggi Fundus Uteri
                  (T4)</span>
            </h5>

            <div class="form-group row">
               <label for="tinggi_fundus" class="col-sm-2 col-form-label">Tinggi Fundus</label>
               <div class="col-sm-4">
                  <div class="input-group">
                     <input type="number" step="0.1" class="form-control @error('tinggi_fundus') is-invalid @enderror"
                        id="tinggi_fundus" wire:model.defer="tinggi_fundus">
                     <div class="input-group-append">
                        <span class="input-group-text">cm</span>
                     </div>
                     @error('tinggi_fundus')
                     <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>
                  <button type="button" class="btn btn-sm btn-primary mt-2"
                     wire:click.prevent="hitungTaksiranBeratJanin">
                     <i class="fas fa-calculator mr-1"></i> Hitung TBJ
                  </button>
               </div>

               <label for="taksiran_berat_janin" class="col-sm-2 col-form-label">Taksiran Berat Janin</label>
               <div class="col-sm-4">
                  <div class="input-group">
                     <input type="number" class="form-control bg-light" wire:model="taksiran_berat_janin"
                        id="taksiran_berat_janin" readonly>
                     <div class="input-group-append">
                        <span class="input-group-text">gram</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Tentukan DJJ dan Presentasi Janin -->
         <div class="form-group" id="djj-presentasi">
            <h5 class="mb-3 font-weight-bold text-navy-blue d-flex align-items-center">
               <span class="badge badge-primary mr-2">7</span> <span class="text-primary">Tentukan Denyut Jantung Janin
                  dan Presentasi Janin (T5)</span>
            </h5>

            <div class="form-group row">
               <label for="denyut_jantung_janin" class="col-sm-2 col-form-label">Detak Jantung Janin</label>
               <div class="col-sm-4">
                  <div class="input-group">
                     <input type="number" class="form-control @error('denyut_jantung_janin') is-invalid @enderror"
                        wire:model.defer="denyut_jantung_janin" id="denyut_jantung_janin">
                     <div class="input-group-append">
                        <span class="input-group-text">bpm</span>
                     </div>
                     @error('denyut_jantung_janin')
                     <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>
               </div>

               <label for="presentasi" class="col-sm-2 col-form-label">Presentasi Janin</label>
               <div class="col-sm-4">
                  <select class="form-control @error('presentasi') is-invalid @enderror" wire:model.defer="presentasi"
                     id="presentasi">
                     <option value="">- Pilih -</option>
                     <option value="Kepala">Kepala</option>
                     <option value="Bokong">Bokong</option>
                     <option value="Lintang">Lintang</option>
                     <option value="Belum Diketahui">Belum Diketahui</option>
                  </select>
                  @error('presentasi')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>
         </div>

         <!-- Status Imunisasi TT -->
         <div class="form-group" id="status-imunisasi">
            <h5 class="mb-3 font-weight-bold text-navy-blue d-flex align-items-center">
               <span class="badge badge-primary mr-2">8</span> <span class="text-primary">Status Imunisasi TT
                  (T6)</span>
            </h5>

            <div class="form-group row">
               <label for="status_tt" class="col-sm-2 col-form-label">Status Imunisasi TT</label>
               <div class="col-sm-4">
                  <select class="form-control @error('status_tt') is-invalid @enderror" wire:model.defer="status_tt"
                     id="status_tt">
                     <option value="">- Pilih -</option>
                     <option value="TT1">TT1</option>
                     <option value="TT2">TT2</option>
                     <option value="TT3">TT3</option>
                     <option value="TT4">TT4</option>
                     <option value="TT5">TT5</option>
                     <option value="TT Lengkap">TT Lengkap</option>
                  </select>
                  @error('status_tt')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>

               <label for="tanggal_imunisasi" class="col-sm-2 col-form-label">Tanggal Imunisasi</label>
               <div class="col-sm-4">
                  <div class="input-group">
                     <input type="date" class="form-control @error('tanggal_imunisasi') is-invalid @enderror"
                        wire:model.defer="tanggal_imunisasi" id="tanggal_imunisasi">
                     <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                     </div>
                     @error('tanggal_imunisasi')
                     <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>
               </div>
            </div>
         </div>

         <!-- Pemberian Tablet Tambah Darah (TTD) -->
         <div class="form-group" id="tablet-tambah-darah">
            <h5 class="mb-3 font-weight-bold text-navy-blue d-flex align-items-center">
               <span class="badge badge-primary mr-2">9</span> <span class="text-primary">Pemberian Tablet Tambah Darah
                  (T7)</span>
            </h5>

            <div class="form-group row">
               <label for="jumlah_fe" class="col-sm-2 col-form-label">Jumlah Tablet Fe</label>
               <div class="col-sm-4">
                  <div class="input-group">
                     <input type="number" class="form-control @error('jumlah_fe') is-invalid @enderror"
                        wire:model.defer="jumlah_fe" id="jumlah_fe">
                     <div class="input-group-append">
                        <span class="input-group-text">(Tab/Botol)</span>
                     </div>
                     @error('jumlah_fe')
                     <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>
               </div>

               <label for="dosis" class="col-sm-2 col-form-label">Dosis (Tablet/hari)</label>
               <div class="col-sm-4">
                  <input type="number" class="form-control @error('dosis') is-invalid @enderror"
                     wire:model.defer="dosis" id="dosis">
                  @error('dosis')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>
         </div>

         <!-- Pemeriksaan Laboratorium -->
         <div class="form-group" id="pemeriksaan-lab">
            <h5 class="mb-3 font-weight-bold text-navy-blue d-flex align-items-center">
               <span class="badge badge-primary mr-2">9</span> <span class="text-primary">Pemeriksaan Lab (T8)</span>
            </h5>

            <div class="form-group row">
               <label for="tanggal_lab" class="col-sm-2 col-form-label">Tanggal Pemeriksaan Lab</label>
               <div class="col-sm-4">
                  <div class="input-group">
                     <input type="date" class="form-control" wire:model.defer="tanggal_lab" id="tanggal_lab">
                     <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                     </div>
                  </div>
               </div>
            </div>

            <div class="form-group row">
               <label class="col-sm-2 col-form-label">Jenis Pemeriksaan Lab</label>
               <div class="col-sm-10">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="custom-control custom-checkbox mb-2">
                           <input type="checkbox" class="custom-control-input lab-checkbox" id="lab_hb"
                              wire:model.defer="lab.hb.checked" data-target="input_hb">
                           <label class="custom-control-label" for="lab_hb">Hemoglobin (Hb)</label>
                        </div>

                        <div id="input_hb" class="lab-input mb-3">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="Nilai Hb"
                                 wire:model.defer="lab.hb.nilai" id="nilai_hb">
                              <div class="input-group-append">
                                 <span class="input-group-text">g/dL</span>
                              </div>
                           </div>
                        </div>

                        <div class="custom-control custom-checkbox mb-2">
                           <input type="checkbox" class="custom-control-input lab-checkbox" id="lab_goldar"
                              wire:model.defer="lab.goldar.checked" data-target="input_goldar">
                           <label class="custom-control-label" for="lab_goldar">Golongan Darah</label>
                        </div>

                        <div id="input_goldar" class="lab-input mb-3">
                           <select class="form-control" wire:model.defer="lab.goldar.nilai" id="nilai_goldar">
                              <option value="">Pilih Golongan Darah</option>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="AB">AB</option>
                              <option value="O">O</option>
                           </select>
                        </div>

                        <div class="custom-control custom-checkbox mb-2">
                           <input type="checkbox" class="custom-control-input lab-checkbox" id="lab_protein_urin"
                              wire:model.defer="lab.protein_urin.checked" data-target="input_protein_urin">
                           <label class="custom-control-label" for="lab_protein_urin">Protein Urin</label>
                        </div>

                        <div id="input_protein_urin" class="lab-input mb-3">
                           <select class="form-control" wire:model.defer="lab.protein_urin.nilai"
                              id="nilai_protein_urin">
                              <option value="">Pilih Hasil</option>
                              <option value="Negatif">Negatif</option>
                              <option value="Positif 1">Positif 1</option>
                              <option value="Positif 2">Positif 2</option>
                              <option value="Positif 3">Positif 3</option>
                           </select>
                        </div>

                        <div class="custom-control custom-checkbox mb-2">
                           <input type="checkbox" class="custom-control-input lab-checkbox" id="lab_gula_darah"
                              wire:model.defer="lab.gula_darah.checked" data-target="input_gula_darah">
                           <label class="custom-control-label" for="lab_gula_darah">Gula Darah</label>
                        </div>

                        <div id="input_gula_darah" class="lab-input mb-3">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="Nilai Gula Darah"
                                 wire:model.defer="lab.gula_darah.nilai" id="nilai_gula_darah">
                              <div class="input-group-append">
                                 <span class="input-group-text">mg/dL</span>
                              </div>
                           </div>
                        </div>

                     </div>
                     <div class="col-md-6">
                        <div class="custom-control custom-checkbox mb-2">
                           <input type="checkbox" class="custom-control-input lab-checkbox" id="lab_hiv"
                              wire:model.defer="lab.hiv.checked" data-target="input_hiv">
                           <label class="custom-control-label" for="lab_hiv">HIV</label>
                        </div>

                        <div id="input_hiv" class="lab-input mb-3">
                           <select class="form-control" wire:model.defer="lab.hiv.nilai" id="nilai_hiv">
                              <option value="">Pilih Hasil</option>
                              <option value="Non Reaktif">Non Reaktif</option>
                              <option value="Reaktif">Reaktif</option>
                           </select>
                        </div>

                        <div class="custom-control custom-checkbox mb-2">
                           <input type="checkbox" class="custom-control-input lab-checkbox" id="lab_sifilis"
                              wire:model.defer="lab.sifilis.checked" data-target="input_sifilis">
                           <label class="custom-control-label" for="lab_sifilis">Sifilis</label>
                        </div>

                        <div id="input_sifilis" class="lab-input mb-3">
                           <select class="form-control" wire:model.defer="lab.sifilis.nilai" id="nilai_sifilis">
                              <option value="">Pilih Hasil</option>
                              <option value="Non Reaktif">Non Reaktif</option>
                              <option value="Reaktif">Reaktif</option>
                           </select>
                        </div>

                        <div class="custom-control custom-checkbox mb-2">
                           <input type="checkbox" class="custom-control-input lab-checkbox" id="lab_hbsag"
                              wire:model.defer="lab.hbsag.checked" data-target="input_hbsag">
                           <label class="custom-control-label" for="lab_hbsag">HBsAg</label>
                        </div>

                        <div id="input_hbsag" class="lab-input mb-3">
                           <select class="form-control" wire:model.defer="lab.hbsag.nilai" id="nilai_hbsag">
                              <option value="">Pilih Hasil</option>
                              <option value="Non Reaktif">Non Reaktif</option>
                              <option value="Reaktif">Reaktif</option>
                           </select>
                        </div>

                        <div class="custom-control custom-checkbox mb-2">
                           <input type="checkbox" class="custom-control-input lab-checkbox" id="lab_malaria"
                              wire:model.defer="lab.malaria.checked" data-target="input_malaria">
                           <label class="custom-control-label" for="lab_malaria">Malaria</label>
                        </div>

                        <div id="input_malaria" class="lab-input mb-3">
                           <select class="form-control" wire:model.defer="lab.malaria.nilai" id="nilai_malaria">
                              <option value="">Pilih Hasil</option>
                              <option value="Positif">Positif</option>
                              <option value="Negatif">Negatif</option>
                           </select>
                        </div>

                     </div>
                  </div>

                  <!-- Tampilan hasil lab dalam format mudah dibaca -->
                  <div class="card mt-3 border-primary">
                     <div class="card-header bg-primary text-white">
                        <i class="fas fa-flask mr-2"></i> Ringkasan Hasil Pemeriksaan Lab
                     </div>
                     <div class="card-body p-0">
                        {!! $this->displayLabResults($lab) !!}
                     </div>
                     <div class="card-footer bg-light">
                        <small class="text-muted"><i class="fas fa-info-circle mr-1"></i> Hasil pemeriksaan akan
                           disimpan dalam format ini</small>
                     </div>
                  </div>

                  <div class="row mt-3" id="rujukan_div" style="display: none;">
                     <div class="col-12">
                        <div class="alert alert-warning">
                           <i class="fas fa-exclamation-triangle mr-2"></i>
                           <strong>Perhatian!</strong> Hasil pemeriksaan reaktif terdeteksi. Perlu tindak lanjut
                           rujukan.
                        </div>
                        <div class="form-group">
                           <label for="rujukan_ims">Tindak Lanjut Rujukan</label>
                           <select class="form-control" wire:model.defer="rujukan_ims" id="rujukan_ims">
                              <option value="-">- Pilih -</option>
                              <option value="Dirujuk ke Poli IMS">Dirujuk ke Poli IMS</option>
                              <option value="Dirujuk ke Poli Penyakit Dalam">Dirujuk ke Poli Penyakit Dalam</option>
                              <option value="Dirujuk ke Poli Kebidanan">Dirujuk ke Poli Kebidanan</option>
                              <option value="Lainnya">Lainnya</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Tatalaksana Kasus -->
         <div class="form-group" id="tatalaksana-kasus">
            <h5 class="mb-3 font-weight-bold text-navy-blue d-flex align-items-center">
               <span class="badge badge-primary mr-2">11</span> <span class="text-primary">Tatalaksana Kasus (T9)</span>
            </h5>

            <div class="form-group row">
               <label for="jenis_tatalaksana" class="col-sm-2 col-form-label">Jenis Tatalaksana</label>
               <div class="col-sm-10">
                  <select class="form-control @error('jenis_tatalaksana') is-invalid @enderror"
                     wire:model.defer="jenis_tatalaksana" id="jenis_tatalaksana">
                     <option value="">- Pilih Jenis tatalaksana -</option>
                     <option value="Anemia">Anemia</option>
                     <option value="Makanan Tambahan Ibu Hamil">Makanan Tambahan Ibu Hamil</option>
                     <option value="Hipertensi">Hipertensi</option>
                     <option value="Eklampsia">Eklampsia</option>
                     <option value="KEK">KEK</option>
                     <option value="Obesitas">Obesitas</option>
                     <option value="Infeksi">Infeksi</option>
                     <option value="Penyakit Jantung">Penyakit Jantung</option>
                     <option value="HIV">HIV</option>
                     <option value="TB">TB</option>
                     <option value="Malaria">Malaria</option>
                     <option value="Kecacingan">Kecacingan</option>
                     <option value="Infeksi Menular Seksual (IMS)">Infeksi Menular Seksual (IMS)</option>
                     <option value="Hepatitis">Hepatitis</option>
                     <option value="Lainnya">Lainnya</option>
                  </select>
                  @error('jenis_tatalaksana')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <div class="form-group row">
               <label for="tatalaksana_lainnya" class="col-sm-2 col-form-label">Tatalaksana</label>
               <div class="col-sm-10">
                  <textarea class="form-control @error('tatalaksana_lainnya') is-invalid @enderror" rows="3"
                     wire:model.defer="tatalaksana_lainnya" id="tatalaksana_lainnya"></textarea>
                  @error('tatalaksana_lainnya')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>
         </div>

         <!-- Konseling -->
         <div class="form-group" id="konseling">
            <h5 class="mb-3 font-weight-bold text-navy-blue d-flex align-items-center">
               <span class="badge badge-primary mr-2">12</span> <span class="text-primary">Konseling (T10)</span>
            </h5>

            <div class="form-group row">
               <label for="materi" class="col-sm-2 col-form-label">Materi <span class="text-danger">*</span></label>
               <div class="col-sm-10">
                  <textarea class="form-control @error('materi') is-invalid @enderror" rows="3"
                     wire:model.defer="materi" id="materi"></textarea>
                  @error('materi')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <div class="form-group row">
               <label for="rekomendasi" class="col-sm-2 col-form-label">Rekomendasi Berdasarkan Hasil Pemeriksaan dan
                  Laboratorium <span class="text-danger">*</span></label>
               <div class="col-sm-10">
                  <textarea class="form-control @error('rekomendasi') is-invalid @enderror" rows="3"
                     wire:model.defer="rekomendasi" id="rekomendasi"></textarea>
                  @error('rekomendasi')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <div class="form-group row">
               <label for="konseling_menyusui" class="col-sm-2 col-form-label">Konseling Menyusui <span
                     class="text-danger">*</span></label>
               <div class="col-sm-10">
                  <div class="d-flex">
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="konseling_menyusui" id="menyusui_ya"
                           wire:model.defer="konseling_menyusui" value="Ya">
                        <label class="form-check-label" for="menyusui_ya">Ya</label>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="konseling_menyusui" id="menyusui_tidak"
                           wire:model.defer="konseling_menyusui" value="Tidak">
                        <label class="form-check-label" for="menyusui_tidak">Tidak</label>
                     </div>
                  </div>
                  @error('konseling_menyusui')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <!-- Opsi konseling lainnya -->
            <div class="form-group row">
               <label for="tanda_bahaya_kehamilan" class="col-sm-2 col-form-label">Tanda Bahaya Kehamilan <span
                     class="text-danger">*</span></label>
               <div class="col-sm-10">
                  <div class="d-flex">
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tanda_bahaya_kehamilan" id="bahaya_hamil_ya"
                           wire:model.defer="tanda_bahaya_kehamilan" value="Ya">
                        <label class="form-check-label" for="bahaya_hamil_ya">Ya</label>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tanda_bahaya_kehamilan"
                           id="bahaya_hamil_tidak" wire:model.defer="tanda_bahaya_kehamilan" value="Tidak">
                        <label class="form-check-label" for="bahaya_hamil_tidak">Tidak</label>
                     </div>
                  </div>
                  @error('tanda_bahaya_kehamilan')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <!-- Opsi konseling lainnya -->
            <div class="form-group row">
               <label for="konseling_lainnya" class="col-sm-2 col-form-label">Konseling Lainnya</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" wire:model.defer="konseling_lainnya" id="konseling_lainnya"
                     placeholder="Sebutkan">
               </div>
            </div>
         </div>

         <!-- Keadaan Pulang -->
         <div class="form-group" id="keadaan-pulang">
            <h5 class="mb-3 font-weight-bold text-navy-blue d-flex align-items-center">
               <span class="badge badge-primary mr-2">13</span> <span class="text-primary">Keadaan Pulang</span>
            </h5>

            <div class="form-group row">
               <label for="keadaan_pulang" class="col-sm-2 col-form-label">Keadaan Pulang <span
                     class="text-danger">*</span></label>
               <div class="col-sm-10">
                  <select class="form-control @error('keadaan_pulang') is-invalid @enderror"
                     wire:model.defer="keadaan_pulang" id="keadaan_pulang">
                     <option value="">- Pilih -</option>
                     <option value="Baik">Baik</option>
                     <option value="Dirujuk">Dirujuk</option>
                     <option value="Pulang Paksa">Pulang Paksa</option>
                     <option value="Meninggal">Meninggal</option>
                  </select>
                  @error('keadaan_pulang')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>
         </div>

         <!-- Tindak Lanjut -->
         <div class="form-group" id="tindak-lanjut">
            <h5 class="mb-3 font-weight-bold text-navy-blue d-flex align-items-center">
               <span class="badge badge-primary mr-2">14</span> <span class="text-primary">Tindak Lanjut</span>
            </h5>

            <div class="form-group row">
               <label for="tindak_lanjut" class="col-sm-2 col-form-label">Jenis Tindak Lanjut</label>
               <div class="col-sm-10">
                  <select class="form-control @error('tindak_lanjut') is-invalid @enderror"
                     wire:model.defer="tindak_lanjut" id="tindak_lanjut">
                     <option value="">- Pilih -</option>
                     <option value="Kunjungan ANC berikutnya">Kunjungan ANC berikutnya</option>
                     <option value="Dirujuk ke Faskes Tingkat Lanjut">Dirujuk ke Faskes Tingkat Lanjut</option>
                     <option value="Pemeriksaan USG">Pemeriksaan USG</option>
                     <option value="Pemeriksaan Laboratorium">Pemeriksaan Laboratorium</option>
                     <option value="Lainnya">Lainnya</option>
                  </select>
                  @error('tindak_lanjut')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <div class="form-group row" id="detail_tindak_lanjut_div">
               <label for="detail_tindak_lanjut" class="col-sm-2 col-form-label">Detail Tindak Lanjut</label>
               <div class="col-sm-10">
                  <textarea class="form-control @error('detail_tindak_lanjut') is-invalid @enderror" rows="3"
                     wire:model.defer="detail_tindak_lanjut" id="detail_tindak_lanjut"></textarea>
                  @error('detail_tindak_lanjut')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <div class="form-group row">
               <label for="tanggal_kunjungan_berikutnya" class="col-sm-2 col-form-label">Tanggal Kunjungan
                  Berikutnya</label>
               <div class="col-sm-4">
                  <div class="input-group">
                     <input type="date" class="form-control @error('tanggal_kunjungan_berikutnya') is-invalid @enderror"
                        wire:model.defer="tanggal_kunjungan_berikutnya" id="tanggal_kunjungan_berikutnya">
                     <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                     </div>
                     @error('tanggal_kunjungan_berikutnya')
                     <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>
               </div>
            </div>
         </div>

         <div class="form-group row">
            <div class="col-sm-12 text-center no-print">
               <button type="button" class="btn btn-secondary btn-lg mr-2" wire:click="batal">
                  <i class="fas fa-times mr-1"></i> Batal
               </button>

               <button type="button" class="btn btn-info btn-lg mr-2" wire:click="resetForm">
                  <i class="fas fa-sync-alt mr-1"></i> Reset
               </button>

               <button type="submit" class="btn btn-success btn-lg" wire:loading.attr="disabled">
                  <i class="fas fa-save mr-1"></i> Simpan
                  <span wire:loading wire:target="save" class="spinner-border spinner-border-sm ml-1" role="status"
                     aria-hidden="true"></span>
               </button>
            </div>
         </div>
      </form>

      <!-- Tabel Histori Pemeriksaan ANC -->
      @if($riwayat && $riwayat->count() > 0)
      <div class="card shadow mb-4">
         <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Riwayat Pemeriksaan ANC</h6>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table table-bordered table-striped table-hover small" id="tabel-riwayat-anc" width="100%"
                  cellspacing="0">
                  <thead class="bg-primary text-white">
                     <tr>
                        <th>No</th>
                        <th>ID ANC</th>
                        <th>Tanggal</th>
                        <th>Diperiksa Oleh</th>
                        <th>UK</th>
                        <th>BB</th>
                        <th>TD</th>
                        <th>Tinggi Fundus</th>
                        <th>Keluhan</th>
                        <th>Tatalaksana</th>
                        <th>Tindak Lanjut</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($riwayat as $index => $item)
                     <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->id_anc }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tanggal_anc)->format('d-m-Y H:i') }}</td>
                        <td>{{ $item->diperiksa_oleh }}</td>
                        <td>{{ $item->usia_kehamilan }} minggu</td>
                        <td>{{ $item->berat_badan }} kg</td>
                        <td>{{ $item->td_sistole }}/{{ $item->td_diastole }}</td>
                        <td>{{ $item->tinggi_fundus ?? '-' }}</td>
                        <td>{{ Str::limit($item->keluhan_utama, 30) }}</td>
                        <td>{{ $item->jenis_tatalaksana ?? '-' }}</td>
                        <td>{{ $item->tindak_lanjut ?? '-' }}</td>
                        <td class="text-center">
                           <div class="btn-group">
                              <button type="button" class="btn btn-xs btn-primary"
                                 wire:click="showHistoriANC('{{ $item->id_anc }}')">
                                 <i class="fas fa-eye"></i>
                              </button>
                              <button type="button" class="btn btn-xs btn-warning"
                                 wire:click="edit('{{ $item->id_anc }}')">
                                 <i class="fas fa-edit"></i>
                              </button>
                           </div>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      @endif

      <!-- Riwayat Kunjungan ANC Berdasarkan Id Hamil -->
      @if($id_hamil && $riwayatByIdHamil->count() > 0)
      <div class="card shadow mb-4">
         <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">
               <i class="fas fa-history mr-1"></i> Riwayat Kunjungan ANC (K1-K4)
            </h6>
         </div>
         <div class="card-body">
            <!-- Tab navigation untuk bulan-bulan -->
            <ul class="nav nav-tabs" id="riwayat-tab" role="tablist">
               @php
               $riwayatByMonth = $riwayatByIdHamil->groupBy(function($item) {
               return \Carbon\Carbon::parse($item->tanggal_anc)->format('Y-m');
               });
               $counter = 0;
               @endphp

               @foreach($riwayatByMonth as $yearMonth => $items)
               @php
               $monthName = \Carbon\Carbon::createFromFormat('Y-m', $yearMonth)->format('F Y');
               $tabId = 'month-' . str_replace(' ', '-', strtolower($monthName));
               $isActive = $counter === 0 ? 'active' : '';
               $counter++;
               @endphp
               <li class="nav-item" role="presentation">
                  <a class="nav-link {{ $isActive }}" id="{{ $tabId }}-tab" data-toggle="tab" href="#{{ $tabId }}"
                     role="tab" aria-controls="{{ $tabId }}" aria-selected="{{ $counter === 1 ? 'true' : 'false' }}">
                     {{ $monthName }}
                  </a>
               </li>
               @endforeach
            </ul>

            <!-- Tab content untuk data setiap bulan -->
            <div class="tab-content mt-3" id="riwayat-content">
               @php $counter = 0; @endphp
               @foreach($riwayatByMonth as $yearMonth => $items)
               @php
               $monthName = \Carbon\Carbon::createFromFormat('Y-m', $yearMonth)->format('F Y');
               $tabId = 'month-' . str_replace(' ', '-', strtolower($monthName));
               $isActive = $counter === 0 ? 'show active' : '';
               $counter++;
               @endphp
               <div class="tab-pane fade {{ $isActive }}" id="{{ $tabId }}" role="tabpanel"
                  aria-labelledby="{{ $tabId }}-tab">
                  <div class="table-responsive">
                     <table class="table table-bordered table-hover small" id="table-{{ $tabId }}">
                        <thead class="bg-primary text-white">
                           <tr>
                              <th>No</th>
                              <th>Tanggal</th>
                              <th>Kunjungan Ke</th>
                              <th>Usia Kehamilan</th>
                              <th>BB (kg)</th>
                              <th>TD</th>
                              <th>Tinggi Fundus (cm)</th>
                              <th>TBJ (gram)</th>
                              <th>Keluhan</th>
                              <th>Tindak Lanjut</th>
                              <th>Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($items as $index => $item)
                           <tr>
                              <td>{{ $index + 1 }}</td>
                              <td>{{ \Carbon\Carbon::parse($item->tanggal_anc)->format('d-m-Y') }}</td>
                              <td>K{{ $item->kunjungan_ke ?? '-' }}</td>
                              <td>{{ $item->usia_kehamilan }} minggu</td>
                              <td>{{ $item->berat_badan }}</td>
                              <td>{{ $item->td_sistole }}/{{ $item->td_diastole }}</td>
                              <td>{{ $item->tinggi_fundus ?? '-' }}</td>
                              <td>{{ $item->taksiran_berat_janin ?? '-' }}</td>
                              <td>{{ Str::limit($item->keluhan_utama, 30) }}</td>
                              <td>{{ $item->tindak_lanjut ?? '-' }}</td>
                              <td class="text-center">
                                 <div class="btn-group">
                                    <button type="button" class="btn btn-xs btn-primary"
                                       wire:click="showHistoriANC('{{ $item->id_anc }}')">
                                       <i class="fas fa-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-xs btn-warning"
                                       wire:click="edit('{{ $item->id_anc }}')">
                                       <i class="fas fa-edit"></i>
                                    </button>
                                 </div>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
      @endif

      <!-- Tampilan Tabel Bulanan Riwayat Pemeriksaan ANC -->
      @if($id_hamil && $riwayatByIdHamil->count() > 0)
      <div class="card shadow mb-4">
         <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">
               <i class="fas fa-table mr-1"></i> Laporan Bulanan Pemeriksaan ANC
            </h6>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table table-bordered table-striped table-hover small" id="tabel-laporan-bulanan"
                  width="100%" cellspacing="0">
                  <thead class="bg-primary text-white">
                     <tr>
                        <th rowspan="2" class="align-middle">Parameter</th>
                        @php
                        $months = $riwayatByIdHamil->sortBy('tanggal_anc')->groupBy(function($item) {
                        return \Carbon\Carbon::parse($item->tanggal_anc)->format('F Y');
                        })->keys();
                        @endphp
                        @foreach($months as $month)
                        <th class="text-center">{{ $month }}</th>
                        @endforeach
                     </tr>
                  </thead>
                  <tbody>
                     <!-- Usia Kehamilan -->
                     <tr>
                        <td class="font-weight-bold">Usia Kehamilan (minggu)</td>
                        @foreach($months as $month)
                        <td class="text-center">
                           @php
                           $itemOfMonth = $riwayatByIdHamil->filter(function($item) use ($month) {
                           return \Carbon\Carbon::parse($item->tanggal_anc)->format('F Y') == $month;
                           })->last();
                           @endphp
                           {{ $itemOfMonth ? $itemOfMonth->usia_kehamilan : '-' }}
                        </td>
                        @endforeach
                     </tr>
                     <!-- Berat Badan -->
                     <tr>
                        <td class="font-weight-bold">Berat Badan (kg)</td>
                        @foreach($months as $month)
                        <td class="text-center">
                           @php
                           $itemOfMonth = $riwayatByIdHamil->filter(function($item) use ($month) {
                           return \Carbon\Carbon::parse($item->tanggal_anc)->format('F Y') == $month;
                           })->last();
                           @endphp
                           {{ $itemOfMonth ? $itemOfMonth->berat_badan : '-' }}
                        </td>
                        @endforeach
                     </tr>
                     <!-- Tekanan Darah -->
                     <tr>
                        <td class="font-weight-bold">Tekanan Darah (mmHg)</td>
                        @foreach($months as $month)
                        <td class="text-center">
                           @php
                           $itemOfMonth = $riwayatByIdHamil->filter(function($item) use ($month) {
                           return \Carbon\Carbon::parse($item->tanggal_anc)->format('F Y') == $month;
                           })->last();
                           @endphp
                           {{ $itemOfMonth ? $itemOfMonth->td_sistole.'/'.$itemOfMonth->td_diastole : '-' }}
                        </td>
                        @endforeach
                     </tr>
                     <!-- Tinggi Fundus -->
                     <tr>
                        <td class="font-weight-bold">Tinggi Fundus (cm)</td>
                        @foreach($months as $month)
                        <td class="text-center">
                           @php
                           $itemOfMonth = $riwayatByIdHamil->filter(function($item) use ($month) {
                           return \Carbon\Carbon::parse($item->tanggal_anc)->format('F Y') == $month;
                           })->last();
                           @endphp
                           {{ $itemOfMonth && $itemOfMonth->tinggi_fundus ? $itemOfMonth->tinggi_fundus : '-' }}
                        </td>
                        @endforeach
                     </tr>
                     <!-- Taksiran Berat Janin -->
                     <tr>
                        <td class="font-weight-bold">Taksiran Berat Janin (gram)</td>
                        @foreach($months as $month)
                        <td class="text-center">
                           @php
                           $itemOfMonth = $riwayatByIdHamil->filter(function($item) use ($month) {
                           return \Carbon\Carbon::parse($item->tanggal_anc)->format('F Y') == $month;
                           })->last();
                           @endphp
                           {{ $itemOfMonth && $itemOfMonth->taksiran_berat_janin ? $itemOfMonth->taksiran_berat_janin :
                           '-' }}
                        </td>
                        @endforeach
                     </tr>
                     <!-- Detak Jantung Janin -->
                     <tr>
                        <td class="font-weight-bold">Detak Jantung Janin</td>
                        @foreach($months as $month)
                        <td class="text-center">
                           @php
                           $itemOfMonth = $riwayatByIdHamil->filter(function($item) use ($month) {
                           return \Carbon\Carbon::parse($item->tanggal_anc)->format('F Y') == $month;
                           })->last();
                           @endphp
                           {{ $itemOfMonth && $itemOfMonth->denyut_jantung_janin ? $itemOfMonth->denyut_jantung_janin :
                           '-' }}
                        </td>
                        @endforeach
                     </tr>
                     <!-- Hemoglobin (Hb) -->
                     <tr>
                        <td class="font-weight-bold">Hemoglobin (Hb)</td>
                        @foreach($months as $month)
                        <td class="text-center">
                           @php
                           $itemOfMonth = $riwayatByIdHamil->filter(function($item) use ($month) {
                           return \Carbon\Carbon::parse($item->tanggal_anc)->format('F Y') == $month;
                           })->last();

                           $labData = null;
                           if ($itemOfMonth && $itemOfMonth->lab) {
                           $lab = is_string($itemOfMonth->lab) ? json_decode($itemOfMonth->lab, true) :
                           $itemOfMonth->lab;
                           $labData = isset($lab['hb']) && isset($lab['hb']['nilai']) ? $lab['hb']['nilai'] : null;
                           }
                           @endphp
                           {{ $labData ? $labData : '-' }}
                        </td>
                        @endforeach
                     </tr>
                     <!-- Protein Urin -->
                     <tr>
                        <td class="font-weight-bold">Protein Urin</td>
                        @foreach($months as $month)
                        <td class="text-center">
                           @php
                           $itemOfMonth = $riwayatByIdHamil->filter(function($item) use ($month) {
                           return \Carbon\Carbon::parse($item->tanggal_anc)->format('F Y') == $month;
                           })->last();

                           $labData = null;
                           if ($itemOfMonth && $itemOfMonth->lab) {
                           $lab = is_string($itemOfMonth->lab) ? json_decode($itemOfMonth->lab, true) :
                           $itemOfMonth->lab;
                           $labData = isset($lab['protein_urin']) && isset($lab['protein_urin']['nilai']) ?
                           $lab['protein_urin']['nilai'] : null;
                           }
                           @endphp
                           {{ $labData ? $labData : '-' }}
                        </td>
                        @endforeach
                     </tr>
                     <!-- Status Tatalaksana -->
                     <tr>
                        <td class="font-weight-bold">Tatalaksana</td>
                        @foreach($months as $month)
                        <td class="text-center">
                           @php
                           $itemOfMonth = $riwayatByIdHamil->filter(function($item) use ($month) {
                           return \Carbon\Carbon::parse($item->tanggal_anc)->format('F Y') == $month;
                           })->last();
                           @endphp
                           {{ $itemOfMonth && $itemOfMonth->jenis_tatalaksana ? $itemOfMonth->jenis_tatalaksana : '-' }}
                        </td>
                        @endforeach
                     </tr>
                     <!-- Keluhan -->
                     <tr>
                        <td class="font-weight-bold">Keluhan</td>
                        @foreach($months as $month)
                        <td class="text-center">
                           @php
                           $itemOfMonth = $riwayatByIdHamil->filter(function($item) use ($month) {
                           return \Carbon\Carbon::parse($item->tanggal_anc)->format('F Y') == $month;
                           })->last();
                           @endphp
                           {{ $itemOfMonth && $itemOfMonth->keluhan_utama ? Str::limit($itemOfMonth->keluhan_utama, 30)
                           : '-' }}
                        </td>
                        @endforeach
                     </tr>
                     <!-- Tindak Lanjut -->
                     <tr>
                        <td class="font-weight-bold">Tindak Lanjut</td>
                        @foreach($months as $month)
                        <td class="text-center">
                           @php
                           $itemOfMonth = $riwayatByIdHamil->filter(function($item) use ($month) {
                           return \Carbon\Carbon::parse($item->tanggal_anc)->format('F Y') == $month;
                           })->last();
                           @endphp
                           {{ $itemOfMonth && $itemOfMonth->tindak_lanjut ? $itemOfMonth->tindak_lanjut : '-' }}
                        </td>
                        @endforeach
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      @endif
      @endif
      @endif

   </div>

   @push('scripts')
   <!-- Scripts jika diperlukan -->
   @endpush

   @push('js')
   <script>
      document.addEventListener('DOMContentLoaded', function() {
         // Function to handle lab checkboxes and related input fields
         const labCheckboxes = document.querySelectorAll('.lab-checkbox');
         
         function toggleLabInput(checkbox) {
            const checkboxId = checkbox.id;
            const targetInputId = checkboxId.replace('lab_', 'input_');
            const targetInput = document.getElementById(targetInputId);
            
            if (!targetInput) return;
            
            if (checkbox.checked) {
               targetInput.classList.add('active');
            } else {
               targetInput.classList.remove('active');
            }
         }
         
         // Inisialisasi state awal semua checkbox lab dan aktifkan semua input yang memiliki nilai
         labCheckboxes.forEach(checkbox => {
            toggleLabInput(checkbox);
            
            const targetInputId = checkbox.id.replace('lab_', 'input_');
            const targetInput = document.getElementById(targetInputId);
            
            if (targetInput) {
               const inputField = targetInput.querySelector('input') || targetInput.querySelector('select');
               
               if (inputField && inputField.value) {
                  targetInput.classList.add('active');
               }
            }
            
            checkbox.addEventListener('change', function() {
               toggleLabInput(this);
            });
         });
         
         // Event listener untuk dropdown HIV/Sifilis/HBsAg
         const hivSelect = document.getElementById('nilai_hiv');
         const sifilisSelect = document.getElementById('nilai_sifilis');
         const hbsagSelect = document.getElementById('nilai_hbsag');
         const rujukanDiv = document.getElementById('rujukan_div');
         
         function updateRujukanDivVisibility() {
            let showRujukan = false;
            
            if (hivSelect && hivSelect.value === 'Reaktif' && document.getElementById('lab_hiv').checked) {
               showRujukan = true;
            }
            
            if (sifilisSelect && sifilisSelect.value === 'Reaktif' && document.getElementById('lab_sifilis').checked) {
               showRujukan = true;
            }
            
            if (hbsagSelect && hbsagSelect.value === 'Reaktif' && document.getElementById('lab_hbsag').checked) {
               showRujukan = true;
            }
            
            if (rujukanDiv) {
               rujukanDiv.style.display = showRujukan ? 'flex' : 'none';
            }
         }
         
         updateRujukanDivVisibility();
         
         if (hivSelect) hivSelect.addEventListener('change', updateRujukanDivVisibility);
         if (sifilisSelect) sifilisSelect.addEventListener('change', updateRujukanDivVisibility);
         if (hbsagSelect) hbsagSelect.addEventListener('change', updateRujukanDivVisibility);

         // Pencegahan scroll ke atas untuk tombol hitung
         const calcButtons = document.querySelectorAll('button[wire\\:click\\.prevent]');
         calcButtons.forEach(button => {
            button.addEventListener('click', function(e) {
               e.preventDefault();
               // Simpan posisi scroll saat ini
               const scrollPos = window.scrollY;
               
               // Tambahkan event listener untuk satu kali eksekusi
               const restoreScroll = () => {
                  window.scrollTo(0, scrollPos);
                  // Hapus event listener setelah digunakan
                  document.removeEventListener('livewire:load', restoreScroll);
               };
               
               // Tambahkan listener untuk livewire:load
               document.addEventListener('livewire:load', restoreScroll);
               
               // Tambahkan timeout juga sebagai fallback
               setTimeout(() => {
                  window.scrollTo(0, scrollPos);
               }, 300);
            });
         });

         // Simpan posisi scroll untuk dropdown jenis_tatalaksana
         const jenisDropdown = document.getElementById('jenis_tatalaksana');
         if (jenisDropdown) {
            jenisDropdown.addEventListener('change', function() {
               // Simpan posisi scroll saat ini
               const scrollPos = window.scrollY;
               
               // Set semua checkbox dalam form tatalaksana yang baru ditampilkan agar tercentang
               setTimeout(() => {
                  const checkboxes = document.querySelectorAll('.custom-control-input');
                  checkboxes.forEach(checkbox => {
                     if (!checkbox.checked) {
                        checkbox.checked = true;
                     }
                  });
                  
                  // Kembalikan ke posisi scroll yang sama
                  window.scrollTo(0, scrollPos);
               }, 300);
            });
            
            // Tangani perubahan Livewire untuk mencegah scroll ke atas
            document.addEventListener('livewire:loading', function() {
               window.livewireScrollPosition = window.scrollY;
            });
            
            document.addEventListener('livewire:load', function() {
               if (window.livewireScrollPosition) {
                  window.scrollTo(0, window.livewireScrollPosition);
                  window.livewireScrollPosition = null;
               }
            });
         }

         // Listener untuk event tatalaksana berubah
         window.addEventListener('jenis-tatalaksana-changed', event => {
            // Simpan posisi scroll saat ini
            const scrollPos = window.scrollY;
            
            // Tunggu render selesai
            setTimeout(() => {
               // Set semua checkbox agar tercentang
               const checkboxes = document.querySelectorAll('.custom-control-input');
               checkboxes.forEach(checkbox => {
                  if (!checkbox.checked) {
                     checkbox.checked = true;
                  }
               });
               
               // Kembalikan ke posisi scroll sebelumnya
               window.scrollTo(0, scrollPos);
            }, 200);
         });
      });
      
      // SweetAlert2 event listeners
      document.addEventListener('livewire:load', function() {
         window.addEventListener('swal:success', event => {
            Swal.fire({
               icon: event.detail.type,
               title: event.detail.title,
               text: event.detail.text,
               timer: event.detail.timer,
               showConfirmButton: event.detail.showConfirmButton,
               position: 'top-end',
               toast: true,
               background: '#a5dc86',
               iconColor: 'white',
               customClass: {
                  popup: 'colored-toast'
               }
            });
         });
          
         window.addEventListener('swal:error', event => {
            Swal.fire({
               icon: event.detail.type,
               title: event.detail.title,
               text: event.detail.text,
               confirmButtonText: event.detail.confirmButtonText
            });
         });
          
         window.addEventListener('imt-updated', event => {
            document.getElementById('imt').value = event.detail.imt;
            document.getElementById('kategori_imt').value = event.detail.kategori;
            
            // Pertahankan posisi scroll setelah update IMT
            if (window.lastScrollPosition) {
               window.scrollTo(0, window.lastScrollPosition);
               window.lastScrollPosition = null;
            }
         });
          
         window.addEventListener('status-gizi-updated', event => {
            document.getElementById('status_gizi').value = event.detail.status;
            
            // Pertahankan posisi scroll setelah update status gizi
            if (window.lastScrollPosition) {
               window.scrollTo(0, window.lastScrollPosition);
               window.lastScrollPosition = null;
            }
         });
          
         window.addEventListener('tbj-updated', event => {
            document.getElementById('taksiran_berat_janin').value = event.detail.tbj;
            
            // Pertahankan posisi scroll setelah update TBJ
            if (window.lastScrollPosition) {
               window.scrollTo(0, window.lastScrollPosition);
               window.lastScrollPosition = null;
            }
         });
         
         // Event listener untuk tombol hitungIMT
         const hitungImtBtn = document.querySelector('button[wire\\:click\\.prevent="hitungIMT"]');
         if (hitungImtBtn) {
            hitungImtBtn.addEventListener('click', function() {
               // Simpan posisi scroll saat ini
               window.lastScrollPosition = window.scrollY;
            });
         }
         
         // Event listener untuk tombol tentukanStatusGizi
         const hitungStatusGiziBtn = document.querySelector('button[wire\\:click\\.prevent="tentukanStatusGizi"]');
         if (hitungStatusGiziBtn) {
            hitungStatusGiziBtn.addEventListener('click', function() {
               // Simpan posisi scroll saat ini
               window.lastScrollPosition = window.scrollY;
            });
         }
         
         // Event listener untuk tombol hitungTaksiranBeratJanin
         const hitungTbjBtn = document.querySelector('button[wire\\:click\\.prevent="hitungTaksiranBeratJanin"]');
         if (hitungTbjBtn) {
            hitungTbjBtn.addEventListener('click', function() {
               // Simpan posisi scroll saat ini
               window.lastScrollPosition = window.scrollY;
            });
         }
      });
   </script>
   @endpush
</div>