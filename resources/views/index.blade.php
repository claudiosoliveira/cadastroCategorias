@extends('layout.app', ["current" => "/#"])

@section('body')
    <div class="jumbotron bg-light border border-secundary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-title">
                        <h5>Cadastro de Produtos</h5>
                        <p class="card=text">
                            Aqui você cadastra todos os seus produtos.
                            Só não esqueça de cadastrar previamente as categorias.
                        </p>
                        <a href="/produtos" class="btn btn-primary">Cadastre seus produtos:</a>
                    </div>
                </div>
                <div class="card border border-primary">
                    <div class="card-title">
                        <h5>Cadastro de Categorias</h5>
                        <p class="card=text">
                            Cadastre as categorias dos produtos.
                        </p>
                        <a href="/produtos" class="btn btn-primary">Cadastre suas categorias:</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection