<form method="POST" action="{{$action}}">
	@csrf
	@method("{$method}")

	<button class="table-button" action="submit">
		{{ $slot }}
	</button>
</form>