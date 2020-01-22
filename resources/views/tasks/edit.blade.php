@extends('layouts/page')

@section('header')
	<title>Task List - Task Editor</title>
@endsection

@section('content')
	<h1>Task List</h1>

	<h2>Task Editor</h2>

	@component('components/form', [
		'method' => "PATCH", 
		'action' => "/tasks/{$task->id}"
		])
		@slot('title')
			Edit: {{ $task->title }}
		@endslot
		
		<input name="title" type="text" value="{{ $task->title }}">
		<textarea name="description" type="textarea">{{ $task->description }}</textarea>
		<button action="submit">Edit Task</button>

	@endcomponent
@endsection