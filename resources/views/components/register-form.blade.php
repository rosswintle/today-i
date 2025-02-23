<form id="register-form" class="form" role="form" method="POST" action="{{ url('/register') }}">
    {{ csrf_field() }}

    <div class="field{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="label">Name</label>

        <p class="control">
            <input id="name" type="text" class="input" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </p>
    </div>

    <div class="field{{ $errors->has('username') ? ' has-error' : '' }}">
        <label for="username" class="label">Choose a username</label>

        <p class="control">
            <input id="username" type="text" class="input" name="username" value="{{ old('username') }}" required autofocus>

            @if ($errors->has('username'))
                <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif
        </p>
    </div>

    <div class="field{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="label">E-Mail Address</label>

        <p class="control">
            <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </p>
    </div>

    <div class="field{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="label">Password</label>

        <p class="control">
            <input id="password" type="password" class="input" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </p>
    </div>

    <div class="field">
        <label for="password-confirm" class="label">Confirm Password</label>

        <p class="control">
            <input id="password-confirm" type="password" class="input" name="password_confirmation" required>
        </p>
    </div>

    <div class="field">
        <input type="submit" class="button is-primary" value="Register">
    </div>

{{--    {!! ReCaptcha::htmlFormButton('Register', ['class' => 'button is-primary']) !!}--}}

</form>
