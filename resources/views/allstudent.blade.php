@include('design.header')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Cource's Information Table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Serial Number</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Student's Name</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Department</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Batch</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Section</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            ID</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($sl=1)
                                    @foreach($student as $student)
                                    <tr>
                                        <td>
                                            {{$sl++}}
                                        </td>
                                        <td>
                                            {{$student->name}}
                                        </td>

                                        <td>
                                            {{$student->department}}
                                        </td>
                                        <td>
                                            {{$student->batch}}
                                        </td>
                                        <td>
                                            {{$student->section}}
                                        </td>
                                        <td>
                                            {{$student->student_id}}
                                        </td>
                                        <td>
                                            <a class="btn btn-link text-danger text-gradient px-3 mb-0" href=""><i class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</a>
                                            <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@include('design.footer')