<div class="container-busqueda">
    <li class="nav-item">
        <form action="{{route('Busqueda')}}" method="get">
            @method('GET')
            @csrf
            <div class="busqueda-div">
                <input type="text" name="buscar" class="text-busqueda">
                <button type="submit" class="btn-buscar">
                    <span class="bi bi-search"></span>
                </button>
            </div>
        </form>
    </li>
</div>

