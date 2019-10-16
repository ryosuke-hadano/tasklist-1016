@extends('layouts.app')

@section('content')
    <h1>タスク一覧</h1>
    
    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タイトル</th>
                    <th>タスク</td>
                </tr>
                
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route("tasks.show", $task->id, ["id" => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route("tasks.create", "新規タスクの投稿", [], ["class" => "btn btn-primary"]) !!}

   
<!-- ここにページ毎のコンテンツを書く -->

@endsection