<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->

<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image', null , ['class' => 'form-control']) !!}

@if(isset($article->image))
        <img src="{{asset('public/upload/') . '/' . $article->image}}" height="200" width="150">
    @endif


</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary'] , route('Articlesuser')) !!}
    <a href="{!! route('homeuser') !!}" class="btn btn-default">Cancel</a>
</div>
