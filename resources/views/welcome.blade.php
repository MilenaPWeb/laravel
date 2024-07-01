@extends("layouts.app")
@section("titulo","productos")
@section("contenido")    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 m-6">
      @foreach ($productos as $producto)       
            <div class="card bg-base-80w-46shadow-xl">
                <figure>    <img src="https://puppiscolombia.vteximg.com.br/arquivos/ids/186693-1000-1000/pelota-para-perro-ultra-squeaker-ball-chuckit-m.png?v=638197889570400000 "    alt="Juguete" />
                </figure>
             
               
                <div class="card-body">
                <h2 class="card-title">

                    {{ $producto["nombre"]}}
                    <div class="badge badge-secondary">NEW</div>
                </h2>
                
                <div class="card-actions justify-end">
                    <div class="badge badge-outline">{{$producto["Precio"]}}</div>
                    <div a class="link link-primary">Comprar</div>
              </div>
              </div>
            </div>
      @endforeach
    </div>
@endsection

