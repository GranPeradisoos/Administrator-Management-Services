<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="storage/backend/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="storage/backend/assets/img/favicon.png">
    <link href="storage/backend/css/style.css" rel="stylesheet">
    <title>
        Add Depertment
    </title>
    @include('design.header')
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                <div class="card card-plain mt-8">
                    <div class="card-header pb-0 text-left bg-transparent">
                        <h3 class="font-weight-bolder text-info text-gradient">Add Depertment Form</h3>
                        <p class="mb-0">Now you are enter the depertmental information</p>
                    </div>
                    <div class="card-body">
                        <form class="form-valide" action="Add_Depertment" method="post">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Department Name :
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-username" name="dep_name" placeholder="Enter Department Name..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-email">Department Head Name :
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-email" name="hed_name" placeholder="Enter Department Head Name..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-password">Department Head Contract :
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-password" name="hed_contract" placeholder="Enter Department Head Contract Info..">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('design.footer')