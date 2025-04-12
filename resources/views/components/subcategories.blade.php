    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tipos de Calzado
        </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    @foreach ($modelsubcategories as $modelsubcategory )
        <li><a class="dropdown-item" href="{{route('Subcategories')}}?subcategoria={{$modelsubcategory->modelsubcatName}}">{{$modelsubcategory->modelsubcatName}}</a></li>
    @endforeach
</ul>
</li>

