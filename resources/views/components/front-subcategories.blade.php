<div class="front-subcategories">
    <div class="front-title">
        <div class="front-title-shoes">
            <h5>Ver por tipo de Zapato</h5>
        </div>
    </div>
        @foreach ($frontSubcategories as $frontSubcat)
            <a href="{{route('Subcategories')}}?subcategory={{$frontSubcat->modelsubcatName}}">
                <div class="{{$frontSubcat->modelsubcatName}}">
                    <h4>{{$frontSubcat->modelsubcatName}}</h4>
                </div>
            </a>
        @endforeach

</div>
