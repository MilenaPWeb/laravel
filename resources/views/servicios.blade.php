@extends("layouts.app")
@section("titulo","servicios")
@section("contenido")    

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 m-6">
    @foreach ($servicios as $servicio)       
        <div class="card bg-base-90w-56 shadow-xl">
            <figure>    <img src="https://www.heatwave.com.mx/wp-content/uploads/2019/06/1-1024x576.jpg "    alt="baño" />
            </figure>
         
           
            <div class="card-body">
            <h2 class="card-title">

                {{ $servicio["nombre"]}}
            </h2>
            
            <div class="card-actions justify-end">
                <div class="badge badge-outline">{{$servicio["Precio"]}}</div>
                <div a class="link link-primary">Asignar cita</div>
          </div>
          </div>
        </div>
     @endforeach
</div>
@endsection
   