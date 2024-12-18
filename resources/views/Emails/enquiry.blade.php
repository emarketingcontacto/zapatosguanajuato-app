<x-mail::message>
# Nuevo Contacto
<h3>Name: {{$data['name']}}</h3>
<h4>Email: {{$data['email']}}</h4>
<h4>Mensaje:</h4>
<textarea name="messageContent" id="" cols="30" rows="10">
    {{$data['messageContent']}}
</textarea>
<x-mail::button :url="$url">
More Info...
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
