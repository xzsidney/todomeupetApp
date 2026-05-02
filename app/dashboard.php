<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>TodoMeuPet - Pet Parent Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                    "surface-bright": "#f8f9ff",
                    "secondary-fixed": "#ffdbca",
                    "primary-fixed": "#71f8e4",
                    "on-tertiary-fixed": "#002109",
                    "surface-dim": "#cbdbf5",
                    "on-secondary-fixed-variant": "#783200",
                    "surface-container-low": "#eff4ff",
                    "error-container": "#ffdad6",
                    "background": "#f8f9ff",
                    "primary-fixed-dim": "#4fdbc8",
                    "tertiary": "#006e2f",
                    "secondary-fixed-dim": "#ffb690",
                    "on-error-container": "#93000a",
                    "error": "#ba1a1a",
                    "on-tertiary-container": "#00441a",
                    "on-error": "#ffffff",
                    "on-primary-fixed": "#00201c",
                    "on-surface-variant": "#3c4947",
                    "inverse-on-surface": "#eaf1ff",
                    "tertiary-fixed": "#6bff8f",
                    "on-secondary-fixed": "#341100",
                    "on-primary-fixed-variant": "#005048",
                    "on-tertiary-fixed-variant": "#005321",
                    "on-surface": "#0b1c30",
                    "secondary-container": "#fd761a",
                    "on-primary": "#ffffff",
                    "surface-tint": "#006b5f",
                    "tertiary-container": "#0ebd57",
                    "on-secondary-container": "#5c2400",
                    "inverse-primary": "#4fdbc8",
                    "on-primary-container": "#00423b",
                    "surface-container-lowest": "#ffffff",
                    "tertiary-fixed-dim": "#4ae176",
                    "on-secondary": "#ffffff",
                    "outline-variant": "#bbcac6",
                    "on-tertiary": "#ffffff",
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
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-surface text-on-surface">
<div class="flex min-h-screen">
<!-- SideNavBar -->
<aside class="h-screen w-64 border-r border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 hidden lg:flex flex-col h-full p-4 gap-2 fixed">
<div class="mb-8 px-4">
<span class="text-lg font-bold text-teal-600">TodoMeuPet</span>
</div>
<div class="mb-6 px-4">
<div class="flex items-center gap-3 mb-1">
<div class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center overflow-hidden border border-primary-container/20">
<img alt="User Profile" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfxgQxKDK_P_XVl-uVnrTHF_STX9aTHbQwKa5Cgmn5aSKNhgTefZ1rkrLyU6zUzA6mzBE4PmjJvKHX9nA4JWELRzNbhysKKfBD_IJa_ORpqX7pTl8Jzzxw9Bm304tFMb9R7Wvy-0owSe_IXG1hl_XWzJ2LjjGqJwQ2705CtRH3lpnlAXWHvrkln3EY4UJpWtikW4XbbGuYhcSSbH8x-zhn68n0IabYDX55saaigCHqOQ8m3eG7RwbzvNTQyZKylMCZzyUgKqJi64tm"/>
</div>
<div>
<p class="font-label-md text-on-surface">Welcome back</p>
<p class="text-xs text-slate-500">Pet Parent</p>
</div>
</div>
</div>
<nav class="flex-1 flex flex-col gap-2">
<a class="bg-teal-50 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg font-semibold px-4 py-3 flex items-center gap-3 active:opacity-80" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                    Dashboard
                </a>
<a class="text-slate-500 dark:text-slate-400 px-4 py-3 flex items-center gap-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-lg hover:translate-x-1 transition-transform duration-200 active:opacity-80" href="#">
<span class="material-symbols-outlined" data-icon="pets">pets</span>
                    My Pets
                </a>
<a class="text-slate-500 dark:text-slate-400 px-4 py-3 flex items-center gap-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-lg hover:translate-x-1 transition-transform duration-200 active:opacity-80" href="#">
<span class="material-symbols-outlined" data-icon="medical_services">medical_services</span>
                    Health Wallet
                </a>
