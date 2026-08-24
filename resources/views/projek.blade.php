<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projek & Tanah — ESRA Group</title>
    <meta name="description" content="ESRA membangunkan tanah bergeran individu di lokasi yang sedang berkembang. Pilih negeri dan lokasi untuk melihat projek yang tersedia.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-data="esraLang" x-cloak class="bg-white font-sans antialiased">

    @include('partials.navbar')

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-navy-900">
        <div class="absolute inset-y-0 right-0 z-0 hidden w-[60%] sm:block">
            <img src="{{ asset('images/hub-hero.webp') }}" alt="ESRA development" class="h-full w-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-navy-900 via-navy-900/80 to-navy-900/20"></div>
        </div>
        <div class="container-esra relative z-10 py-12">
            <div class="max-w-lg" data-reveal x-data="{ p: esraLang }">
                <span class="text-[12.5px] font-bold tracking-widest text-gold" x-text="lang === 'en' ? 'ESRA PROJECTS & LAND' : 'PROJEK & TANAH ESRA'"></span>
                <h1 class="mt-3 text-3xl font-extrabold leading-tight text-white sm:text-4xl">
                    <span x-text="lang === 'en' ? 'The Projects We Are' : 'Projek Yang Sedang'"></span><br>
                    <span x-text="lang === 'en' ? 'Building Right Now' : 'Kami Bangunkan'"></span>
                </h1>
                <p class="mt-4 max-w-md text-[13.5px] leading-relaxed text-[#c9d8f2]"
                   x-text="lang === 'en'
                       ? 'ESRA develops individual-title land in growing locations. Choose a state and area below to see what is available.'
                       : 'ESRA membangunkan tanah bergeran individu di lokasi yang sedang berkembang. Pilih negeri dan lokasi di bawah untuk melihat projek yang tersedia.'"></p>
                <div class="mt-5 flex gap-6">
                    <div class="flex flex-col gap-0.5">
                        <span class="text-2xl font-extrabold text-gold">6</span>
                        <span class="text-xs text-[#c9d8f2]" x-text="lang === 'en' ? 'Projects available' : 'Projek tersedia'"></span>
                    </div>
                    <div class="flex flex-col gap-0.5 border-l border-white/20 pl-6">
                        <span class="text-2xl font-extrabold text-gold">1</span>
                        <span class="text-xs text-[#c9d8f2]" x-text="lang === 'en' ? 'Active areas' : 'Lokasi aktif'"></span>
                    </div>
                    <div class="flex flex-col gap-0.5 border-l border-white/20 pl-6">
                        <span class="text-2xl font-extrabold text-gold">15</span>
                        <span class="text-xs text-[#c9d8f2]" x-text="lang === 'en' ? 'States covered' : 'Negeri diliputi'"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 3 INFO CARDS --}}
    <section class="bg-surface py-10">
        <div class="container-esra grid grid-cols-1 gap-5 sm:grid-cols-3" data-reveal>
            @php
                $infoIcons = [
                    '<path d="M3 11l9-7 9 7"></path><path d="M5 10v10h14V10"></path>',
                    '<rect x="6" y="3" width="12" height="18"></rect><path d="M9 7h6M9 11h6M9 15h4"></path>',
                    '<path d="M4 20V13M9.3 20V9M14.7 20v-5M20 20V4"></path>',
                ];
            @endphp
            @foreach ([1, 2, 3] as $idx => $i)
                <div class="rounded-lg border border-border bg-white p-5">
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-navy-50">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#063a91" stroke-width="1.4">{!! $infoIcons[$idx] !!}</svg>
                    </span>
                    <h3 class="mt-3 text-[14.5px] font-bold text-navy"
                        x-text="lang === 'en' ? {{ json_encode(['Individual Titles', 'Paperwork Handled', 'Locations With Upside'][$idx]) }} : {{ json_encode(['Tanah Bergeran Individu', 'Dokumen & Proses Diuruskan', 'Lokasi Berpotensi Tumbuh'][$idx]) }}"></h3>
                    <p class="mt-1.5 text-[13px] leading-relaxed text-body"
                       x-text="lang === 'en' ? {{ json_encode([
                            'Every lot is sold with a title in the buyer\'s own name — simpler and safer to transact.',
                            'From booking and SPA through to transfer, our team manages every stage.',
                            'We pick areas that are actively developing so land value keeps climbing.',
                       ][$idx]) }} : {{ json_encode([
                            'Setiap lot dijual dengan geran atas nama pembeli sendiri — urusan lebih mudah dan selamat.',
                            'Dari booking, SPA sehingga pindah milik, pasukan kami menguruskan setiap peringkat.',
                            'Kami pilih kawasan yang sedang membangun supaya nilai tanah terus meningkat.',
                       ][$idx]) }}"></p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- STATE / AREA PICKER --}}
    <section class="bg-surface pb-12" x-data="esraProjek()">
        <div class="container-esra">

            {{-- STEP 1: STATE --}}
            <div class="overflow-hidden rounded-lg border border-border bg-white">
                <div class="flex items-center justify-between bg-navy px-5 py-3">
                    <div class="flex items-center gap-2.5">
                        <span class="flex h-6 w-6 items-center justify-center rounded-full border border-white/50 text-[11px] font-bold text-white">1</span>
                        <span class="text-[12px] font-bold tracking-widest text-white" x-text="lang === 'en' ? 'CHOOSE A STATE' : 'PILIH NEGERI'"></span>
                    </div>
                    <span class="hidden text-[12px] text-[#c9d8f2] sm:inline" x-text="lang === 'en' ? 'More areas opening soon' : 'Kawasan lain akan dibuka tidak lama lagi'"></span>
                </div>

                <div class="grid grid-cols-2 gap-3 p-5 sm:grid-cols-3 lg:grid-cols-5">
                    <template x-for="s in states" :key="s.name">
                        <button type="button" @click="pickState(s)"
                                class="flex items-center gap-2.5 rounded-lg border p-2.5 text-left transition"
                                :class="pickedState?.name === s.name ? 'border-[#1f9d55] bg-[#f2fbf6] shadow-[0_0_0_3px_rgba(31,157,85,.13)]' : 'border-border bg-white hover:border-navy'">
                            <img :src="`/images/${s.flag}.webp`" :alt="s.name" class="h-8 w-8 shrink-0 rounded object-cover">
                            <span class="flex flex-col">
                                <span class="text-[13px] font-bold text-navy" x-text="s.name"></span>
                                <span class="text-[11px]" :class="s.live.length ? 'text-[#177245]' : 'text-[#95a1b4]'"
                                      x-text="s.live.length ? (s.live.length + (lang === 'en' ? ' areas · AVAILABLE' : ' lokasi · TERSEDIA')) : (lang === 'en' ? 'Coming soon' : 'Akan datang')"></span>
                            </span>
                        </button>
                    </template>
                </div>
            </div>

            {{-- STEP 2: AREA --}}
            <div x-show="pickedState" x-cloak class="mt-5 overflow-hidden rounded-lg border border-border bg-white">
                <div class="flex items-center justify-between bg-navy-dark px-5 py-3">
                    <div class="flex items-center gap-2.5">
                        <span class="flex h-6 w-6 items-center justify-center rounded-full bg-gold text-[11px] font-bold text-navy">2</span>
                        <span class="text-[12px] font-bold tracking-widest text-white"
                              x-text="(lang === 'en' ? 'Choose an area in ' : 'Pilih Lokasi di ') + (pickedState?.name || '')"></span>
                    </div>
                    <span class="text-[12px] text-[#c9d8f2]" x-text="pickedState?.areas.length + (lang === 'en' ? ' areas' : ' lokasi')"></span>
                </div>
                <div class="grid grid-cols-2 gap-3 p-5 sm:grid-cols-3 lg:grid-cols-4">
                    <template x-for="a in (pickedState?.areas || [])" :key="a">
                        <button type="button" @click="pickArea(a)"
                                class="flex items-center justify-between gap-2 rounded-lg border p-3 text-left transition"
                                :class="[
                                    pickedState.live.includes(a) ? 'cursor-pointer hover:border-navy' : 'cursor-default bg-[#f7f8fb] border-[#e8ecf3]',
                                    pickedArea === a ? 'border-[#1f9d55] bg-[#f2fbf6]' : (pickedState.live.includes(a) ? 'border-border bg-white' : ''),
                                ]">
                            <span class="flex items-center gap-2 text-[13px] font-semibold" :class="pickedState.live.includes(a) ? 'text-navy-dark' : 'text-[#95a1b4]'">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" :stroke="pickedState.live.includes(a) ? '#0a2f77' : '#a9b4c7'" stroke-width="1.8"><path d="M12 21s6-5.5 6-10a6 6 0 1 0-12 0c0 4.5 6 10 6 10Z"></path><circle cx="12" cy="11" r="2"></circle></svg>
                                <span x-text="a"></span>
                            </span>
                            <span class="rounded-full px-2 py-0.5 text-[10px] font-bold"
                                  :class="pickedState.live.includes(a) ? 'bg-[#e6f4ec] text-[#177245]' : 'bg-[#eef1f6] text-[#8b96a8]'"
                                  x-text="pickedState.live.includes(a) ? (lang === 'en' ? 'AVAILABLE' : 'TERSEDIA') : (lang === 'en' ? 'NO SERVICE' : 'TIADA SERVIS')"></span>
                        </button>
                    </template>
                </div>
            </div>

            {{-- RESULTS --}}
            <div id="hasil" x-show="pickedArea" x-cloak class="mt-8 scroll-mt-24">
                <h2 class="text-lg font-extrabold text-navy" x-text="(lang === 'en' ? 'Projects in ' : 'Projek di ') + (pickedArea || '')"></h2>
                <div class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    <template x-for="p in projects" :key="p.name">
                        <div class="overflow-hidden rounded-lg border border-border bg-white">
                            <div class="relative flex h-36 items-center justify-center bg-navy-50 text-navy/30">
                                <span class="rounded-full px-2.5 py-1 text-[10px] font-extrabold text-white absolute left-3 top-3"
                                      :style="`background:${p.badgeBg}; color:${p.badgeFg || '#fff'}`" x-text="p.badge"></span>
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><path d="M3 11l9-7 9 7"></path><path d="M5 10v10h14V10"></path></svg>
                            </div>
                            <div class="flex flex-col gap-2 p-4">
                                <h3 class="text-[14.5px] font-bold text-navy" x-text="p.name"></h3>
                                <p class="text-[12.5px] text-body" x-text="p.loc"></p>
                                <div class="mt-1 flex items-center justify-between text-[12.5px] text-body">
                                    <span x-text="(lang === 'en' ? 'From ' : 'Bermula ') + p.price"></span>
                                    <span x-text="p.size"></span>
                                </div>
                                <a href="#form" class="btn-navy mt-2 justify-center text-xs">
                                    <span x-text="lang === 'en' ? 'VIEW PROJECT' : 'LIHAT PROJEK'"></span>
                                </a>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA BANNER --}}
    <section class="pb-14">
        <div class="container-esra">
            <div class="flex flex-col items-start gap-5 rounded-xl bg-gradient-to-br from-navy to-navy-dark p-7 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex items-start gap-4">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full border border-white/40">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.6"><path d="M12 21s6-5.5 6-10a6 6 0 1 0-12 0c0 4.5 6 10 6 10Z"></path><circle cx="12" cy="11" r="2"></circle></svg>
                    </span>
                    <div>
                        <h2 class="text-lg font-extrabold leading-snug text-white">
                            <span x-text="lang === 'en' ? 'Haven\'t found the right land yet?' : 'Belum jumpa tanah yang sesuai?'"></span><br>
                            <span x-text="lang === 'en' ? 'Let us find it for you.' : 'Biar kami cari untuk anda.'"></span>
                        </h2>
                        <p class="mt-1.5 max-w-md text-[13px] leading-relaxed text-[#c9d8f2]"
                           x-text="lang === 'en'
                               ? 'Tell us the location, size and budget you want — the ESRA team will reach out the moment something matching comes up.'
                               : 'Beritahu kami lokasi, saiz dan bajet yang anda mahu — pasukan ESRA akan hubungi anda sebaik ada tanah yang menepati kehendak itu.'"></p>
                    </div>
                </div>
                <div class="flex shrink-0 flex-col gap-2.5 sm:items-end">
                    <a href="#form" class="inline-flex items-center justify-center gap-2 rounded-md bg-gold px-5 py-2.5 text-xs font-extrabold tracking-wide text-navy transition hover:-translate-y-0.5">
                        <span x-text="lang === 'en' ? 'CONTACT US →' : 'HUBUNGI KAMI →'"></span>
                    </a>
                    <a href="#form" class="inline-flex items-center justify-center gap-2 rounded-md border border-white/40 px-5 py-2.5 text-xs font-semibold text-white transition hover:bg-white/10">
                        <span x-text="lang === 'en' ? 'I have land to sell' : 'Saya ada tanah untuk dijual'"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

</body>
</html>
