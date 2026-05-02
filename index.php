<!DOCTYPE html>

<html lang="pt-br"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-container-highest": "#d3e4fe",
                        "primary-container": "#14b8a6",
                        "inverse-surface": "#213145",
                        "surface-container-high": "#dce9ff",
                        "surface-variant": "#d3e4fe",
                        "surface": "#f8f9ff",
                        "secondary": "#9d4300",
                        "primary": "#006b5f",
                        "surface-container": "#e5eeff",
                        "outline": "#6c7a77",
                        "surface-variant": "#d3e4fe",
                        "background": "#f8f9ff",
                        "tertiary": "#006e2f",
                        "on-surface": "#0b1c30",
                        "secondary-container": "#fd761a",
                        "on-primary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "on-background": "#0b1c30"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "sm": "12px",
                        "xs": "4px",
                        "md": "16px",
                        "lg": "24px",
                        "container-max": "1280px",
                        "base": "8px",
                        "gutter": "24px",
                        "xl": "32px"
                    },
                    "fontFamily": {
                        "headline-lg": ["Plus Jakarta Sans"],
                        "label-sm": ["Plus Jakarta Sans"],
                        "headline-xl": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "label-md": ["Plus Jakarta Sans"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "label-sm": ["12px", {"lineHeight": "16px", "fontWeight": "500"}],
                        "headline-xl": ["40px", {"lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600"}],
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                        "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8f9ff;
        }
    </style>
</head>
<body class="bg-surface text-on-surface">
<!-- TopNavBar -->
<header class="fixed top-0 w-full z-50 bg-white/90 backdrop-blur-md border-b border-slate-100 shadow-sm shadow-teal-900/5">
<div class="flex justify-between items-center h-16 px-6 lg:px-12 max-w-7xl mx-auto">
<div class="text-xl font-extrabold text-teal-600 tracking-tight">TodoMeuPet</div>
<nav class="hidden md:flex items-center gap-8">
<a class="text-teal-600 border-b-2 border-teal-500 pb-1 font-plus-jakarta text-sm font-medium" href="#">Home</a>
<a class="text-slate-600 hover:text-teal-500 transition-all font-plus-jakarta text-sm font-medium" href="#">Pet Profile</a>
<a class="text-slate-600 hover:text-teal-500 transition-all font-plus-jakarta text-sm font-medium" href="#">Pricing</a>
<a class="text-slate-600 hover:text-teal-500 transition-all font-plus-jakarta text-sm font-medium" href="#">About</a>
</nav>
<div class="flex items-center gap-4">
<button class="hidden sm:block text-slate-600 hover:text-teal-500 font-medium text-sm transition-all active:scale-95">Login</button>
<button class="bg-primary-container text-white px-5 py-2 rounded-lg font-medium text-sm hover:bg-teal-600 transition-all active:scale-95 shadow-lg shadow-teal-500/20">Sign Up</button>
</div>
</div>
</header>
<main class="pt-16">
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-teal-50 via-white to-orange-50 py-20 lg:py-32">
<div class="max-w-7xl mx-auto px-6 lg:px-12 grid lg:grid-cols-2 gap-12 items-center">
<div class="z-10">
<span class="inline-block py-1 px-3 rounded-full bg-teal-100 text-teal-700 text-label-sm mb-6">Inovação em Proteção Pet</span>
<h1 class="font-headline-xl text-headline-xl text-on-surface mb-6 leading-tight">
                        Garanta a segurança do seu melhor amigo
                    </h1>
<p class="font-body-lg text-body-lg text-outline mb-8 max-w-lg">
                        Identificação inteligente por QR Code, histórico de saúde digital e alertas de cuidados essenciais. Tudo o que seu pet precisa em um só lugar.
                    </p>
<div class="flex flex-col sm:flex-row gap-4">
<button class="bg-primary-container text-white px-8 py-4 rounded-xl font-headline-md text-body-md hover:shadow-xl transition-all active:scale-95">
                            Começar Agora
                        </button>
<button class="border-2 border-primary-container text-primary text-body-md font-label-md px-8 py-4 rounded-xl hover:bg-teal-50 transition-all">
                            Como funciona?
                        </button>
</div>
</div>
<div class="relative lg:h-[500px]">
<div class="absolute inset-0 bg-teal-200/20 rounded-3xl rotate-3 -z-10"></div>
<img class="w-full h-full object-cover rounded-3xl shadow-2xl" data-alt="A professional, high-quality portrait of a happy Golden Retriever sitting in a sun-drenched modern living room. The dog is looking directly at the camera with a gentle expression, wearing a stylish teal collar. The lighting is soft and warm, reflecting a bright and trustworthy domestic atmosphere. The overall aesthetic is clean and minimalist, aligning with a premium pet care brand identity using a palette of soft teals and whites." src="https://lh3.googleusercontent.com/aida-public/AB6AXuASG7EV4HwZ4iZomuBjxszdNcligmZzdzlp6Y2cu_PJ2LenPd7qGVT7pHR3QVi9gARRtpSsD3XUJtncvjsJMaEzvuZEeZ0p4IWVo7PkQh2EZO8sinRyPL4m3I2Y5Lx9xKt3TP9vrbUA9TodZAQc4BT_SXiArWBbOwdaI-QBj_hqauD-liYzd8nQz1Ll0vE7Xt-638hkk6jJiCpmi8MuQ4nD7rvtFPvOqzCzoM6_0VcUGGQNMkm3auVuR7QA7jo9CqtUC0OCAf3WQ-UZ"/>
</div>
</div>
</section>
<!-- Benefits Bento Grid -->
<section class="py-20 bg-surface">
<div class="max-w-7xl mx-auto px-6 lg:px-12">
<div class="text-center mb-16">
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-4">Cuidado completo e inteligente</h2>
<p class="font-body-md text-body-md text-outline">Tecnologia desenhada para quem ama de verdade.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- QR Card -->
<div class="md:col-span-2 bg-white p-8 rounded-3xl shadow-sm hover:shadow-md transition-all border-t-4 border-primary-container">
<div class="flex flex-col md:flex-row gap-8 items-center">
<div class="flex-1">
<span class="material-symbols-outlined text-4xl text-primary mb-4">qr_code_scanner</span>
<h3 class="font-headline-md text-headline-md mb-4">Identificação QR Code</h3>
<p class="font-body-md text-outline">Seu pet perdido? Quem encontrar só precisa escanear o pingente para acessar suas informações de contato e localização em tempo real.</p>
</div>
<div class="w-48 h-48 bg-surface-container rounded-2xl flex items-center justify-center p-4">
<img alt="Exemplo QR Code" class="w-full h-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDiOAYpRij0lN1IqV438V8lDAnGfgb9ZMqQrpNORpU3YBpEwKMPXwLLyXRnE0HFW6wqDfN1OwvzAgsxgjOGpck6Dlxf1EyZEZigkwNyZEdUKtINai1Bws70Wk01cSHHZLtOAHRGKncrcvGQBiDqKOAkp9CckE-69LK4t2e9mXv9BxgVEEhgSHAOI4DZ5WWQ2zCphXgrCofQl-53mBEPtaKHIIMihUgd7Gm3CoD9Lf23FBMAsZ5aYIM6KGlktH8WVOwCbPF_8VUbaz6E"/>
</div>
</div>
</div>
<!-- Health History -->
<div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-md transition-all border-t-4 border-secondary-container">
<span class="material-symbols-outlined text-4xl text-secondary mb-4">medical_services</span>
<h3 class="font-headline-md text-headline-md mb-4">Histórico Digital</h3>
<p class="font-body-md text-outline">Vacinas, exames e consultas organizados em uma linha do tempo intuitiva.</p>
</div>
<!-- Alertas -->
<div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-md transition-all border-t-4 border-tertiary">
<span class="material-symbols-outlined text-4xl text-tertiary mb-4">notifications_active</span>
<h3 class="font-headline-md text-headline-md mb-4">Alertas Inteligentes</h3>
<p class="font-body-md text-outline">Nunca mais esqueça a data do vermífugo ou da próxima dose da vacina.</p>
</div>
<!-- User Trust -->
<div class="md:col-span-2 bg-gradient-to-r from-primary to-teal-700 p-8 rounded-3xl shadow-lg text-white flex items-center justify-between">
<div>
<h3 class="font-headline-md text-headline-md mb-2">Comunidade TodoMeuPet</h3>
<p class="text-white/80 font-body-md">Mais de 10.000 pets protegidos em todo o Brasil.</p>
</div>
<div class="flex -space-x-4">
<img class="w-12 h-12 rounded-full border-2 border-white" data-alt="Avatar of a happy pet owner smiling, bright and professional lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB2Y0-Si9aS4GOnMJDIDEF17pCaUxSLUJzCVvHqkPN8cApIc-ng0b3-mWHfamg7pWgfdSMy5SS4CyInFjNsjsd6noSvYInGn9TAR1SFaaAuY4OC7l11yteeTLOpWyNUqJnh82BpEdKnLFp3u_OlbiO6dL1Xnb9kullyB__m0PI0349vtJPdhrVH9GGmV0LtLQDv5ClUE2PmjRh_o6YM_iJBXb8aw0Uxau1iSbUpQu0SyuM7L8_ZV9f7joKp_Gf4bIbXDxLpNTt8saT-"/>
<img class="w-12 h-12 rounded-full border-2 border-white" data-alt="Avatar of a friendly veterinarian in a clean clinic setting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAC8pPFQgE-yF84pa437NEwb7g89W91VcnEzxP7AF-9hiUVQLUcJ3jHkPceLeIGkFwp4rcwAq-LW8XxCwouP4n_hg8Ve-jFG7zG27D05hRVindqwOvXU0p3jKW-tm1-XnkCqaJ-b3kUVU5vKEspda2C3mNE7uFiQ79FNjrpui7Tvtx2siL1Z4WU1gU6ntRG8DA1GVDGKIgQFlfhoRsYnsQfPDbS4rP13CRm8wpQUhmz5bC5jAqrgq4mJKWSbQOtlyt_xy55D8ueGuZo"/>
<img class="w-12 h-12 rounded-full border-2 border-white" data-alt="Avatar of a smiling young woman holding a small kitten." src="https://lh3.googleusercontent.com/aida-public/AB6AXuANanIwk5oSxQIUnfFhgOemvTWZxdxS04YaZ7i8KydnCIn8H8saAeObTKhEUDx8maPtlKTjfPgvKXrB-6lIosfMZz7PPtDa5cQ5IOgh4WdIem6_tRpBqlfo1fn70fi08AFf6kxDZ6nRNIaB2-Fyw4Vx6WdpcgW_wizAb47Tv7LJBeIbiORPYXAlQ0vsrH0jOmq-GRFMKsHLjWwXUnHNzAgz-ok5cD1_Zk0MiZzVpsRobKuP2ZnbIMvKGHoNvlDD2hV_L5JaLhZ78Gn2"/>
</div>
</div>
</div>
</div>
</section>
<!-- Pricing Preview -->
<section class="py-20 bg-slate-50">
<div class="max-w-7xl mx-auto px-6 lg:px-12">
<div class="text-center mb-16">
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-4">Escolha o plano ideal</h2>
<p class="font-body-md text-body-md text-outline">Segurança que cabe no seu bolso.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- Basic -->
<div class="bg-white p-8 rounded-3xl border border-slate-200 flex flex-col items-center text-center">
<span class="text-slate-500 font-label-md mb-4">ESSENCIAL</span>
<div class="font-headline-xl text-headline-xl text-on-surface mb-6">Grátis</div>
<ul class="space-y-4 mb-8 text-left w-full">
<li class="flex items-center gap-2 text-body-md text-outline"><span class="material-symbols-outlined text-primary text-xl">check_circle</span> Perfil Digital Básico</li>
<li class="flex items-center gap-2 text-body-md text-outline"><span class="material-symbols-outlined text-primary text-xl">check_circle</span> QR Code Compartilhável</li>
</ul>
<button class="w-full py-3 rounded-xl border-2 border-slate-200 text-slate-600 font-label-md hover:bg-slate-50 transition-all mt-auto">Começar Grátis</button>
</div>
<!-- Pro -->
<div class="bg-white p-8 rounded-3xl border-2 border-primary-container shadow-xl flex flex-col items-center text-center relative scale-105">
<div class="absolute -top-4 bg-primary-container text-white px-4 py-1 rounded-full text-xs font-bold tracking-wider">MAIS POPULAR</div>
<span class="text-primary font-label-md mb-4">PREMIUM</span>
<div class="font-headline-xl text-headline-xl text-on-surface mb-6">R$ 14,90<span class="text-sm font-normal text-outline">/mês</span></div>
<ul class="space-y-4 mb-8 text-left w-full">
<li class="flex items-center gap-2 text-body-md text-on-surface"><span class="material-symbols-outlined text-primary text-xl">check_circle</span> Alertas de Saúde em Tempo Real</li>
<li class="flex items-center gap-2 text-body-md text-on-surface"><span class="material-symbols-outlined text-primary text-xl">check_circle</span> Carteira de Vacinação Digital</li>
<li class="flex items-center gap-2 text-body-md text-on-surface"><span class="material-symbols-outlined text-primary text-xl">check_circle</span> Geolocalização em Varredura QR</li>
</ul>
<button class="w-full py-4 rounded-xl bg-primary-container text-white font-label-md hover:bg-teal-600 transition-all shadow-lg shadow-teal-500/20 mt-auto">Assinar Agora</button>
</div>
<!-- Family -->
<div class="bg-white p-8 rounded-3xl border border-slate-200 flex flex-col items-center text-center">
<span class="text-slate-500 font-label-md mb-4">FAMÍLIA</span>
<div class="font-headline-xl text-headline-xl text-on-surface mb-6">R$ 29,90<span class="text-sm font-normal text-outline">/mês</span></div>
<ul class="space-y-4 mb-8 text-left w-full">
<li class="flex items-center gap-2 text-body-md text-outline"><span class="material-symbols-outlined text-primary text-xl">check_circle</span> Até 5 pets incluídos</li>
<li class="flex items-center gap-2 text-body-md text-outline"><span class="material-symbols-outlined text-primary text-xl">check_circle</span> Suporte Prioritário 24h</li>
</ul>
<button class="w-full py-3 rounded-xl border-2 border-slate-200 text-slate-600 font-label-md hover:bg-slate-50 transition-all mt-auto">Escolher Família</button>
</div>
</div>
</div>
</section>
<!-- FAQ Section -->
<section class="py-20 bg-white">
<div class="max-w-3xl mx-auto px-6">
<div class="text-center mb-12">
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-4">Perguntas Frequentes</h2>
</div>
<div class="space-y-4">
<details class="group bg-slate-50 rounded-2xl p-6 border border-transparent hover:border-teal-100 transition-all">
<summary class="flex justify-between items-center cursor-pointer list-none font-label-md text-on-surface">
                            Como funciona o pingente de QR Code?
                            <span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
</summary>
<p class="mt-4 text-body-md text-outline leading-relaxed">
                            O pingente possui um código único vinculado ao perfil do seu pet. Quando alguém escaneia o código com a câmera do celular, abre-se uma página segura com os dados que você autorizou mostrar, facilitando o contato imediato.
                        </p>
</details>
<details class="group bg-slate-50 rounded-2xl p-6 border border-transparent hover:border-teal-100 transition-all">
<summary class="flex justify-between items-center cursor-pointer list-none font-label-md text-on-surface">
                            Meus dados estão seguros?
                            <span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
</summary>
<p class="mt-4 text-body-md text-outline leading-relaxed">
                            Sim. Utilizamos criptografia de ponta e você tem controle total sobre quais informações deseja exibir publicamente no perfil do pet.
                        </p>
</details>
<details class="group bg-slate-50 rounded-2xl p-6 border border-transparent hover:border-teal-100 transition-all">
<summary class="flex justify-between items-center cursor-pointer list-none font-label-md text-on-surface">
                            Preciso pagar mensalidade para usar o QR Code?
                            <span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
</summary>
<p class="mt-4 text-body-md text-outline leading-relaxed">
                            Não! O plano Essencial oferece a funcionalidade básica de identificação de forma gratuita vitalícia. Os planos Premium adicionam camadas extras de cuidado e conveniência.
                        </p>
</details>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full border-t bg-slate-50 border-slate-200">
<div class="flex flex-col md:flex-row justify-between items-center py-8 px-6 max-w-7xl mx-auto gap-4">
<div class="flex flex-col gap-2">
<span class="font-bold text-slate-900 text-lg">TodoMeuPet</span>
<span class="font-plus-jakarta text-xs text-slate-500">© 2024 TodoMeuPet. Caring for your family.</span>
</div>
<div class="flex gap-6">
<a class="font-plus-jakarta text-xs text-slate-500 hover:text-teal-500 hover:underline transition-all" href="#">Terms of Service</a>
<a class="font-plus-jakarta text-xs text-slate-500 hover:text-teal-500 hover:underline transition-all" href="#">Privacy Policy</a>
<a class="font-plus-jakarta text-xs text-slate-500 hover:text-teal-500 hover:underline transition-all" href="#">Institutional</a>
<a class="font-plus-jakarta text-xs text-slate-500 hover:text-teal-500 hover:underline transition-all" href="#">Contact Us</a>
</div>
</div>
</footer>
</body></html>