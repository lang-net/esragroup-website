<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ESRA Group — Ada Tanah, Tapi Tak Mahu Jual?</title>
    <meta name="description" content="ESRA Land Consulting membantu pemilik tanah memahami potensi sebenar tanah mereka dan bagaimana menghasilkan nilai daripadanya.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-data="esraLang" x-cloak class="bg-white font-sans antialiased">

    @include('partials.navbar')

    {{-- HERO --}}
    <section id="top" class="relative overflow-hidden bg-white">
        <div class="absolute inset-y-0 right-0 z-0 w-full sm:w-[72%]">
            <img src="{{ asset('images/esra-hero-card.webp') }}" alt="ESRA skyline" class="h-full w-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-white via-white/70 to-transparent"></div>
        </div>
        <div class="container-esra relative z-10 py-14 sm:py-16">
            <div class="max-w-xl" data-reveal>
                <span class="text-[13.5px] font-bold tracking-widest text-body" x-text="lang === 'en' ? 'ESRA LAND CONSULTING' : 'ESRA LAND CONSULTING'"></span>
                <h1 class="mt-4 text-4xl font-extrabold leading-tight text-navy sm:text-5xl">
                    <span x-text="lang === 'en' ? 'You Own Land,' : 'Ada Tanah, Tapi'"></span><br>
                    <span x-text="lang === 'en' ? 'But Won\'t Sell?' : 'Tak Mahu Jual?'"></span>
                </h1>
                <h2 class="mt-4 text-xl font-bold text-navy-dark sm:text-2xl"
                    x-text="lang === 'en' ? 'Find Out What Your Land Is Really Worth.' : 'Ketahui Potensi Sebenar Tanah Anda.'"></h2>
                <p class="mt-4 max-w-md text-sm leading-relaxed text-body"
                   x-text="lang === 'en'
                       ? 'ESRA Land Consulting helps landowners understand what can be built on their land, how to develop it, and how to turn it into real value.'
                       : 'ESRA Land Consulting membantu pemilik tanah memahami apa yang boleh dibuat, bagaimana hendak membangunkannya dan bagaimana hendak menghasilkan nilai daripada tanah tersebut.'"></p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="#form" class="btn-navy">
                        <span x-text="lang === 'en' ? 'Check My Land Potential →' : 'Semak Potensi Tanah Saya →'"></span>
                    </a>
                    <a href="https://wa.me/60123456789" target="_blank" rel="noopener" class="btn-whatsapp">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round"><path d="M21 11.5a8.4 8.4 0 0 1-12.4 7.4L3 21l2.2-5.5A8.4 8.4 0 1 1 21 11.5Z"></path></svg>
                        <span x-text="lang === 'en' ? 'WhatsApp Us' : 'WhatsApp Kami'"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- WHY CHOOSE US --}}
    <section id="why" class="bg-white py-14">
        <div class="container-esra">
            <div class="section-kicker">
                <h2 x-text="lang === 'en' ? 'WHY CHOOSE ESRA LAND CONSULTING?' : 'KENAPA PILIH ESRA LAND CONSULTING?'"></h2>
                <span></span>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3" data-reveal>
                @php
                    $whyKeys = [1,2,3,4,5,6];
                @endphp
                @foreach ($whyKeys as $i)
                    <div class="esra-card">
                        <template x-if="true">
                            <div class="flex flex-col items-center gap-3.5">
                                <h3 class="text-[15.5px] font-bold text-navy" x-text="esraWhy(lang, {{ $i }}).t"></h3>
                                <p class="text-[13.5px] leading-relaxed text-body" x-text="esraWhy(lang, {{ $i }}).b"></p>
                            </div>
                        </template>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-surface py-12">
        <div class="container-esra grid grid-cols-1 gap-7 lg:grid-cols-[1.12fr_0.88fr]">

            <div class="flex flex-col gap-7">
                {{-- PROCESS --}}
                <div id="process">
                    <div class="section-kicker">
                        <h2 x-text="lang === 'en' ? 'HOW THE PROCESS WORKS' : 'BAGAIMANA PROSESNYA?'"></h2>
                        <span></span>
                    </div>
                    <div class="grid grid-cols-2 gap-2.5 sm:grid-cols-3 lg:grid-cols-6" data-reveal>
                        @foreach ([1,2,3,4,5,6] as $i)
                            <div class="esra-step">
                                <span class="flex h-10 w-10 items-center justify-center rounded-full bg-navy text-xs font-extrabold text-white">{{ sprintf('%02d', $i) }}</span>
                                <h3 class="text-[13px] font-bold text-navy" x-text="esraProc(lang, {{ $i }}).t"></h3>
                                <p class="text-xs leading-relaxed text-body" x-text="esraProc(lang, {{ $i }}).b"></p>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- HELP --}}
                <div id="help" class="rounded-lg border border-border bg-white p-5">
                    <h2 class="mb-4 text-[17px] font-bold text-navy" x-text="lang === 'en' ? 'WHAT WE CAN HELP WITH' : 'APA YANG KAMI BANTU?'"></h2>
                    <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-4" data-reveal>
                        @foreach ([1,2,3,4,5,6,7,8] as $i)
                            <div class="esra-help-card">
                                <h3 class="text-[14.5px] font-bold text-navy" x-text="esraHelp(lang, {{ $i }}).t"></h3>
                                <span class="block h-0.5 w-5 bg-navy"></span>
                                <p class="text-[13px] leading-relaxed text-body" x-text="esraHelp(lang, {{ $i }}).b"></p>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- FIND LAND BY STATE --}}
                <div id="findland" class="rounded-lg border border-border bg-white p-5">
                    <div class="mb-4">
                        <h2 class="text-lg font-bold text-navy" x-text="lang === 'en' ? 'Find Land By State' : 'Cari Tanah Mengikut Negeri'"></h2>
                        <p class="mt-1 text-[13px] text-body"
                           x-text="lang === 'en'
                               ? 'Choose a state to see the projects and land for sale in the area you want.'
                               : 'Pilih negeri untuk melihat projek atau tanah untuk dijual di kawasan pilihan anda.'"></p>
                    </div>
                    <div class="grid grid-cols-2 gap-2.5 sm:grid-cols-4" data-reveal>
                        @php
                            $states = [
                                ['bm' => 'Pulau Pinang', 'en' => 'Pulau Pinang', 'flag' => 'flag-penang'],
                                ['bm' => 'Kedah', 'en' => 'Kedah', 'flag' => 'flag-kedah'],
                                ['bm' => 'Perak', 'en' => 'Perak', 'flag' => 'flag-perak'],
                                ['bm' => 'Perlis', 'en' => 'Perlis', 'flag' => 'flag-perlis'],
                                ['bm' => 'Selangor', 'en' => 'Selangor', 'flag' => 'flag-selangor'],
                                ['bm' => 'Melaka', 'en' => 'Melaka', 'flag' => 'flag-melaka'],
                                ['bm' => 'Johor', 'en' => 'Johor', 'flag' => 'flag-johor'],
                                ['bm' => 'Negeri Sembilan', 'en' => 'Negeri Sembilan', 'flag' => 'flag-ns'],
                            ]
                        @endphp
                        @foreach ($states as $s)
                            <a href="#" class="esra-state-pill">
                                <img src="{{ asset('images/' . $s['flag'] . '.webp') }}" alt="{{ $s['bm'] }}" class="h-6 w-6 shrink-0 rounded object-cover">
                                <span x-text="lang === 'en' ? '{{ $s['en'] }}' : '{{ $s['bm'] }}'"></span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- FORM --}}
            <form id="form" class="flex flex-col gap-4 rounded-xl bg-navy p-6">
                <div>
                    <h2 class="text-lg font-bold text-white" x-text="lang === 'en' ? 'SUBMIT YOUR LAND DETAILS' : 'HANTAR MAKLUMAT TANAH ANDA'"></h2>
                    <p class="mt-1 text-[13px] text-[#bcd0ef]" x-text="lang === 'en' ? 'Get an initial review and a consultation with our specialists.' : 'Dapatkan semakan awal & konsultasi bersama pakar kami.'"></p>
                </div>

                <div>
                    <label class="esra-label" x-text="lang === 'en' ? 'Full Name *' : 'Nama Penuh *'"></label>
                    <input type="text" name="nama" required class="esra-input" :placeholder="lang === 'en' ? 'e.g. Ahmad bin Ali' : 'Contoh: Ahmad bin Ali'">
                </div>
                <div>
                    <label class="esra-label" x-text="lang === 'en' ? 'Phone / WhatsApp No. *' : 'No. Telefon / WhatsApp *'"></label>
                    <input type="text" name="telefon" required class="esra-input" placeholder="012-346 6789">
                </div>
                <div>
                    <label class="esra-label" x-text="lang === 'en' ? 'State *' : 'Negeri *'"></label>
                    <select name="negeri" required class="esra-input">
                        <option value="" x-text="lang === 'en' ? 'Select State' : 'Pilih Negeri'"></option>
                        @foreach (['Perlis','Kedah','Pulau Pinang','Perak','Selangor','Kuala Lumpur','Putrajaya','Negeri Sembilan','Melaka','Johor','Pahang','Terengganu','Kelantan','Sabah','Sarawak','Labuan'] as $neg)
                            <option value="{{ $neg }}">{{ $neg }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="esra-label" x-text="lang === 'en' ? 'Land Size *' : 'Keluasan Tanah *'"></label>
                    <input type="text" name="saiz" required class="esra-input" :placeholder="lang === 'en' ? 'e.g. 2 acres / 1.5 hectares' : 'Contoh: 2 ekar / 1.5 hektar'">
                </div>
                <div>
                    <label class="esra-label" x-text="lang === 'en' ? 'Your Objective *' : 'Objektif Anda *'"></label>
                    <select name="objektif" required class="esra-input">
                        <option value="" x-text="lang === 'en' ? 'Select Objective' : 'Pilih Objektif'"></option>
                        <option x-text="lang === 'en' ? 'Develop the land' : 'Bangunkan tanah'"></option>
                        <option x-text="lang === 'en' ? 'Find investor / JV' : 'Cari pelabur / JV'"></option>
                        <option x-text="lang === 'en' ? 'Sell the land' : 'Jual tanah'"></option>
                    </select>
                </div>
                <div>
                    <label class="esra-label" x-text="lang === 'en' ? 'Tell Us Briefly About Your Land' : 'Ceritakan Ringkas Tentang Tanah Anda'"></label>
                    <textarea name="cerita" rows="3" class="esra-input resize-y"
                              :placeholder="lang === 'en' ? 'e.g. Land fronting a main road, near a residential area...' : 'Contoh: Tanah tepi jalan utama, berhampiran kawasan perumahan...'"></textarea>
                </div>

                <button type="submit" class="btn-white mt-1 justify-center">
                    <span x-text="lang === 'en' ? 'Get Land Consultation' : 'Dapatkan Konsultansi Tanah'"></span>
                    <span>→</span>
                </button>
                <p class="text-center text-xs text-[#bcd0ef]" x-text="lang === 'en' ? 'Your information is safe and kept confidential.' : 'Maklumat anda adalah selamat dan dirahsiakan.'"></p>
            </form>
        </div>
    </section>

    {{-- QUOTE --}}
    <section class="bg-navy-dark py-14">
        <div class="container-esra max-w-3xl text-center">
            <p class="text-lg font-semibold leading-relaxed text-white"
               x-text="lang === 'en'
                   ? 'We believe good development must create value for every party — the landowner, the customer, the investor, the community and the generations to come.'
                   : 'Kami percaya pembangunan yang baik perlu menghasilkan nilai kepada semua pihak — pemilik tanah, pelanggan, pelabur, komuniti dan generasi akan datang.'"></p>
        </div>
    </section>

    @include('partials.footer')

</body>
</html>
