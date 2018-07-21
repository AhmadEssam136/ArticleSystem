@extends('layouts.userApp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif


                            @foreach($articles as $article)
                        <div class="blog-post">
                            <h2 class="blog-post-title">{{$article->title}}</h2>
                            <p class="blog-post-meta">{{$article->created_at->toFormattedDateString()}} by <a href="#">{{$article->user->name}}</a></p>
                            {{$article->description}}
                        </div>
                                <br>

                            @if($article->user_id == $user->id)
                            <div>
                                {{Form::submit('Update',['class'=>'btn btn-primart' , 'route'=>'edit'])}}
                            </div>
                                @endif
                            ----------------------------------------------------
                            @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
