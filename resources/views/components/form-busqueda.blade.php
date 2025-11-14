{{-- css --}}
    {{-- local --}}
        {{-- <link rel="stylesheet" href="{{ URL::asset('css/components/form-busqueda.css') }}" /> --}}
    {{-- online --}}
    <link rel="stylesheet" href="{{ URL::asset('css/online/components/form-busqueda-min.css') }}" />
{{-- end css --}}
<div class="busqueda-container">
        <form action="{{route('Busqueda')}}" method="get">
            @method('GET')
            @csrf
            <div class="busqueda-div">
                <input type="text" name="buscar" class="text-hero-busqueda" placeholder="Buscar Proveedor">
                <button type="submit" class="btn-hero-busqueda">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                </button>
            </div>
        </form>
</div>
