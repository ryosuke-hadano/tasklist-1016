@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

    <h1>id = {{ $task->id }} のメッセージ詳細ページ</h1>
    
    <table class="table table-borderd">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $task->status }}</td>
        </tr>
        
    </table>
    {!! link_to_route("tasks.edit", "このタスクを編集", ["id" => $task->id], ["class" => "btn btn-light"]) !!}
    {!! Form::model($task, ["route" => ["tasks.destroy", $task->id], "method" => "delete"]) !!}
        {!! Form::submit("削除", ["class" => "btn btn-danger"]) !!}
    {!! Form::close() !!}

@endsection