@extends('vendor/adminlte/master')
@section('body')

<div id="app">  
    <div class="content-wrapper">
        
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Adicionar Tag</h1>
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


        <div class="content-header">
            <div class="container">
                
                <div class="card box-header">
                    <div class="card-header">
                    <h3 class="card-title">Insira o nome da tag que será atribuído a lista</h3>
                    <div class="card-tools">
                        <!-- Buttons, labels, and many other things can be placed here! -->
                        <!-- Here is a label for example -->
                       
                    </div>
                    <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf <!-- {{ csrf_field() }} -->   
                            
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <button type="button" class="btn btn-secondary">Tag</button>
                                </div>
                                
                                <input type="text" name="tag" placeholder="Digite o nome da Tag" class="form-control">
                            </div>

                            <div class="form-group">
                                <div class="form-control">
                                    
                                    <input type="file" name="arquivo"  v-on:change="onFileSelected" class="" id="customFile">
                                  
                                </div>
                                
                             </div>
                            
                            
                        <div class="info-box bg-gradient-warning">
                            <span class="info-box-icon"><i class="far fa-far fa-copy"></i></span>
                            <div class="info-box-content">
                              <span class="info-box-text">@verbatim Arquivo selecionado: <strong>{{ selectedFile }} </strong> @endverbatim</span>
                              <span class="info-box-number">Quantidade de Registros: 0</span>
                              <div class="progress">
                                <div class="progress-bar" style="width: 50%"></div>
                              </div>
                              <span class="progress-description">
                                50% 
                              </span>
                            </div>
                            <div class="overlay" v-show="value2">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                              </div>
                          </div>
                         
                          <button type="submit" name="submit" class="text-lg btn btn-success btn-flat col-md-12">
                            <strong>ENVIAR PARA CLEVERTAP</strong>
                          </button>
                    </form>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
        
            </div>
        </div>

    </div>

    
    </div>
</div>

<script type="module">
    import { createApp } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js',
    
  
    createApp({
      data() {
        return {
          value1: true,
          value2: false,
          selectedFile: null
        }
      },
      methods: {
            onFileSelected(event){
                this.selectedFile = event.target.files[0].name
            }
        }
    }).mount('#app')
  </script>
@endsection
