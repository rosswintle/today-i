<form class="form" role="form" method="POST" action="{{ url('/login') }}">
    {{ csrf_field() }}

    <div class="field {{ $errors->has('email') ? ' has-error' : '' }}">
        <label class="label" for="email">E-Mail Address</label>

            <p class="control">
                <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autofocus>
            </p>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </label>
    </div>

    <div class="field{{ $errors->has('password') ? ' has-error' : '' }}">
        <label class="label" for="password">Password</label>

            <p class="control">
                <input id="password" type="password" class="input" name="password" required>
            </p>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </label>
    </div>

    <div class="field">
        <p class="control">
            <label class="checkbox">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
        </p>
    </div>

    <div class="field">
        <p class="control">
            <button type="submit" class="button is-primary">
                Login
            </button>

            <a class="button is-link" href="{{ url('/password/reset') }}">
                Forgot Your Password?
            </a>
        </p>
    </div>
</form>
