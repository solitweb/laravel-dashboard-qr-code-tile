<x-dashboard-tile :position="$position">
    <div class="grid {{ isset($title) ? 'grid-rows-auto-auto gap-2' : '' }} h-full">
        @isset($title)
            <h1 class="uppercase font-bold">
                {{ $title }}
            </h1>
        @endisset

        <div class="flex items-center justify-center">
            <img class="w-48 h-48 rounded" src="https://chart.googleapis.com/chart?chs=500x500&amp;cht=qr&amp;chl={{ $code }}" alt="QR code">
        </div>
    </div>
</x-dashboard-tile>
