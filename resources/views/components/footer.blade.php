 <footer class="grid grid-cols-4 px-16 py-14 border-b-2 border-[#0a0a0a]">
        <div class="pr-10 border-r-2 border-[#e0ddd6]">
            <div class="font-black text-[20px] mb-3" style="font-family:'Syne',sans-serif">
                work<span class="text-[#ff4d00]">.</span>board
            </div>
            <p class="text-[14px] text-[#888] leading-relaxed">The job board built for people who take their careers
                seriously.</p>
        </div>
        @foreach([
                    ['For Job Seekers', ['Browse Jobs', 'Salary Explorer', 'Career Guide', 'Resume Tips']],
                    ['For Employers', ['Post a Job', 'Pricing', 'Company Page', 'Hiring Guide']],
                    ['Company', ['About', 'Blog', 'Privacy', 'Terms']],
                ] as [$heading, $links])
            <div class="pl-10">
                    <p class="text-[12px] font-bold uppercase tracking-[.8px] text-[#888] mb-4">{{ $heading }}</p>
                    <div class="flex flex-col gap-2.5">
                        @foreach($links as $link)
                            <a href="#" class="text-[14px] font-medium hover:text-[#ff4d00] transition-colors">{{ $link }}</a>
                        @endforeach
                        </div>
                    </div>
        @endforeach
    </footer>


    {{-- 
    
    <footer class="bg-slate-950 border-t border-slate-900/60 py-12 relative z-10 text-xs font-mono text-slate-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center md:flex md:items-center md:justify-between">
            <p class="text-center md:text-left">&copy; 2026 artisanJobs Inc. System operating under optimal metrics.</p>
            <div class="mt-4 md:mt-0 flex justify-center space-x-6 text-slate-500">
                <a href="#" class="hover:text-indigo-400 transition">/privacy_policy</a>
                <a href="#" class="hover:text-indigo-400 transition">/terms_of_deployment</a>
                <a href="#" class="hover:text-indigo-400 transition">/api_endpoints</a>
            </div>
        </div>
    </footer>
    --}}