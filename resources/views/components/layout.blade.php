<!DOCTYPE html>
<html lang="en">

<body class="bg-[#fafaf7] text-[#0a0a0a] antialiased overflow-x-hidden"
    style="font-family:'Instrument Sans',sans-serif">
    <x-head />
    {{-- NAV --}}
    <x-nav />

    {{-- HERO --}}
    <x-hero />

    {{-- MARQUEE --}}
    <x-marquee />
    {{-- CATEGORIES --}}
    <x-categories />

    {{-- FEATURED JOBS --}}
    <x-featured />

    {{-- CTA --}}
    <x-call-to-action />

    {{-- FOOTER --}}
    <x-footer />
    <div class="flex justify-between items-center px-16 py-5 text-[13px] text-[#888]">
        <span>© {{ date('Y') }} WorkBoard. All rights reserved.</span>
        <span>
            Made with care
            for pe
            ople who care about their
            wo

            rk.</ span>


    </div>

    <style>
        @keyframes marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }
    </style>

</body>

</html>