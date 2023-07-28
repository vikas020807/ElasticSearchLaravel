<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
{{-- /**********************************************************************************/ --}}
{{-- <!DOCTYPE html>
    <html>
        
        <head>
            <title>ElasticSearch Demo</title>
        </head>
        
        <body>
            <h1>ElasticSearch ({{ $results->count() }})</h1>
            <form action="{{ url('search') }}" method="GET">
        <input type="text" name="q" value="{{ $query ?? '' }}" id="s">
        <button type="submit">Search</button>
    </form>
    <hr>
    @if ($results->count() > 0)
        <ul id="lists">
            @foreach ($results as $result)
                <li>
                    <strong>{{ $result->title }}</strong><br>
                    {{ $result->content }}<br>
                    Author: {{ $result->author }}<br>
                    Relevance Score ({{ $result->mode }}): {{ $result->relevance }}
                </li>
            @endforeach
        </ul>
    @else
        <p>No results found.</p>
    @endif
</body>

</html> --}}
{{-- <script>
        let searchTimer; // Variable to store the timer
        let currentPage = 1;
        let resultsPerPage = 10; // Default value for results per page
        let searchData = []; // Variable to store the fetched data

        let handleSearch = function(event) {
            event.preventDefault(); // Prevent form submission and page reload
            currentPage = 1; // Reset to the first page when a new search is performed

            let searchValue = document.getElementById('s').value;
            getData(searchValue); // Fetch data based on the search value
        }

        let startSearchTimer = function() {
            clearTimeout(searchTimer); // Clear previous timer if any
            searchTimer = setTimeout(fetchDataWithDelay, 500); // Set a new timer
        }

        let showLoader = function() {
            document.getElementById('loader-container').style.display = 'block';
        }

        let hideLoader = function() {
            document.getElementById('loader-container').style.display = 'none';
        }

        let fetchDataWithDelay = function() {
            let searchValue = document.getElementById('s').value;
            getData(searchValue); // Fetch data based on the search value
        }

        let generateRandomColor = function() {
            // Generate random RGB values for the background color
            let r = Math.floor(Math.random() * 256);
            let g = Math.floor(Math.random() * 256);
            let b = Math.floor(Math.random() * 256);
            return `rgb(${r}, ${g}, ${b})`;
        }

        let createCard = function(result) {
            // let card = document.createElement("div");
            // card.classList.add("card", "grid", "grid-cols-1", "md:grid-cols-3"); // Use grid classes

            // Generate random colors for each wave layer
            let color1 = generateRandomColor();
            let color2 = generateRandomColor();

            // // Title and Author column (Left column)
            // let titleAndAuthor = document.createElement("div");
            // titleAndAuthor.classList.add("p-2", "border-r", "mt-4"); // Add padding and border-right
            // card.appendChild(titleAndAuthor);

            // let title = document.createElement("strong");
            // title.textContent = result["title"];
            // title.classList.add("text-blue-500", "text-xl", "mb-2", "font-mono", "block", "rounded",
            //     "justify-self-start"); // Add title styles
            // titleAndAuthor.appendChild(title);

            // let author = document.createElement("p");
            // author.textContent = "Author: " + result["author"];
            // author.classList.add("text-gray-600", "font-mono");
            // titleAndAuthor.appendChild(author);

            // // Content column (Right column)
            // let content = document.createElement("div");
            // content.classList.add("p-2", "md:col-span-2");
            // card.appendChild(content);

            // let contentParagraph = document.createElement("p");
            // contentParagraph.classList.add("font-light", "font-mono");
            // contentParagraph.textContent = result["content"];
            // content.appendChild(contentParagraph);

            // Add a random SVG background with different colored wave layers
            let svgBackground = `
          <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
                <style>
                      .path-0 {
                 animation: pathAnim-0 4s;
              animation-timing-function: linear;
               animation-iteration-count: infinite;
             }
     
             @keyframes pathAnim-0 {
              0% {
                d: path("M 0,400 C 0,400 0,133 0,133 C 40.316089837997055,136.15003681885125 80.63217967599411,139.3000736377025 152,155 C 223.3678203240059,170.6999263622975 325.78737113402065,198.94974226804123 388,180 C 450.21262886597935,161.05025773195877 472.21833578792337,94.90095729013254 525,100 C 577.7816642120766,105.09904270986746 661.3392857142857,181.44642857142858 732,182 C 802.6607142857143,182.55357142857142 860.4245213549339,107.31332842415316 921,83 C 981.5754786450661,58.68667157584684 1044.9626288659792,85.30025773195877 1103,91 C 1161.0373711340208,96.69974226804123 1213.724963181149,81.48564064801178 1269,85 C 1324.275036818851,88.51435935198822 1382.1375184094254,110.75717967599411 1440,133 C 1440,133 1440,400 1440,400 Z");
              }
        
             25% {
               d: path("M 0,400 C 0,400 0,133 0,133 C 51.58247422680412,127.91568483063328 103.16494845360825,122.83136966126656 166,120 C 228.83505154639175,117.16863033873344 302.9226804123711,116.59020618556701 371,121 C 439.0773195876289,125.40979381443299 501.14432989690727,134.80780559646539 551,125 C 600.8556701030927,115.19219440353461 638.5,86.17857142857143 693,92 C 747.5,97.82142857142857 818.8556701030928,138.4779086892489 889,143 C 959.1443298969072,147.5220913107511 1028.077319587629,115.909793814433 1082,102 C 1135.922680412371,88.090206185567 1174.835051546392,91.88291605301913 1232,100 C 1289.164948453608,108.11708394698087 1364.5824742268042,120.55854197349043 1440,133 C 1440,133 1440,400 1440,400 Z");
              }
     
             50% {
               d: path("M 0,400 C 0,400 0,133 0,133 C 46.758652430044194,130.68703976435935 93.51730486008839,128.3740795287187 153,121 C 212.4826951399116,113.6259204712813 284.6894329896907,101.19072164948454 341,107 C 397.3105670103093,112.80927835051546 437.72496318114884,136.86303387334314 511,143 C 584.2750368188512,149.13696612665686 690.4107142857143,137.3571428571429 749,130 C 807.5892857142857,122.64285714285712 818.632179675994,119.70839469808541 871,115 C 923.367820324006,110.29160530191459 1017.0605670103091,103.80927835051546 1090,118 C 1162.9394329896909,132.19072164948454 1215.125552282769,167.05449189985274 1270,173 C 1324.874447717231,178.94550810014726 1382.4372238586157,155.97275405007363 1440,133 C 1440,133 1440,400 1440,400 Z");
             }
     
             75% {
               d: path("M 0,400 C 0,400 0,133 0,133 C 74.2991531664212,108.84186303387334 148.5983063328424,84.68372606774668 212,94 C 275.4016936671576,103.31627393225332 327.90592783505156,146.10695876288662 383,158 C 438.09407216494844,169.89304123711338 495.77798232695136,150.88843888070693 548,154 C 600.2220176730486,157.11156111929307 646.982142857143,182.3392857142857 709,176 C 771.017857142857,169.6607142857143 848.293446244477,131.75441826215024 906,125 C 963.706553755523,118.24558173784976 1001.8440721649486,142.64304123711335 1061,150 C 1120.1559278350514,157.35695876288665 1200.330265095729,147.67341678939619 1267,142 C 1333.669734904271,136.32658321060381 1386.8348674521355,134.6632916053019 1440,133 C 1440,133 1440,400 1440,400 Z");
             }
     
             100% {
               d: path("M 0,400 C 0,400 0,133 0,133 C 40.316089837997055,136.15003681885125 80.63217967599411,139.3000736377025 152,155 C 223.3678203240059,170.6999263622975 325.78737113402065,198.94974226804123 388,180 C 450.21262886597935,161.05025773195877 472.21833578792337,94.90095729013254 525,100 C 577.7816642120766,105.09904270986746 661.3392857142857,181.44642857142858 732,182 C 802.6607142857143,182.55357142857142 860.4245213549339,107.31332842415316 921,83 C 981.5754786450661,58.68667157584684 1044.9626288659792,85.30025773195877 1103,91 C 1161.0373711340208,96.69974226804123 1213.724963181149,81.48564064801178 1269,85 C 1324.275036818851,88.51435935198822 1382.1375184094254,110.75717967599411 1440,133 C 1440,133 1440,400 1440,400 Z");
             }
              }
              </style>
              <defs>
               <linearGradient id="gradient" x1="0%" y1="50%" x2="100%" y2="50%">
             <stop offset="5%" stop-color="${color1}"></stop>
             <stop offset="95%" stop-color="${color1}"></stop>
                </linearGradient>
              </defs>
              <path d="M 0,400 C 0,400 0,133 0,133 C 40.316089837997055,136.15003681885125 80.63217967599411,139.3000736377025 152,155 C 223.3678203240059,170.6999263622975 325.78737113402065,198.94974226804123 388,180 C 450.21262886597935,161.05025773195877 472.21833578792337,94.90095729013254 525,100 C 577.7816642120766,105.09904270986746 661.3392857142857,181.44642857142858 732,182 C 802.6607142857143,182.55357142857142 860.4245213549339,107.31332842415316 921,83 C 981.5754786450661,58.68667157584684 1044.9626288659792,85.30025773195877 1103,91 C 1161.0373711340208,96.69974226804123 1213.724963181149,81.48564064801178 1269,85 C 1324.275036818851,88.51435935198822 1382.1375184094254,110.75717967599411 1440,133 C 1440,133 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="0.53" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
               <style>
              .path-1 {
               animation: pathAnim-1 4s;
              animation-timing-function: linear;
              animation-iteration-count: infinite;
              }

                @keyframes pathAnim-1 {
             0% {
             d: path("M 0,400 C 0,400 0,266 0,266 C 67.85143593519882,283.72072901325475 135.70287187039764,301.44145802650957 196,302 C 256.29712812960236,302.55854197349043 309.0399484536082,285.9548969072165 361,270 C 412.9600515463918,254.0451030927835 464.13733431516937,238.73895434462443 524,247 C 583.8626656848306,255.26104565537557 652.4107142857142,287.0892857142857 714,306 C 775.5892857142858,324.9107142857143 830.2198085419736,330.9039027982327 897,315 C 963.7801914580264,299.0960972017673 1042.7100515463917,261.2951030927835 1106,253 C 1169.2899484536083,244.7048969072165 1216.9399852724596,265.91568483063327 1270,273 C 1323.0600147275404,280.08431516936673 1381.5300073637702,273.04215758468337 1440,266 C 1440,266 1440,400 1440,400 Z");
                 }

             25% {
               d: path("M 0,400 C 0,400 0,266 0,266 C 44.07676730486007,285.4668630338733 88.15353460972014,304.9337260677467 156,297 C 223.84646539027986,289.0662739322533 315.4626288659794,253.73195876288665 385,254 C 454.5373711340206,254.26804123711335 501.9959499263623,290.1384388807069 560,289 C 618.0040500736377,287.8615611192931 686.5535714285714,249.7142857142857 744,233 C 801.4464285714286,216.2857142857143 847.7897643593518,221.00441826215024 907,242 C 966.2102356406482,262.99558173784976 1038.2873711340208,300.2680412371134 1106,310 C 1173.7126288659792,319.7319587628866 1237.0607511045655,301.9234167893962 1292,290 C 1346.9392488954345,278.0765832106038 1393.4696244477173,272.0382916053019 1440,266 C 1440,266 1440,400 1440,400 Z");
             }
   
             50% {
               d: path("M 0,400 C 0,400 0,266 0,266 C 39.50846833578791,288.8912002945508 79.01693667157582,311.7824005891016 149,314 C 218.98306332842418,316.2175994108984 319.4407216494846,297.76159793814435 381,271 C 442.5592783505154,244.23840206185565 465.22017673048595,209.17120765832107 516,217 C 566.779823269514,224.82879234167893 645.6785714285714,275.5535714285714 722,275 C 798.3214285714286,274.4464285714286 872.0655375552283,222.61450662739327 927,222 C 981.9344624447717,221.38549337260673 1018.0592783505153,271.9884020618556 1065,283 C 1111.9407216494847,294.0115979381444 1169.69734904271,265.4318851251841 1234,256 C 1298.30265095729,246.56811487481588 1369.151325478645,256.2840574374079 1440,266 C 1440,266 1440,400 1440,400 Z");
             }
   
              75% {
                d: path("M 0,400 C 0,400 0,266 0,266 C 45.62481590574373,285.25828424153167 91.24963181148746,304.5165684830633 160,304 C 228.75036818851254,303.4834315169367 320.6262886597939,283.1920103092784 382,268 C 443.3737113402061,252.80798969072163 474.2452135493372,242.71539027982328 520,231 C 565.7547864506628,219.28460972017672 626.3928571428572,205.94642857142856 695,218 C 763.6071428571428,230.05357142857144 840.183357879234,267.4988954344624 905,290 C 969.816642120766,312.5011045655376 1022.8737113402062,320.0579896907217 1085,299 C 1147.1262886597938,277.9420103092783 1218.3217967599412,228.26914580265097 1279,218 C 1339.6782032400588,207.73085419734903 1389.8391016200294,236.8654270986745 1440,266 C 1440,266 1440,400 1440,400 Z");
              }
   
               100% {
                d: path("M 0,400 C 0,400 0,266 0,266 C 67.85143593519882,283.72072901325475 135.70287187039764,301.44145802650957 196,302 C 256.29712812960236,302.55854197349043 309.0399484536082,285.9548969072165 361,270 C 412.9600515463918,254.0451030927835 464.13733431516937,238.73895434462443 524,247 C 583.8626656848306,255.26104565537557 652.4107142857142,287.0892857142857 714,306 C 775.5892857142858,324.9107142857143 830.2198085419736,330.9039027982327 897,315 C 963.7801914580264,299.0960972017673 1042.7100515463917,261.2951030927835 1106,253 C 1169.2899484536083,244.7048969072165 1216.9399852724596,265.91568483063327 1270,273 C 1323.0600147275404,280.08431516936673 1381.5300073637702,273.04215758468337 1440,266 C 1440,266 1440,400 1440,400 Z");
               }
               }
               </style>
               <defs>
               <linearGradient id="gradient" x1="0%" y1="50%" x2="100%" y2="50%">
                <stop offset="5%" stop-color="${color2}"></stop>
               <stop offset="95%" stop-color="${color2}"></stop>
             </linearGradient>
             </defs>
              <path d="M 0,400 C 0,400 0,266 0,266 C 67.85143593519882,283.72072901325475 135.70287187039764,301.44145802650957 196,302 C 256.29712812960236,302.55854197349043 309.0399484536082,285.9548969072165 361,270 C 412.9600515463918,254.0451030927835 464.13733431516937,238.73895434462443 524,247 C 583.8626656848306,255.26104565537557 652.4107142857142,287.0892857142857 714,306 C 775.5892857142858,324.9107142857143 830.2198085419736,330.9039027982327 897,315 C 963.7801914580264,299.0960972017673 1042.7100515463917,261.2951030927835 1106,253 C 1169.2899484536083,244.7048969072165 1216.9399852724596,265.91568483063327 1270,273 C 1323.0600147275404,280.08431516936673 1381.5300073637702,273.04215758468337 1440,266 C 1440,266 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-1"></path>
            </svg>`;
            // titleAndAuthor.style.backgroundImage = `url('data:image/svg+xml;base64,${btoa(svgBackground)}')`;
            // titleAndAuthor.style.backgroundRepeat = 'no-repeat';
            let card = `<div class="card grid grid-cols-1 md:grid-cols-3">
                          <div class="p-2 border-r mt-4">
               <strong class="text-blue-500 text-xl mb-2 font-mono block rounded justify-self-start">${result['title']}</strong>
          <p class="text-gray-600 font-mono">${result['author']}</p>
           </div>
           <div class="p-2 md:col-span-2">
             <p class="font-light font-mono">${result['content']}</p>
           </div>
           </div>`;
            return card;
        }

        let updateList = function() {
            let lists = document.getElementById('lists');
            lists.innerHTML = ""; // Clear the existing content

            let startIndex = (currentPage - 1) * resultsPerPage;
            let endIndex = startIndex + resultsPerPage;
            let paginatedData = searchData.slice(startIndex, endIndex);

            paginatedData.forEach(result => {
                let card = document.createElement("div");
                card.innerHTML = createCard(result);
                lists.appendChild(card);
            });

            updatePagination();
        }

        let updatePagination = function() {
            let paginationContainer = document.getElementById('pagination-container');
            paginationContainer.innerHTML = ""; // Clear previous pagination buttons

            let totalPages = Math.ceil(searchData.length / resultsPerPage);

            for (let i = 1; i <= totalPages; i++) {
                let button = document.createElement("button");
                button.classList.add("pagination-button");
                button.textContent = i;
                if (i === currentPage) {
                    button.classList.add("active");
                }
                button.addEventListener("click", () => {
                    currentPage = i;
                    updateList(); // Re-render the list for the selected page
                });
                paginationContainer.appendChild(button);
            }
        }

        let changePaginationSize = function() {
            resultsPerPage = parseInt(document.querySelector('select[name="pagination-size"]').value, 10);
            currentPage = 1; // Reset to the first page when the pagination size is changed
            updateList(); // Re-render the list with the new pagination size
        }

        let getData = function(search = '') {
            showLoader(); // Show the loader while fetching data
            fetch(`http://192.168.29.54:8002/api/search?q=${search}`)
                .then((response) => response.json()) // Parse the response as JSON
                .then((data) => {
                    searchData = data; // Store the fetched data
                    updateList(); // Update the list with the new data

                    // Update the result count
                    let resultCountElement = document.getElementById('resultCount');
                    resultCountElement.textContent = data.length;
                })
                .catch((error) => {
                    console.error('Error fetching data:', error);
                })
                .finally(() => {
                    hideLoader(); // Hide the loader after fetching data
                });
        }

        getData();
    </script> --}}