
@extends("layouts.app")
@section("titulo","sedes")
@section("contenido")    

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 m-6">
    @foreach ($sedes as $sede)       
        <div class="card bg-base-90w-56 shadow-xl">
            <figure>    <img src="https://www.idt.gov.co/sites/default/files/styles/large/public/articles/WhatsApp%20Image%202023-08-08%20at%201.00.59%20PM.jpeg?itok=odl2Yovi "    alt="baño" />
            </figure>
         
           
            <div class="card-body">
            <h2 class="card-title">

                {{ $sede["nombre"]}}
            </h2>
            
            <div class="card-actions justify-end">
                <div class="badge badge-outline">{{$sede["direccion"]}}</div>
                </div>
          </div>
        </div>
     @endforeach
</div>
@endsection
   



  
   