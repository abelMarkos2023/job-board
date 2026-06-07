<nav>
    <ul class="flex items-center gap-2">
        <li>
            <a href="/">Home</a>
        </li>
        @foreach ($links as $label => $url)
            <li class="flex items-center gap-1">
                <span>→ </span>
                <a href="{{ $url }}">{{ $label }}</a>
            </li>
        @endforeach
    </ul>
</nav>