@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-8">
            @if (Auth::check())
                <h1>id = {{ $task->id }}のタスク詳細ページ</h1>
    
                <table class="table table-bordered">
                    <tr>
                        <th>id</th>
                        <td>{{ $task->id }}</td>
                    </tr>
                    <tr>
                        <th>タスク</th>
                        <td>{{ $task->content }}</td>
                    </tr>
                    <tr>
                        <th>ステータス</th>
                        <td>{{ $task->status }}</td>
                    </tr>
                </table>
    
                {!! link_to_route('tasks.edit', 'このタスクを編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}
    
                {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                    {!! Form::submit('削除', ['class' => 'btn btn-dager']) !!}
                {!! Form::close() !!}
    
            @else
                <div class="center jumbotron">
                    <div class="text-center">
                         <h1>welcome to the Tasklist</h1>
                         {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection