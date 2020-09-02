{{-- 共通ヘッダー読み込み --}}
@extends('layouts.header')
{{-- ページタイトル埋め込み --}}
@section('title','マイページ')

@section('content')
<div class="navigation bg-light">
    {{-- お気に入り・行ってみたい・いまいちのタブ形式ナビゲーション --}}
    <ul class="nav nav-tabs sticky-top">
        <li class="nav-item">
            <a href="#favorite" class="nav-link active" data-toggle="tab">
                <i class="fas fa-heart faa-tada animated-hover"></i><span class="d-none d-md-inline pl-1">お気に入り</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#someday" class="nav-link" data-toggle="tab">
                <i class="fas fa-star faa-tada animated-hover"></i><span class="d-none d-md-inline pl-1">行ってみたい</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#disliked" class="nav-link" data-toggle="tab">
                <i class="fas fa-heart-broken faa-tada animated-hover"></i><span class="d-none d-md-inline pl-1">いまいち</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#new" class="nav-link" data-toggle="tab">
                <i class="fas fa-plus faa-tada animated-hover"></i><span class="d-none d-md-inline pl-1">新規登録</span>
            </a>
        </li>
    </ul>
    {{-- タブの中身 --}}  
    <div class="tabcontent">
        {{-- 検索バー --}}  
        <div class="search-bar">
          <div class="navbar-nav navbar-expand navbar-light bg-info p-0">
              <div class="row">
                  <button class="btn btn-primary all col-3">全記事</button>
                  <button class="btn btn-primary self col-3">マイ記事</button>
                  <button class="btn btn-primary search col-3" data-toggle="modal" data-target="#search-menu"><i class="fas fa-search"></i></button>
                  {{-- モーダルダイアログに検索メニューを載せる --}}
                  <div class="modal fade" id="seatch-menu" tabindex="-1">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button class="close" data-dismiss="modal"><span>&times;</span></button>
                              </div>
                              <div class="modal-body">
                                  <form>
                                      <div class="form-group mb-4">
                                          <label class="sr-only" for="kw">検索キーワード</label>
                                          <input type="search" class="form-control" placeholder="キーワード" id="kw"><br>
                                      </div>
                                      <div class="form-group mb-4 city">
                                          <label for="receipt">都道府県</label>
                                          <select class="form-control" id="city">
                                              <option>未選択</option>
                                              <option>北海道</option>
                                              <option>青森</option>
                                              <option>東京</option>
                                          </select>
                                      </div>
                                      <div class="form-group mb-4">
                                          <label for="receipt">カテゴリ</label>
                                          <select class="form-control" id="category">
                                              <option>未選択</option>
                                              <option>グルメ</option>
                                              <option>ファッション</option>
                                              <option>雑貨</option>
                                          </select>
                                      </div>
                                      <button type="submit" class="btn btn-primary">検索</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="tab-pane fade show active" id="favorite">
            <a class="card mb-3 btn" href="#">
                <div class="row no-gutters">
                    <div class="col-4 mx-auto">
                       <img class="card-img" src="https://1.bp.blogspot.com/-mT0SI1MDrK4/XwkxgFf5MHI/AAAAAAABaBY/q6p_E_edBKYDE8NHITw8pZOhGboGpkGOwCNcBGAsYHQ/s1600/food_pork_chup.png"> 
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <div class="row">
                                <h5 class="card-title d-inline-block col-6">タイトル</h5>
                                <h5 class="card-subtitle d-inline-block col-6">★★★★★</h5>
                            </div>
                            <div class="row">
                                <p class="card-text place d-inline-block col-6">都道府県</p>
                                <p class="card-text category d-inline-block col-6">カテゴリ</p>
                            </div>
                        　  <div class="row">
                        　       <p class="card-text summary d-block col-12">概要</p>
                        　  </div>
                        　　
                        </div>
                    </div>
                </div>
            </a>
            <a class="card mb-3 btn" href="#">
                <div class="row no-gutters">
                    <div class="col-4 mx-auto">
                       <img class="card-img" src="https://1.bp.blogspot.com/-mT0SI1MDrK4/XwkxgFf5MHI/AAAAAAABaBY/q6p_E_edBKYDE8NHITw8pZOhGboGpkGOwCNcBGAsYHQ/s1600/food_pork_chup.png"> 
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <div class="row line1">
                                <h5 class="card-title d-inline-block col-6">タイトル</h5>
                                <h5 class="card-subtitle d-inline-block col-6">★★★★★</h5>
                            </div>
                            <div class="row line2">
                                <p class="card-text city d-inline-block col-6">都道府県</p>
                                <p class="card-text category d-inline-block col-6">カテゴリ</p>
                            </div>
                        　  <div class="row line3">
                        　       <p class="card-text summary d-block col-12">概要</p>
                        　  </div>
                        　　
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="tab-pane fade" id="someday">
　　　　　　<a class="card mb-3 btn" href="#">
                <div class="row no-gutters">
                    <div class="col-4 mx-auto">
                       <img class="card-img" src="https://1.bp.blogspot.com/-mT0SI1MDrK4/XwkxgFf5MHI/AAAAAAABaBY/q6p_E_edBKYDE8NHITw8pZOhGboGpkGOwCNcBGAsYHQ/s1600/food_pork_chup.png"> 
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <div class="row">
                                <h5 class="card-title d-inline-block col-6">タイトル</h5>
                                <h5 class="card-subtitle d-inline-block col-6">★★★★★</h5>
                            </div>
                            <div class="row">
                                <p class="card-text place d-inline-block col-6">都道府県</p>
                                <p class="card-text category d-inline-block col-6">カテゴリ</p>
                            </div>
                        　  <div class="row">
                        　       <p class="card-text summary d-block col-12">概要</p>
                        　  </div>
                        　　
                        </div>
                    </div>
                </div>
            </a>
            <a class="card mb-3 btn" href="#">
                <div class="row no-gutters">
                    <div class="col-4 mx-auto">
                       <img class="card-img" src="https://1.bp.blogspot.com/-mT0SI1MDrK4/XwkxgFf5MHI/AAAAAAABaBY/q6p_E_edBKYDE8NHITw8pZOhGboGpkGOwCNcBGAsYHQ/s1600/food_pork_chup.png"> 
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <div class="row line1 h-20">
                                <h5 class="card-title d-inline-block col-6">タイトル</h5>
                                <h5 class="card-subtitle d-inline-block col-6">★★★★★</h5>
                            </div>
                            <div class="row line2 h-15">
                                <p class="card-text city d-inline-block col-6">都道府県</p>
                                <p class="card-text category d-inline-block col-6">カテゴリ</p>
                            </div>
                        　  <div class="row line3 h-65">
                        　       <p class="card-text summary d-block col-12">概要</p>
                        　  </div>
                        　　
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="tab-pane fade" id="disliked">
            <a class="card mb-3 btn" href="#">
                <div class="row no-gutters">
                    <div class="col-4 mx-auto">
                       <img class="card-img" src="https://1.bp.blogspot.com/-mT0SI1MDrK4/XwkxgFf5MHI/AAAAAAABaBY/q6p_E_edBKYDE8NHITw8pZOhGboGpkGOwCNcBGAsYHQ/s1600/food_pork_chup.png"> 
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <div class="row">
                                <h5 class="card-title d-inline-block col-6">タイトル</h5>
                                <h5 class="card-subtitle d-inline-block col-6">★★★★★</h5>
                            </div>
                            <div class="row">
                                <p class="card-text place d-inline-block col-6">都道府県</p>
                                <p class="card-text category d-inline-block col-6">カテゴリ</p>
                            </div>
                        　  <div class="row">
                        　       <p class="card-text summary d-block col-12">概要</p>
                        　  </div>
                        　　
                        </div>
                    </div>
                </div>
            </a>
            <a class="card mb-3 btn" href="#">
                <div class="row no-gutters">
                    <div class="col-4 mx-auto">
                       <img class="card-img" src="https://1.bp.blogspot.com/-mT0SI1MDrK4/XwkxgFf5MHI/AAAAAAABaBY/q6p_E_edBKYDE8NHITw8pZOhGboGpkGOwCNcBGAsYHQ/s1600/food_pork_chup.png"> 
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <div class="row line1 h-20">
                                <h5 class="card-title d-inline-block col-6">タイトル</h5>
                                <h5 class="card-subtitle d-inline-block col-6">★★★★★</h5>
                            </div>
                            <div class="row line2 h-15">
                                <p class="card-text city d-inline-block col-6">都道府県</p>
                                <p class="card-text category d-inline-block col-6">カテゴリ</p>
                            </div>
                        　  <div class="row line3 h-65">
                        　       <p class="card-text summary d-block col-12">概要</p>
                        　  </div>
                        　　
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="tab-pane fade" id="new">
            <h3>新規登録</h3>
        </div>
    </div>
</div>

@endsection
