@section('title', 'Акции и новости')

<div class="bg-main-bg-color">
    <div class="container xl:px-13 mx-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-main-black">
                <h1 class="text-center font-bold text-3xl pt-10">Акции</h1>
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
                <h1 class="text-center font-bold text-3xl pt-10">Новости</h1>
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
            </div>
        </div>
    </div>
</div>
