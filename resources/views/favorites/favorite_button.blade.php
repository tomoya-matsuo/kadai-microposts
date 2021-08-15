@if (Auth::user()->is_favoriting($micropost->id))
        {{--お気に入り削除のフォーム--}}
        {!! Form::open(['route' => ['favorites.unfavorite',$micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite',['class' => "btn btn-success btn-sm"]) !!}
        {!! Form::close() !!}    
@else
        {{--お気に入りボタンのフォーム--}}
        {!! Form::open(['route' => ['favorites.favorite',$micropost->id]]) !!}
            {!! Form::submit('Favorite',['class' => "btn btn-warning btn-sm"]) !!}
        {!! Form::close() !!}    
@endif