<a class="text-slate-500 dark:text-slate-400 px-4 py-3 flex items-center gap-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-lg hover:translate-x-1 transition-transform duration-200 active:opacity-80" href="#">
<span class="material-symbols-outlined" data-icon="qr_code_scanner">qr_code_scanner</span>
                    QR Management
                </a>
</nav>
<button class="mt-4 mb-8 bg-primary-container text-on-primary font-label-md py-3 px-4 rounded-lg flex items-center justify-center gap-2 shadow-sm hover:opacity-90 transition-all active:scale-95">
<span class="material-symbols-outlined text-[20px]">add_circle</span>
                Register New Pet
            </button>
<div class="border-t border-slate-100 dark:border-slate-800 pt-4 flex flex-col gap-2">
<a class="text-slate-500 dark:text-slate-400 px-4 py-3 flex items-center gap-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-lg hover:translate-x-1 transition-transform duration-200 active:opacity-80" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
                    Settings
                </a>
<a class="text-slate-500 dark:text-slate-400 px-4 py-3 flex items-center gap-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-lg hover:translate-x-1 transition-transform duration-200 active:opacity-80" href="#">
<span class="material-symbols-outlined" data-icon="help_outline">help_outline</span>
                    Support
                </a>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 lg:ml-64 min-h-screen">
