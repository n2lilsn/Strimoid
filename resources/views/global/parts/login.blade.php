<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">logowanie <b class="caret"></b></a>
    <ul class="dropdown-menu login_menu">
        {!! Form::open(array('action' => 'UserController@login', 'class' => 'navbar-form')) !!}
        <input type="text" name="username" placeholder="Login" class="form-control" style="margin-bottom: 10px">
        <input type="password" name="password" placeholder="Hasło" class="form-control" style="margin-bottom: 10px">
        <div class="checkbox" style="padding-top: 5px">
            <label>
                <input name="remember" type="checkbox" value="true"> Zapamiętaj
            </label>
        </div>

        <button type="submit" class="btn btn-success pull-right">Zaloguj</button>
        {!! Form::close() !!}
    </ul>
</li>
<li><a href="{!! action('UserController@showRegisterForm') !!}">rejestracja</a></li>
