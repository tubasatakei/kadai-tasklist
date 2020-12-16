{!! Form::open(['route' => 'tasks.store']) !!}
 <div class="form-group">
    {!! Form::textarea('content', old('content'), ['class' => 'form-control', "row" => '2']) !!}
    {!! Form::submit('Postt', ['class' => 'btn btn-primary btn-block]) !!}
</div>
{!! Form::close() !!}