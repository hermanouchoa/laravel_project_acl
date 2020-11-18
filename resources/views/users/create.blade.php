@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                    <a class="text-success" href="{{ route('user.index') }}">&leftarrow; Voltar para a listagem</a>

                        @if($errors)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger mt-4" role="alert">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif

                        <form action="" method="post" class="mt-4" autocomplete="off">
                            @csrf

                            <div class="form-group">
                                <label for="name">Nome do Usuário</label>
                                <input type="text" class="form-control" id="name" placeholder="Insira o Nome Complero do Usuário"
                                       name="name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Insira o Nome Complero do Usuário"
                                       name="email" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Senha</label>
                                <input type="password" class="form-control" id="name" placeholder="Insira o Nome Complero do Usuário"
                                       name="name" value="{{ old('name') }}">
                            </div>

                            <button type="submit" class="btn btn-block btn-success">Cadastrar Novo RECURSO</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
