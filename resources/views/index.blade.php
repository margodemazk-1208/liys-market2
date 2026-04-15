<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liy's Market | Solusi Kebutuhan Digital Premium</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('asset/img/logo/favicon.ico') }}?v=1.1">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-lavender: #C8B7E8;
            --accent-babyblue: #A7C7E7;
            --neutral-grey: #D9D9D9;
            --neutral-white: #FFFFFF;
            --detail-violet: #9B8FCF;
            --soft-pink: #F2D7E0;
            --bg-body: #FBFBFF;
        }

        /* Biar scroll-nya beneran smooth secara global */
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-body);
            color: #4A4A4A;
        }

        .bg-soft-gradient {
            background: linear-gradient(135deg, var(--primary-lavender) 0%, var(--accent-babyblue) 100%);
        }

        .glass-nav {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px);
        }

        .tab-active {
            background-color: var(--primary-lavender) !important;
            color: var(--neutral-white) !important;
        }

        .card-shadow {
            box-shadow: 0 10px 25px -5px rgba(200, 183, 232, 0.2);
        }

        .modal-blur {
            background: rgba(155, 143, 207, 0.1);
            backdrop-filter: blur(10px);
        }

        .product-card:hover {
            border-color: var(--accent-babyblue) !important;
        }

        .status-badge {
            background-color: var(--soft-pink);
            color: #A37F8F;
        }

        /* Jarak scroll biar gak kepotong navbar */
        .scroll-mt {
            scroll-margin-top: 100px;
        }

        /* Styling buat link yang lagi aktif */
        .nav-active {
            color: var(--primary-lavender) !important;
            border-bottom: 2px solid var(--primary-lavender);
        }

        .nav-link {
            cursor: pointer;
        }

        /* Custom scrollbar buat modal biar tetep cantik */
        .p-8::-webkit-scrollbar {
            width: 6px;
        }

        .p-8::-webkit-scrollbar-track {
            background: transparent;
        }

        .p-8::-webkit-scrollbar-thumb {
            background: var(--primary-lavender);
            border-radius: 10px;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body>

    <nav class="sticky top-0 z-50 glass-nav border-b border-purple-50">
        <div class="max-w-6xl mx-auto px-4 h-20 flex justify-between items-center">
            <div class="text-xl md:text-2xl font-bold italic" style="color: var(--primary-lavender);">
                Liy's <span style="color: var(--neutral-grey);">Market</span>
            </div>
            <div class="flex space-x-4 md:space-x-8 text-[10px] md:text-sm font-semibold">
                <a href="#" id="nav-home" class="nav-link pb-1 transition-all duration-300">Home</a>
                <a href="#product-list" id="nav-product" class="nav-link pb-1 transition-all duration-300 text-slate-500 hover:text-purple-400">Price List</a>
                <a href="#contact-support" id="nav-contact" class="nav-link pb-1 transition-all duration-300 text-slate-500 hover:text-purple-400">Support</a>
            </div>
        </div>
    </nav>

    <header class="max-w-6xl mx-auto px-6 py-16 flex flex-col md:flex-row items-center justify-between">
        <div class="md:w-1/2 text-left">
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight mb-6">
                Solusi Kebutuhan Digital <br>
                <span style="color: var(--primary-lavender);">Tercepat & Terpercaya.</span>
            </h1>
            <p class="text-slate-500 text-lg mb-8 leading-relaxed">
                Top Up Game, Apps Premium, dan Kebutuhan Digital Lainnya <br> dalam satu genggaman.
            </p>
            <a href="#product-list" class="inline-block bg-soft-gradient text-white px-10 py-4 rounded-2xl font-bold text-lg hover:scale-105 transition-transform text-center" style="box-shadow: 0 10px 25px -5px rgba(200, 183, 232, 0.3);">
                Order Sekarang
            </a>
        </div>
        <div class="md:w-1/2 mt-12 md:mt-0 flex justify-center">
            <img src="{{ asset('asset/img/hero/finalhero.png')}}" class="md:w-100 flex justify-center" alt="Hero Illustration">
        </div>
    </header>

    <div class="max-w6xl mx-auto px-6 mb-12 flex justify-center">
        <div class="flex bg-white p-2 rounded-2xl shadow-sm border overflow-x-auto whitespace-nowrap max-w-full no-scrollbar" style="border-color: var(--neutral-grey);">
            <button onclick="filterProduct('All', this)" class="category-btn px-6 md:px-8 py-3 rounded-xl font-bold text-xs md:text-sm tab-active">All</button>
            <button onclick="filterProduct('Top Up Game', this)" class="category-btn px-6 md:px-8 py-3 rounded-xl font-bold text-xs md:text-sm text-slate-400 hover:bg-slate-50 transition">Games</button>
            <button onclick="filterProduct('Streaming', this)" class="category-btn px-6 md:px-8 py-3 rounded-xl font-bold text-xs md:text-sm text-slate-400 hover:bg-slate-50 transition">Streaming</button>
            <button onclick="filterProduct('Editor Apps', this)" class="category-btn px-6 md:px-8 py-3 rounded-xl font-bold text-xs md:text-sm text-slate-400 hover:bg-slate-50 transition">Editors</button>
            <button onclick="filterProduct('AI', this)" class="category-btn px-6 md:px-8 py-3 rounded-xl font-bold text-xs md:text-sm text-slate-400 hover:bg-slate-50 transition">AI Apps</button>
            <button onclick="filterProduct('Sosial Media', this)" class="category-btn px-6 md:px-8 py-3 rounded-xl font-bold text-xs md:text-sm text-slate-400 hover:bg-slate-50 transition">Sosial Media</button>
        </div>
    </div>

    <main id="product-list" class="max-w-6xl mx-auto px-6 pb-24 scroll-mt">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            @foreach($products as $product)
            <div class="product-item product-card bg-white p-6 rounded-[2.5rem] card-shadow border border-white transition-all cursor-pointer group text-center"
                style="border-color: var(--neutral-white);"
                data-category="{{ $product['category'] }}"
                data-name="{{ $product['name'] }}"
                data-label="{{ $product['input_label'] }}"
                data-is_double="{{isset($product['is_double']) && $product['is_double'] ? '1' : '0'}}"
                data-label2="{{ $product['input_label2'] ?? '' }}"
                data-variants='@json($product['variants'] ?? [])'
                onclick="openOrder(this)">

                <div class="aspect-square bg-white rounded-3xl mb-4 overflow-hidden shadow-inner">
                    <img src="{{ $product['image'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform" alt="{{ $product['name'] }}">
                </div>
                <h3 class="font-bold text-slate-800 text-lg mb-3">{{ $product['name'] }}</h3>
                <span class="status-badge inline-block text-[10px] font-bold px-4 py-2 rounded-full ">
                    Order Now!
                </span>
            </div>
            @endforeach
        </div>
    </main>

    <div id="orderModal" class="fixed inset-0 z- hidden flex items-center justify-center px-4 modal-blur">
        <div class="absolute inset-0" onclick="closeModal()"></div>
        <div class="relative bg-white w-full max-w-lg rounded-[2.5rem] shadow-2xl overflow-hidden transform transition-all border border-white flex flex-col max-h-[60vh]">
            <div class="p-8 overflow-y-auto">
                <div class="flex justify-between items-center mb-8 border-b pb-4" style="border-color: var(--neutral-grey);">
                    <div class="w-10"></div>
                    <h3 id="modalTitle" class="text-xl font-bold text-slate-800">Pesan Product</h3>
                    <button onclick="closeModal()" class="text-slate-300 hover:text-slate-500 text-3xl">&times;</button>
                </div>

                <form id="whatsappForm" onsubmit="sendToWhatsapp(event)">
                    <input type="hidden" id="productName">

                    <div class="relative bg-white w-full max-w-lg rounded-[2.5rem] overflow-hidden transform transition-all border border-white flex flex-col max-h-[60vh]">
                        <div class="p-6 md:p-8 overflow-y-auto">
                            <div class="pb-5">
                                <div class="mb-1">
                                    <label id="inputLabel" class="block text-sm font-bold text-slate-700 mb-3">Masukkan User ID</label>
                                    <div class="flex flex-col gap-3">
                                        <input type="text" id="userID" required
                                            class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-purple-300 focus:bg-white transition"
                                            placeholder="Username">

                                        <input type="text" id="zoneID"
                                            class="hidden w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-purple-300 focus:bg-white transition"
                                            placeholder="Zone">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <label class="block text-sm font-bold text-slate-700 mb-3">Pilih Nominal</label>
                        <div id="variantContainer" class="grid grid-cols-2 gap-3"></div>
                        <input type="hidden" id="selectedVariant" required>
                    </div>

                    <button type="submit"
                        class="w-full py-5 bg-soft-gradient text-white font-bold rounded-[1.5rem] shadow-xl flex items-center justify-center space-x-3 hover:opacity-90 transition bottom-0 bg-white">
                        <span>Order Sekarang</span>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div id="contact-support" class="max-w-4xl mx-auto px-6 py-16 text-center border-t border-slate-100 scroll-mt">
        <div class="flex flex-col items-center space-y-6">
            <h4 class="font-bold text-slate-800 text-xl pb-2 px-8" style="border-bottom: 2px solid var(--detail-violet);">Contact & Support</h4>
            <div class="space-y-2 text-slate-500 text-sm font-medium">
                <p> 0877-9220-0900</p>
                <p> Jam Operasional: 09.00 - 21.00 WIB</p>
            </div>
            <div class="flex space-x-4">
                <a href="https://t.me/liysmarkett" target="_blank" class="w-24 h-10 rounded-xl flex items-center justify-center text-sm font-semibold status-badge">Telegram</a>
                <a href="https://tiktok.com/@liysmarkett" target="_blank" class="w-24 h-10 rounded-xl flex items-center justify-center text-sm font-semibold status-badge">Tiktok</a>
            </div>
        </div>
    </div>

    <script>
        const modal = document.getElementById('orderModal');
        let currentSelectedBtn = null;
        // Fungsi buat ngatur link mana yang aktif
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = [{
                id: 'home',
                element: document.querySelector('header')
            },
            {
                id: 'nav-product',
                element: document.querySelector('#product-list')
            },
            {
                id: 'nav-contact',
                element: document.querySelector('#contact-support')
            }
        ];

        window.addEventListener('scroll', () => {
            let current = '';

            // Cek posisi scroll sekarang
            sections.forEach(section => {
                if (section.element) {
                    const sectionTop = section.element.offsetTop;
                    if (pageYOffset >= sectionTop - 150) {
                        current = section.id;
                    }
                }
            });

            // Hapus semua class active dulu, baru pasang ke yang bener
            navLinks.forEach(link => {
                link.classList.remove('nav-active');
                link.classList.add('text-slate-500'); // balikin warna abu-abu

                if (link.id === current || (current === 'home' && link.id === 'nav-home')) {
                    link.classList.add('nav-active');
                    link.classList.remove('text-slate-500');
                }
            });
        });

        // Fix link Home biar pas diklik balik ke paling atas
        document.getElementById('nav-home').addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // FUNGSI FILTER (Sekarang diluar, biar bisa dipanggil kapan aja)
        function filterProduct(category, btn) {
            // Reset semua tombol
            document.querySelectorAll('.category-btn').forEach(b => {
                b.classList.remove('tab-active');
                b.classList.add('text-slate-400');
            });

            // Aktifin tombol yang diklik
            btn.classList.add('tab-active');
            btn.classList.remove('text-slate-400');

            // Saring item
            const items = document.querySelectorAll('.product-item');
            items.forEach(item => {
                if (category === 'All' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        function openOrder(el) {
            const name = el.dataset.name;
            const label = el.dataset.label;
            const isDouble = el.dataset.is_double === "1";
            const label2 = el.dataset.label2 || "";
            const variants = JSON.parse(el.dataset.variants);

            const input1 = document.getElementById('userID');
            input1.placeholder = label;

            document.getElementById('modalTitle').innerText = "Pesan " + name;
            document.getElementById('productName').value = name;
            document.getElementById('inputLabel').innerText = isDouble ? `${label} & ${label2}` : label;


            const input2 = document.getElementById('zoneID');
            if (isDouble) {
                input2.classList.remove('hidden');
                input2.setAttribute('required', 'required');
                input2.placeholder = label2;
            } else {
                input2.classList.add('hidden');
                input2.removeAttribute('required');
            }

            const variantContainer = document.getElementById('variantContainer');
            variantContainer.innerHTML = '';

            variants.forEach(variant => {
                const btn = document.createElement('button');
                btn.type = 'button';
                btn.className = "flex items-center space-x-2 p-4 bg-slate-50 rounded-xl text-xs font-bold text-slate-700 transition cursor-pointer text-left border border-slate-200";
                btn.innerHTML = `<span style="color: var(--primary-lavender);"></span> <span>${variant.name} - ${variant.price}</span>`;

                btn.onclick = () => {
                    if (currentSelectedBtn) {
                        currentSelectedBtn.style.borderColor = "#E2E8F0";
                        currentSelectedBtn.style.backgroundColor = "#F8FAFC";
                    }
                    btn.style.borderColor = "var(--accent-babyblue)";
                    btn.style.backgroundColor = "rgba(200, 183, 232, 0.1)";
                    currentSelectedBtn = btn;
                    document.getElementById('selectedVariant').value = `${variant.name} (${variant.price})`;
                };
                variantContainer.appendChild(btn);
            });
            modal.classList.remove('hidden');
        }

        function closeModal() {
            modal.classList.add('hidden');
            currentSelectedBtn = null;
        }

        function sendToWhatsapp(event) {
            event.preventDefault();
            const product = document.getElementById('productName').value;
            const id = document.getElementById('userID').value;
            const nominal = document.getElementById('selectedVariant').value;
            const zone = document.getElementById('zoneID').value; // Ambil nilai zone
            const fullID = zone ? `${id} (${zone})` : id;

            if (!nominal) return alert("Pilih nominal dulu!");

            const message = `Halo Admin Liy's Market! 💜%0A%0ASaya mau order layanan digital:%0A--------------------------------%0A*Produk* : ${product}%0A*Nominal*: ${nominal}%0A*Data ID*: ${fullID}%0A--------------------------------%0AMohon info instruksi pembayarannya ya!`;
            window.open(`https://wa.me/6287792200900?text=${message}`, '_blank');
        }

        // SMOOTH SCROLL (Diluar fungsi lain)
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                e.preventDefault();
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>

</html>