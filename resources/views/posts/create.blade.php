@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Criar novo Post</div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{ old('title') }}">
							</div>
							<div class="form-group">
								<label for="slug">Slug</label>
								<input type="text" name="slug" class="form-control" id="slug" placeholder="slug" value="{{ old('slug') }}">
							</div>
							<div class="form-group">
								<label for="abstract">Abstract</label>
								<input type="text" name="abstract" class="form-control" id="abstract" placeholder="abstract" value="{{ old('abstract') }}">
							</div>
							<div class="form-group">
								<label for="text">Text</label>
								<input type="text" name="text" class="form-control" id="text" placeholder="text" value="{{ old('text') }}">
							</div>
							<div class="form-group">
								<label for="user_id">User_id</label>
								<input type="text" name="user_id" class="form-control" id="user_id" placeholder="user_id" value="{{ old('user_id') }}">
							</div>
                            <button type="submit" class="btn btn-default">Criar</button>
                            <a href="{{ route('posts.index') }}" class="btn btn-danger pull-right">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