<!-- Top Bar -->
<header class="h-16 flex items-center justify-between px-gutter lg:px-xl border-b border-slate-100 bg-white/80 backdrop-blur-md sticky top-0 z-40">
<h1 class="font-headline-md text-on-surface">Dashboard</h1>
<div class="flex items-center gap-md">
<div class="relative group">
<span class="material-symbols-outlined text-slate-500 cursor-pointer hover:text-primary transition-colors">notifications</span>
<span class="absolute top-0 right-0 w-2 h-2 bg-secondary rounded-full border-2 border-white"></span>
</div>
</div>
</header>
<div class="p-gutter lg:p-xl space-y-xl max-w-container-max mx-auto">
<!-- Quick Actions Grid -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-md">
<div class="bg-white p-md rounded-xl shadow-sm border-l-4 border-primary transition-all hover:shadow-md cursor-pointer group">
<div class="flex items-center justify-between">
<div class="bg-teal-50 p-sm rounded-lg text-primary">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">add_circle</span>
</div>
<span class="material-symbols-outlined text-slate-300 group-hover:translate-x-1 transition-transform">arrow_forward</span>
</div>
<p class="mt-md font-label-md">Add New Pet</p>
<p class="text-xs text-slate-500">Register a new family member</p>
</div>
<div class="bg-white p-md rounded-xl shadow-sm border-l-4 border-secondary transition-all hover:shadow-md cursor-pointer group">
<div class="flex items-center justify-between">
<div class="bg-orange-50 p-sm rounded-lg text-secondary">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">emergency_home</span>
</div>
<span class="material-symbols-outlined text-slate-300 group-hover:translate-x-1 transition-transform">arrow_forward</span>
</div>
<p class="mt-md font-label-md">Report Lost Pet</p>
<p class="text-xs text-slate-500">Activate emergency search network</p>
</div>
<div class="bg-white p-md rounded-xl shadow-sm border-l-4 border-tertiary transition-all hover:shadow-md cursor-pointer group">
<div class="flex items-center justify-between">
<div class="bg-green-50 p-sm rounded-lg text-tertiary">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">vaccines</span>
</div>
<span class="material-symbols-outlined text-slate-300 group-hover:translate-x-1 transition-transform">arrow_forward</span>
</div>
<p class="mt-md font-label-md">Vaccine Wallet</p>
<p class="text-xs text-slate-500">Review pending immunizations</p>
</div>
<div class="bg-white p-md rounded-xl shadow-sm border-l-4 border-teal-600 transition-all hover:shadow-md cursor-pointer group">
<div class="flex items-center justify-between">
<div class="bg-teal-50 p-sm rounded-lg text-teal-600">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">qr_code</span>
</div>
<span class="material-symbols-outlined text-slate-300 group-hover:translate-x-1 transition-transform">arrow_forward</span>
</div>
<p class="mt-md font-label-md">Generate Tag</p>
<p class="text-xs text-slate-500">Print your pet's smart ID</p>
</div>
</section>
<!-- Bento Layout Main Content -->
<div class="grid grid-cols-12 gap-xl">
<!-- Registered Pets Carousel/Grid (Left Column) -->
<div class="col-span-12 lg:col-span-8 space-y-lg">
<div class="flex items-center justify-between">
<h2 class="font-headline-md text-on-surface">Registered Pets</h2>
<button class="text-primary font-label-md hover:underline">View all</button>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
<!-- Pet Card 1 -->
<div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group">
<div class="h-48 relative overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="A professional, high-quality portrait of a Golden Retriever dog sitting gracefully in a sun-drenched living room. The lighting is soft and warm, highlighting the dog's golden fur against a clean, minimalist background. The aesthetic is modern corporate pet care, featuring a palette of whites and soft teals. The mood is affectionate, domestic, and reliable." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCWr3nbItGxiPTm5vDmZ3wANvA2NNk0q4RUj-tKtB_0uPtMWm99REEpLrQWDaEQ6FDxFvI4E9XmJJ7wd8dOcTMgFFk5IzR8bcnv5toTZghuK13d4Uhfrr07NRmahw3fpNP3RegCe5YGewy-SMIuiPwdxRlYjxgatjHOqW9FK71AKyve4xzokAu5uej3gPs6uhxLb0ooaMhYpGLAFoTfUR5PhfWwgVQltd7HgQXpRCL7-v0fKogXqlMcu1vuMFXlvrYxrFkYUUAJvX0z"/>
<div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full flex items-center gap-2 border border-primary/20">
<span class="w-2 h-2 bg-green-500 rounded-full"></span>
<span class="text-xs font-label-md text-primary">Healthy</span>
</div>
</div>
<div class="p-md">
<div class="flex justify-between items-start mb-sm">
<div>
<h3 class="font-headline-md text-xl mb-xs">Bento</h3>
<div class="flex gap-2">
<span class="bg-surface-container-low text-on-surface-variant text-[10px] px-2 py-0.5 rounded-full font-semibold uppercase tracking-wider">Golden Retriever</span>
<span class="bg-surface-container-low text-on-surface-variant text-[10px] px-2 py-0.5 rounded-full font-semibold uppercase tracking-wider">3 Years</span>
</div>
</div>
<button class="p-2 hover:bg-slate-50 rounded-full text-slate-400">
<span class="material-symbols-outlined">more_vert</span>
</button>
</div>
<div class="flex items-center gap-4 pt-sm border-t border-slate-100">
<div class="flex flex-col">
<span class="text-[10px] text-slate-400 font-bold uppercase">Next Vax</span>
<span class="font-label-md text-primary">12 Oct 2024</span>
</div>
<div class="flex flex-col">
<span class="text-[10px] text-slate-400 font-bold uppercase">Weight</span>
<span class="font-label-md">28.5 kg</span>
</div>
</div>
</div>
</div>
<!-- Pet Card 2 -->
<div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group">
<div class="h-48 relative overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="A detailed, professional studio shot of a sleek black and white Siamese cat looking alert and curious. The lighting is crisp and studio-quality, emphasizing the textures of the cat's fur and bright eyes. The background is a soft, solid grey-blue that fits the modern minimalist pet care aesthetic. The image conveys health, precision, and clinical care with a warm domestic heart." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFRRnShbZFiOAKZ3tg3OU3ptvoMVq-n9etr-ZtQ0wQqXytiUATIzes2DuY-bqB3Qbxph_Xkor-ox9v6BeyisjEkrgysx58kAYxAKf_9woMtcu64wmOxVc9H67WhGKqkuu2lqL2K1Dv_QRb-NXFEM4itrwGtw8QzLzDNmf0V_1annyunXZLspbkSdhFF7GP3iWgioIg3bWCt5f-nRo_paSr5enxG7LadXEFb1iD0KIXHN6RDod_aLz25i03OYItYjqDVWQGqaG3V5GP"/>
<div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full flex items-center gap-2 border border-secondary/20">
<span class="w-2 h-2 bg-orange-500 rounded-full animate-pulse"></span>
<span class="text-xs font-label-md text-secondary">Checkup Due</span>
</div>
</div>
<div class="p-md">
<div class="flex justify-between items-start mb-sm">
<div>
<h3 class="font-headline-md text-xl mb-xs">Luna</h3>
<div class="flex gap-2">
<span class="bg-surface-container-low text-on-surface-variant text-[10px] px-2 py-0.5 rounded-full font-semibold uppercase tracking-wider">Siamese</span>
<span class="bg-surface-container-low text-on-surface-variant text-[10px] px-2 py-0.5 rounded-full font-semibold uppercase tracking-wider">5 Years</span>
</div>
</div>
<button class="p-2 hover:bg-slate-50 rounded-full text-slate-400">
<span class="material-symbols-outlined">more_vert</span>
</button>
</div>
<div class="flex items-center gap-4 pt-sm border-t border-slate-100">
<div class="flex flex-col">
<span class="text-[10px] text-slate-400 font-bold uppercase">Next Vax</span>
<span class="font-label-md text-secondary">05 Sep 2024</span>
</div>
<div class="flex flex-col">
<span class="text-[10px] text-slate-400 font-bold uppercase">Weight</span>
<span class="font-label-md">4.2 kg</span>
</div>
</div>
</div>
</div>
</div>
<!-- QR Identification Promo Card -->
<div class="bg-primary text-on-primary rounded-xl p-xl flex flex-col md:flex-row items-center gap-lg relative overflow-hidden">
<div class="absolute -right-12 -bottom-12 w-48 h-48 bg-primary-container rounded-full opacity-20"></div>
<div class="relative z-10 flex-1">
<h3 class="font-headline-md mb-xs">Secure your pets with Smart QR Tags</h3>
<p class="text-primary-fixed-dim text-sm mb-lg">Order your custom TodoMeuPet collar tags today. If your pet gets lost, a simple scan helps them find their way home safely.</p>
<button class="bg-white text-primary font-label-md px-md py-sm rounded-lg hover:bg-slate-50 transition-colors shadow-lg active:scale-95">Get a Tag Now</button>
</div>
<div class="w-32 h-32 bg-white rounded-lg p-sm flex items-center justify-center relative z-10">
<span class="material-symbols-outlined text-[80px] text-primary">qr_code_2</span>
</div>
</div>
</div>
<!-- Calendar & Widgets (Right Column) -->
<div class="col-span-12 lg:col-span-4 space-y-xl">
<!-- Calendar Widget -->
<div class="bg-white rounded-xl shadow-sm overflow-hidden">
<div class="p-md border-b border-slate-100 flex items-center justify-between">
<h3 class="font-label-md">Health Calendar</h3>
<div class="flex gap-xs">
<button class="p-1 hover:bg-slate-50 rounded-lg text-slate-400"><span class="material-symbols-outlined text-[18px]">chevron_left</span></button>
<button class="p-1 hover:bg-slate-50 rounded-lg text-slate-400"><span class="material-symbols-outlined text-[18px]">chevron_right</span></button>
</div>
</div>
<div class="p-md">
<div class="flex flex-col gap-sm">
<!-- Appointment 1 -->
<div class="flex gap-md group">
<div class="flex flex-col items-center min-w-[48px] py-xs bg-slate-50 rounded-lg text-slate-500 border border-slate-100 group-hover:border-primary/30 transition-colors">
<span class="text-[10px] font-bold uppercase tracking-tighter">Sep</span>
<span class="font-headline-md text-lg leading-none">12</span>
</div>
<div class="flex-1">
<p class="font-label-md text-sm">Bento's Rabies Vax</p>
<p class="text-xs text-slate-400">PetLife Clinic • 10:00 AM</p>
</div>
</div>
<!-- Appointment 2 -->
<div class="flex gap-md group">
<div class="flex flex-col items-center min-w-[48px] py-xs bg-slate-50 rounded-lg text-slate-500 border border-slate-100 group-hover:border-primary/30 transition-colors">
<span class="text-[10px] font-bold uppercase tracking-tighter">Sep</span>
<span class="font-headline-md text-lg leading-none">18</span>
</div>
<div class="flex-1">
<p class="font-label-md text-sm">Luna's Dental Check</p>
<p class="text-xs text-slate-400">Home Visit • 03:30 PM</p>
</div>
</div>
<!-- Appointment 3 -->
<div class="flex gap-md group opacity-60">
<div class="flex flex-col items-center min-w-[48px] py-xs bg-slate-50 rounded-lg text-slate-500 border border-slate-100">
<span class="text-[10px] font-bold uppercase tracking-tighter">Oct</span>
<span class="font-headline-md text-lg leading-none">04</span>
</div>
<div class="flex-1">
<p class="font-label-md text-sm">Deworming Reminder</p>
<p class="text-xs text-slate-400">Recurring Treatment</p>
</div>
</div>
</div>
<button class="w-full mt-md py-sm border-2 border-dashed border-slate-200 rounded-lg text-slate-400 font-label-sm hover:border-primary/40 hover:text-primary transition-all">
                                    + Schedule Appointment
                                </button>
