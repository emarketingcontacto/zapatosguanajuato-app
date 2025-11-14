{{-- css --}}
    {{-- local --}}
    {{-- <link rel="stylesheet" href="{{ URL::asset('css/components/submenu-subcategories.css') }}" /> --}}
    {{-- online --}}
    <link rel="stylesheet" href="{{ URL::asset('css/online/components/submenu-subcategories-min.css') }}" />
{{-- endcss --}}




<div class="submenusubcategories-main">
    <div class="submenusubcategories-container">
        <div class="submenusubcategories-title">
            <p>Buscar por Tipo de Calzado</p>
        </div>
        <div class="submenusubcategories-subcategories">
            @foreach ($modelsubcategories as $modelsubcategory)
                <div class="submenusubcategories-subcategory">
                    @if ($genero =='Niños')
                        @php $genero = 'ninos';@endphp
                    @endif
                    @if ($genero =='Niñas')
                        @php $genero = 'ninas';@endphp
                    @endif
                    @if ($genero =='Hombres')
                        @php $genero = 'hombres';@endphp
                    @endif
                     <a class="{{($tipo == strtolower($modelsubcategory->modelsubcatName) ? 'submenusubcategories-subcategory-active' :'' )}}" href="{{route($categoria.'.showTipo', ['genero'=>$genero,'tipo'=>strtolower($modelsubcategory->modelsubcatName)] )}}">{{$modelsubcategory->modelsubcatName}}</a>
                </div>
            @endforeach

        </div>
    </div>
</div>
