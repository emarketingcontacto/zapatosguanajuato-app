  {{-- Search Model Categories --}}
  <div class="container-search-model-categories">
    <div class="search-model-title">
        Filtrar por genero
    </div>
    <div class="searchmodelcategories">

        @foreach ($searchmodelcategories as $modelcategory)
            @switch($modelcategory->modelcatName)
                @case("Damas")
                    <form name="damas" action="{{route($bizcategory)}}" method="get">
                        @csrf
                        @method('GET')
                        <div class="searchmodelcategories-category" onclick="document.forms['damas'].submit()">
                            <input type="hidden" name="modelcat" value="Damas">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-gender-female" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8M3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5"/>
                              </svg>
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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-gender-male" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8"/>
                            </svg>
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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2 2 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386"/>
                            </svg>
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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-rocket-takeoff-fill" viewBox="0 0 16 16">
                                <path d="M12.17 9.53c2.307-2.592 3.278-4.684 3.641-6.218.21-.887.214-1.58.16-2.065a3.6 3.6 0 0 0-.108-.563 2 2 0 0 0-.078-.23V.453c-.073-.164-.168-.234-.352-.295a2 2 0 0 0-.16-.045 4 4 0 0 0-.57-.093c-.49-.044-1.19-.03-2.08.188-1.536.374-3.618 1.343-6.161 3.604l-2.4.238h-.006a2.55 2.55 0 0 0-1.524.734L.15 7.17a.512.512 0 0 0 .433.868l1.896-.271c.28-.04.592.013.955.132.232.076.437.16.655.248l.203.083c.196.816.66 1.58 1.275 2.195.613.614 1.376 1.08 2.191 1.277l.082.202c.089.218.173.424.249.657.118.363.172.676.132.956l-.271 1.9a.512.512 0 0 0 .867.433l2.382-2.386c.41-.41.668-.949.732-1.526zm.11-3.699c-.797.8-1.93.961-2.528.362-.598-.6-.436-1.733.361-2.532.798-.799 1.93-.96 2.528-.361s.437 1.732-.36 2.531Z"/>
                                <path d="M5.205 10.787a7.6 7.6 0 0 0 1.804 1.352c-1.118 1.007-4.929 2.028-5.054 1.903-.126-.127.737-4.189 1.839-5.18.346.69.837 1.35 1.411 1.925"/>
                            </svg>
                            <p>Niños</p>
                        </div>
                    </form>
                @break
                @default
            @endswitch
        @endforeach
    </div>

</div>
{{-- End Search Model Categories --}}
