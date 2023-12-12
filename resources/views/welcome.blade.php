@extends('partials.layout')

@section('content')
<div class="container mx-auto">
    {{$articles->links()}}
    <div class="flex flex-row flex-wrap">
        @foreach($articles as $article)
        <div class="basis-1/4 mb-4">
            <div class="card mx-3 bg-base-100 shadow-xl h-full">
                @if($article->images->count() === 1)
                <figure><img src="{{$article->image->path}}" /></figure>
                @elseif($article->images->count() > 1)
                <div class="h-96 carousel carousel-vertical rounded-box">
                    @foreach($article->images as $image)
                    <div class="carousel-item h-full">
                        <img src="{{$image->path}}" />
                    </div>
                    @endforeach
                </div>
                @endif
                <div class="card-body">
                    <div>
                        <h2 class="card-title">{{ $article->title }}</h2>
                        <div class="stat-desc flex flex-wrap">
                            @foreach($article->tags as $tag)
                                <a href="{{route('public.tag', ['tag' => $tag])}}">
                                    <div class="badge badge-accent badge-outline mt-1 mr-1">{{$tag->name}}</div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <p>{{ $article->snippet }}</p>
                    <div class="card-actions justify-end">
                        <form action="{{route('like', ['article' => $article])}}" method="POST">
                            @csrf
                        </form>
                        <a href="{{route('public.article', ['article' => $article])}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
