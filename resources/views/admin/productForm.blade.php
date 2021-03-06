@extends('admin.section.header')
@extends('admin.section.dashboard')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Add Products</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">General Form Elements</h5>

            <!-- General Form Elements -->
            <form action="{{ route('saveProducts') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Product Name</label>
                <div class="col-sm-10">
                  <input type="text" name="product_name" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Product ID</label>
                <div class="col-sm-10">
                  <input type="text" name="product_id" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                  <input type="number" name="price" class="form-control">
                </div>
              </div>
              <!-- <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                  <input type="text" name="category" class="form-control">
                </div>
              </div> -->
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Select</label>
                <div class="col-sm-10">
                  <select class="form-select" name="category" aria-label="Default select example">
                    <option selected>Select the category</option>
                    <option name="category" value="shoes">Shoes</option>
                    <option name="category" value="Pant">Pant</option>
                    <option name="category" value="Shorts">Shorts</option>
                    <option name="category" value="Shirt">Shirt</option>
                    <option name="category" value="Tshirt">Tshirt</option>
                    <option name="category" value="Jacket">Jacket</option>
                    <option name="category" value="Glasses">Glasses</option>
                  </select>
                </div>
              </div>
              <div class="row mb-3">
                  <label for="inputFile" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="image" type="file" id="formFile">
                  </div>
                </div>      
                    

              <div class="row mb-3">
                <!-- <label class="col-sm-2 col-form-label">Submit Button</label> -->
                <div class="col-sm-10">
                  <button type="submit" name="submit" class="btn btn-primary">Add Product</button>
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->
@extends('admin.section.footer')