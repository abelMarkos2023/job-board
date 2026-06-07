<div class="border-b-2 border-[#0a0a0a] overflow-hidden bg-[#0a0a0a]" style="padding:0">
    @php $cos = ['Stripe', 'Figma', 'Linear', 'Vercel', 'Notion', 'Anthropic', 'Shopify', 'Retool', 'Cloudflare', 'Loom']; @endphp
    <div class="inline-flex whitespace-nowrap" style="animation:marquee 28s linear infinite">
        @foreach(array_merge($cos, $cos) as $c)
            <span class="inline-flex items-center px-8 border-r border-[#333] py-3.5 text-[14px] font-medium text-[#888]">
                <span class="text-white mr-1.5">{{ $c }}</span> is hiring
            </span>
        @endforeach
    </div>
</div>