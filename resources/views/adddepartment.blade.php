<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="storage/backend/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="storage/backend/assets/img/favicon.png">
    <title>
        Add Depertment
    </title>
    @include('design.header')

    <div class="page-header min-vh-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-8">
                        <div class="card-header pb-0 text-left bg-transparent">
                            <h3 class="font-weight-bolder text-info text-gradient">Add Depertment Form</h3>
                            <p class="mb-0">Now you are enter the depertmental information</p>
                        </div>
                        <div class="card-body">
                            <form action="Add_Depertment" method="post">
                                @csrf
                                <label>Department Name :</label>
                                <div class="mb-3">
                                    <input type="text" name="dep_name" class="form-control" id="inputEmail3">
                                </div>
                                <label>Department Head Name :</label>
                                <div class="mb-3">
                                    <input type="text" name="hed_name" class="form-control" id="inputPassword3">
                                </div>
                                <label>Department Head Contract :</label>
                                <div class="mb-3">
                                    <input type="text" name="hed_contract" class="form-control" id="inputPassword3">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('design.footer')