@extends('account.layouts.default')

@section('account.content')

    <div class="card">

        <div class="card-body">

            <form action="" method="post">
                {{csrf_field()}}

                <div class="form-group{{$errors->has('password_current' ? ' has-error' : '' )}}">
                    <label for="name" class="control-label">Change Password</label>
                    <input type="password" name="password_current" id="password_current" class="form-control">


                    @if($errors->has('password_current'))
                        <span class="help-block">
                            <strong>{{$errors->first('password_current')}}</strong>
                        </span>
                    @endif

                </div>





                <div class="form-group{{$errors->has('password' ? ' has-error' : '' )}}">
                    <label for="name" class="control-label">New Password</label>
                    <input type="password" name="password" id="password" class="form-control">


                    @if($errors->has('password'))
                        <span class="help-block">
                            <strong>{{$errors->first('password')}}</strong>
                        </span>
                    @endif

                </div>





                <div class="form-group{{$errors->has('password_confirm' ? ' has-error' : '' )}}">
                    <label for="name" class="control-label">New Password Again</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">


                    @if($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{$errors->first('password_confirmation')}}</strong>
                        </span>
                    @endif

                </div>





                <button type="submit" class="btn btn-primary">Change Password</button>

            </form>
        </div>
    </div>
@endsection
