<section class="section">
    <div class="container">        
       @foreach ($actions as $action)
	      <div class="card action">
            <div class="card-content">
		     On {{ $action->action_time->format('jS F Y') }} you <strong>{{ $action->type->name }}</strong>
		     {{ $action->text }}
             </div>
	      </div>
        @endforeach
    </div>
</section>
