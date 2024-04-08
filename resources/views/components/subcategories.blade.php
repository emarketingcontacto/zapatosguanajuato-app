    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Subcategorias
        </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    @foreach ($modelsubcategories as $modelsubcategory )
    {{-- <li><a class="dropdown-item" href="/Subcategories?subcategory={{$modelsubcategory->modelsubcatName}}">{{$modelsubcategory->modelsubcatName}}</a></li> --}}
    <li><a class="dropdown-item" href="{{route('Subcategories')}}?subcategory={{$modelsubcategory->modelsubcatName}}">{{$modelsubcategory->modelsubcatName}}</a></li>
    {{-- href="{{route('Factories')}}" --}}

    @endforeach
</ul>
</li>

