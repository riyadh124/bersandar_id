<script setup>
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Syarat & Ketentuan - Bersandar ID" />

    <div class="min-h-screen font-sans selection:bg-[#FF7761] selection:text-white" style="background-color: #054045; color: #E5F0F1;">
        <!-- Navigation -->
        <nav class="container mx-auto px-6 py-6 flex justify-between items-center border-b border-white/10 relative z-10">
            <Link :href="route('home')" class="flex items-center hover:opacity-90 transition-opacity">
                <img src="/logo.png" alt="Bersandar ID" class="h-10 object-contain" />
            </Link>
            <Link :href="route('home')" class="hover:text-white transition-colors duration-300 flex items-center gap-2" style="color: #A5C9CA;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali
            </Link>
        </nav>

        <main class="container mx-auto px-6 py-16 max-w-4xl relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white">Syarat & Ketentuan</h1>
            <p class="mb-12" style="color: #82A9AA;">Terakhir diperbarui: 21 Mei 2026</p>

            <div class="max-w-none space-y-6" style="color: #B5D5D6;">
                <p class="leading-relaxed mb-8">Berikut adalah Syarat dan Ketentuan penggunaan layanan Bersandar ID yang wajib dibaca, dipahami, dan disetujui oleh Pengguna (Pelanggan) sebelum menggunakan layanan kami:</p>

                <h2 class="text-2xl font-bold mt-12 mb-4" style="color: #FF7761;">1. Ketentuan Identitas & Keamanan</h2>
                <ul class="list-disc pl-6 space-y-2 leading-relaxed">
                    <li><strong class="text-white">Verifikasi Data:</strong> Pengguna wajib memberikan informasi identitas asli (nama lengkap dan nomor kontak aktif) saat melakukan pemesanan layanan melalui Admin Bersandar ID.</li>
                    <li><strong class="text-white">Pemilihan Mitra (Buddy):</strong> Pengguna menyetujui bahwa pemilihan Buddy direkomendasikan berdasarkan profil kepribadian, minat, dan kebutuhan spesifik yang disampaikan oleh Pengguna.</li>
                    <li><strong class="text-white">Kerahasiaan Identitas:</strong> Identitas lengkap dan profil Mitra (Buddy) akan diinformasikan oleh Admin secara resmi setelah proses konfirmasi pesanan diselesaikan.</li>
                </ul>

                <h2 class="text-2xl font-bold mt-12 mb-4" style="color: #FF7761;">2. Alur Pembayaran & Biaya</h2>
                <ul class="list-disc pl-6 space-y-2 leading-relaxed">
                    <li><strong class="text-white">Sistem Pembayaran Terpusat:</strong> Seluruh transaksi pembayaran atas layanan pendampingan wajib dilakukan melalui rekening resmi Bersandar ID. Pembayaran biaya jasa secara langsung kepada Buddy tidak diperkenankan.</li>
                    <li><strong class="text-white">Biaya Jasa:</strong> Harga yang ditetapkan merupakan biaya jasa pendampingan Buddy selama durasi waktu yang telah disepakati sebelumnya.</li>
                    <li><strong class="text-white">Biaya Operasional:</strong> Pengguna bertanggung jawab penuh atas biaya operasional selama masa kegiatan, yang mencakup namun tidak terbatas pada: biaya makan, transportasi, dan tiket masuk (kecuali menggunakan paket khusus yang mencakup keseluruhan biaya).</li>
                </ul>

                <h2 class="text-2xl font-bold mt-12 mb-4" style="color: #FF7761;">3. Pembatalan & Pengembalian Dana (Refund)</h2>
                <ul class="list-disc pl-6 space-y-2 leading-relaxed">
                    <li><strong class="text-white">Uang Muka (Down Payment/DP):</strong> Uang muka yang telah dibayarkan berfungsi sebagai pengikat jadwal dan bentuk komitmen pemesanan.</li>
                    <li><strong class="text-white">Pembatalan oleh Pengguna:</strong> Apabila Pengguna melakukan pembatalan secara sepihak dalam kurun waktu kurang dari 24 jam sebelum jadwal kegiatan, maka uang muka tidak dapat dikembalikan (hangus).</li>
                    <li><strong class="text-white">Pembatalan oleh Pihak Bersandar ID:</strong> Jika karena satu dan lain hal yang bersifat darurat Buddy berhalangan hadir, kami akan menawarkan penjadwalan ulang atau opsi pengembalian dana penuh (100%).</li>
                </ul>

                <h2 class="text-2xl font-bold mt-12 mb-4" style="color: #FF7761;">4. Etika & Batasan Layanan</h2>
                <ul class="list-disc pl-6 space-y-2 leading-relaxed">
                    <li><strong class="text-white">Hubungan Profesional:</strong> Layanan Bersandar ID murni bersifat sosial dan profesional. Segala bentuk perilaku yang melanggar norma kesusilaan, penggunaan obat-obatan terlarang, atau tindakan melanggar hukum sangat dilarang keras.</li>
                    <li><strong class="text-white">Privasi Mitra:</strong> Pengguna dilarang untuk meminta atau mendesak Buddy memberikan informasi pribadi yang bersifat rahasia demi menjaga keamanan dan privasi mitra kami.</li>
                    <li><strong class="text-white">Durasi Kegiatan:</strong> Pertemuan dan kegiatan wajib diakhiri sesuai dengan durasi waktu yang telah disepakati pada saat pemesanan awal.</li>
                </ul>

                <h2 class="text-2xl font-bold mt-12 mb-4" style="color: #FF7761;">5. Jaminan & Tanggung Jawab</h2>
                <ul class="list-disc pl-6 space-y-2 leading-relaxed">
                    <li><strong class="text-white">Keamanan dan Pemantauan:</strong> Demi keselamatan bersama, Pengguna menyetujui bahwa pihak Bersandar ID memiliki hak untuk memantau status atau lokasi kegiatan selama masa layanan berlangsung sesuai prosedur keamanan kami.</li>
                    <li><strong class="text-white">Batasan Tanggung Jawab:</strong> Bersandar ID berupaya memberikan layanan terbaik dan memastikan verifikasi mitra. Namun, pihak kami tidak bertanggung jawab atas kehilangan barang pribadi maupun insiden atau kecelakaan di luar kendali selama masa kegiatan berlangsung.</li>
                </ul>

                <div class="rounded-xl p-6 my-8" style="background-color: rgba(255, 119, 97, 0.1); border: 1px solid rgba(255, 119, 97, 0.2);">
                    <h3 class="text-xl font-bold mt-0 mb-3" style="color: #FF7761;">Pernyataan Persetujuan</h3>
                    <p class="mb-0 leading-relaxed text-white">Dengan menggunakan layanan Bersandar ID, Pengguna dianggap telah membaca, memahami, dan mengikatkan diri untuk mematuhi seluruh syarat dan ketentuan yang berlaku.</p>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="border-t border-white/10 mt-12 py-12" style="background-color: #043135;">
            <div class="container mx-auto px-6 text-center text-sm" style="color: #82A9AA;">
                &copy; 2026 Bersandar ID. Semua Hak Cipta Dilindungi.
            </div>
        </footer>
    </div>
</template>
