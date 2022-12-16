@include('layout.header')

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        @include('nav')
        <section class="content">
            <div class="container-fluid">
                <div id="home">
                    <div class="container-fluid">
                        <h3>Template</h3>                        
                        <div class="scrolling-wrapper">
                            @foreach($template as $user_template)
                                <a href=" {{ url('view_template/'.$user_template['id']) }}" target="blank">
                                    <iframe name="render_template" class="render_template" style="width:25%;" srcdoc="{{ $user_template['template_html']}}" scrolling="no"></iframe>
                                </a>
                            @endforeach
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content -->
    @include('layout.footer')