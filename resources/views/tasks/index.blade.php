@extends('layouts.app')
@extends('commons.navbar')
@section('content')
 @if (Auth::check())
    <h1>タスク一覧</h1>
    
    @if (count($tasks) >0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク名</th>
                    <th>進捗</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('tasks.create', '新たなタスクの決定', [], ['class' => 'btn btn-primary']) !!}
@else
    <h1>タスク一覧</h1>
    {!! link_to_route('login', 'まずログインしてください',[],['class' => 'btn btn-primary']) !!}
@endif
@endsection