</div>
</div>
<!-- Health Timeline Mini -->
<div class="bg-white rounded-xl shadow-sm p-md">
<h3 class="font-label-md mb-md">Recent Medical History</h3>
<div class="relative pl-6 space-y-lg border-l-2 border-slate-100">
<div class="relative">
<div class="absolute -left-[31px] top-0 w-4 h-4 rounded-full bg-primary border-4 border-white shadow-sm"></div>
<p class="font-label-sm text-xs text-slate-400 mb-1">2 days ago</p>
<p class="font-label-md text-sm">Weight update recorded for Bento</p>
<p class="text-xs text-slate-500 mt-1">28.5 kg (+0.2kg since last check)</p>
</div>
<div class="relative">
<div class="absolute -left-[31px] top-0 w-4 h-4 rounded-full bg-tertiary border-4 border-white shadow-sm"></div>
<p class="font-label-sm text-xs text-slate-400 mb-1">Aug 15, 2024</p>
<p class="font-label-md text-sm">Flea treatment applied</p>
<p class="text-xs text-slate-500 mt-1">Next treatment due in 30 days</p>
</div>
</div>
</div>
<!-- Community Card -->
<div class="bg-surface-container-low border border-primary-container/20 rounded-xl p-md">
<div class="flex items-center gap-sm mb-sm">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">groups</span>
<h3 class="font-label-md">Local Community</h3>
</div>
<p class="text-xs text-slate-500 mb-md">There are 12 lost pets reported in your neighborhood today. Keep an eye out!</p>
<button class="w-full bg-white border border-slate-200 py-2 rounded-lg text-xs font-bold text-slate-700 hover:bg-slate-50 transition-colors">View Map</button>
</div>
</div>
</div>
</div>
<!-- Footer -->
<footer class="mt-auto border-t border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-950">
<div class="flex flex-col md:flex-row justify-between items-center py-8 px-6 max-w-7xl mx-auto gap-4">
<p class="font-plus-jakarta text-xs text-slate-500">© 2024 TodoMeuPet. Caring for your family.</p>
<div class="flex gap-gutter">
<a class="font-plus-jakarta text-xs text-slate-500 hover:text-teal-500 hover:underline transition-all" href="#">Terms of Service</a>
<a class="font-plus-jakarta text-xs text-slate-500 hover:text-teal-500 hover:underline transition-all" href="#">Privacy Policy</a>
<a class="font-plus-jakarta text-xs text-slate-500 hover:text-teal-500 hover:underline transition-all" href="#">Institutional</a>
<a class="font-plus-jakarta text-xs text-slate-500 hover:text-teal-500 hover:underline transition-all" href="#">Contact Us</a>
</div>
</div>
</footer>
</main>
</div>
</body></html>