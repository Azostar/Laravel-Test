@extends('layouts/page')

@section('header')
	<title>Task List</title>
@endsection

@section('content')
	<h1>Task List</h1>
	<p>
		This page is for adding, changing and deleting task objects from a database using the Laravel framework.
	</p>
	@component('components/actioned')

		@slot('update')
			Task updated successfully
		@endslot

		@slot('store')
			Task added to list
		@endslot

		@slot('destroy')
			Task removed from list
		@endslot

	@endcomponent
	<table>
		<thead>
			<tr> 
				<td>Table of Tasks</td>
			</tr>
		</thead>
		<tbody>
			@foreach($tasks as $task)
				<tr class="task-item">
					<td>
						{{ $task->title }}
					</td>
					<td>
						{{ $task->description }}
					</td>
					<td class="icon">
						@component('components/tablebutton', [
							'method' => 'GET',
							'action' => "/tasks/{$task->id}/edit"
							])

							&#9998;
							
						@endcomponent
					</td>
					<td class="icon">
						@component('components/tablebutton', [
							'method' => 'DELETE', 
							'action' => "/tasks/{$task->id}"
							])

							&#10006;

						@endcomponent
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	@component('components/form', [
		'method' => 'POST', 
		'action' => '/tasks'
		])

		@slot('title')
			Add Task
		@endslot
		
		<input name="title" type="text" placeholder="Task Name">
		<textarea name="description" type="textarea" placeholder="Description"></textarea>
		<button action="submit">Add Task</button>

	@endcomponent
@endsection