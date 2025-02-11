  {{-- Search Model Categories --}}
  <div class="d-grid w-100 justify-content-center ">
    <div class="searchmodelcategories">

        @foreach ($searchmodelcategories as $modelcategory)
            @switch($modelcategory->modelcatName)
                @case("Damas")
                    <form name="damas" action="{{route($bizcategory)}}" method="get">
                        @csrf
                        @method('GET')
                        <div class="searchmodelcategories-category" onclick="document.forms['damas'].submit()">
                            <input type="hidden" name="modelcat" value="Damas">
                            <i class="bi bi-gender-female"></i>
                            <p>Damas</p>
                        </div>
                    </form>
                @break

                @case("Hombres")
                    <form name="hombre" action="{{route($bizcategory)}}" method="get">
                        @csrf
                        @method('GET')
                        <div class="searchmodelcategories-category" onclick="document.forms['hombre'].submit()" >
                            <input type="hidden" name="modelcat" value="Hombres">
                            <i class="bi bi-gender-male"></i>
                            <p>Hombres</p>
                        </div>
                    </form>
                @break

                @case("Niñas")
                    <form name="ninas" action="{{route($bizcategory)}}" method="get">
                        @csrf
                        @method('GET')
                        <div class="searchmodelcategories-category" onclick="document.forms['ninas'].submit()">
                            <input type="hidden" name="modelcat" value="Niñas">
                            <i class="bi bi-balloon-heart-fill"></i>
                            <P>Niñas</P>
                        </div>
                    </form>
                @break

                @case("Niños")
                    <form name="ninos" action="{{route($bizcategory)}}" method="get">
                        @csrf
                        @method('GET')
                        <div class="searchmodelcategories-category" onclick="document.forms['ninos'].submit()">
                            <input type="hidden" name="modelcat" value="Niños">
                            <i class="bi bi-balloon-fill"></i>
                            <p>Niños</p>
                        </div>
                    </form>
                @break
                @default
            @endswitch
        @endforeach
    </div>
    <div class="search-model-title">
        Filtrar por genero
    </div>
</div>
{{-- End Search Model Categories --}}
