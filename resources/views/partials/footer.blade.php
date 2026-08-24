<footer class="bg-navy-dark text-white">
    <div class="container-esra grid grid-cols-1 gap-10 py-14 sm:grid-cols-2 lg:grid-cols-4">
        <div class="lg:col-span-1">
            <div class="flex flex-col leading-none">
                <span class="text-2xl font-extrabold text-white">ESRA</span>
                <span class="text-[11px] font-medium tracking-[0.34em] text-gold">GROUP</span>
            </div>
            <p class="mt-4 text-sm font-semibold text-white">Building Landmarks. Creating Legacies.</p>
            <p class="mt-3 max-w-xs text-[13px] leading-relaxed text-[#bcd0ef]">
                <span x-text="lang === 'en'
                    ? 'We don\'t just develop land. We create value, opportunities and communities for generations.'
                    : 'Kami bukan sekadar membangunkan tanah. Kami mencipta nilai, peluang dan komuniti untuk generasi akan datang.'"></span>
            </p>
        </div>

        <div>
            <h4 class="mb-3 text-[13.5px] font-bold text-white" x-text="lang === 'en' ? 'Quick Links' : 'Pautan Pantas'"></h4>
            <ul class="space-y-2 text-[13px] text-[#bcd0ef]">
                <li><a href="{{ route('home') }}" class="hover:text-white" x-text="lang === 'en' ? 'Home' : 'Utama'"></a></li>
                <li><a href="#" class="hover:text-white" x-text="lang === 'en' ? 'About' : 'Tentang Kami'"></a></li>
                <li><a href="#" class="hover:text-white" x-text="lang === 'en' ? 'Projects' : 'Projek'"></a></li>
                <li><a href="#" class="hover:text-white" x-text="lang === 'en' ? 'Join ESRA' : 'Sertai ESRA'"></a></li>
            </ul>
        </div>

        <div>
            <h4 class="mb-3 text-[13.5px] font-bold text-white" x-text="lang === 'en' ? 'Our Services' : 'Perkhidmatan Kami'"></h4>
            <ul class="space-y-2 text-[13px] text-[#bcd0ef]">
                <li><span x-text="lang === 'en' ? 'Land Consulting' : 'Konsultansi Tanah'"></span></li>
                <li><span x-text="lang === 'en' ? 'Property Development' : 'Pembangunan Hartanah'"></span></li>
                <li><span x-text="lang === 'en' ? 'Joint Venture' : 'Usahasama (JV)'"></span></li>
            </ul>
        </div>

        <div id="contact">
            <h4 class="mb-3 text-[13.5px] font-bold text-white" x-text="lang === 'en' ? 'Contact Us' : 'Hubungi Kami'"></h4>
            <ul class="space-y-3 text-[13px] text-[#bcd0ef]">
                <li class="flex items-start gap-2">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#bcd0ef" stroke-width="1.6" class="mt-0.5 shrink-0"><path d="M12 21s6-5.5 6-10a6 6 0 1 0-12 0c0 4.5 6 10 6 10Z"></path><circle cx="12" cy="11" r="2"></circle></svg>
                    <span>Level 10, ESRA Tower, No. 1,<br>Jalan Impian, 50250 Kuala Lumpur.</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="border-t border-white/15">
        <div class="container-esra flex flex-col justify-between gap-2 py-3.5 text-xs text-[#a9c1e8] sm:flex-row">
            <span x-text="lang === 'en' ? '© 2025 ESRA Group. All Rights Reserved.' : '© 2025 ESRA Group. Hak Cipta Terpelihara.'"></span>
            <span x-text="lang === 'en' ? 'Privacy Policy   |   Terms of Use' : 'Polisi Privasi   |   Terma Penggunaan'"></span>
        </div>
    </div>
</footer>
