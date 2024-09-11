@extends("layouts.app")
@section("titulo","Crear producto")
@section("cabecera","Crear producto")

@section("contenido")  
    <div class="flex justify-center my-6">
        <div class=" card w-96 shadow-2x1 bg-base-100">
            <div class="card-body">
                <form action="{{ route("productos.store") }}" method="POST">
                    @csrf
                    <div class="form-control">
                        <label  class="label" for=Nombre>
                            <span class="label-text">Nombre</span>
                            </label>
                        <input type="text" name="nombre" id="nombre" class="input input-bordered" placeholder="Nombre del producto" required/>

                    </div>
                    <div>
                        <label for="categoria" class="label">Categoria</label>
                        <input name="text" name="categoria" id="categoria" class="textarea textarea-bordered" placeholder="categoria del producto" />
                    </div>
                    <div>
                        <label for="descripcion" class="label">Descripcion</label>
                        <input name="text" name="descripcion" id="descripcion" class="textarea textarea-bordered" placeholder="Descripcion del producto" />
                    </div>
                    <div>
                        <label for="precio" class="label">Precio</label>
                        <input type="number" name="precio" id="precio" class="input input-bordered" placeholder="Precio del producto" required/>
                    </div>
                    <div>
                        <label for="stock" class="label">Stock</label>
                        <input type="number" name="stock" id="stock" class="input input-bordered" placeholder="Stock del producto" required/>
                    </div>
<br>
                    <button type="submit" class="btn btn-primary">Crear producto</button>
                    <a href="{{route("productos.index")}}" class="btn btn-outline btn-primary  mt-4">Cancelar</a>

                </form>

            </div>
           
        </div>
     </div>
    @endsection