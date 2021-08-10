@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            {{--ユーザ一覧--}}
            @include('user.card')
        </aside>
        <div class="col-sm-8">
            {{--タブ--}}
            @include('users.navtabs')
            {{--ユーザ一覧--}}
            @include('users.users')
        </div>
    </div>
@endsection    