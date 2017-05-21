@if (Session::has('success_alert'))

	<div class="container">
		
		<div class="notification is-success">
			{{ Session::get('success_alert') }}
		</div>

	</div>

@endif