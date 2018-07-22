<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $article->title !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $article->description !!}</p>
</div>

<!-- image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}

    @if(isset($article->image))

        <img src="{{asset('upload/').'/'.$article->image}}" height="200" width="150">

    @endif




</div>

<!-- Name of the user Field -->
<div class="form-group">
    {!! Form::label('name', 'Name of the user:') !!}
    <p>{!! $article->user->name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $article->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $article->updated_at !!}</p>
</div>

