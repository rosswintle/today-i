<form id="action-form" method="POST" action="{{ action('ActionController@store') }}">

    <div id="types">
        @foreach ($types as $type)
            <button data-type-id="{{ $type->id }}" class="button is-info is-large">
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

    <input id="typeInput" type="hidden" name="type" value="1">
    <p>
        <input class="input is-large" type="text" name="text" placeholder="thing that you did...">
    </p>
    <p>
        <input type="submit" name="submit" value="Boom!" class="button is-primary is-large">
    </p>

</form>
