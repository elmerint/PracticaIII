@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sistema de ventas:') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Llena los siguientes campos a continuacion:') }}
                    <form method="POST" action="{{ route('home') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Selecciona una opcion: ') }}</label>

                        <div class="col-md-6">
                            <select id="nombre_venta" type="select" class="form-control @error('nombre_venta') is-invalid @enderror" name="nombre_venta" value="{{ old('nombre_venta') }}" required autocomplete="nombre_venta" autofocus> 
                                <option value"">Camisa</option>
                                <option value="">Short</option>
                                <option value="">Pantalon</option>
                                <option value="">Calcetines</option>
                            </select>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
