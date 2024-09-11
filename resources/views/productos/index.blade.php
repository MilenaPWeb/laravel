@extends("layouts.app")
@section("titulo","productos")
@section("contenido")    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 m-6">
      @foreach ($productos as $producto)       
            <div class="card bg-base-80w-46shadow-xl">
                <figure>    <img src="https://source.unsplash.com/random/?pets&{{ $producto->Nombre}}"alt="{{$producto->Nombre}}" />
                </figure>
             
               
                <div class="card-body">
                <h2 class="card-title">

                    {{ $producto->Nombre}}
                   
                    <div class="badge badge-secondary">${{$producto->Precio}}</div>
                </h2>
                <P>{{Str::limit($producto->Descripcion,50)}}</P>
                <div class="card-actions justify-end">
                   <a href="{{ route("productos.edit", $producto->id)}}" class=" btn btn-xs btn-secondary"> Editar</a>
                   <form action="{{route("productos.destroy",$producto->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                   <button type="submit" class="btn btn-xs btn-error">Eliminar</button>
                   </form>
              </div>
              </div>
            </div>
      @endforeach
    </div>
@endsection

