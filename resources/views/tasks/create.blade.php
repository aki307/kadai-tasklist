@extends('layouts.app')

@section('content')

    <h1>タスクの新規作成ページ</h1>
    
    <div class="row">
        <div class="col-6">
            {!! Form::model($task, ['route' =>'messages.store']) !!}
            
            <div class="form-group">
                {!! Form::label('content', 'タスク:') !!}
                {!! Form::text('content',null, ['class' => 'form-control']) !!}
                
                {!! Form::submit('決定') !!}
            </div>
        </div>
    </div>

@endsection