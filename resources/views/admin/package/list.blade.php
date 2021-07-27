@extends('admin.layout.master')

@section('content')
    <div class="header-list">
        <div class="title">
            <h1>{{ $title }}</h1>
        </div>
    
        <div>
            <a href="" class="btn btn-primary btn-icon btn-plus">
                <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                Adicionar
            </a>
        </div>
    </div>

    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>nome</th>
                        <th>local</th>
                        <th>data_ida</th>
                        <th>data_volta</th>
                        <th>preco</th>
                        <th>programacao</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($packages as $package)
                        <tr>
                            <td>{{ $package->id }}</td>
                            <td>{{ $package->nome }}</td>
                            <td>{{ $package->local }}</td>
                            <td>{{ $package->data_ida }}</td>
                            <td>{{ $package->data_volta }}</td>
                            <td>{{ $package->preco }}</td>
                            <td>{{ $package->programacao }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
