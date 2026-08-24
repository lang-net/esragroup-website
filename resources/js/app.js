import Alpine from 'alpinejs';

window.Alpine = Alpine;

const ESRA_WHY = {
    bm: {
        1: { t: 'Penilaian Potensi Tanah', b: 'Kami menilai potensi sebenar tanah anda berdasarkan lokasi, pasaran dan peraturan semasa.' },
        2: { t: 'Strategi & Perancangan Terbaik', b: 'Menyediakan strategi pembangunan yang sesuai untuk mencapai nilai maksimum.' },
        3: { t: 'Bimbingan Dari A Sampai Z', b: 'Kami guide tuan dari peringkat awal sehingga berlakunya jualan atau projek siap.' },
        4: { t: 'Rangkaian Profesional Yang Luas', b: 'Kerjasama dengan profesional, agensi kerajaan, pelabur, kontraktor dan pihak berkaitan.' },
        5: { t: 'Maksimumkan Nilai Tanah Anda', b: 'Fokus kami adalah untuk meningkatkan nilai tanah dan memberikan hasil yang terbaik.' },
        6: { t: 'Bersama Mencipta Nilai', b: 'Kami percaya pembangunan yang baik memberi manfaat kepada semua pihak dan generasi akan datang.' },
    },
    en: {
        1: { t: 'Land Potential Assessment', b: 'We assess the real potential of your land based on location, market and current regulations.' },
        2: { t: 'Strategy & Best Planning', b: 'We prepare a development strategy suited to achieving maximum value.' },
        3: { t: 'Guidance From A To Z', b: 'We guide you from the earliest stage until the sale happens or the project completes.' },
        4: { t: 'A Wide Professional Network', b: 'Working with professionals, government agencies, investors, contractors and related parties.' },
        5: { t: 'Maximise Your Land Value', b: 'Our focus is raising the value of the land and delivering the best possible return.' },
        6: { t: 'Creating Value Together', b: 'We believe good development benefits every party — and the generations to come.' },
    },
};

const ESRA_PROC = {
    bm: {
        1: { t: 'Hantar Maklumat', b: 'Isi borang dan berikan maklumat aset tanah anda.' },
        2: { t: 'Semakan Awal', b: 'Team ESRA akan membuat semakan lokasi, status dan potensi tanah.' },
        3: { t: 'Kajian & Analisis', b: 'Kami menjalankan feasibility study dan analisis potensi pembangunan.' },
        4: { t: 'Sesi Konsultasi', b: 'Kami bentangkan pilihan terbaik dan strategi yang sesuai untuk tanah anda.' },
        5: { t: 'Roadmap & Pelan Tindakan', b: 'Kami susun pelan tindakan dari A sampai Z mengikut objektif tuan.' },
        6: { t: 'Realisasikan Nilai', b: 'Kami bantu sehingga tercapainya hasil melalui jualan atau pembangunan.' },
    },
    en: {
        1: { t: 'Submit Details', b: 'Fill in the form and give us the details of your land asset.' },
        2: { t: 'Initial Review', b: 'The ESRA team reviews the location, title status and land potential.' },
        3: { t: 'Study & Analysis', b: 'We run a feasibility study and analyse the development potential.' },
        4: { t: 'Consultation Session', b: 'We present the best options and the right strategy for your land.' },
        5: { t: 'Roadmap & Action Plan', b: 'We lay out the plan from A to Z according to your objectives.' },
        6: { t: 'Realise The Value', b: 'We stay on until the result is achieved through sale or development.' },
    },
};

const ESRA_HELP = {
    bm: {
        1: { t: 'Penilaian Potensi & Pasaran', b: 'Menilai potensi tanah, permintaan pasaran dan nilai pembangunan.' },
        2: { t: 'Perancangan Pembangunan', b: 'Susun atur, konsep projek dan cadangan pembangunan yang optimum.' },
        3: { t: 'Urusan Tanah & Perundangan', b: 'Semakan, geran, pecah lot, tukar syarat dan urusan berkaitan tanah.' },
        4: { t: 'Kelulusan & PBT', b: 'Urusan kelulusan perancangan, pelan bangunan dan agensi berkaitan.' },
        5: { t: 'Kajian Kewangan & GDV', b: 'Anggaran kos, potensi GDV, ROI dan analisis kewangan projek.' },
        6: { t: 'Cari Pelabur / JV', b: 'Bantu mencari pelabur atau rakan pembangunan yang sesuai.' },
        7: { t: 'Pembangunan Projek', b: 'Bimbingan dari peringkat pembangunan sehingga projek dilaksanakan.' },
        8: { t: 'Strategi Pemasaran & Jualan', b: 'Strategi pemasaran untuk mendapatkan jualan terbaik.' },
    },
    en: {
        1: { t: 'Potential & Market Assessment', b: 'Assessing land potential, market demand and development value.' },
        2: { t: 'Development Planning', b: 'Layout, project concept and the optimum development proposal.' },
        3: { t: 'Land & Legal Matters', b: 'Searches, titles, subdivision, conversion and related land matters.' },
        4: { t: 'Approvals & Local Authority', b: 'Planning approvals, building plans and dealings with related agencies.' },
        5: { t: 'Financial Study & GDV', b: 'Cost estimates, GDV potential, ROI and project financial analysis.' },
        6: { t: 'Find Investors / JV', b: 'Helping you find the right investor or development partner.' },
        7: { t: 'Project Development', b: 'Guidance from the development stage through to project delivery.' },
        8: { t: 'Marketing & Sales Strategy', b: 'Marketing strategy to secure the best possible sales.' },
    },
};

window.esraWhy = (lang, i) => ESRA_WHY[lang][i];
window.esraProc = (lang, i) => ESRA_PROC[lang][i];
window.esraHelp = (lang, i) => ESRA_HELP[lang][i];

document.addEventListener('alpine:init', () => {
    Alpine.data('esraLang', () => ({
        lang: localStorage.getItem('esra_lang') || 'bm',
        setLang(l) {
            this.lang = l;
            localStorage.setItem('esra_lang', l);
        },
    }));
});

Alpine.start();

const revealEls = document.querySelectorAll('[data-reveal]');
if (revealEls.length) {
    const io = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.setAttribute('data-reveal', 'in');
                    io.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.08 }
    );
    revealEls.forEach((el) => io.observe(el));
}
