<!DOCTYPE html>

<html lang="pt-BR"><head>
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
                }
            }
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            background-color: #f8f9ff;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }
        .emergency-banner {
            background: linear-gradient(135deg, #ba1a1a 0%, #93000a 100%);
        }
    </style>
</head>
<body class="text-on-surface">
<nav class="fixed top-0 w-full z-50 bg-white/90 dark:bg-slate-900/90 backdrop-blur-md border-b border-slate-100 dark:border-slate-800 shadow-sm shadow-teal-900/5">
<div class="flex justify-between items-center h-16 px-6 lg:px-12 max-w-7xl mx-auto">
<div class="text-xl font-extrabold text-teal-600 dark:text-teal-400 tracking-tight">TodoMeuPet</div>
<div class="hidden md:flex gap-8 items-center">
<a class="text-teal-600 dark:text-teal-400 border-b-2 border-teal-500 pb-1 font-plus-jakarta text-sm font-medium" href="#">Home</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-teal-500 font-plus-jakarta text-sm font-medium transition-all" href="#">Pet Profile</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-teal-500 font-plus-jakarta text-sm font-medium transition-all" href="#">Pricing</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-teal-500 font-plus-jakarta text-sm font-medium transition-all" href="#">About</a>
</div>
<div class="flex gap-4">
<button class="px-4 py-2 text-sm font-medium text-teal-600 hover:bg-teal-50/50 rounded-lg active:scale-95 duration-200 transition-all">Login</button>
<button class="px-4 py-2 text-sm font-medium bg-primary-container text-white rounded-lg active:scale-95 duration-200 transition-all">Sign Up</button>
</div>
</div>
</nav>
<main class="pt-24 pb-12 px-6 max-w-7xl mx-auto">
<div class="emergency-banner rounded-xl p-6 mb-8 flex flex-col md:flex-row items-center justify-between text-white shadow-lg">
<div class="flex items-center gap-4 mb-4 md:mb-0">
<span class="material-symbols-outlined text-4xl" data-icon="emergency_home" style="font-variation-settings: 'FILL' 1;">emergency_home</span>
<div>
<h1 class="font-headline-md text-headline-md">ESTOU PERDIDO!</h1>
<p class="font-body-md text-body-md opacity-90">Por favor, ajude-me a voltar para casa.</p>
</div>
</div>
<button class="bg-white text-error font-label-md text-label-md px-6 py-3 rounded-full shadow-md hover:scale-105 active:scale-95 transition-all flex items-center gap-2">
<span class="material-symbols-outlined" data-icon="phone_in_talk">phone_in_talk</span>
                LIGAR PARA O DONO AGORA
            </button>
</div>
<div class="bento-grid">
<div class="col-span-12 lg:col-span-4 space-y-6">
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm border border-surface-container-high">
<img alt="Pet Photo" class="w-full aspect-square object-cover" data-alt="A professional studio portrait of a friendly Golden Retriever dog sitting against a soft, clean white background. The lighting is warm and high-key, emphasizing the dog's expressive amber eyes and silky golden fur. The mood is calm and inviting, aligning with a premium pet care brand aesthetic using soft tones and clinical clarity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDl8oG1xBDcZFxZq845zfOfi-4lwlADnNiMjT2SqkuXtA31O-UVaGAyJS70W2-DnI_NGXfUJaw5vezI3yIimTN9lT0ICZaX3f49Qz3z-lxFJV6xxd2uBlXrjVAVk-0bjpbLTrSsSdvMI42VqGr3Vde0ZaXPjd7wNsfCd_eVLm9vVFWWhGbDv3DhQyiB7YMXTV-3v1D8g_Dxj0caqjs0NDSbegKSi10zPyIGjlPMJ78DfAekxB6cnpdNPnfRrGVCR0_-azdwULVz_PaV"/>
<div class="p-6 text-center">
<h2 class="font-headline-lg text-headline-lg text-on-surface">Max</h2>
<p class="font-body-lg text-body-lg text-outline">Golden Retriever • 3 Anos</p>
<div class="mt-4 flex justify-center gap-2">
<span class="px-3 py-1 bg-surface-container text-primary font-label-sm text-label-sm rounded-full">Dócil</span>
<span class="px-3 py-1 bg-surface-container text-primary font-label-sm text-label-sm rounded-full">Microchipado</span>
</div>
</div>
</div>
<div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-surface-container-high">
<h3 class="font-headline-md text-headline-md text-on-surface mb-4 flex items-center gap-2">
<span class="material-symbols-outlined text-primary" data-icon="contact_page">contact_page</span>
                        Contato do Tutor
                    </h3>
<div class="space-y-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-primary-container/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined" data-icon="person">person</span>
</div>
<div>
<p class="font-label-sm text-label-sm text-outline">Nome do Tutor</p>
<p class="font-label-md text-label-md text-on-surface">Ricardo Oliveira</p>
</div>
</div>
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-primary-container/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined" data-icon="call">call</span>
</div>
<div>
<p class="font-label-sm text-label-sm text-outline">Telefone Primário</p>
<p class="font-label-md text-label-md text-on-surface">(11) 98765-4321</p>
</div>
</div>
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-primary-container/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined" data-icon="mail">mail</span>
</div>
<div>
<p class="font-label-sm text-label-sm text-outline">E-mail</p>
<p class="font-label-md text-label-md text-on-surface">ricardo@email.com</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-span-12 lg:col-span-8 space-y-6">
<div class="bg-error-container/30 border-2 border-error-container p-6 rounded-xl relative overflow-hidden">
<div class="absolute top-0 right-0 p-4 opacity-10">
<span class="material-symbols-outlined text-9xl" data-icon="medical_information">medical_information</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-error-container mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-error" data-icon="warning" style="font-variation-settings: 'FILL' 1;">warning</span>
                        Informações Críticas de Saúde
                    </h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="bg-white/80 p-4 rounded-lg shadow-sm">
<div class="flex items-center gap-2 text-error mb-2">
<span class="material-symbols-outlined text-sm" data-icon="allergy">allergy</span>
<span class="font-label-md text-label-md uppercase tracking-wider">Alergias</span>
</div>
<p class="font-body-md text-body-md text-on-surface">Alergia severa a **Frango** e **Picadas de Abelha**. Reação anafilática possível.</p>
</div>
<div class="bg-white/80 p-4 rounded-lg shadow-sm">
<div class="flex items-center gap-2 text-secondary mb-2">
<span class="material-symbols-outlined text-sm" data-icon="pill">pill</span>
<span class="font-label-md text-label-md uppercase tracking-wider">Medicamentos Atuais</span>
</div>
<p class="font-body-md text-body-md text-on-surface">Uso diário de **Apoquel 16mg** (uma vez ao dia, pela manhã).</p>
</div>
<div class="bg-white/80 p-4 rounded-lg shadow-sm col-span-1 md:col-span-2">
<div class="flex items-center gap-2 text-primary mb-2">
<span class="material-symbols-outlined text-sm" data-icon="clinical_notes">clinical_notes</span>
<span class="font-label-md text-label-md uppercase tracking-wider">Necessidades Especiais</span>
</div>
<p class="font-body-md text-body-md text-on-surface">O Max possui displasia de quadril leve. Por favor, evite que ele pule ou faça exercícios de alto impacto. Ele é muito amigável com pessoas, mas pode se assustar com barulhos muito altos.</p>
</div>
</div>
</div>
<div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-surface-container-high">
<h3 class="font-headline-md text-headline-md text-on-surface mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-primary" data-icon="history">history</span>
                        Histórico Recente &amp; Vacinas
                    </h3>
<div class="space-y-4">
<div class="flex items-start gap-4 p-4 border-l-4 border-primary bg-surface-container-low rounded-r-lg">
<span class="material-symbols-outlined text-primary mt-1" data-icon="vaccines">vaccines</span>
<div>
<p class="font-label-md text-label-md text-on-surface">V10 + Raiva</p>
<p class="font-label-sm text-label-sm text-outline">Atualizada em: 15/01/2024</p>
</div>
</div>
<div class="flex items-start gap-4 p-4 border-l-4 border-secondary bg-surface-container-low rounded-r-lg">
<span class="material-symbols-outlined text-secondary mt-1" data-icon="health_and_safety">health_and_safety</span>
<div>
<p class="font-label-md text-label-md text-on-surface">Antipulgas e Carrapatos</p>
<p class="font-label-sm text-label-sm text-outline">Última aplicação: Bravecto (01/03/2024)</p>
</div>
</div>
</div>
</div>
<div class="bg-white rounded-xl shadow-sm border border-surface-container-high overflow-hidden">
<div class="p-4 bg-surface-container-low flex justify-between items-center">
<span class="font-label-md text-label-md text-on-surface flex items-center gap-2">
<span class="material-symbols-outlined text-primary" data-icon="location_on">location_on</span>
                            Última Localização Registrada
                        </span>
</div>
<div class="h-64 bg-slate-200 relative">
<img alt="Map" class="w-full h-full object-cover grayscale opacity-50" data-alt="A stylized overhead map illustration of a modern urban neighborhood with clean geometric lines, soft teal and gray tones. The map highlights a central park area with organic shapes and minimalist building footprints. A single, glowing teal location pin marks a specific point in the grid, conveying a sense of digital precision and calm reliability in a light-mode interface." data-location="Sao Paulo, Brazil" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBdgGw64SgMkzR92gY8_aT8J9alCw7iNmOGKlTWzM5X1caJpj_--jkKIo820u2Yz0988bNtw2iAiWAi-7aiY0iA0QXJo-9wyeAQ2WgxUl8Z4BIa2zzDEa8mpSr3bMLc9QgTTq0RduCByqqXHDLXZnVzWgWAXmGGjPRyOmpoKfmFantTDnGAZorz0BE5AnQJ3iy78eKvL6wrPytheIt130rCyYd5ToYqi2KKe8d6rEieDPRI2IfREgKtsQJFxB4IxlkiqioGAyeR8Ovk"/>
<div class="absolute inset-0 flex items-center justify-center">
<div class="bg-primary text-white p-3 rounded-full shadow-lg ring-4 ring-primary/20">
<span class="material-symbols-outlined" data-icon="pets" style="font-variation-settings: 'FILL' 1;">pets</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="mt-12 text-center">
<button class="font-label-md text-label-md text-primary border-2 border-primary px-8 py-3 rounded-full hover:bg-primary/5 transition-all flex items-center gap-2 mx-auto">
<span class="material-symbols-outlined" data-icon="share">share</span>
                COMPARTILHAR PERFIL COM VETERINÁRIO
            </button>
</div>
</main>
<footer class="bg-slate-50 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800">
<div class="flex flex-col md:flex-row justify-between items-center py-8 px-6 max-w-7xl mx-auto gap-4">
<div class="font-bold text-slate-900 dark:text-white">TodoMeuPet</div>
<div class="flex gap-6">
<a class="font-plus-jakarta text-xs text-slate-500 hover:text-teal-500 hover:underline transition-all" href="#">Terms of Service</a>
<a class="font-plus-jakarta text-xs text-slate-500 hover:text-teal-500 hover:underline transition-all" href="#">Privacy Policy</a>
<a class="font-plus-jakarta text-xs text-slate-500 hover:text-teal-500 hover:underline transition-all" href="#">Institutional</a>
<a class="font-plus-jakarta text-xs text-slate-500 hover:text-teal-500 hover:underline transition-all" href="#">Contact Us</a>
</div>
<p class="font-plus-jakarta text-xs text-slate-500">© 2024 TodoMeuPet. Caring for your family.</p>
</div>
</footer>
</body></html>