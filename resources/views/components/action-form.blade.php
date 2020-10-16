<form
        x-data="{ type_id: 1, submit_date: '' }"
        x-ref="form"
        id="action-form"
        method="POST"
        action="{{ Auth::check() ? action('App\Http\Controllers\ActionController@store') : action('App\Http\Controllers\SignupController@index') }}">

    <div id="types">
        @foreach ($types as $type)
            <button
                    type="button"
                    x-on:click.prevent="type_id = {{ $type->id }}"
                    x-bind:class="{
                        'is-active': {{ $type->id }} === type_id,
                        'is-primary': {{ $type->id }} === type_id,
                        'is-info': {{ $type->id }} !== type_id
                    }"
                    class="button is-large">
                <span class="icon">
                    <i class="fa {{ $type->icon_class }}"></i>
                </span>
                <span>
                    {{ $type->name }}
                </span>
            </button>
        @endforeach
    </div>

    {{ csrf_field() }}

    <input id="typeInput" type="hidden" name="type" x-bind:value="type_id">
    <p>
        <input class="input is-large" type="text" name="text" placeholder="thing that you did...">
    </p>
    <p>
        <input id="action-date-input" type="hidden" name="action-date" x-bind:value="submit_date">
        <input type="submit" name="" value="{{ $randomness->actionButtonText() }}" class="button is-primary is-large">
    </p>
    @if ( Auth::check() )
        <p>
            <button id="submit-yesterday" class="button is-secondary is-medium" x-on:click.prevent="submit_date = 'yesterday';
            $refs['form'].submit();">
                Actually, I did this yesterday!
            </button>
        </p>
    @endif

</form>
