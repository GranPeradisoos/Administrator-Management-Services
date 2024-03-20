<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="storage/backend/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="storage/backend/assets/img/favicon.png">
    <link href="storage/backend/css/style.css" rel="stylesheet">
    <title>
        Add Student
    </title>
    @include('design.header')
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-5 col-md-6 d-flex flex-column ">
                <div class="card card-plain mt-2">
                    <div class="card-header pb-0 text-left bg-transparent">
                        <h3 class="font-weight-bolder text-info text-gradient">Add Student Form</h3>
                        <p class="mb-0">Now you are enter the Student information</p>
                    </div>
                    <div class="card-body">
                        <form class="form-valide" action="Add_Student" method="post">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Student Name :
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-username" name="s_name" placeholder="Enter Student Name..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-email">Father's Name :
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-email" name="f_name" placeholder="Enter Student Father's Name..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-password">Mother's Name :
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-password" name="m_name" placeholder="Enter Student Mother's Name..">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-suggestions">Present Address
                                </label>
                                <div class="col-lg-6">
                                    <textarea class="form-control" id="val-suggestions" name="pre_add" rows="5" placeholder="House No/Street/City"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-suggestions">Permanent Address
                                </label>
                                <div class="col-lg-6">
                                    <textarea class="form-control" id="val-suggestions" name="perm_add" rows="5" placeholder="House No/Street/City"></textarea>
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-skill">Best Skill
                                </label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="val-skill" name="val-skill">
                                        <option value="">Please select</option>
                                        <option value="html">HTML</option>
                                        <option value="css">CSS</option>
                                        <option value="javascript">JavaScript</option>
                                        <option value="angular">Angular</option>
                                        <option value="angular">React</option>
                                        <option value="vuejs">Vue.js</option>
                                        <option value="ruby">Ruby</option>
                                        <option value="php">PHP</option>
                                        <option value="asp">ASP.NET</option>
                                        <option value="python">Python</option>
                                        <option value="mysql">MySQL</option>
                                    </select>
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-currency">Gurdian's Name
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-currency" name="gar_name" placeholder="Enter Student Gardian Name..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-currency">Gurdian's Contract nunber
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-currency" name="gar_con" placeholder="Enter Student Gardian Info..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-currency">Date Of Birth
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-currency" name="date_birth" placeholder="mm/dd/yyyy">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-website">Website<span class="text-danger">(Optional)</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-website" name="web" placeholder="http://example.com">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-phoneus">Phone (BD)
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-phoneus" name="phone" placeholder="+880-1000-000000">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-phoneus">E-mail
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-phoneus" name="e_mail" placeholder="email@gmail.com">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-digits">Nationality
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-digits" name="national" placeholder="5">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-skill">Religious
                                </label>
                                <!-- <div class="col-lg-6">
                                    <select class="form-control" id="val-skill" name="religion">
                                        <option value="">Please select</option>
                                        <option value="islam">Islam</option>
                                        <option value="hindu">Hinduism</option>
                                        <option value="duddhism">Buddhism</option>
                                        <option value="christian">Christianity</option>
                                    </select>
                                </div> -->
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-digits" name="religion" placeholder="Enter Your Religion">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-skill">Department
                                </label>
                                <!-- <div class="col-lg-6">

                                    <select class="form-control" id="val-skill" name="department">
                                        <option value="">Please select</option>
                                        <option value="islam">CSE</option>
                                        <option value="hindu">EEE</option>
                                        <option value="duddhism">SW</option>
                                        <option value="christian">English</option>
                                    </select>
                                </div> -->
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-digits" name="department" placeholder="Enter Your Choice Department">
                                </div>
                            </div>


                            <!-- <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-skill">Upload Image
                                </label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input">
                                    <label class="custom-file-label">Choose file</label>
                                </div> -->



                    </div>
                    <li class="nav-item mt-3">
                        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Official</h6>
                    </li>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-range">ID
                        </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-range" name="stu_id" placeholder="000-000-000">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-range">Batch
                        </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-range" name="batch" placeholder="00th">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-range">Section
                        </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-range" name="section" placeholder="A/B/C...">
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