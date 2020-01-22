	<div class="form-wrapper">
		<div class="form-header">{{$title ?? ''}}</div>
		<form method="POST" action="{{$action}}">
			@csrf
			@method("{$method}")
			{{ $slot }}
		</form>
	</div>