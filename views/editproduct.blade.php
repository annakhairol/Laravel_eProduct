{{View:: make('title')}}

<div class="container">
  
  <!-- breadcrumbs -->
    <div aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Products</li>
        <li class="breadcrumb-item active" aria-current="page"><a href="/">Listing </a>||<a href="create" > Create</a></li>
      </ol>
    </div>
    <!-- ends breadcrumbs -->

     <h1>Update Product</h1>

  <form action="productedit?rid={{ Request::get('rid') }}" method="post">
  @csrf
    <div class="mb-3">
      <label for="code" class="form-label">Code*:</label>
      <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ $product->code }}" id="codeid" placeholder="Example: P123"  disabled>
      @error('code')
        <span class="text-danger ">{{ $message }}</span>
      @enderror
    </div>
    <div class="mb-3 mt-4">
      <label for="name" class="form-label">Name*:</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product->name }}" id="nameid" placeholder="Example: Red Dinner Gown">
      @error('name')
        <span class="text-danger ">{{ $message }}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Category*:</label>
      <input type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ $product->category }}" id="categoryid" placeholder="Example: Fashion">
      @error('category')
        <span class="text-danger ">{{ $message }}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="brand" class="form-label">Brand:</label>
      <input type="text" class="form-control" name="brand" value="{{ $product->brand }}" id="brandid" placeholder="Example: No Brand">
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">Type:</label>
      <input type="text" class="form-control" name="type" value="{{ $product->type }}" id="typeid" placeholder="Example: Woman Dress">
    </div>
    <div class="mb-3">
      <label for="desc" class="form-label">Description:</label>
      <textarea class="form-control" id="descid" name="description" rows="4"> {{ $product->description }} </textarea>
    </div>
    <div class="mb-3" style="padding-top: 10px;">
    <button type="submit" class="btn btn-primary">Update</button>
    <button type="button" onclick="javascript:history.back()" class="btn btn-danger">Cancel</button>
    </div>
  </form>
</div>
{{View:: make('footer')}}