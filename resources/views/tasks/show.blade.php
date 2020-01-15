@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }}のタスク詳細ページ</h1>
    
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
    {!! link_to_route('messages.edit', 'このメッセージを編集', ['id' =>$message->id], ['class' => 'btn btn-light' ]) !!}
    
    {!! Form::model($task, ['route' => ['messages.destroy', %task->id],
        {!! Form::submit('削除', ['class'='btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection