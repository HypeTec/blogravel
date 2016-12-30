@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Mostrando Tag <a class="btn btn-xs btn-primary pull-right" href="{{ route('tags.index') }}"><i class="glyphicon glyphicon-arrow-left"></i> Voltar</a></div>
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
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection