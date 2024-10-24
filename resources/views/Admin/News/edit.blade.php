<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Edit-News</title>

@extends('layouts.Back.sidebar')
@section('content')

 <!-- page content -->
 <div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Form Elements</h3>
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
                    <h2>Form Design <small>different form elements</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a class="dropdown-item" href="#">Settings 1</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form id="demo-form2" data-parsley-validate="" method="POST" action="" class="form-horizontal form-label-left" novalidate="" enctype="multipart/form-data">
                        @csrf
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Title (English)
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="first-name" name="eng_title" required="required" value="{{ $result->english_title }}" class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Title (Bangla)
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="first-name" name="ban_title" required="required" value="{{ $result->bangla_title }}" class="form-control ">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Select Category</label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-control" name="cat">
                                    <option>{{ $result->Category->cat_name }}</option>
                                    @foreach ($cat as $cat)
                                    <option value="{{$cat->cat_id}}">{{$cat->cat_name}}</option> 
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align ">English Body </label>
                            <div class="col-md-6 col-sm-6">
                                <textarea class="form-control" id="englishbody" placeholder="Enter the Description" value="" name="englishbody">{{ $result->english_body }}</textarea>
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align ">Bangla Body </label>
                            <div class="col-md-6 col-sm-6">
                                <textarea class="form-control" id="banglabody" placeholder="Enter the Description" name="banglabody">{{ $result->bangla_body }}</textarea>
                            </div>
                            
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="basic-icon-default-company">Main Thumbnail</label>
                            <div class="col-sm-10">
                                <img id="studentPhoto">
                              <div class="col-md-7 col-sm-6">
                                <input class="form-control" type="file" name="main_thumbnail" id="formFile"  onchange="studentphoto(this);" id="photo" accept="image/*">
                              </div>
                            </div>
                        </div>
                          {{-- Feather --}}
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">News Feather
                            
                            </label>
    
                            <div class="col-md-6 col-sm-6 ">
                                <input type="checkbox" name="on_sale" value="1" {{ $result->hero == 1 ? 'checked' : '' }} > Hero News
                                <br>
                                <input type="checkbox" name="best_rated" value="1" {{ $result->category == 1 ? 'checked' : '' }}> Category
                                <br>
                                <input type="checkbox" name="flast_sale" value="1" {{ $result->feather == 1 ? 'checked' : '' }} > Feather News
                            </div>
                            
                        </div>
                       
                
                        
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button class="btn btn-primary" type="button" onclick="window.history.back();">Cancel</button>
                                <button class="btn btn-primary" type="reset" onclick="window.location.reload();">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
    
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
  <script>
    function studentphoto(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
                  $('#studentPhoto')
                  .attr('src', e.target.result)
                  .attr("class","img-thumbnail mb-2")
              };
              reader.readAsDataURL(input.files[0]);
          }
        }
        function studentphoto1(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
                  $('#studentPhoto1')
                  .attr('src', e.target.result)
                  .attr("class","img-thumbnail mb-2")
              };
              reader.readAsDataURL(input.files[0]);
          }
        }
        </script>
    <!-- /top tiles -->
    <script>
        ClassicEditor
        .create( document.querySelector( '#englishbody' ) )
        .catch( error => {
        console.error( error );
        });
    </script>
    <script>
        ClassicEditor
        .create( document.querySelector( '#banglabody' ) )
        .catch( error => {
        console.error( error );
        });
    </script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    @endsection