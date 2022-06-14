@extends('admin.section.header')
@extends('admin.section.dashboard')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Category</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Category Form Elements</h5>

              <!-- General Form Elements -->
              <form action="" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Category Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="category_name" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Category ID</label>
                  <div class="col-sm-10">
                    <input type="text" name="category_id" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-10">
                    <input type="number" name="price" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Category</label>
                  <div class="col-sm-10">
                    <input type="text" name="category" class="form-control">
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