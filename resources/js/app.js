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

const ESRA_ABOUT = {
    bm: {
        aboutKicker: 'TENTANG ESRA GROUP',
        aboutTitle1: 'Membina Tanah. Mencipta Nilai.', aboutTitle2: 'Membentuk Komuniti.',
        aboutP1: 'ESRA GROUP merupakan kumpulan syarikat yang memberi fokus kepada tanah, hartanah, pembangunan dan perkhidmatan berkaitan pembangunan.',
        aboutP2: 'Kami melihat setiap tanah bukan sekadar aset, tetapi sebagai satu peluang untuk mencipta nilai, pembangunan dan pertumbuhan jangka panjang.',
        aboutP3: 'Melalui pendekatan yang strategik, ESRA menghubungkan keseluruhan ekosistem hartanah — daripada pengenalpastian tanah, acquisition dan Joint Venture (JV), kajian kebolehlaksanaan, perancangan pembangunan, pembangunan projek sehingga pemasaran dan pengurusan hartanah.',
        aboutP4: 'ESRA dibangunkan dengan matlamat untuk menjadi sebuah organisasi yang bukan sekadar membangunkan projek, tetapi turut membina hubungan jangka panjang dengan pemilik tanah, pembeli, pelabur, rakan strategik dan komuniti.',
        aboutP5: 'Kami percaya pembangunan yang baik perlu menghasilkan nilai kepada semua pihak — pemilik tanah, pelanggan, pelabur, komuniti dan generasi akan datang.',
        visionKicker: 'VISI KAMI', visionTitle: 'Membina Nilai Yang Kekal.',
        visionP1: 'Menjadi sebuah kumpulan pembangunan tanah dan hartanah yang dipercayai, progresif dan mampan, serta dikenali kerana keupayaan kami mengenal pasti potensi tanah dan menukarkannya kepada pembangunan yang memberi nilai jangka panjang.',
        visionP2: 'Kami bercita-cita membina ESRA sebagai sebuah integrated property and development group yang mempunyai portfolio tanah, projek dan aset di seluruh Malaysia.',
        missionKicker: 'MISI KAMI',
        mission: [
            { t: 'Buka Potensi Tanah', b: 'Mengenal pasti dan membuka potensi tanah melalui kajian, perancangan dan strategi pembangunan yang tepat.' },
            { t: 'Cipta Nilai Yang Mampan', b: 'Membangunkan projek yang memberi nilai ekonomi dan manfaat jangka panjang kepada pemilik tanah, pelanggan, pelabur dan komuniti.' },
            { t: 'Bina Kerjasama Dipercayai', b: 'Membina hubungan dan kerjasama jangka panjang bersama pemilik tanah, rakan strategik, profesional, kontraktor dan pelabur.' },
            { t: 'Hasilkan Pembangunan Berkualiti', b: 'Mengurus dan membangunkan projek secara profesional dengan memberi perhatian kepada kualiti, perancangan, kos dan pelaksanaan.' },
            { t: 'Bina Ekosistem Tanah & Hartanah Yang Kukuh', b: 'Membina ekosistem ESRA yang menghubungkan tanah, hartanah, pembangunan, konsultansi, pelaburan dan perkhidmatan berkaitan.' },
            { t: 'Bina Untuk Generasi Akan Datang', b: 'Mewujudkan pembangunan dan aset yang mampu terus memberikan nilai kepada komuniti dan generasi akan datang.' },
        ],
        purposeKicker: 'TUJUAN KAMI',
        purposeTitle1: 'Menukar Tanah Kepada Peluang.', purposeTitle2: 'Menukar Peluang Kepada Nilai.',
        purposeP1: 'Tujuan ESRA adalah untuk membantu tanah mencapai potensi terbaiknya dan menghasilkan pembangunan yang mempunyai nilai sebenar.',
        purposeP2: 'Kami mahu menjadi jambatan antara:',
        promiseKicker: 'JANJI BRAND KAMI', promiseTitle: 'Profesional. Dipercayai. Progresif.',
        promiseSub: 'Setiap projek ESRA dibangunkan berdasarkan tiga prinsip utama:',
        promise: [
            { t: 'Profesional', b: 'Mengurus setiap peluang dan projek dengan sistem, struktur dan disiplin yang profesional.' },
            { t: 'Dipercayai', b: 'Menjaga amanah pemilik tanah, pelanggan, pelabur dan rakan kerjasama.' },
            { t: 'Progresif', b: 'Sentiasa mencari pendekatan, peluang dan model pembangunan yang lebih baik.' },
        ],
        coKicker: 'KUMPULAN SYARIKAT ESRA',
        companies: [
            { name: 'ESRA HARTANAH', b: 'Jualan, Pemasaran & Pelaburan Hartanah' },
            { name: 'ESRA PROPERTY', b: 'Pengurusan Hartanah, Aset & Projek' },
            { name: 'ESRA DEVELOPMENT', b: 'Pembangunan Tanah & Hartanah' },
            { name: 'ESRA LAND CONSULTING', b: 'Nasihat Tanah, Kebolehlaksanaan & Konsultansi Pembangunan' },
        ],
        bannerL1: 'Kami bukan sekadar membangunkan tanah.', bannerL2: 'Kami mencipta nilai, peluang dan komuniti untuk generasi akan datang.',
    },
    en: {
        aboutKicker: 'ABOUT ESRA GROUP',
        aboutTitle1: 'Building Land. Creating Value.', aboutTitle2: 'Shaping Communities.',
        aboutP1: 'ESRA GROUP is a group of companies focused on land, property, development and development-related services.',
        aboutP2: 'We see every piece of land not merely as an asset, but as an opportunity to create value, development and long-term growth.',
        aboutP3: 'Through a strategic approach, ESRA connects the entire property ecosystem — from land identification, acquisition and Joint Venture (JV), feasibility studies, development planning and project delivery through to property marketing and management.',
        aboutP4: 'ESRA was built with the aim of becoming an organisation that does more than develop projects — one that builds long-term relationships with landowners, buyers, investors, strategic partners and communities.',
        aboutP5: 'We believe good development must create value for every party — the landowner, the customer, the investor, the community and the generations to come.',
        visionKicker: 'OUR VISION', visionTitle: 'To Build Value That Lasts.',
        visionP1: 'To be a trusted, progressive and sustainable land and property development group, known for our ability to identify land potential and convert it into development that delivers long-term value.',
        visionP2: 'We aim to build ESRA into an integrated property and development group with a portfolio of land, projects and assets across Malaysia.',
        missionKicker: 'OUR MISSION',
        mission: [
            { t: 'Unlock Land Potential', b: 'Identifying and unlocking land potential through research, planning and the right development strategy.' },
            { t: 'Create Sustainable Value', b: 'Delivering projects that create economic value and long-term benefit for landowners, customers, investors and communities.' },
            { t: 'Build Trusted Partnerships', b: 'Building long-term relationships with landowners, strategic partners, professionals, contractors and investors.' },
            { t: 'Deliver Quality Developments', b: 'Managing and developing projects professionally with attention to quality, planning, cost and execution.' },
            { t: 'Grow a Strong Land & Property Ecosystem', b: 'Building an ESRA ecosystem that connects land, property, development, consultancy, investment and related services.' },
            { t: 'Build for Future Generations', b: 'Creating developments and assets that keep delivering value to the community and the generations to come.' },
        ],
        purposeKicker: 'OUR PURPOSE',
        purposeTitle1: 'Turning Land Into Opportunity.', purposeTitle2: 'Turning Opportunity Into Value.',
        purposeP1: 'ESRA exists to help land reach its best potential and produce development that carries real value.',
        purposeP2: 'We want to be the bridge between:',
        promiseKicker: 'OUR BRAND PROMISE', promiseTitle: 'Professional. Trusted. Progressive.',
        promiseSub: 'Every ESRA project is built on three core principles:',
        promise: [
            { t: 'Professional', b: 'Managing every opportunity and project with system, structure and professional discipline.' },
            { t: 'Trusted', b: 'Safeguarding the trust of landowners, customers, investors and partners.' },
            { t: 'Progressive', b: 'Always seeking better approaches, opportunities and development models.' },
        ],
        coKicker: 'ESRA GROUP OF COMPANIES',
        companies: [
            { name: 'ESRA HARTANAH', b: 'Property Sales, Marketing & Investment' },
            { name: 'ESRA PROPERTY', b: 'Property, Asset & Project Management' },
            { name: 'ESRA DEVELOPMENT', b: 'Land & Property Development' },
            { name: 'ESRA LAND CONSULTING', b: 'Land Advisory, Feasibility & Development Consultancy' },
        ],
        bannerL1: "We don't just develop land.", bannerL2: 'We create value, opportunities and communities for generations.',
    },
};

window.esraAbout = (lang) => ESRA_ABOUT[lang];

document.addEventListener('alpine:init', () => {
    Alpine.data('esraLang', () => ({
        lang: localStorage.getItem('esra_lang') || 'bm',
        setLang(l) {
            this.lang = l;
            localStorage.setItem('esra_lang', l);
        },
    }));

    Alpine.data('esraMissionPin', (count = 6) => ({
        active: 0,
        init() {
            const track = this.$el;
            const onScroll = () => {
                const rect = track.getBoundingClientRect();
                const vh = window.innerHeight;
                const total = rect.height - vh;
                if (total <= 0) {
                    this.active = 0;
                    return;
                }
                const scrolled = Math.max(0, Math.min(-rect.top, total));
                const p = scrolled / total;
                this.active = Math.min(count - 1, Math.floor(p * count));
            };
            window.addEventListener('scroll', onScroll, { passive: true });
            window.addEventListener('resize', onScroll);
            onScroll();
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
