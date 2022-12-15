@include('layout.header')
<body class="hold-transition layout-top-nav">
    @include('layout.nav')
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
                                    <table style="width: 370px; font-size: 10pt; FONT-FAMILY: Arial, sans-serif;" cellpadding="0" cellspacing="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td style="width: 102px; font-size: 10pt; font-family: Arial, sans-serif; border-right: 1px solid #929292; vertical-align: top;" valign="top">
                                                    <img alt="photograph" width="80" border="0" style="border:0; height:auto; width:80px" src="https://www.mail-signatures.com/signature-generator/img/templates/deep-blue/photo.png">

                                                    <p style="margin-top: 35px; margin-bottom: 6px; padding: 0px;">
                                                        <a href="https://www.my-company.com/" target="_blank"><img border="0" alt="Logo" width="90" style="width:90px; height:auto; border:0;" src="https://www.mail-signatures.com/signature-generator/img/templates/deep-blue/logo.png"></a>
                                                        <br>
                                                    </p>

                                                </td>
                                                <td style="width: 25px;"></td>
                                                <td style="width: 243px; font-size: 10pt; color:#444444; font-family: Arial, sans-serif; vertical-align: top;" valign="top">
                                                    <p style="margin-bottom: 18px;">
                                                        <strong>
                                                            <span style="font-size: 10pt; font-family: Arial, sans-serif; color:#00aeef;" id="name">jhon Deo</span><br>
                                                            <span style="font-family: Arial, sans-serif; font-size:10pt; color:#00aeef;" id="designation">Sales &amp; Marketing Director</span><br>
                                                            <span style="font-family: Arial, sans-serif; font-size:10pt; color:#00aeef;" id="company_name">My Company</span><br>
                                                        </strong>
                                                    </p>
                                                    <p style="FONT-FAMILY: Arial, sans-serif; padding: 0px; font-size: 9pt; line-height: 12pt; margin-bottom: 14px;">
                                                        <span>
                                                            <span style="font-size: 9pt; color: #00aeef;"><strong>T:</strong></span>
                                                            <span style="font-size: 9pt; color:#929292;"> (800) 555-0199</span>
                                                            <span style="color:#929292;"> | </span>
                                                        </span>

                                                        <span>
                                                            <span style="font-size: 9pt; color: #00aeef;"><strong>M:</strong></span>
                                                            <span style="font-size: 9pt; color:#929292;"> (800) 555-0299</span>
                                                        </span>

                                                        <span style="FONT-FAMILY: Arial, sans-serif; font-size: 9pt; line-height: 12pt;">
                                                            <br>
                                                            <span style="font-size: 9pt;  line-height: 12pt; color: #00aeef;"><strong>E:</strong></span>
                                                            <a href="mailto:john.doe@my-company.com" style="font-size: 9pt; color:#929292; text-decoration: none;"><span style="text-decoration: none; font-size: 9pt;  line-height: 12pt; color:#929292; FONT-FAMILY: Arial, sans-serif;" id="email">john.doe@my-company.com</span></a>
                                                        </span>
                                                        <span style="FONT-FAMILY: Arial, sans-serif; font-size: 9pt; line-height: 12pt;">
                                                            <br>
                                                            <span style="font-size: 9pt;  line-height: 12pt; color:#929292; FONT-FAMILY: Arial, sans-serif;"> <a href="www.my-company.com" style="color:#929292; text-decoration: none;"><span style="text-decoration: none; font-size: 9pt;  line-height: 12pt; color:#929292; FONT-FAMILY: Arial, sans-serif;">www.my-company.com</span></a></span>
                                                        </span>
                                                    </p>

                                                    <p style="margin-bottom: 14px;">
                                                        <span><a href="https://www.facebook.com/MyCompany" target="_blank" rel="noopener"><img border="0" width="20" alt="facebook icon" style="border:0; height:20px; width:20px" src="https://www.mail-signatures.com/signature-generator/img/templates/deep-blue/fb.png"></a>&nbsp;</span><span><a href="https://twitter.com/MyCompany404" target="_blank" rel="noopener"><img border="0" width="20" alt="twitter icon" style="border:0; height:20px; width:20px" src="https://www.mail-signatures.com/signature-generator/img/templates/deep-blue/tt.png"></a>&nbsp;</span><span><a href="https://www.youtube.com/user/MyCompanyChannel" target="_blank" rel="noopener"><img border="0" width="20" alt="youtube icon" style="border:0; height:20px; width:20px" src="https://www.mail-signatures.com/signature-generator/img/templates/deep-blue/yt.png"></a>&nbsp;</span><span><a href="https://www.linkedin.com/company/mycompany404" target="_blank" rel="noopener"><img border="0" width="20" alt="linkedin icon" style="border:0; height:20px; width:20px" src="https://www.mail-signatures.com/signature-generator/img/templates/deep-blue/ln.png"></a>&nbsp;</span><span><a href="https://www.instagram.com/mycompany404/" target="_blank" rel="noopener"><img border="0" width="20" alt="instagram icon" style="border:0; height:20px; width:20px" src="https://www.mail-signatures.com/signature-generator/img/templates/deep-blue/it.png"></a>&nbsp;</span><span><a href="https://pinterest.com/mycompany404/" target="_blank" rel="noopener"><img border="0" width="20" alt="pinterest icon" style="border:0; height:20px; width:20px" src="https://www.mail-signatures.com/signature-generator/img/templates/deep-blue/pt.png"></a></span>
                                                    </p>
                                                    <p>
                                                        <span style="font-size: 9pt; line-height: 12pt;font-family: Arial, sans-serif; color: #929292;">Street, City<span>,</span></span>
                                                        <span style="font-size: 9pt; line-height: 12pt;font-family: Arial, sans-serif; color: #929292;">Zip Code, Country</span>
                                                    </p>

                                                </td>
                                            </tr>
                                            <tr style="width: 370px;">
                                                <td colspan="3" style="padding-top:14px">
                                                    <a href="https://www.codetwo.com/email-signatures/" target="_blank" rel="noopener"><img border="0" alt="Banner" width="370" style="width:370px; height:auto; border:0;" src="https://www.mail-signatures.com/signature-generator/img/templates/deep-blue/banner.png"></a>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="3" style="padding-top: 14px; text-align: justify; FONT-SIZE: 7pt; color: #929292; line-height: 10px;  max-width: 370px;">
                                                    The content of this email is confidential and intended for the recipient specified in message only. It is strictly forbidden to share any part of this message with any third party, without a written consent of the sender. If you received this message by mistake, please reply to this message and follow with its deletion, so that we can ensure such a mistake does not occur in the future.
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>


    @include('layout.footer')