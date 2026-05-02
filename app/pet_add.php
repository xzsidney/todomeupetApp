<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .form-glow:focus {
            box-shadow: 0 0 0 4px rgba(20, 184, 166, 0.1);
        }
    </style>
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
</head>
<body class="bg-surface font-body-md text-on-surface antialiased">
<div class="flex min-h-screen">
<!-- SideNavBar Component -->
<aside class="hidden lg:flex flex-col h-screen w-64 border-r border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 sticky top-0">
<div class="p-6">
<span class="text-lg font-bold text-teal-600 tracking-tight">TodoMeuPet</span>
</div>
<div class="px-4 mb-6">
<div class="flex items-center gap-3 p-3 bg-surface-container rounded-xl">
<div class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center text-white font-bold">
                        JD
                    </div>
<div>
<p class="text-label-md text-on-surface">Welcome back</p>
<p class="text-label-sm text-outline">Pet Parent</p>
</div>
</div>
</div>
<nav class="flex-1 px-4 space-y-2">
<a class="text-slate-500 dark:text-slate-400 px-4 py-3 flex items-center gap-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-lg transition-transform duration-200 hover:translate-x-1" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span class="font-label-md">Dashboard</span>
</a>
<a class="bg-teal-50 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg font-semibold px-4 py-3 flex items-center gap-3 transition-transform duration-200 hover:translate-x-1" href="#">
<span class="material-symbols-outlined" data-icon="pets">pets</span>
<span class="font-label-md">My Pets</span>
</a>
<a class="text-slate-500 dark:text-slate-400 px-4 py-3 flex items-center gap-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-lg transition-transform duration-200 hover:translate-x-1" href="#">
<span class="material-symbols-outlined" data-icon="medical_services">medical_services</span>
<span class="font-label-md">Health Wallet</span>
</a>
<a class="text-slate-500 dark:text-slate-400 px-4 py-3 flex items-center gap-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-lg transition-transform duration-200 hover:translate-x-1" href="#">
<span class="material-symbols-outlined" data-icon="qr_code_scanner">qr_code_scanner</span>
<span class="font-label-md">QR Management</span>
</a>
</nav>
<div class="px-4 py-6 border-t border-slate-200 dark:border-slate-800 space-y-2">
<a class="text-slate-500 dark:text-slate-400 px-4 py-3 flex items-center gap-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-lg transition-transform duration-200 hover:translate-x-1" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span class="font-label-md">Settings</span>
</a>
<a class="text-slate-500 dark:text-slate-400 px-4 py-3 flex items-center gap-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-lg transition-transform duration-200 hover:translate-x-1" href="#">
<span class="material-symbols-outlined" data-icon="help_outline">help_outline</span>
<span class="font-label-md">Support</span>
</a>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 min-w-0 bg-surface">
<!-- Mobile Header -->
<header class="lg:hidden flex items-center justify-between p-4 bg-white border-b border-slate-100">
<span class="text-xl font-extrabold text-teal-600 tracking-tight">TodoMeuPet</span>
<button class="p-2 text-slate-600">
<span class="material-symbols-outlined" data-icon="menu">menu</span>
</button>
</header>
<div class="max-w-4xl mx-auto p-6 lg:p-12">
<!-- Registration Header -->
<div class="mb-10">
<div class="flex items-center gap-2 text-teal-600 mb-4">
<span class="material-symbols-outlined text-[20px]" data-icon="arrow_back">arrow_back</span>
<span class="font-label-md cursor-pointer hover:underline">Back to My Pets</span>
</div>
<h1 class="font-headline-xl text-on-surface mb-2">Register New Pet</h1>
<p class="text-body-lg text-outline">Complete the details below to secure your pet's digital health identity.</p>
</div>
<!-- Progress Indicator -->
<div class="flex items-center gap-4 mb-12">
<div class="flex items-center gap-2">
<div class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center text-label-md">1</div>
<span class="font-label-md text-primary">Identity</span>
</div>
<div class="h-px w-12 bg-outline-variant"></div>
<div class="flex items-center gap-2">
<div class="w-8 h-8 rounded-full border-2 border-outline-variant text-outline flex items-center justify-center text-label-md">2</div>
<span class="font-label-md text-outline">Physicals</span>
</div>
<div class="h-px w-12 bg-outline-variant"></div>
<div class="flex items-center gap-2">
<div class="w-8 h-8 rounded-full border-2 border-outline-variant text-outline flex items-center justify-center text-label-md">3</div>
<span class="font-label-md text-outline">Owner</span>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-8">
<!-- Form Canvas -->
<div class="md:col-span-8">
<div class="bg-white rounded-xl shadow-sm border border-slate-100 p-8 space-y-10">
<!-- Identification Section -->
<section>
<div class="flex items-center gap-3 mb-6">
<div class="w-1 h-6 bg-primary rounded-full"></div>
<h2 class="font-headline-md text-on-surface">Identification</h2>
</div>
<div class="grid grid-cols-1 gap-6">
<div class="space-y-2">
<label class="text-label-md text-on-surface-variant">Pet Name</label>
<input class="w-full h-12 bg-surface-container-low border-none rounded-lg px-4 font-body-md focus:ring-2 focus:ring-primary-container outline-none transition-all form-glow" placeholder="e.g. Luna" type="text"/>
</div>
<div class="grid grid-cols-2 gap-4">
<div class="space-y-2">
<label class="text-label-md text-on-surface-variant">Species</label>
<select class="w-full h-12 bg-surface-container-low border-none rounded-lg px-4 font-body-md focus:ring-2 focus:ring-primary-container outline-none transition-all cursor-pointer">
<option>Dog</option>
<option>Cat</option>
<option>Bird</option>
<option>Other</option>
</select>
</div>
<div class="space-y-2">
<label class="text-label-md text-on-surface-variant">Breed</label>
<input class="w-full h-12 bg-surface-container-low border-none rounded-lg px-4 font-body-md focus:ring-2 focus:ring-primary-container outline-none transition-all form-glow" placeholder="e.g. Golden Retriever" type="text"/>
</div>
</div>
</div>
</section>
<!-- Physical Characteristics -->
<section>
<div class="flex items-center gap-3 mb-6">
<div class="w-1 h-6 bg-secondary-container rounded-full"></div>
<h2 class="font-headline-md text-on-surface">Physical Characteristics</h2>
</div>
<div class="grid grid-cols-2 gap-4">
<div class="space-y-2">
<label class="text-label-md text-on-surface-variant">Age (Years)</label>
<input class="w-full h-12 bg-surface-container-low border-none rounded-lg px-4 font-body-md focus:ring-2 focus:ring-primary-container outline-none transition-all form-glow" placeholder="0" type="number"/>
</div>
<div class="space-y-2">
<label class="text-label-md text-on-surface-variant">Weight (kg)</label>
<input class="w-full h-12 bg-surface-container-low border-none rounded-lg px-4 font-body-md focus:ring-2 focus:ring-primary-container outline-none transition-all form-glow" placeholder="0.0" type="number"/>
</div>
<div class="col-span-2 space-y-2">
<label class="text-label-md text-on-surface-variant">Distinguishing Marks</label>
<textarea class="w-full bg-surface-container-low border-none rounded-lg p-4 font-body-md focus:ring-2 focus:ring-primary-container outline-none transition-all form-glow" placeholder="e.g. White patch on left paw" rows="3"></textarea>
</div>
</div>
</section>
<!-- Owner Details -->
<section>
<div class="flex items-center gap-3 mb-6">
<div class="w-1 h-6 bg-tertiary-container rounded-full"></div>
<h2 class="font-headline-md text-on-surface">Owner Contact</h2>
</div>
<div class="space-y-6">
<div class="space-y-2">
<label class="text-label-md text-on-surface-variant">Full Name</label>
<input class="w-full h-12 bg-surface-container-low border-none rounded-lg px-4 font-body-md focus:ring-2 focus:ring-primary-container outline-none transition-all form-glow" placeholder="John Doe" type="text"/>
</div>
<div class="grid grid-cols-2 gap-4">
<div class="space-y-2">
<label class="text-label-md text-on-surface-variant">Phone Number</label>
<input class="w-full h-12 bg-surface-container-low border-none rounded-lg px-4 font-body-md focus:ring-2 focus:ring-primary-container outline-none transition-all form-glow" placeholder="+1 (555) 000-0000" type="tel"/>
</div>
<div class="space-y-2">
<label class="text-label-md text-on-surface-variant">Emergency Contact</label>
<input class="w-full h-12 bg-surface-container-low border-none rounded-lg px-4 font-body-md focus:ring-2 focus:ring-primary-container outline-none transition-all form-glow" placeholder="+1 (555) 111-1111" type="tel"/>
</div>
</div>
</div>
</section>
<div class="flex items-center justify-between pt-6">
<button class="px-8 py-3 font-label-md text-primary border border-primary rounded-lg hover:bg-teal-50 transition-colors">Save Draft</button>
<button class="px-10 py-3 font-label-md bg-primary text-white rounded-lg shadow-lg shadow-teal-900/10 hover:bg-primary-container transition-all active:scale-95">Complete Registration</button>
</div>
</div>
</div>
<!-- Sidebar Context Cards -->
<div class="md:col-span-4 space-y-6">
<!-- Photo Upload Card -->
<div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
<h3 class="font-label-md text-on-surface mb-4">Pet Portrait</h3>
<div class="aspect-square rounded-xl bg-surface-container-low flex flex-col items-center justify-center border-2 border-dashed border-outline-variant hover:border-primary transition-colors cursor-pointer group relative overflow-hidden">
<img class="absolute inset-0 w-full h-full object-cover opacity-20 group-hover:opacity-40 transition-opacity" data-alt="A high-resolution, professional studio portrait of a friendly beagle dog looking directly into the camera with soft, warm lighting. The background is a clean, minimalist off-white, reflecting a modern light-mode aesthetic. The composition is centered and emphasizes the dog's affectionate expression and detailed fur texture, aligning with a premium corporate pet care brand identity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFkxGPvo9f0MmeDt0JOfE_7S9TGriJxvpvTw0bgxay-Is1yirvPrmeCVUGHluy8aLr8jsLeNlOQeft1-YgWbFTpLjoY4Mpmbl4Xdt4GCUBMzFdHzXtHOR6_3Si_HdAJHGafYG3K5bUSZyceZWSPKw7nTvPuV-v4mPLBU_CsEPu33isDHC8tNcNNhCwHWoSk6Rj78fa823oFgcxSHGAt5lFu_ppGNIqBhZuuDk11-CfOOSZIjFcry8TcxmYBCgqG2osZLWXgMzCsU1g"/>
<span class="material-symbols-outlined text-primary text-4xl mb-2" data-icon="add_a_photo">add_a_photo</span>
<span class="text-label-sm text-outline">Click to upload</span>
</div>
</div>
<!-- QR Identity Preview -->
<div class="bg-primary text-white rounded-xl p-6 shadow-xl shadow-teal-900/20 relative overflow-hidden">
<div class="relative z-10">
<div class="flex items-center gap-2 mb-4">
<span class="material-symbols-outlined" data-icon="qr_code_2">qr_code_2</span>
<span class="font-label-md">Instant ID Preview</span>
</div>
<div class="bg-white p-4 rounded-lg mb-4 w-fit mx-auto">
<div class="w-32 h-32 bg-slate-100 rounded flex items-center justify-center text-slate-300">
<span class="material-symbols-outlined text-4xl" data-icon="qr_code">qr_code</span>
</div>
</div>
<p class="text-label-sm text-center opacity-90">Every registered pet gets a unique QR collar tag for safety.</p>
</div>
<div class="absolute -bottom-4 -right-4 w-24 h-24 bg-teal-400/20 rounded-full blur-2xl"></div>
</div>
<!-- Help Card -->
<div class="bg-secondary-fixed rounded-xl p-6">
<span class="material-symbols-outlined text-secondary text-2xl mb-2" data-icon="lightbulb">lightbulb</span>
<h4 class="font-label-md text-on-secondary-fixed mb-2">Why these details?</h4>
<p class="text-label-sm text-on-secondary-fixed-variant leading-relaxed">Accurate breed and weight data helps our system provide personalized health reminders and vaccine schedules for your pet.</p>
</div>
</div>
</div>
</div>
<!-- Footer Component -->
<footer class="bg-slate-50 dark:bg-slate-950 mt-12">
<div class="flex flex-col md:flex-row justify-between items-center py-8 px-6 max-w-7xl mx-auto gap-4">
<p class="font-plus-jakarta text-xs text-slate-500">© 2024 TodoMeuPet. Caring for your family.</p>
<div class="flex gap-6">
<a class="text-slate-500 hover:text-teal-500 font-plus-jakarta text-xs transition-all hover:underline" href="#">Terms of Service</a>
<a class="text-slate-500 hover:text-teal-500 font-plus-jakarta text-xs transition-all hover:underline" href="#">Privacy Policy</a>
<a class="text-slate-500 hover:text-teal-500 font-plus-jakarta text-xs transition-all hover:underline" href="#">Institutional</a>
<a class="text-slate-500 hover:text-teal-500 font-plus-jakarta text-xs transition-all hover:underline" href="#">Contact Us</a>
</div>
</div>
</footer>
</main>
</div>
</body></html>