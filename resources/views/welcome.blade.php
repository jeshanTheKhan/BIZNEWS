<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BizNews - Free News Website Template</title>
@extends('layouts.Front.frontend')
@section('content')


    <!-- Main News Slider Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">
                    @php
                    $hero = App\Models\News::where('status', 1)
                         ->where('hero', 1)
                         ->orderBy('news_id', 'desc')
                         ->take(3)
                         ->get();
                 @endphp
                 @foreach ($hero as $hero)
                 <div class="position-relative overflow-hidden" style="height: 500px;">
                       
                    <img class="img-fluid h-100" src="{{asset('storage/back/media/news/'.$hero->image)}}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">
                                @if(Session::get('lang') == 'bangla')
                                    {{$hero->Category->bangla_cat_name}}
                            @else 
                                {{$hero->Category->cat_name}}
                            @endif  
                                
                            </a>
                            <a class="text-white" href="">{{$hero->date}}</a>
                        </div>
                        <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="">
                            @if(Session::get('lang') == 'bangla')
                                    {{$hero->bangla_title}}
                            @else 
                                {{$hero->english_title}}
                            @endif  
                        </a>
                    </div>
                </div>
                 @endforeach
                    
                </div>
            </div>
            <div class="col-lg-5 px-0">
                <div class="row mx-0">
                    @php
                    $cate = App\Models\News::where('status', 1)
                         ->where('category', 1)
                         ->orderBy('news_id', 'desc')
                         ->take(4)
                         ->get();
                 @endphp
                 @foreach ($cate as $cate)
                 <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100" src="{{asset('storage/back/media/news/'.$cate->image)}}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">
                                    @if(Session::get('lang') == 'bangla')
                                    {{$cate->Category->bangla_cat_name}}
                            @else 
                                {{$cate->Category->cat_name}}
                            @endif 
                                </a>
                                <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">
                                @if(Session::get('lang') == 'bangla')
                                    {{$cate->bangla_title}}
                            @else 
                                {{$cate->english_title}}
                            @endif  
                            </a>
                        </div>
                    </div>
                </div>
                 @endforeach
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Breaking News Start -->
    <div class="container-fluid bg-dark py-3 mb-3">
        <div class="container">
            <div class="row align-items-center bg-dark">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">Breaking News</div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                            style="width: calc(100% - 170px); padding-right: 90px;">
                            @foreach($breakingnews as $breakingnews)
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="">
                                @if(Session::get('lang') == 'bangla')
                                {{ $breakingnews->bangla_news }}
                            @else 
                            {{ $breakingnews->english_news }}
                            @endif    
                            </a></div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->


    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                @php
                $fea = App\Models\News::where('status', 1)
                     ->where('feather', 1)
                     ->orderBy('news_id', 'desc')
                     ->take(6)
                     ->get();
             @endphp
                @foreach ($fea as $fea)
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="{{asset('storage/back/media/news/'.$fea->image)}}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">
                                @if(Session::get('lang') == 'bangla')
                                {{$fea->Category->bangla_cat_name}}
                        @else 
                            {{$fea->Category->cat_name}}
                        @endif 
                            </a>
                            <a class="text-white" href=""><small>{{$fea->date}}</small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">
                            @if(Session::get('lang') == 'bangla')
                            {{$fea->bangla_title}}
                    @else 
                        {{$fea->english_title}}
                    @endif  
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Featured News Slider End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            @foreach ($news as $news)
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{asset('storage/back/media/news/'.$news->image)}}" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">
                                            @if(Session::get('lang') == 'bangla')
                                                {{$news->Category->bangla_cat_name}}
                                            @else 
                                                {{$news->Category->cat_name}}
                                            @endif 
                                        </a>
                                        <a class="text-body" href=""><small>{{$news->date}}</small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">
                                        @if(Session::get('lang') == 'bangla')
                                                {{$news->bangla_title}}
                                            @else 
                                                {{$news->english_title}}
                                            @endif 
                                    </a>
                                    <p class="m-0">
                                        @if(Session::get('lang') == 'bangla')
                                        {{ Str::words($news->bangla_title, 5, '...') }}
                                    @else 
                                    {{ Str::words($news->english_title, 5, '...') }}
                                    @endif 
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                        <small>John Doe</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <a href="{{$admin->facebook}}" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                                <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Fans</span>
                            </a>
                            <a href="{{$admin->twitter}}" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                                <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                            <a href="{{$admin->linkedln}}" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                                <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Connects</span>
                            </a>
                            <a href="{{$admin->instagram}}" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                                <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                            <a href="{{$admin->youtube}}" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                                <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Subscribers</span>
                            </a>
                        </div>
                    </div>
                    <!-- Social Follow End -->


                    <!-- Popular News Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            @php
                                $trending = App\Models\News::where('status', 1)
                                        ->orderBy('news_id', 'desc')
                                        ->take(6)
                                        ->get();
                            @endphp
                            @foreach ($trending as $trending)
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="{{asset('storage/back/media/news/'.$trending->image)}}" width="70px" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">
                                            @if(Session::get('lang') == 'bangla')
                                                {{$trending->Category->bangla_cat_name}}
                                            @else 
                                                {{$trending->Category->cat_name}}
                                            @endif 
                                        </a>
                                        <a class="text-body" href=""><small>{{$trending->date}}</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">
                                        @if(Session::get('lang') == 'bangla')
                                        {{ Str::words($trending->bangla_title, 5, '...') }}
                                    @else 
                                    {{ Str::words($trending->english_title, 5, '...') }}
                                    @endif 
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                    <!-- Popular News End -->

                    <!-- Newsletter Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>
                            <div class="input-group mb-2" style="width: 100%;">
                                <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                                </div>
                            </div>
                            <small>Lorem ipsum dolor sit amet elit</small>
                        </div>
                    </div>
                    <!-- Newsletter End -->

                    <!-- Tags Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <div class="d-flex flex-wrap m-n1">
                                @php
                                    $category = App\Models\Category::all();
                                @endphp
                                @foreach($category as $category)
                        <a href="#" class="dropdown-item">
                            @if(Session::get('lang') == 'bangla')
                                {{ $category->bangla_cat_name }}
                            @else 
                            {{ $category->cat_name }}
                            @endif
                        </a>
                        @endforeach
                                
                            </div>
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->


@endsection