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
              <form action="{{route('saveCategory')}}" method="POST" enctype="multipart/form-data">
                  @csrf                
                  <!-- <div class="col-md-3">
                  <label for="validationDefault04" class="form-label">State</label>
                  <select class="form-select" id="validationDefault04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>...</option>
                  </select>
                </div> -->

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Category Name</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="" id="">
                      <option selected disabled value="">Choose..</option>
                      <option value="0">Jersey</option>
                      <option value="1"></option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Category ID</label>
                  <div class="col-sm-10">
                    <input type="text" name="category_id" class="form-control">
                  </div>
                </div>        
                <div class="row mb-3">
                  <!-- <label class="col-sm-2 col-form-label">Submit Button</label> -->
                  <div class="col-sm-10">
                    <button type="submit" name="submit" class="btn btn-primary">Add Category</button>
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