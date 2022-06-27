@extends('admin.section.header')
@extends('admin.section.dashboard')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Details</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">View Details</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Buttons</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($details as $detail)
                                <tr>
                                    <td>{{ $detail->product_id }}</td>
                                    <td>{{ $detail->product_name}} </td>
                                    <td>{{ $detail->price}} </td>
                                    <td>{{ $detail->category}} </td>
                                    <td><img src="{{ asset('Image/'.$detail->image) }}" style="width: 50px; height:50px;"></td>
                                    <td>
                                        <form action="{{ URL::to('delete/'.$detail->id) }}" method="POST" enctype="multipart/form-data">
                                            <a class="btn btn-success" href="">Edit</a>
                                            @csrf
                                            
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@extends('admin.section.footer')