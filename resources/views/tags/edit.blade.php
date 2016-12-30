@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Tag</div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('tags.update', $item->id) }}" enctype="multipart/form-data">
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
                            <button type="submit" class="btn btn-default">Editar</button>
                            <a href="{{ route('tags.index') }}" class="btn btn-danger pull-right">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
