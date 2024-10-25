<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>News View</title>

@extends('layouts.Back.sidebar')
@section('content')
<div class="right_col" role="main" style="min-height: 995px;">

    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>E-commerce :: Product Page</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5  form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>
      
      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>E-commerce page design <br>
            
                <a href="{{ route('change.lang') }}" style="color: blue">
                    @if(Session::get('lang') == 'bangla')
                        English
                    @else 
                        Bangla 
                    @endif
                </a>
            </h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <div class="col-md-7 col-sm-7 ">
                <div class="product-image">
                  <img src="{{asset('storage/back/media/news/'.$result->image)}}" height="600px" alt="...">
                </div>
                
              </div>

              <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">

                <h3 class="prod_title">Titile :
                    @if(Session::get('lang') == 'bangla')
                        {{$result->bangla_title}}
                    @else 
                    {{$result->english_title}} 
                    @endif
                    
                </h3>

                <h4 class="prod_title"> Category Type: 
                    @if(Session::get('lang') == 'bangla')
                       {{$result->Category->bangla_cat_name}}
                    @else 
                    {{$result->Category->cat_name}} 
                    @endif
                    
                </h4>

                <p>
                    @if(Session::get('lang') == 'bangla')
                        {!! $result->bangla_body !!}
                    @else
                    {!! $result->english_body !!}
                    @endif

                </p>
                <br>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection