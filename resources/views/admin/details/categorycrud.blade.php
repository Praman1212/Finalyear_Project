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
                                    <th scope="col">Buttons</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($details as $detail)
                                <tr>
                                    <td>{{ $detail->category_id }}</td>
                                    <td>{{ $detail->category_name}} </td>
                                    <td><button class="btn btn-success" name="edit">Edit</button> </td>
                                    <td><button class="btn btn-danger"></button></td>
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