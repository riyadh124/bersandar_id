<script setup>
import { ref } from 'vue';
import { Head, Link } from '@inertiajs/vue3';

// Placeholder WhatsApp number, user can change later
const whatsappNumber = '6287816541245';
const whatsappMessage = encodeURIComponent('Halo Bersandar ID, saya tertarik dan ingin mencari teman ngobrol...');
const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`;

// State for image lightbox
const selectedImage = ref(null);

const testimonials = [
    {
        id: 1,
        tag: 'SI PENCURHAT',
        name: 'C**D* Al**ia',
        content: 'Lagi suntuk dan butuh teman curhat? Ternyata nyampah ke Bersandar.id itu melegakan banget! Makasih sudah mendengarkan tanpa judgment sama sekali. It helped me a lot! 🧡.',
        star: 5,
        imageLabel: 'Dokumentasi Kegiatan',
        images: [
            '/testimonials/testi-1a.png',
            '/testimonials/testi-1b.png'
        ]
    },
    {
        id: 2,
        tag: 'SI PETUALANG',
        name: 'D*** A***a',
        content: 'Puas banget dapet teman keliling kota yang seru. Obrolannya nyambung dan sopan banget selama kegiatan.',
        star: 5,
        imageLabel: null,
        images: []
    },
    {
        id: 3,
        tag: 'INTROVERT SANTAI',
        name: 'Ri** K***o',
        content: 'Cuma butuh teman buat ngopi sore biar nggak sendirian. Ternyata buddynya ramah dan sangat menghargai privasi saya. Recommended!',
        star: 5,
        imageLabel: null,
        images: []
    }
];
</script>

<template>
    <Head title="Bersandar ID - Teman Ngobrol Kapanpun Kamu Butuh" />

    <div class="min-h-screen font-sans selection:bg-[#FF7761] selection:text-white" style="background-color: #054045; color: #E5F0F1;">
        <!-- Navigation -->
        <nav class="container mx-auto px-6 py-6 flex justify-between items-center relative z-10">
            <Link :href="route('home')" class="flex items-center hover:opacity-90 transition-opacity">
                <img src="/logo.png" alt="Bersandar ID" class="h-10 object-contain" />
            </Link>
            <div class="hidden md:flex space-x-8">
                <a href="#about" class="text-[#A5C9CA] hover:text-white transition-colors duration-300">Tentang Kami</a>
                <a href="#testimonials" class="text-[#A5C9CA] hover:text-white transition-colors duration-300">Testimoni</a>
            </div>
            <a :href="whatsappUrl" target="_blank" class="px-5 py-2.5 bg-white/10 hover:bg-white/20 border border-white/20 rounded-full font-medium backdrop-blur-sm transition-all duration-300 hover:shadow-[0_0_15px_rgba(255,119,97,0.4)] text-white">
                Hubungi Admin
            </a>
        </nav>

        <!-- Hero Section -->
        <main class="container mx-auto px-6 pt-20 pb-32 text-center relative overflow-hidden">
            <!-- Decorative background blob -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-[#095C62] rounded-full blur-[120px] -z-10 pointer-events-none"></div>

            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-8 leading-tight text-white">
                Teman Asik Untuk <br class="hidden md:block"/>
                <span class="text-transparent bg-clip-text" style="background-image: linear-gradient(to right, #FF7761, #FFB4A2); -webkit-background-clip: text;">
                    Ngobrol, Jalan & Nongkrong
                </span>
            </h1>
            
            <p class="text-lg md:text-xl max-w-2xl mx-auto mb-12 leading-relaxed" style="color: #B5D5D6;">
                Platform yang menghubungkanmu dengan "Buddy" terbaik. Butuh teman untuk mengobrol santai, keliling kota, atau sekadar nongkrong bareng? Ceritakan kebutuhanmu, dan kami akan mencarikan teman yang tepat.
            </p>

            <div class="flex flex-col sm:flex-row justify-center items-center gap-6 relative z-10">
                <a :href="whatsappUrl" target="_blank" class="group relative px-8 py-4 rounded-full font-bold text-white text-lg transition-all duration-300 transform hover:-translate-y-1" style="background-color: #FF7761; box-shadow: 0 0 20px rgba(255,119,97,0.4);">
                    <span class="flex items-center gap-2">
                        Cari Teman Sekarang
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </span>
                </a>
            </div>
        </main>

        <!-- About Section -->
        <section id="about" class="py-24 border-y border-white/5 relative" style="background-color: #074B51;">
            <div class="container mx-auto px-6 relative z-10">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl md:text-5xl font-bold mb-6 text-white">Bagaimana Cara Kerjanya?</h2>
                    <p class="text-lg mb-16" style="color: #A5C9CA;">Prosesnya sangat sederhana. Kami ingin memastikan kamu bisa segera mengobrol tanpa alur yang rumit.</p>
                    
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="p-8 rounded-3xl border border-white/5 transition-colors duration-300 hover:border-[#FF7761]/50" style="background-color: #095C62;">
                            <div class="w-14 h-14 rounded-2xl flex items-center justify-center text-2xl font-bold mb-6 mx-auto" style="background-color: rgba(255,119,97,0.2); color: #FF7761;">1</div>
                            <h3 class="text-xl font-bold mb-3 text-white">Hubungi Admin</h3>
                            <p class="text-sm" style="color: #B5D5D6;">Klik tombol "Cari Teman" untuk langsung terhubung dengan WhatsApp Admin kami.</p>
                        </div>
                        <div class="p-8 rounded-3xl border border-white/5 transition-colors duration-300 hover:border-[#FF7761]/50" style="background-color: #095C62;">
                            <div class="w-14 h-14 rounded-2xl flex items-center justify-center text-2xl font-bold mb-6 mx-auto" style="background-color: rgba(255,119,97,0.2); color: #FF7761;">2</div>
                            <h3 class="text-xl font-bold mb-3 text-white">Ceritakan Kebutuhan</h3>
                            <p class="text-sm" style="color: #B5D5D6;">Ceritakan secara detail apa yang kamu butuhkan, apakah sekadar ngobrol santai, keliling kota, atau nongkrong bareng.</p>
                        </div>
                        <div class="p-8 rounded-3xl border border-white/5 transition-colors duration-300 hover:border-[#FF7761]/50" style="background-color: #095C62;">
                            <div class="w-14 h-14 rounded-2xl flex items-center justify-center text-2xl font-bold mb-6 mx-auto" style="background-color: rgba(255,119,97,0.2); color: #FF7761;">3</div>
                            <h3 class="text-xl font-bold mb-3 text-white">Terima Rekomendasi</h3>
                            <p class="text-sm" style="color: #B5D5D6;">Admin kami akan merekomendasikan Buddy yang paling cocok untuk menemanimu. Setujui, dan kalian siap bertemu!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section id="testimonials" class="py-24 container mx-auto px-6 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold mb-4 text-white">Apa Kata Mereka?</h2>
                <p class="text-lg" style="color: #B5D5D6;">Pengalaman nyata dari para pengguna Bersandar.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-6">
                <div v-for="t in testimonials" :key="t.id" class="bg-white rounded-3xl p-8 flex flex-col h-full hover:-translate-y-2 transition-transform duration-300">
                    <!-- Top row: Tag & Stars -->
                    <div class="flex justify-between items-center mb-6">
                        <span class="px-3 py-1 rounded-full text-[10px] font-extrabold tracking-wider" style="background-color: #E5F0F1; color: #095C62;">
                            {{ t.tag }}
                        </span>
                        <div class="flex gap-1" style="color: #8C372B;">
                            <svg v-for="i in t.star" :key="i" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Name -->
                    <div class="font-extrabold text-xl mb-4 text-gray-900">{{ t.name }}</div>
                    
                    <!-- Content -->
                    <p class="italic text-gray-600 mb-6 flex-grow text-[15px] leading-relaxed">"{{ t.content }}"</p>
                    
                    <template v-if="t.images && t.images.length > 0">
                        <!-- Divider -->
                        <hr class="border-gray-100 border-t-2 my-6" />
                        
                        <!-- Image Label -->
                        <div class="flex items-center gap-2 mb-4 font-bold text-sm" style="color: #095C62;">
                            <svg v-if="t.imageLabel === 'Dokumentasi Kegiatan'" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            {{ t.imageLabel }}
                        </div>
                        
                        <!-- Images Grid -->
                        <div :class="['grid gap-2', t.images.length === 1 ? 'grid-cols-1' : 'grid-cols-2']">
                            <img v-for="(img, index) in t.images" :key="index" :src="img" alt="Dokumentasi" class="w-full h-32 object-cover rounded-xl cursor-pointer hover:opacity-90 transition-opacity" @click="selectedImage = img" />
                        </div>
                    </template>
                </div>
            </div>
        </section>

        <!-- Fullscreen Image Modal (Lightbox) -->
        <div v-if="selectedImage" class="fixed inset-0 z-50 flex items-center justify-center bg-black/90 p-4 transition-opacity backdrop-blur-sm" @click="selectedImage = null">
            <button class="absolute top-6 right-6 text-white hover:text-gray-300" @click="selectedImage = null">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <img :src="selectedImage" class="max-w-full max-h-[90vh] object-contain rounded-lg shadow-2xl" @click.stop />
        </div>

        <!-- Footer -->
        <footer class="border-t border-white/10 mt-12 py-12" style="background-color: #043135;">
            <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6">
                <Link :href="route('home')" class="flex items-center hover:opacity-90 transition-opacity">
                    <img src="/logo.png" alt="Bersandar ID" class="h-8 object-contain opacity-80" />
                </Link>
                <div class="text-sm" style="color: #82A9AA;">
                    &copy; 2026 Bersandar ID. Semua Hak Cipta Dilindungi.
                </div>
                <div class="flex gap-6">
                    <Link :href="route('terms')" class="hover:text-white transition-colors text-sm" style="color: #A5C9CA;">Syarat & Ketentuan</Link>
                </div>
            </div>
        </footer>
    </div>
</template>
