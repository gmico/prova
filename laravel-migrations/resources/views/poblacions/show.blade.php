		<html><head></head><body>
@extends('app')
 
@section('content')
    <h2>{{ $poblacion->nom }}</h2>
    <h4>Nº d'habitabts: {{ $poblacion->habitants }}</h4>
 
    @if ( !$poblacion->votants->count() )
        La teva poblacio no té votants
    @else
        <ul>
            @foreach( $poblacion->votants as $votant )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('poblacions.votants.destroy', $poblacion->slug, $votant->slug))) !!}
                        <h4><a href="{{ route('poblacions.votants.show', [$poblacion->slug, $votant->slug]) }}">{{ $votant->nom }}</a></h4>
                        
                            {!! link_to_route('poblacions.votants.edit', 'Editar Votant', array($poblacion->slug, $votant->slug), array('class' => 'btn btn-info')) !!}
 
                            {!! Form::submit('Eliminar Votant', array('class' => 'btn btn-danger')) !!}
                        

                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('poblacions.index', 'Torna to Poblacions') !!} |
        {!! link_to_route('poblacions.votants.create', 'Crear Votant', $poblacion->slug) !!}
    </p>
@endsection 

</body></html>