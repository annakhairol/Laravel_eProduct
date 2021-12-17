
<div class="container">

  <!-- breadcrumbs -->
  <div aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Products</li>
      <li class="breadcrumb-item active" aria-current="page"><a href="/product">Listing </a> || Form Product </li>
    </ol>
  </div>
  <!-- ends breadcrumbs -->

  <h1> Form Product</h1>

  <form action="{{ url('product/save') }}" method="post">

    @csrf
    <div class="mb-3">
      <label for="code" class="form-label"> Code : <span class="text-danger"> * </span></label>
      <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" id="codeid" value="{{ $code }}" placeholder="Example: P123">
      @error('code')
      <span class="text-danger ">{{ $message }}</span>
      @enderror
    </div>

    <div class="mb-3">
      <label for="name" class="form-label">Name : <span class="text-danger"> * </span></label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="nameid" value="{{ $name }}" placeholder="Example: Red Dinner Gown">
      @error('name')
      <span class="text-danger ">{{ $message }}</span>
      @enderror
    </div>

    <div class="mb-3">
      <label for="category" class="form-label">Category : <span class="text-danger"> * </span></label>
      <input type="text" class="form-control @error('category') is-invalid @enderror" name="category" id="categoryid" value="{{ $category }}" placeholder="Example: Fashion">
      @error('category')
      <span class="text-danger ">{{ $message }}</span>
      @enderror
    </div>

    <div class="mb-3">
      <label for="brand" class="form-label">Brand:</label>
      <input type="text" class="form-control" name="brand" id="brandid" value="{{ $brand }}" placeholder="Example: No Brand">
    </div>

    <div class="mb-3">
      <label for="type" class="form-label">Type:</label>
      <input type="text" class="form-control" name="type" id="typeid" placeholder="Example: Woman Dress" value="{{ $type }}">
    </div>

    <div class="mb-3">
      <label for="desc" class="form-label">Description:</label>
      <textarea class="form-control" id="descid" name="description" rows="4"> {{ $description }} </textarea>
    </div>

    <div class="mb-3" style="padding-top: 10px;">
      <input type="hidden" class="form-control" name="id" id="id" value="{{ $id }}">
      <button type="submit" class="btn btn-primary"> Save </button>
      <button type="button" onclick="javascript:history.back()" class="btn btn-danger">Cancel</button>
    </div>

  </form>

</div>