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

                            <form class="form-horizontal">
                                <fieldset>

                                    <!-- Form Name -->
                                    <legend>Put your article here...</legend>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="article_title">Title</label>
                                        <div class="col-md-4">
                                            <input id="article_title" name="article_title" type="text" placeholder="article title" class="form-control input-md">

                                        </div>
                                    </div>




                                    <!-- File Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="source_image">Image</label>
                                        <div class="col-md-4">
                                            <input id="source_image" name="source_image" class="input-file" type="file">
                                        </div>
                                    </div>

                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="source_description">Description</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" id="source_description" name="source_description"></textarea>
                                        </div>
                                    </div>

                                </fieldset>
                                <button type="button" class="btn btn-primary">Publish</button>

                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
