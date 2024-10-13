<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Category Database</title>

@extends('layouts.Back.sidebar')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>DataBase</h3>
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
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            
            <h2>Responsive example<small>Users</small></h2>
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
              <div class="row">
                  <div class="col-sm-12">
                    <div class="card-box table-responsive">
            <p class="text-muted font-13 m-b-30">
              Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
            </p>
            
            <div id="datatable-responsive_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap no-footer"><div class="row"><div class="col-sm-12"><table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" cellspacing="0" width="100%" role="grid" aria-describedby="datatable-responsive_info" style="width: 100%;">
              <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 66px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">Serial Number</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 65px;" aria-label="Last name: activate to sort column ascending">Adds Link</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 150px;" aria-label="Position: activate to sort column ascending">Image</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 25px;" aria-label="Age: activate to sort column ascending">Status</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 61px;" aria-label="Start date: activate to sort column ascending">Action</th>
                    
                </tr>
              </thead>
              <tbody>    
                @php
                    $sl=1
                @endphp
                @foreach ($result as $result)
                <tr role="row" class="odd">
                    <td tabindex="0" class="sorting_1">{{$sl++}}</td>
                    <td>{{$result->add_link}}</td>
                    <td style="text-align: center">
                        <img class="img-responsive avatar-view" src="{{asset('storage/back/media/add/'.$result->add_image)}}" style="width: 20%;height:auto;" alt="Avatar" title="Change the avatar">
                    </td>
                    <td>
                        @if($result->add_status == 1)
                            <form action="{{ route('AddStatus', $result->add_id) }}" method="POST">
                        @csrf
                            <input type="hidden" name="status" value="0">
                            <button type="submit" class="btn btn-success">Available</button>
                        </form>
                        @else
                            <form action="{{ route('AddStatus', $result->add_id) }}" method="POST">
                            @csrf
                                 <input type="hidden" name="status" value="1">
                                 <button type="submit" class="btn btn-danger">Unavailable</button>
                        </form>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('edit.add',$result->add_id)}}"><i class="fa fa-pencil"></i></a>
                        <a href="{{route('del.add',$result->add_id)}}" style="margin-left: 10px;"><i class="fa fa-trash"></i></a>

                    </td>
                  </tr>
                @endforeach          
             
            </tbody>
            </table></div></div><div class="row"><div class="col-sm-5"></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable-responsive_paginate"></div></div></div></div>
            
            
          </div>
        </div>
      </div>
    </div>
        </div>
      </div>
</div>

@endsection