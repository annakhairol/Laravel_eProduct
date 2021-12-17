@extends('header')
@section('product')
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="product">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- ends navbar -->
  <!-- breadcrumbs -->
    <div aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Products</li>
        <li class="breadcrumb-item active" aria-current="page"><a href="/">Listing </a>||<a href="create" > Create</a></li>
      </ol>
    </div>
    <!-- ends breadcrumbs -->

    <h1>Products</h1>

    <a href="create" class="btn btn-primary" style="float: right; margin-bottom: 10px;">Create Product</a> 

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Type</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($data) && $data->count())
                @foreach($data as $key => $value)
            <tr>
                 <td>{{ $value->id }}</td>
                 <td><a href="update?rid={{ $value->id }}">{{ $value->code }}</a></td>
                 <td>{{ $value->name }}</td>
                 <td>{{ $value->category }}</td>
                 <td>{{ $value->brand }}</td>
                 <td>{{ $value->type }}</td>
                 <td>{{ $value->description }}</td>
                 <td class="text-center"><a href="update/{{ $value->id }}"><img src="/images/icon/edit.png" title="Edit" class="icons" width="50%"></a></td>
            </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
            <tr>
              <td colspan="7" ><center>{!! $data->links() !!}</center></td>
            </tr>
        </tbody>
    </table>
@endsection