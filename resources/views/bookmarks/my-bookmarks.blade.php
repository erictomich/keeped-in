
@extends('template.dashboard')

@section('content')
        @foreach ($bookmarks as $bookmark)
        
        <div class="w-full md:w-1/2 p-3">
            <!--Graph Card-->
            <div class="bg-white border rounded shadow">
                <div class="border-b p-3">
                    <h5 class="font-bold uppercase text-gray-600">{{ $bookmark->title }}</h5>
                    <div class="flex flex-wrap">{!! implode(' ',array_map(fn ($a) => "<a href=". route('bookmarks',['tag' => $a]). " class=\"bg-indigo-500 text-white px-2 py-1 rounded-full mr-2 mb-2\">".$a."</a>" ,explode(',',$bookmark->tags))) !!}</div>
                </div>
                <div class="p-5">
                <iframe src="{{ $bookmark->codeShare }}" height="458" width="100%" frameborder="0" allowfullscreen="" title="Publicação incorporada"></iframe>
                
                </div>
            </div>
            <!--/Graph Card-->
        </div>
        @endforeach
@endsection
  