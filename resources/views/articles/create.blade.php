@extends('partials.layout')

@section('content')
<div class="container mx-auto w-1/2">
    <div class="card bg-base-100 shadow-xl">
        <div class="card-body">
            <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Burger Name</span>
                    </label>
                    <input name="title" type="text" placeholder="Article Title" class="input input-bordered w-full @error('title') input-error @enderror" />
                    @error('title')
                    <label class="label">
                        <span class="label-text-alt text-error">{{$message}}</span>
                    </label>
                    @enderror
                </div>
                <div class="form-control w-full">
    <label class="label">
        <span class="label-text">Burger Price</span>
    </label>
    <input name="price" type="number" step="0.01" placeholder="Burger Price" class="input input-bordered w-full @error('price') input-error @enderror" />
    @error('price')
    <label class="label">
        <span class="label-text-alt text-error">{{$message}}</span>
    </label>
    @enderror
</div>

                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Describe the burger.</span>
                    </label>
                    <textarea name="body" class="textarea textarea-bordered @error('title') textarea-error @enderror" placeholder="Content here"></textarea>
                    @error('body')
                    <label class="label">
                        <span class="label-text-alt text-error">{{$message}}</span>
                    </label>
                    @enderror
                </div>
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Tags</span>
                    </label>
                    <select multiple class="select select-bordered" name="tags[]">
                        @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                    @error('tags.*')
                    <label class="label">
                        <span class="label-text-alt text-error">{{$message}}</span>
                    </label>
                    @enderror
                </div>
        </div>
        <div class="form-control w-full" id="specialDietInfo" style="display: none;">
            <label class="label">
                <span class="label-text">Special Diet Information</span>
            </label>
            <div id="specialDietText"></div>
        </div>
        <div class="form-control w-full">
            <label class="label">
                <span class="label-text">Nice picutre of burger.</span>
            </label>
            <input name="images[]" type="file" multiple class="file-input input-bordered w-full @error('images.*') input-error @enderror" accept="image/*" />
            @error('images.*')
            <label class="label">
                <span class="label-text-alt text-error">{{$message}}</span>
            </label>
            @enderror
        </div>
        <input type="submit" value="Create" class="btn btn-primary mt-3">
        </form>
    </div>
</div>
</div>

@endsection
