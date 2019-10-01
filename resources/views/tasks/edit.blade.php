@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のメッセージ編集ページ</h1>
    
    <div class="row">
        <div class="col-6">
            {!! Form::model($task, ["route" => ["tasks.update", $task->id], "method" => "put"]) !!}
            
            <div class="form-group">
                    {!! Form::label("status", "ステータス:") !!}
                    {!! Form::text("status", null, ["class" => "form-control"]) !!}
                </div>
                
            <div class="form-group">
                {!! Form::label("content", "タスク:") !!}
                {!! Form::text("content", null, ["class" => "form-control"]) !!}
            </div>
            
            {!! Form::submit("更新", ["class" => "btn btn-light"]) !!}
            
            {!! Form::close() !!}
        </div>
    </div>
<!-- ここにページ毎のコンテンツを書く -->

@endsection