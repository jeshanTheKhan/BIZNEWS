<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Add-News</title>

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
                    <form id="demo-form2" data-parsley-validate="" method="POST" action="" class="form-horizontal form-label-left" novalidate="">
                        @csrf
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Title (English)
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="first-name" name="cat_name" required="required" class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Title (Bangla)
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="first-name" name="cat_name" required="required" class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">1st Sub-Title (English)
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="first-name" name="cat_name" required="required" class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">1st Sub-Title (Bangla)
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="first-name" name="cat_name" required="required" class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">2nd Sub-Title (English)
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="first-name" name="cat_name" required="required" class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">2nd Sub-Title (Bangla)
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="first-name" name="cat_name" required="required" class="form-control ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Select Category</label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-control">
                                    <option>Choose option</option>
                                    @foreach ($cat as $cat)
                                    <option>{{$cat->cat_name}}</option> 
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align ">Date<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                <script>
                                    function timeFunctionLong(input) {
                                        setTimeout(function() {
                                            input.type = 'text';
                                        }, 60000);
                                    }
                                </script>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="message" class="col-form-label col-md-3 col-sm-3 label-align ">1st Description(English)</label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" style="height: 52px;"></textarea></div>
                        </div>
                        <div class="form-group row">
                            <label for="message" class="col-form-label col-md-3 col-sm-3 label-align ">1st Description(Bangla)</label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" style="height: 52px;"></textarea></div>
                        </div>
                        <div class="form-group row">
                            <label for="message" class="col-form-label col-md-3 col-sm-3 label-align ">2nd Description(English)</label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" style="height: 52px;"></textarea></div>
                        </div>
                        <div class="form-group row">
                            <label for="message" class="col-form-label col-md-3 col-sm-3 label-align ">2nd Description(Bangla)</label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" style="height: 52px;"></textarea></div>
                        </div>
                        <div class="form-group row">
                            <label for="message" class="col-form-label col-md-3 col-sm-3 label-align ">3rd Description(English)</label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" style="height: 52px;"></textarea></div>
                        </div>
                        <div class="form-group row">
                            <label for="message" class="col-form-label col-md-3 col-sm-3 label-align ">3rd Description(Bangla)</label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" style="height: 52px;"></textarea></div>
                        </div>
                        {{-- Thumbnai --}}                                    
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="basic-icon-default-company">Image 1</label>
                            <div class="col-sm-10">
                                <img id="studentPhoto">
                              <div class="col-md-7 col-sm-6">
                                <input class="form-control" type="file" name="main_thumbnail" id="formFile"  onchange="studentphoto(this);" id="photo" accept="image/*">
                              </div>
                            </div>
                          </div>
                          <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="basic-icon-default-company">Image 2</label>
                            <div class="col-sm-10">
                                <img id="studentPhoto1">
                              <div class="col-md-7 col-sm-6">
                                <input class="form-control" type="file" name="image1" id="formFile" onchange="studentphoto1(this);" id="photo" accept="image/*">
                              </div>
                            </div>
                          </div>
                          <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="basic-icon-default-company">Image 3</label>
                            <div class="col-sm-10">
                                <img id="studentPhoto2">
                              <div class="col-md-7 col-sm-6">
                                <input class="form-control" type="file" onchange="studentphoto2(this);"name="image2" id="formFile">
                              </div>
                            </div>
                          </div>
                          {{-- Feather --}}
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">News Feather
                            
                            </label>
    
                            <div class="col-md-6 col-sm-6 ">
                                <input type="checkbox" name="on_sale" value="1"  > Hero News
                                <br>
                                <input type="checkbox" name="best_rated" value="1" > Category
                                <br>
                                <input type="checkbox" name="flast_sale" value="1"  > Feather News
                            </div>
                            
                        </div>
                       
                
                        
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button class="btn btn-primary" type="button">Cancel</button>
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
    
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
    <!-- /top tiles -->
@endsection