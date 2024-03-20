<!-- @include('design.header')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Course Information Table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="horizontal-table">
                                <thead>
                                    <tr>
                                        @foreach($student as $student)

                                        <th>
                                            <div class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Student's Name
                                            </div>
                                            <div>
                                                {{$student->name}}
                                            </div>
                                        </th>
                                        <th>
                                            <div class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Student's Father Name
                                            </div>
                                            <div>
                                                {{$student->father_name}}
                                            </div>
                                        </th>
                                        <th>
                                            <div class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Student's Mother Name
                                            </div>
                                            <div>
                                                {{$student->mother_name}}
                                            </div>
                                        </th>

                                        @endforeach
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@include('design.footer') -->