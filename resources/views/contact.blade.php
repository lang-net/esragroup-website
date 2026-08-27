<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hubungi Kami — ESRA Group</title>
    <meta name="description" content="Hubungi ESRA Group untuk sebarang pertanyaan berkaitan tanah, hartanah, pembangunan atau kerjaya.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-data="esraLang" x-cloak class="bg-white font-sans antialiased">

    @include('partials.navbar')

    {{-- TRUST BAR --}}
    <div class="border-b border-white/10 bg-[#0a2456]">
        <div class="container-esra grid gap-4 py-3.5 sm:grid-cols-3">
            <template x-for="(item, i) in [esraContact(lang).tr1t, esraContact(lang).tr2t, esraContact(lang).tr3t]" :key="i">
                <div class="flex items-center gap-3" :class="i < 2 ? 'sm:border-r sm:border-white/15 sm:pr-6' : ''">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#c8a94f" stroke-width="1.4" class="flex-none">
                        <template x-if="i === 0"><path d="M4 20V9l8-5 8 5v11 M9 20v-6h6v6"></path></template>
                        <template x-if="i === 1"><path d="M12 3l7 3v6c0 4.2-3 7.6-7 9-4-1.4-7-4.8-7-9V6l7-3Z M9 12l2.2 2.2L15.5 10"></path></template>
                        <template x-if="i === 2"><circle cx="12" cy="7" r="2.6"></circle><circle cx="5" cy="10" r="2.2"></circle><circle cx="19" cy="10" r="2.2"></circle><path d="M7.5 19c0-2.6 2-4.3 4.5-4.3s4.5 1.7 4.5 4.3M2 18c0-1.9 1.3-3 2.8-3M22 18c0-1.9-1.3-3-2.8-3"></path></template>
                    </svg>
                    <div>
                        <div class="text-[13px] font-bold text-white" x-text="[esraContact(lang).tr1t, esraContact(lang).tr2t, esraContact(lang).tr3t][i]"></div>
                        <div class="mt-0.5 text-[12.5px] text-[#a9c1e8]" x-text="[esraContact(lang).tr1b, esraContact(lang).tr2b, esraContact(lang).tr3b][i]"></div>
                    </div>
                </div>
            </template>
        </div>
    </div>

    {{-- HERO + FORM --}}
    <section id="top" class="relative overflow-hidden bg-[#0a2456]">
        <div class="absolute inset-0 bg-gradient-to-br from-navy to-[#061a40]"></div>
        <div class="container-esra relative grid gap-11 sm:grid-cols-[1fr_470px]">
            <div class="flex flex-col items-start py-11" data-reveal>
                <span class="text-[13.5px] font-bold tracking-[0.16em] text-gold" x-text="esraContact(lang).heroKicker"></span>
                <h1 class="mt-4 text-4xl font-extrabold leading-[1.14] text-white sm:text-[40px]">
                    <span x-text="esraContact(lang).heroT1"></span><br><span x-text="esraContact(lang).heroT2"></span>
                </h1>
                <p class="mt-4.5 max-w-[410px] text-[14.5px] leading-[1.9] text-[#d5e0f4]" x-text="esraContact(lang).heroBody"></p>

                <div class="mt-8 grid w-full max-w-[500px] grid-cols-2 gap-3 sm:grid-cols-4">
                    <template x-for="(b, i) in esraContact(lang).benefits" :key="i">
                        <div class="flex flex-col items-center gap-2.5 rounded-[10px] bg-white/[.07] px-3 py-4 text-center backdrop-blur-sm">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.3">
                                <template x-if="i === 0"><path d="M4 14v-2a8 8 0 0 1 16 0v2"></path></template>
                                <template x-if="i === 1"><rect x="5" y="10" width="14" height="10"></rect><path d="M8.5 10V7a3.5 3.5 0 0 1 7 0v3"></path></template>
                                <template x-if="i === 2"><path d="M4 5h16v11H8l-4 4z"></path><path d="M8 9h8M8 12h5"></path></template>
                                <template x-if="i === 3"><path d="M12 21s6-5.5 6-10a6 6 0 1 0-12 0c0 4.5 6 10 6 10Z"></path><circle cx="12" cy="11" r="2"></circle></template>
                            </svg>
                            <h3 class="text-[12.5px] font-bold text-white" x-text="b.t"></h3>
                            <p class="text-[11.5px] leading-[1.65] text-[#bcd0ef]" x-text="b.b"></p>
                        </div>
                    </template>
                </div>
            </div>

            <form x-data="{ sent: false }" @submit.prevent="sent = true"
                  class="my-6.5 flex flex-col rounded-[6px] bg-white px-6.5 py-6" data-reveal>
                <h2 class="text-[18px] font-extrabold tracking-[0.02em] text-navy"><span x-text="esraContact(lang).fTitle"></span></h2>
                <p class="mt-2 text-[13px] text-body" x-text="esraContact(lang).fSub"></p>
                <div class="mt-4.5 grid grid-cols-2 gap-3.5">
                    <label class="flex flex-col gap-1.5">
                        <span class="text-xs font-semibold text-navy-dark" x-text="esraContact(lang).fName"></span>
                        <input required :placeholder="esraContact(lang).fNamePh" class="rounded border border-[#dbe2ee] bg-[#fbfcfe] px-2.5 py-2.5 text-[13px] text-navy-dark">
                    </label>
                    <label class="flex flex-col gap-1.5">
                        <span class="text-xs font-semibold text-navy-dark" x-text="esraContact(lang).fWa"></span>
                        <input required :placeholder="esraContact(lang).fWaPh" class="rounded border border-[#dbe2ee] bg-[#fbfcfe] px-2.5 py-2.5 text-[13px] text-navy-dark">
                    </label>
                    <label class="flex flex-col gap-1.5">
                        <span class="text-xs font-semibold text-navy-dark" x-text="esraContact(lang).fEmail"></span>
                        <input type="email" :placeholder="esraContact(lang).fEmailPh" class="rounded border border-[#dbe2ee] bg-[#fbfcfe] px-2.5 py-2.5 text-[13px] text-navy-dark">
                    </label>
                    <label class="flex flex-col gap-1.5">
                        <span class="text-xs font-semibold text-navy-dark" x-text="esraContact(lang).fTopic"></span>
                        <select required class="rounded border border-[#dbe2ee] bg-[#fbfcfe] px-2.5 py-2.5 text-[13px] text-navy-dark">
                            <option value="" x-text="esraContact(lang).fTopicPh"></option>
                            <template x-for="(opt, i) in esraContact(lang).interests" :key="i">
                                <option x-text="opt"></option>
                            </template>
                        </select>
                    </label>
                </div>
                <label class="mt-3.5 flex flex-col gap-1.5">
                    <span class="text-xs font-semibold text-navy-dark" x-text="esraContact(lang).fMsg"></span>
                    <textarea required rows="4" :placeholder="esraContact(lang).fMsgPh" class="resize-y rounded border border-[#dbe2ee] bg-[#fbfcfe] px-2.5 py-2.5 text-[13px] text-navy-dark"></textarea>
                </label>
                <span class="mt-4 text-xs font-semibold text-navy-dark" x-text="esraContact(lang).fInterest"></span>
                <div class="mt-2.5 grid grid-cols-2 gap-x-4.5 gap-y-2.5">
                    <template x-for="(opt, i) in esraContact(lang).interests" :key="i">
                        <label class="flex items-center gap-2 text-[12.5px] text-body">
                            <input type="checkbox" class="h-[13px] w-[13px]"> <span x-text="opt"></span>
                        </label>
                    </template>
                </div>
                <button type="submit" class="mt-4.5 flex items-center justify-center gap-2.5 rounded bg-navy-deep px-3.5 py-3.5 text-[13.5px] font-bold tracking-[0.05em] text-white transition hover:bg-navy">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.7"><path d="M21 4 3 11l7 2.5L12.5 21z"></path><path d="M21 4 10 13.5"></path></svg>
                    <span x-text="sent ? esraContact(lang).fSubmitted : esraContact(lang).fSubmit"></span>
                </button>
                <p class="mt-3 flex items-center justify-center gap-1.5 text-[11.5px] text-[#8494b1]">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#8494b1" stroke-width="1.8" class="flex-none"><rect x="4" y="10" width="16" height="11"></rect><path d="M8 10V7a4 4 0 0 1 8 0v3"></path></svg>
                    <span x-text="esraContact(lang).fNote"></span>
                </p>
            </form>
        </div>
    </section>

    {{-- CONTACT INFO CARDS --}}
    <section class="bg-white pb-2 pt-8">
        <div class="container-esra">
            <div class="mb-6.5 flex flex-col items-center gap-2">
                <h2 class="text-[17px] font-extrabold tracking-[0.12em] text-navy" x-text="esraContact(lang).infoTitle"></h2>
                <span class="block h-[2.5px] w-13 bg-gold"></span>
            </div>
            <div class="grid gap-4.5 sm:grid-cols-2 lg:grid-cols-4" data-reveal>
                <div class="flex flex-col items-center gap-2.5 rounded-lg p-5.5 text-center transition duration-300 hover:-translate-y-1.5 hover:shadow-[0_20px_38px_rgba(6,58,145,0.16)]">
                    <span class="flex h-11 w-11 items-center justify-center rounded-full bg-navy"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.6"><path d="M4 5c0-1 1-2 2-2h2l2 5-2 1a10 10 0 0 0 5 5l1-2 5 2v2c0 1-1 2-2 2A16 16 0 0 1 4 5Z"></path></svg></span>
                    <h3 class="text-[13.5px] font-bold text-navy" x-text="esraContact(lang).c1t"></h3>
                    <a href="tel:+60312345678" class="text-[13px] font-bold text-navy-dark">+603 1234 5678</a>
                    <p class="text-[12.5px] leading-[1.7] text-body" x-text="esraContact(lang).c1b"></p>
                </div>
                <div class="flex flex-col items-center gap-2.5 rounded-lg p-5.5 text-center transition duration-300 hover:-translate-y-1.5 hover:shadow-[0_20px_38px_rgba(37,168,98,0.16)]">
                    <span class="flex h-11 w-11 items-center justify-center rounded-full bg-[#25a862]"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.7" stroke-linecap="round"><path d="M21 11.5a8.4 8.4 0 0 1-12.4 7.4L3 21l2.2-5.5A8.4 8.4 0 1 1 21 11.5Z"></path></svg></span>
                    <h3 class="text-[13.5px] font-bold text-navy" x-text="esraContact(lang).c2t"></h3>
                    <a href="https://wa.me/60123456789" target="_blank" rel="noopener" class="text-[13px] font-bold text-navy-dark">+6012 345 6789</a>
                    <p class="text-[12.5px] leading-[1.7] text-body" x-text="esraContact(lang).c2b"></p>
                </div>
                <div class="flex flex-col items-center gap-2.5 rounded-lg p-5.5 text-center transition duration-300 hover:-translate-y-1.5 hover:shadow-[0_20px_38px_rgba(28,95,208,0.16)]">
                    <span class="flex h-11 w-11 items-center justify-center rounded-full bg-[#1c5fd0]"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.6"><rect x="3" y="5" width="18" height="14"></rect><path d="m3 7 9 6 9-6"></path></svg></span>
                    <h3 class="text-[13.5px] font-bold text-navy" x-text="esraContact(lang).c3t"></h3>
                    <a href="mailto:hello@esragroup.my" class="text-[13px] font-bold text-navy-dark" x-text="esraContact(lang).c3email"></a>
                    <p class="text-[12.5px] leading-[1.7] text-body" x-text="esraContact(lang).c3b"></p>
                </div>
                <div class="flex flex-col items-center gap-2.5 rounded-lg p-5.5 text-center transition duration-300 hover:-translate-y-1.5 hover:shadow-[0_20px_38px_rgba(28,95,208,0.16)]">
                    <span class="flex h-11 w-11 items-center justify-center rounded-full bg-[#1c5fd0]"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.6"><rect x="3" y="5" width="18" height="14"></rect><path d="m3 7 9 6 9-6"></path></svg></span>
                    <h3 class="text-[13.5px] font-bold text-navy" x-text="esraContact(lang).c3st"></h3>
                    <a href="mailto:sales@esragroup.my" class="text-[13px] font-bold text-navy-dark" x-text="esraContact(lang).c3semail"></a>
                    <p class="text-[12.5px] leading-[1.7] text-body" x-text="esraContact(lang).c3sb"></p>
                </div>
                <div class="flex flex-col items-center gap-2.5 rounded-lg p-5.5 text-center transition duration-300 hover:-translate-y-1.5 hover:shadow-[0_20px_38px_rgba(28,95,208,0.16)]">
                    <span class="flex h-11 w-11 items-center justify-center rounded-full bg-[#1c5fd0]"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.6"><rect x="3" y="5" width="18" height="14"></rect><path d="m3 7 9 6 9-6"></path></svg></span>
                    <h3 class="text-[13.5px] font-bold text-navy" x-text="esraContact(lang).c3at"></h3>
                    <a href="mailto:admin@esragroup.my" class="text-[13px] font-bold text-navy-dark" x-text="esraContact(lang).c3aemail"></a>
                    <p class="text-[12.5px] leading-[1.7] text-body" x-text="esraContact(lang).c3ab"></p>
                </div>
                <div class="flex flex-col items-center gap-2.5 rounded-lg p-5.5 text-center transition duration-300 hover:-translate-y-1.5 hover:shadow-[0_20px_38px_rgba(240,180,41,0.16)]">
                    <span class="flex h-11 w-11 items-center justify-center rounded-full bg-gold"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.7"><path d="M12 21s6-5.5 6-10a6 6 0 1 0-12 0c0 4.5 6 10 6 10Z"></path><circle cx="12" cy="11" r="2"></circle></svg></span>
                    <h3 class="text-[13.5px] font-bold text-navy" x-text="esraContact(lang).c4t"></h3>
                    <p class="text-[13px] font-bold leading-[1.6] text-navy-dark" x-html="esraContact(lang).c4addr"></p>
                </div>
                <div class="flex flex-col items-center gap-2.5 rounded-lg p-5.5 text-center transition duration-300 hover:-translate-y-1.5 hover:shadow-[0_20px_38px_rgba(123,75,207,0.16)]">
                    <span class="flex h-11 w-11 items-center justify-center rounded-full bg-[#7b4bcf]"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.6"><circle cx="12" cy="12" r="8.5"></circle><path d="M12 7.5V12l3 2"></path></svg></span>
                    <h3 class="text-[13.5px] font-bold text-navy" x-text="esraContact(lang).c5t"></h3>
                    <p class="text-[12.5px] leading-[1.85] text-navy-dark">
                        <span x-text="esraContact(lang).c5l1"></span><br><span x-text="esraContact(lang).c5l2"></span><br><span x-text="esraContact(lang).c5l3"></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- COMMUNITY --}}
    <section class="container-esra pt-6.5">
        <div class="grid gap-5.5 rounded-lg bg-[#0a2456] px-7 py-6.5 sm:grid-cols-[1fr_0.62fr_0.62fr]">
            <div class="flex flex-col items-start">
                <h2 class="text-[23px] font-extrabold leading-[1.3] text-white">
                    <span x-text="esraContact(lang).joinT1"></span><br>
                    <span x-text="esraContact(lang).joinT2"></span> <span class="text-[#25d366]">WhatsApp</span> <span x-text="esraContact(lang).joinAnd"></span> <span class="text-[#37a8e0]">Telegram</span>!
                </h2>
                <p class="mt-4 max-w-[330px] text-[13px] leading-[1.85] text-[#bcd0ef]" x-text="esraContact(lang).joinBody"></p>
                <div class="mt-4.5 flex flex-col gap-2.5">
                    <template x-for="(b, i) in esraContact(lang).jbs" :key="i">
                        <span class="flex items-center gap-2.5 text-[13px] text-[#e6edfa]">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#f0b429" stroke-width="1.7" class="flex-none"><circle cx="12" cy="12" r="9"></circle><path d="m8.5 12.5 2.4 2.4 4.6-5"></path></svg>
                            <span x-text="b"></span>
                        </span>
                    </template>
                </div>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-lg border border-[#1c4a97] bg-[#0d2c66] px-5 py-5.5">
                <span class="flex h-[54px] w-[54px] items-center justify-center rounded-full bg-[#25a862]"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.7" stroke-linecap="round"><path d="M21 11.5a8.4 8.4 0 0 1-12.4 7.4L3 21l2.2-5.5A8.4 8.4 0 1 1 21 11.5Z"></path></svg></span>
                <h3 class="text-[15.5px] font-extrabold text-[#25d366]" x-text="esraContact(lang).waCard"></h3>
                <p class="text-center text-[12.5px] leading-[1.75] text-[#bcd0ef]" x-text="esraContact(lang).waBody"></p>
                <a href="https://wa.me/60123456789" target="_blank" rel="noopener" class="mt-auto flex w-full items-center justify-center gap-2 rounded bg-[#25a862] px-3 py-2.5 text-[13px] font-bold tracking-[0.04em] text-white transition hover:bg-[#1c8c50]">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round"><path d="M21 11.5a8.4 8.4 0 0 1-12.4 7.4L3 21l2.2-5.5A8.4 8.4 0 1 1 21 11.5Z"></path></svg>JOIN WHATSAPP
                </a>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-lg border border-[#1c4a97] bg-[#0d2c66] px-5 py-5.5">
                <span class="flex h-[54px] w-[54px] items-center justify-center rounded-full bg-[#2b93d6]"><svg width="26" height="26" viewBox="0 0 24 24" fill="#fff"><path d="M21.5 4.3 2.9 11.2c-.9.3-.9.9-.2 1.1l4.5 1.4 1.7 5.2c.2.6.4.7 1 .3l2.6-1.9 4.4 3.3c.8.4 1.3.2 1.5-.8l2.7-12.6c.2-1.1-.4-1.6-1.6-1.2Zm-3.1 3.1-7 6.4-.3 3.1-1.3-4 8.1-5.9c.4-.3.8-.1.5.4Z"></path></svg></span>
                <h3 class="text-[15.5px] font-extrabold text-[#37a8e0]" x-text="esraContact(lang).tgCard"></h3>
                <p class="text-center text-[12.5px] leading-[1.75] text-[#bcd0ef]" x-text="esraContact(lang).tgBody"></p>
                <a href="https://t.me/" target="_blank" rel="noopener" class="mt-auto flex w-full items-center justify-center gap-2 rounded bg-[#2b93d6] px-3 py-2.5 text-[13px] font-bold tracking-[0.04em] text-white transition hover:bg-[#217ab4]">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="#fff"><path d="M21.5 4.3 2.9 11.2c-.9.3-.9.9-.2 1.1l4.5 1.4 1.7 5.2c.2.6.4.7 1 .3l2.6-1.9 4.4 3.3c.8.4 1.3.2 1.5-.8l2.7-12.6c.2-1.1-.4-1.6-1.6-1.2Z"></path></svg>JOIN TELEGRAM
                </a>
            </div>
        </div>
    </section>

    {{-- MAP CARD --}}
    <section class="container-esra pb-8 pt-5">
        <a href="https://maps.google.com/?q=ESRA+Tower,+Jalan+Impian,+50250+Kuala+Lumpur" target="_blank" rel="noopener"
           class="relative flex flex-col overflow-hidden rounded-lg border border-border no-underline transition duration-300 hover:-translate-y-1.5 hover:border-navy hover:shadow-[0_22px_40px_rgba(6,58,145,0.16)] sm:flex-row">
            <div class="flex min-h-[160px] flex-1 items-center justify-center bg-gradient-to-br from-[#eaf0fb] to-surface sm:min-h-[200px]">
                <span class="font-serif text-4xl font-extrabold text-navy/15">MAP</span>
            </div>
            <div class="flex items-start gap-3 p-6 sm:w-[44%]">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#063A91" stroke-width="1.7" class="mt-0.5 flex-none"><path d="M12 21s6-5.5 6-10a6 6 0 1 0-12 0c0 4.5 6 10 6 10Z"></path><circle cx="12" cy="11" r="2"></circle></svg>
                <div class="flex flex-col items-start gap-2.5">
                    <span class="text-[13px] font-semibold text-body" x-text="esraContact(lang).mapKicker"></span>
                    <h3 class="font-extrabold text-navy">ESRA Tower, Kuala Lumpur</h3>
                    <span class="inline-flex items-center gap-2 rounded border border-navy px-3.5 py-2 text-[13px] font-bold text-navy">
                        <span x-text="esraContact(lang).mapCta"></span>
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M7 17 17 7M9 7h8v8"></path></svg>
                    </span>
                </div>
            </div>
        </a>
    </section>

    @include('partials.footer')

</body>
</html>
