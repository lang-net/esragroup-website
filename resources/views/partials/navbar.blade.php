<header class="sticky top-0 z-50 bg-navy">
    <div class="container-esra flex h-16 items-center gap-8">
        <a href="{{ route('home') }}" class="flex flex-col items-center leading-none">
            <span class="text-2xl font-extrabold tracking-tight text-white">ESRA</span>
            <span class="text-[11px] font-medium tracking-[0.34em] text-gold">GROUP</span>
        </a>

        @php
            $navLink = fn (bool $active) => $active
                ? 'flex flex-col items-center gap-1 text-sm font-semibold text-gold'
                : 'text-sm text-[#e3ebfa] hover:text-white';
        @endphp

        <nav class="ml-auto hidden items-center gap-6 lg:flex">
            <a href="{{ route('home') }}#top" class="{{ $navLink(request()->routeIs('home')) }}">
                <span x-text="lang === 'en' ? 'Home' : 'Utama'"></span>
                @if (request()->routeIs('home'))
                    <span class="block h-0.5 w-5 bg-gold"></span>
                @endif
            </a>
            <a href="{{ route('about') }}" class="{{ $navLink(request()->routeIs('about')) }}">
                <span x-text="lang === 'en' ? 'About' : 'Tentang Kami'"></span>
                @if (request()->routeIs('about'))
                    <span class="block h-0.5 w-5 bg-gold"></span>
                @endif
            </a>
            <a href="{{ route('projek') }}" class="{{ $navLink(request()->routeIs('projek')) }}">
                <span x-text="lang === 'en' ? 'Projects' : 'Projek'"></span>
                @if (request()->routeIs('projek'))
                    <span class="block h-0.5 w-5 bg-gold"></span>
                @endif
            </a>
            <a href="#" class="text-sm text-[#e3ebfa] hover:text-white"><span x-text="lang === 'en' ? 'Landowners' : 'Pemilik Tanah'"></span></a>
            <a href="#" class="text-sm text-[#e3ebfa] hover:text-white"><span x-text="lang === 'en' ? 'Join ESRA' : 'Sertai ESRA'"></span></a>
            <a href="#" class="text-sm text-[#e3ebfa] hover:text-white"><span x-text="lang === 'en' ? 'Insights' : 'Insights'"></span></a>
            <a href="#form" class="text-sm text-[#e3ebfa] hover:text-white"><span x-text="lang === 'en' ? 'Contact' : 'Hubungi'"></span></a>

            <div class="flex items-center overflow-hidden rounded-md border border-white/40">
                <button type="button" @click="setLang('bm')"
                        class="px-2.5 py-1.5 text-[13px] font-bold tracking-wide"
                        :class="lang === 'bm' ? 'bg-white text-navy' : 'text-white'">BM</button>
                <button type="button" @click="setLang('en')"
                        class="px-2.5 py-1.5 text-[13px] font-bold tracking-wide"
                        :class="lang === 'en' ? 'bg-white text-navy' : 'text-white'">EN</button>
            </div>

            <a href="#form" class="btn-white">
                <span x-text="lang === 'en' ? 'Get in Touch →' : 'Hubungi Kami →'"></span>
            </a>
        </nav>
    </div>
</header>
