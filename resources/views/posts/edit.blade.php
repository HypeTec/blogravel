@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Post</div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('posts.update', $item->id) }}" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PATCH">
                            {{ csrf_field() }}
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" name="title" value="{{ $item->title }}" class="form-control" id="title" placeholder="title">
							</div>
							<div class="form-group">
								<label for="slug">Slug</label>
								<input type="text" name="slug" value="{{ $item->slug }}" class="form-control" id="slug" placeholder="slug">
							</div>
							<div class="form-group">
								<label for="abstract">Abstract</label>
								<input type="text" name="abstract" value="{{ $item->abstract }}" class="form-control" id="abstract" placeholder="abstract">
							</div>
							<div class="form-group">
								<label for="text">Text</label>
								<input type="text" name="text" value="{{ $item->text }}" class="form-control" id="text" placeholder="text">
							</div>
							<div class="form-group">
								<label for="user_id">User_id</label>
								<input type="text" name="user_id" value="{{ $item->user_id }}" class="form-control" id="user_id" placeholder="user_id">
							</div>
                            <button type="submit" class="btn btn-default">Editar</button>
                            <a href="{{ route('posts.index') }}" class="btn btn-danger pull-right">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
