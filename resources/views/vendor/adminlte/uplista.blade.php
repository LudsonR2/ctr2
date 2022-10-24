@extends('vendor/adminlte/master')

@section('body')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">UpLista - Criar Lista de Audiência</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Uplista</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="title">Selecione o Arquivo em CSV</h3>
                                <br>
                                <p><span>Será atribuído uma tag com nome sugerido, serve como conceito de lista na segmentação</span></p>
                                <p class="card-text">
                                    <form action="{{ route('pegaArquivo') }}" method="post" enctype="multipart/form-data">
                                        <input type="text" name="tag" class="col-lg-6"placeholder="Nome da lista"/>
                                        <input type="file" name="arquivo">
                                        @csrf <!-- {{ csrf_field() }} -->
                                        ...
                                        <button type="submit" name="submit" class="btn btn-success btn-block mt-4">
                                            Subir Lista 
                                        </button>
                                    </form>
                                </p>
                            
                            </div>
                        </div>
                        
                    </div>



                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">CallBack</h5>
                                <p class="card-text">
                                    @if (Request::isMethod('post'))
                                    {
                                    {{ $response }}
                                    }
                                    @endif
                                </p>
                            
                            </div>
                        </div>
                        
                    </div>

                </div>

            </div>
        </div>

    </div>

    
    </div>
@endsection