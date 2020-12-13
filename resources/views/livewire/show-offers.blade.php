@section('title', 'Акции')

<x-base-container>
    <x-slot name="title">
        Акции
    </x-slot>
    @foreach($offers as $offer)
        <div class="mt-5 pb-15">
            <h2 class="text-lg font-bold">
                {{ $offer->title }}
            </h2>
            <small class="text-muted">{{ $offer->created_at->isoFormat('D MMM YYYY, dddd') }}</small>
            <p>
                {{ $offer->description }}
            </p>
        </div>
    @endforeach
    <div class="mt-16">
        {{ $offers->links() }}
    </div>
</x-base-container>
