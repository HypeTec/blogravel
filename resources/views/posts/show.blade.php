@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Mostrando Post <a class="btn btn-xs btn-primary pull-right" href="{{ route('posts.index') }}"><i class="glyphicon glyphicon-arrow-left"></i> Voltar</a></div>
                    <div class="panel-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>#</th>
                                <td>{{ $item->id }}</td>
                            </tr>
							<tr>
								<th>Title</th>
								<td>{{ $item->title }}</td>
							</tr>
							<tr>
								<th>Slug</th>
								<td>{{ $item->slug }}</td>
							</tr>
							<tr>
								<th>Abstract</th>
								<td>{{ $item->abstract }}</td>
							</tr>
							<tr>
								<th>Text</th>
								<td>{{ $item->text }}</td>
							</tr>
							<tr>
								<th>User_id</th>
								<td>{{ $item->user_id }}</td>
							</tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection