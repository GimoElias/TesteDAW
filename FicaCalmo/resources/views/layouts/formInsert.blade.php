
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>DASHGUM - Bootstrap Admin Template</title>

        <!-- Bootstrap core CSS -->
        {!!Html::style('css/bootstrap.css')!!}

        <!--external css-->
        {!!Html::style('font-awesome/css/font-awesome.css')!!}

        {!!Html::style('js/bootstrap-datepicker/css/datepicker.css')!!}

        {!!Html::style('js/bootstrap-daterangepicker/daterangepicker.css')!!}

        <!-- Custom styles for this template -->
        {!!Html::style('css/style.css')!!}
        {!!Html::style('css/style-responsive.css')!!}

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <section id="container" >


            @include('cabecalho.cabecalho')

            @section('sidebar')

            @include('aside.aside')

            @show


            <!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <h3><i class="fa fa-angle-right"></i> Formu&aacute;rio de Entrada</h3>

                    <!-- BASIC FORM ELELEMNTS -->
                    <div class="row mt">
                        <div class="col-lg-12">
                            <div class="form-panel">
                                <h4 class="mb"><i class="fa fa-angle-right"></i> Formu&aacute;rio de Entrada</h4>
                            </div>

                            @yield('content')

                        </div>

                    </div><!-- /row -->


                </section><! --/wrapper -->

            </section><!-- /MAIN CONTENT -->

            <!--main content end-->
            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                    2014 - Alvarez.is
                    <a href="form_component.html#" class="go-top">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </div>
            </footer>
            <!--footer end-->

        </section>


        <!-- js placed at the end of the document so the pages load faster -->
        {!!Html::script('js/jquery.js')!!}


        {!!Html::script('js/bootstrap.min.js')!!}


        {!!Html::script('js/jquery.dcjqaccordion.2.7.js')!!}


        {!!Html::script('js/jquery.scrollTo.min.js')!!}


        {!!Html::script('js/jquery.nicescroll.js')!!}



        <!--common script for all pages-->
        {!!Html::script('js/common-scripts.js')!!}


        <!--script for this page-->
        {!!Html::script('js/jquery-ui-1.9.2.custom.min.js')!!}


        <!--custom switch-->
        {!!Html::script('js/bootstrap-switch.js')!!}


        <!--custom tagsinput-->
        {!!Html::script('js/jquery.tagsinput.js')!!}


        <!--custom checkbox & radio-->

        <script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>

        <script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>

        {!!Html::script('js/form-component.js')!!}    

        <script>
            //custom select box

            $(function () {
                $('select.styled').customSelect();
            });

        </script>

    </body>
</html>
