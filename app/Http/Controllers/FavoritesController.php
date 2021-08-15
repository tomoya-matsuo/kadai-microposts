<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入りするアクション。
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
     
     public function store($micropost)
     {
         // 認証済みユーザが、idの投稿をお気に入りする
         \Auth::user()->favorite($micropost);
         // 前のURLへリダイレクトさせる
         return back();
     }
     
      /**
     * 投稿のお気に入り削除をするアクション
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
     public function destroy($micropost)
     {
         //認証済みユーザが、idの投稿のお気に入りを削除する
         \Auth::user()->unfavorite($micropost);
         // 前のURLへリダイレクトさせる
         return back();
     }
}
