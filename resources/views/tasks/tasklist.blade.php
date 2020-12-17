@if (count($tasks) > 0)
    <ul class="list-unstyled">
        @foreach ($tasks as $tasklist)
            <li class="media mb-3">
                <div>
                    <p class="mb-0">{!! nl2br(e($tasklist->content)) !!}</p>
                </div>
                <div>
                    @if (Auth::id() == $tasklist->user_id)
                        {!! Form::open(['route' => ['tasks.destroy', $tasklist->id], 'method' => 'delete']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    @endif
                </div>
            </li>
        @endforeach
    </ul>

    {{ $tasks->links() }}
@endif