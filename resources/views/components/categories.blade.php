<section class="px-16 py-20 border-b-2 border-[#0a0a0a]">
    <div class="flex items-end justify-between mb-12">
        <div>
            <h2 class="font-black tracking-[-2px] leading-none text-[48px]" style="font-family:'Syne',sans-serif">
                Browse by<br>category
            </h2>
            <p class="text-[#888] text-[14px] font-medium mt-2">8 disciplines · 12,400+ roles</p>
        </div>
        <a href="#" class="text-[15px] font-semibold border-b-2 border-[#0a0a0a] pb-px">View all →</a>
    </div>

    @php
        $cats = [
            ['3,241', 'Engineering', 'Frontend, backend, full-stack'],
            ['1,105', 'Design', 'Product, visual, motion'],
            ['894', 'Marketing', 'Growth, content, brand'],
            ['672', 'AI / ML', 'Research, infra, applied'],
            ['541', 'Data', 'Analytics, science, BI'],
            ['429', 'DevOps', 'Cloud, platform, SRE'],
            ['388', 'Sales', 'AE, SDR, enterprise'],
            ['317', 'Product', 'PM, strategy, ops'],
        ];
    @endphp
    <div class="grid grid-cols-4 border-2 border-[#0a0a0a] rounded-lg overflow-hidden">
        @foreach($cats as $i => [$num, $name, $sub])
            <a href="#" class="p-7 group hover:bg-[#d4f000] transition-colors
                           {{ ($i + 1) % 4 !== 0 ? 'border-r-2 border-[#0a0a0a]' : '' }}
                           {{ $i < 4 ? 'border-b-2 border-[#0a0a0a]' : '' }}">
                <span class="font-black text-[28px] tracking-[-1px] block mb-2"
                    style="font-family:'Syne',sans-serif">{{ $num }}</span>
                <span class="text-[16px] font-semibold block mb-1">{{ $name }}</span>
                <span class="text-[13px] text-[#888]">{{ $sub }}</span>
            </a>
        @endforeach
    </div>
</section>