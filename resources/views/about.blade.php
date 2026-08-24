<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tentang Kami — ESRA Group</title>
    <meta name="description" content="ESRA GROUP merupakan kumpulan syarikat yang memberi fokus kepada tanah, hartanah, pembangunan dan perkhidmatan berkaitan pembangunan.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-data="esraLang" x-cloak class="bg-white font-sans antialiased">

    @include('partials.navbar')

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-white">
        <div class="absolute inset-y-0 right-0 z-0 hidden w-[58%] sm:block">
            <img src="{{ asset('images/about-hero.webp') }}" alt="ESRA building" class="h-full w-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-white via-white/60 to-transparent"></div>
        </div>
        <div class="container-esra relative z-10 py-14 sm:py-16">
            <div class="max-w-lg" data-reveal>
                <span class="text-[13px] font-bold tracking-widest text-navy" x-text="esraAbout(lang).aboutKicker"></span>
                <h1 class="mt-4 text-3xl font-extrabold leading-tight text-navy sm:text-4xl">
                    <span x-text="esraAbout(lang).aboutTitle1"></span><br><span x-text="esraAbout(lang).aboutTitle2"></span>
                </h1>
                <div class="mt-5 flex flex-col gap-4 text-[13.5px] leading-relaxed text-body">
                    <p x-text="esraAbout(lang).aboutP1"></p>
                    <p x-text="esraAbout(lang).aboutP2"></p>
                    <p x-text="esraAbout(lang).aboutP3"></p>
                    <p x-text="esraAbout(lang).aboutP4"></p>
                    <p x-text="esraAbout(lang).aboutP5"></p>
                </div>
            </div>
        </div>
    </section>

    {{-- VISION + MISSION (sticky scroll-spy) --}}
    <section class="bg-white py-14" x-data="esraMissionSpy()">
        <div class="container-esra grid grid-cols-1 gap-8 lg:grid-cols-2">

            <div class="lg:sticky lg:top-24 lg:self-start">
                <div class="rounded-2xl bg-navy p-8 text-white shadow-[0_20px_44px_rgba(6,58,145,0.22)]">
                    <span class="text-[13px] font-bold tracking-widest text-[#9db2d8]" x-text="esraAbout(lang).visionKicker"></span>
                    <h2 class="mt-3 text-2xl font-extrabold leading-snug sm:text-3xl" x-text="esraAbout(lang).visionTitle"></h2>

                    <div class="mt-5 flex h-11 w-11 items-center justify-center rounded-full border border-white/40">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.4"><path d="M3 12s3.5-7 9-7 9 7 9 7-3.5 7-9 7-9-7-9-7Z"></path><circle cx="12" cy="12" r="2.6"></circle></svg>
                    </div>
                    <p class="mt-4 text-[13.5px] leading-relaxed text-[#dbe6f8]" x-text="esraAbout(lang).visionP1"></p>
                    <p class="mt-3 text-[13.5px] leading-relaxed text-[#dbe6f8]" x-text="esraAbout(lang).visionP2"></p>

                    <div class="mt-7 flex items-center justify-between text-[11px] font-bold tracking-widest text-[#9db2d8]">
                        <span x-text="esraAbout(lang).missionKicker"></span>
                        <span x-text="(active + 1) + ' / ' + esraAbout(lang).mission.length"></span>
                    </div>
                    <div class="mt-2 h-1 w-full overflow-hidden rounded-full bg-white/15">
                        <div class="h-full rounded-full bg-gold transition-all duration-500 ease-out"
                             :style="`width: ${((active + 1) / esraAbout(lang).mission.length) * 100}%`"></div>
                    </div>
                </div>
            </div>

            <div class="relative flex flex-col gap-3 pl-7">
                <div class="absolute bottom-2 left-[7px] top-2 w-px bg-border"></div>

                <template x-for="(m, i) in esraAbout(lang).mission" :key="i">
                    <div :data-mission-item="i"
                         class="relative rounded-xl border p-4 transition-all duration-400"
                         :class="active === i ? 'border-navy bg-navy-50 shadow-[0_10px_24px_rgba(6,58,145,0.12)]' : 'border-transparent'">
                        <span class="absolute -left-7 top-4 flex h-4 w-4 items-center justify-center rounded-full ring-4 ring-white"
                              :class="active === i ? 'bg-gold' : 'bg-border'"></span>
                        <div class="flex items-start gap-3">
                            <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full text-xs font-extrabold transition-colors duration-300"
                                  :class="active === i ? 'bg-gold text-navy' : 'bg-navy-50 text-navy'"
                                  x-text="i + 1"></span>
                            <div>
                                <h3 class="text-[14.5px] font-bold transition-colors duration-300"
                                    :class="active === i ? 'text-navy' : 'text-navy-dark/70'"
                                    x-text="m.t"></h3>
                                <p x-show="active === i"
                                   x-transition:enter="transition ease-out duration-300"
                                   x-transition:enter-start="opacity-0 -translate-y-1"
                                   x-transition:enter-end="opacity-100 translate-y-0"
                                   class="mt-1.5 text-[13px] leading-relaxed text-body" x-text="m.b"></p>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </section>

    {{-- PURPOSE + PROMISE --}}
    <section class="bg-white pb-14">
        <div class="container-esra grid grid-cols-1 gap-5 lg:grid-cols-2" data-reveal>
            <div class="rounded-md border border-border p-7">
                <span class="text-[13px] font-bold tracking-widest text-navy" x-text="esraAbout(lang).purposeKicker"></span>
                <h2 class="mt-3 text-xl font-extrabold leading-snug text-navy" x-text="esraAbout(lang).purposeTitle1 + ' ' + esraAbout(lang).purposeTitle2"></h2>
                <p class="mt-4 max-w-md text-[13px] leading-relaxed text-body" x-text="esraAbout(lang).purposeP1"></p>
                <p class="mt-3 text-[13px] leading-relaxed text-body" x-text="esraAbout(lang).purposeP2"></p>
                <div class="mt-6 flex flex-wrap items-start justify-between gap-2">
                    @foreach (['LAND','IDEA','PLANNING','DEVELOPMENT','PROPERTY','VALUE'] as $step)
                        <div class="flex flex-col items-center gap-2">
                            <span class="flex h-11 w-11 items-center justify-center rounded-full bg-navy text-white">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.6"><circle cx="12" cy="12" r="8"></circle></svg>
                            </span>
                            <span class="text-[11px] font-bold tracking-wide text-navy">{{ $step }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="rounded-md border border-border p-7">
                <span class="text-[13px] font-bold tracking-widest text-navy" x-text="esraAbout(lang).promiseKicker"></span>
                <h2 class="mt-3 text-xl font-extrabold text-navy" x-text="esraAbout(lang).promiseTitle"></h2>
                <p class="mt-3 text-[13px] leading-relaxed text-body" x-text="esraAbout(lang).promiseSub"></p>
                <div class="mt-5 grid grid-cols-3 gap-3">
                    <template x-for="(p, i) in esraAbout(lang).promise" :key="i">
                        <div class="flex flex-col items-center gap-2.5 rounded-md border border-[#e6ebf4] p-4 text-center">
                            <h3 class="text-[13.5px] font-bold text-navy" x-text="p.t"></h3>
                            <p class="text-[12.5px] leading-relaxed text-body" x-text="p.b"></p>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </section>

    {{-- GROUP OF COMPANIES --}}
    <section class="bg-surface py-12">
        <div class="container-esra" data-reveal>
            <span class="text-[13px] font-bold tracking-widest text-navy" x-text="esraAbout(lang).coKicker"></span>
            <div class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <template x-for="(c, i) in esraAbout(lang).companies" :key="i">
                    <div class="flex flex-col gap-3.5 rounded-md border border-border bg-white p-5">
                        <h3 class="text-[15.5px] font-extrabold leading-snug text-navy" x-text="c.name"></h3>
                        <p class="text-[13px] leading-relaxed text-body" x-text="c.b"></p>
                        <span class="mt-auto block h-[2.5px] w-9 bg-navy"></span>
                    </div>
                </template>
            </div>
        </div>
    </section>

    {{-- BANNER --}}
    <section class="relative overflow-hidden bg-navy">
        <div class="absolute inset-y-0 right-0 z-0 hidden w-[52%] lg:block">
            <img src="{{ asset('images/about-skyline.webp') }}" alt="City skyline" class="h-full w-full object-cover opacity-90">
            <div class="absolute inset-0 bg-gradient-to-r from-navy via-navy/70 to-transparent"></div>
        </div>
        <div class="container-esra relative z-10 py-12">
            <div class="max-w-lg">
                <span class="text-[13px] font-bold tracking-widest text-[#dbe6f8]">ESRA GROUP</span>
                <h2 class="mt-2 text-2xl font-extrabold text-white">Building Landmarks. Creating Legacies.</h2>
                <p class="mt-3 text-[13.5px] leading-relaxed text-[#dbe6f8]">
                    <span x-text="esraAbout(lang).bannerL1"></span><br><span x-text="esraAbout(lang).bannerL2"></span>
                </p>
            </div>
        </div>
    </section>

    @include('partials.footer')

</body>
</html>
