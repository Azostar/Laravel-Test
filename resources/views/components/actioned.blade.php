@if( session('actioned') )
	<div class="actioned">
		{{ $slot }}

		@if( session('actioned') == 'update' )
			{{ $update }}
		@elseif( session('actioned') == 'store' )
			{{ $store }}
		@elseif( session('actioned') == 'destroy')
			{{ $destroy }}
		@endif

	</div>
@endif