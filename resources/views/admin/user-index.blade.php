@extends('layouts.admin')

@section('content')

<section class="section">
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Username</th>
					<th>Email</th>
					<th>Type</th>
					<td>Emails off?</td>
				</tr>
			</thead>
			<tbody>
				@foreach ( $users as $user )
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->username }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->user_type == App\User::USER_TYPE_ADMIN ? 'Admin' : 'Normal' }}</td>
						<td>{{ is_null($user->email_off) ? '' : $user->email_off }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</section>

@endsection