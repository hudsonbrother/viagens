@extends('admin.layout.master')

@section('content')

<div class="header-list">
    <div class="title">
        <h1>{{  $title }}</h1>
    </div>
</div>

<form action="" method="POST">
	<div class="col-md-12">
		<div class="form-group">
			<label class="control-label" for="package_nome">Nome do pacotes</label>

			<input type="text" name="name" value="" class="form-control" id="client_name" placeholder="Nome">
		</div>
		<div class="form-group">
			<label class="control-label" for="package_local">Local do pacote</label>

			<input type="text" name="cnpj" value="" class="form-control" id="cnpj_client" placeholder="CNPJ">
		</div>
		<div class="form-group">
			<label class="control-label" for="cnpj_client">Data ida</label>

			<input type="date" name="cnpj" value="" class="form-control" id="cnpj_client" placeholder="CNPJ">
		</div>
		<div class="form-group">
			<label class="control-label" for="cnpj_client">data volta</label>

			<input type="date" name="cnpj" value="" class="form-control" id="cnpj_client" placeholder="CNPJ">
		</div>
		<div class="form-group">
			<label class="control-label" for="cnpj_client">Preço</label>

			<input type="number" name="cnpj" value="" class="form-control" id="cnpj_client" placeholder="CNPJ">
		</div>
		<div class="form-group">
			<label class="control-label" for="cnpj_client">Programação</label>

			<textarea  class="form-control" name="Text1" cols="40" rows="5"></textarea>
		</div>
		<input type="hidden" name="_token" value="{{  csrf_token() }}">
	</div>


	<div class="col-md-12">
		<a href="  route('client.index') }}" alt="Voltar" title="Voltar" class="btn btn-primary btn-icon">
			<i class="glyphicon glyphicon-arrow-left"  aria-hidden="true"></i>
			Voltar
		</a>

		<button type="submit" class="btn btn-primary btn-icon btn-plus">
			<i class="glyphicon glyphicon-plus"  aria-hidden="true"></i>
			Adicionar
		</button>
	</div>
</form>

@endsection