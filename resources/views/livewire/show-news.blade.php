@section('title', 'Новости')

<div class="bg-main-bg-color">
    <div class="container xl:px-13 mx-auto pt-9">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-graphite">
            <h1 class="text-center text-3xl font-bold mb-16 w-full">Новости</h1>
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
        </div>
    </div>
</div>
