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
              <h5 class="card-title">Category Form</h5>

              <!-- General Form Elements -->
              <form action="" method="POST" >
                  @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Category Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="product_name" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Category ID</label>
                  <div class="col-sm-10">
                    <input type="text" name="product_id" class="form-control">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Category Types</label>
                  <div class="col-sm-10">
                    <input type="text" name="category" class="form-control">
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="date" name="date" class="form-control">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <!-- <label class="col-sm-2 col-form-label">Submit Button</label> -->
                  <div class="col-sm-10">
                    <button type="submit" name="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
@extends('admin.section.footer')