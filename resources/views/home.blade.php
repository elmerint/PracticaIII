@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
                            <select  id="nombre_venta" type="select" onchange="ShowSelected();" class="form-control @error('nombre_venta') is-invalid @enderror" name="nombre_venta" value="{{ old('nombre_venta') }}" required autocomplete="nombre_venta" autofocus> 
                                <option disabled="" selected="">Elija un producto</option>
                                <option >Camisa</option>
                                <option >Short</option>
                                <option >Pantalon</option>
                                <option >Calcetines</option>
                            </select>
                                @error('nombre_venta')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="precio" class="col-md-4 col-form-label text-md-right">{{ __('Precio: $') }}</label>

                        <div id = "precioD" class="col-md-6">
                            <label id="precio" type="label" class="price form-control @error('precio') is-invalid @enderror" name="precio" value="{{ old('precio') }}" required autocomplete="precio" autofocus> 
                           
                           <script type="text/javascript">
                                function ShowSelected(){
                                
                                const precioQ = document.querySelector('.price')
                                    /* Para obtener el valor */
                                
                                var cod = document.getElementById("nombre_venta").value;
                                
                               if(cod === 'Camisa'){
                                   precioQ.classList.remove('.price');
                                   precioQ.textContent = '20';
                                   precioQ.classList.add('.price');
                                   document.querySelector('#precio').appendChild(precioQ);
                                } else if(cod === 'Short'){
                                  precioQ.classList.remove('.price');
                                   precioQ.textContent = '30';
                                   precioQ.classList.add('.price');
                                   document.querySelector('#precio').appendChild(precioQ);

                                } else if (cod === 'Calcetines'){
                                 precioQ.classList.remove('.price');
                                   precioQ.textContent = '5';
                                   precioQ.classList.add('.price');
                                   document.querySelector('#precio').appendChild(precioQ);

                                } else if (cod === 'Pantalon'){
                                 precioQ.classList.remove('.price');
                                   precioQ.textContent = '50';
                                   precioQ.classList.add('.price');
                                   document.querySelector('#precio').appendChild(precioQ);
                                }
                               
                                
                                /* Para obtener el texto */
                                var combo = document.getElementById("nombre_venta");
                                var selected = combo.options[combo.selectedIndex].text;
                                //alert(selected);
                                  
                            }
                            </script>

                            </label>
                                @error('nombre_venta')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success ">Comprar</button>
                    </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
