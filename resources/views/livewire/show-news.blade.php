@section('title', 'Новости')

<x-base-container>
    <x-slot name="title">
        Новости
    </x-slot>
    @foreach($news as $singleNews)
        <div class="mt-5 pb-15">
            <h2 class="text-lg font-bold">
                {{ $singleNews->title }}
            </h2>
            <small class="text-muted">{{ $singleNews->created_at->isoFormat('D MMM YYYY, dddd') }}</small>
            <p>
                {{ $singleNews->description }}
            </p>
        </div>
    @endforeach
    <div class="mt-16">
        {{ $news->links() }}
    </div>
</x-base-container>

