@foreach(   $data as $key => $val)
    {{ strtoupper($key)}} : {{ $val }}
    <br />
@endforeach