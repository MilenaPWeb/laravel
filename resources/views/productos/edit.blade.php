@extends("layouts.app")
@section("titulo","Editar Producto")
@section("cabecera","Editar Producto")

@section("contenido")  
    <div class="flex justify-center my-6">
        <div class=" card w-96 shadow-2x1 bg-base-100">
            <div class="card-body">
                <form action="{{route("productos.update", $producto->id)}}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="form-control">
                        <label for="nombre" class="label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="input input-bordered" placeholder="Nombre del producto"value="{{$producto->nombre}}" required/>
                    </div>
                    <div>
                        <label for="categoria" class="label">Categoria</label>
                        <input name="text" name="categoria" id="categoria" class="textarea textarea-bordered" placeholder="categoria del producto" value="{{$producto->categoria}}"/>
                    <div>
                        <label for="descripcion" class="label">Descripcion</label>
                        <input name="text" name="descripcion" id="descripcion" class="textarea textarea-bordered" placeholder="Descripcion del producto" value="{{$producto->descripcion}}"/>
                    </div>
                    <div>
                        <label for="precio" class="label">Precio</label>
                        <input type="number" name="precio" id="precio" class="input input-bordered" placeholder="Precio del producto" value="{{$producto->precio}}" required/>
                    </div>
                    <div>
                        <label for="stock" class="label">Stock</label>
                        <input type="number" name="stock" id="stock" class="input input-bordered" placeholder="Stock del producto" value="{{$producto->stock}}"required/>
                    </div>

                    <button type="submit" class="btn btn-primary">Actualizar</button>

                </form>

            </div>
           
        </div>
     </div>
    @endsection