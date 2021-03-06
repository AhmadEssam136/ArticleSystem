@extends('layouts.userApp')

@section('content')
    <section class="content-header">
        <h1>
            Article
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($article, ['route' => ['updateArticle', $article->id], 'method' => 'post' , 'files'=>true]) !!}

                    @include('editFields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection