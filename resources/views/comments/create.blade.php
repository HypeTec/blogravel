@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Criar novo Comment</div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('comments.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" name="name" class="form-control" id="name" placeholder="name" value="{{ old('name') }}">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" name="email" class="form-control" id="email" placeholder="email" value="{{ old('email') }}">
							</div>
							<div class="form-group">
								<label for="comment">Comment</label>
								<input type="text" name="comment" class="form-control" id="comment" placeholder="comment" value="{{ old('comment') }}">
							</div>
							<div class="form-group">
								<label for="status">Status</label>
								<input type="text" name="status" class="form-control" id="status" placeholder="status" value="{{ old('status') }}">
							</div>
							<div class="form-group">
								<label for="parent_id">Parent_id</label>
								<input type="text" name="parent_id" class="form-control" id="parent_id" placeholder="parent_id" value="{{ old('parent_id') }}">
							</div>
							<div class="form-group">
								<label for="post_id">Post_id</label>
								<input type="text" name="post_id" class="form-control" id="post_id" placeholder="post_id" value="{{ old('post_id') }}">
							</div>
                            <button type="submit" class="btn btn-default">Criar</button>
                            <a href="{{ route('comments.index') }}" class="btn btn-danger pull-right">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
