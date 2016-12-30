@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Mostrando Comment <a class="btn btn-xs btn-primary pull-right" href="{{ route('comments.index') }}"><i class="glyphicon glyphicon-arrow-left"></i> Voltar</a></div>
                    <div class="panel-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>#</th>
                                <td>{{ $item->id }}</td>
                            </tr>
							<tr>
								<th>Name</th>
								<td>{{ $item->name }}</td>
							</tr>
							<tr>
								<th>Email</th>
								<td>{{ $item->email }}</td>
							</tr>
							<tr>
								<th>Comment</th>
								<td>{{ $item->comment }}</td>
							</tr>
							<tr>
								<th>Status</th>
								<td>{{ $item->status }}</td>
							</tr>
							<tr>
								<th>Parent_id</th>
								<td>{{ $item->parent_id }}</td>
							</tr>
							<tr>
								<th>Post_id</th>
								<td>{{ $item->post_id }}</td>
							</tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection