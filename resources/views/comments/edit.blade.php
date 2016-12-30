@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Comment</div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('comments.update', $item->id) }}" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PATCH">
                            {{ csrf_field() }}
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" name="name" value="{{ $item->name }}" class="form-control" id="name" placeholder="name">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" name="email" value="{{ $item->email }}" class="form-control" id="email" placeholder="email">
							</div>
							<div class="form-group">
								<label for="comment">Comment</label>
								<input type="text" name="comment" value="{{ $item->comment }}" class="form-control" id="comment" placeholder="comment">
							</div>
							<div class="form-group">
								<label for="status">Status</label>
								<input type="text" name="status" value="{{ $item->status }}" class="form-control" id="status" placeholder="status">
							</div>
							<div class="form-group">
								<label for="parent_id">Parent_id</label>
								<input type="text" name="parent_id" value="{{ $item->parent_id }}" class="form-control" id="parent_id" placeholder="parent_id">
							</div>
							<div class="form-group">
								<label for="post_id">Post_id</label>
								<input type="text" name="post_id" value="{{ $item->post_id }}" class="form-control" id="post_id" placeholder="post_id">
							</div>
                            <button type="submit" class="btn btn-default">Editar</button>
                            <a href="{{ route('comments.index') }}" class="btn btn-danger pull-right">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
