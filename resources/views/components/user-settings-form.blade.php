<form class="form" role="form" method="POST" action="{{ action('UserSettingsController@update', ['user' => $user->id ]) }}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    
    <div class="field{{ $errors->has('name') ? ' has-error' : '' }}">
        <label class="label" for=" name">Name</label>

            <p class="control">
                <input id="name" type="text" class="input" name="name" required value="{{ $user->name }}">
            </p>

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </label>
    </div>

    <div class="field {{ $errors->has('email') ? ' has-error' : '' }}">
        <label class="label" for="email">E-Mail Address</label>
            <p>
                <em>
                    Sorry - you can't change your email address at the moment.
                </em>
            </p>
            <p class="control">
                <input disabled id="email" type="email" class="input" name="email" value="{{ $user->email }}" required autofocus>
            </p>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </label>
    </div>

    <div class="field{{ $errors->has('email_hour') ? ' has-error' : '' }}">
        <label class="label" for="password">Email hour</label>

            <p>
                <em>
                    This is the hour at which your daily reminder email is sent. It is currently in
                    GMT only. So if you're not in the UK, or if it's summer time, then be careful!
                </em>
            </p>
            <p class="control">
                <span class="select">
                    <select id="email_hour" class="select" name="email_hour" required>
                        @foreach ( range(0,23) as $thisHour )
                            <option value="{{ $thisHour }}" {{ $thisHour == $user->email_hour ? 'selected' : '' }}>
                                {{ $thisHour }}
                            </option>
                        @endforeach
                    </select>
                </span>
            </p>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </label>
    </div>

    <div class="field{{ $errors->has('email_off') ? ' has-error' : '' }}">
        <p class="control">
            <label class="checkbox" for="email_off">

                <input type="checkbox" class="checkbox" id="email_off" name="email_off" value="1" {{ is_null($user->email_off) ? '' : 'checked' }}>
                <em>
                    Stop sending daily emails.
                </em>

                @if ($errors->has('email_off'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email_off') }}</strong>
                    </span>
                @endif
            </label>
        </p>
    </div>

    <div class="field">
        <p class="control">
            <button type="submit" class="button is-primary">
                Update settings
            </button>
        </p>
    </div>
</form>
