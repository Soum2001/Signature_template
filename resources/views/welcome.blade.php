@include('layout.header')

<body class="hold-transition layout-top-nav">
    @include('nav')
    <section class="content" style="margin-bottom:400px;margin-top:10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header" style="background-color:#eee;">
                            <h3 class="card-title text-center" style="color:#374a7e;font-size:20px;">Enter Signature Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="card-body">

                                <div id="accordion">
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h4 class="card-title w-100">
                                                <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false">
                                                    Personal Data
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                                            <div class="card-body">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>First name</label>
                                                                <input type="text" class="form-control" placeholder="First name" value="" onkeyup="firstName(this.value)" id="first_name">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Last name</label>
                                                                <input type="text" class="form-control" placeholder="Last name" value="" onkeyup="lastName(this.value)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Job title</label>
                                                                <input type="text" class="form-control" placeholder="Job title" value="" onkeyup="job(this.value)">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Email address</label>
                                                                <input type="text" class="form-control" placeholder="Email address" value="" onkeyup="email(this.value)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>address 1</label>
                                                                <input type="text" class="form-control" placeholder="address 1" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>address 2</label>
                                                                <input type="text" class="form-control" placeholder="address 2" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h4 class="card-title w-100">
                                                <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">
                                                    Comapny Data
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                            <div class="card-body">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Company Name</label>
                                                                <input type="text" class="form-control" placeholder="Company" value="" onkeyup="company(this.value)">

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Website</label>
                                                                <input type="text" class="form-control" placeholder="Enter ...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Adress 1</label>
                                                                <input type="text" class="form-control" placeholder="Enter ...">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Address 2</label>
                                                                <input type="text" class="form-control" placeholder="Enter ...">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-primary btn-block">Apply Signature</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header p-2" style="background-color:#eee;">
                            <ul class="nav nav-pills">
                                <li class="nav-item" style="color:#374a7e;font-size:20px;">Signature Preview</li>

                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="container">
                                    @foreach($template as $user_template)
                                    <iframe name="renderCode"  srcdoc="{{ $user_template['template_html']}}"></iframe>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>


    @include('layout.footer')