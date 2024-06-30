


<h1>Algunos de nuestros articulos</h1>
    <UL>
        @foreach ($productos as $producto)
    <li>
        {{$producto["nombre"]}}
        {{$producto["categoria"]}}

    </li>
    @endforeach
    </UL>