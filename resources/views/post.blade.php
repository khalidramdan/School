@extends('layouts.app')
@section('content')
    {{-- <x-slot name="header">
    <h2 class="front-semibold text-xl text-gray-800 leading-tight">
        {{__('post')}}

    </h2>
</x-slot> --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-gray-200">
                @if (Session::has('success'))
                    <div class="col-12 alert alert-success justify-content-center d-flex">
                        <p class="text-center">{{ Session::get('seccess') }}</p>
                    </div>
                @endif
                @if (isset($posts) && $posts->count() > 0)
                    @foreach ($posts as $post)
                        <div class="card-body">
                            @if (Session('status'))
                                <div class="col-12 alert alert-success">
                                    {{ Session('status') }}
                                </div>
                            @endif
                            <h1>
                                {{ $post->title }} - @if (Auth::id() == $post->user->id)
                                    userPost
                                @endif
                            </h1>
                            <p>
                                {{ $post->body }}
                            </p>
                            <br>
                            <br>
                            <h3>Comments</h3>
                            @if ($post->Comments()->count() > 0)
                                @foreach ($post->Comment() as $_comment)
                                    <p>
                                        {{ $_comment->comment }}
                                    </p>
                                @endforeach
                            @endif

                            <br><br>
                            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <div class="form-group">
                                    <input type="text" name="post_body" class="form-control">

                                </div>
                                @if (Auth::id() != $post->user->id)
                                    <x-button>Comment</x-button>
                                @endif
                            </form>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
