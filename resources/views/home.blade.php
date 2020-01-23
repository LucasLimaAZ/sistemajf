@extends("layouts.app")
@section("content")
<div class="wrapper">

    @include("navbar")
    @include("sidebar")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Painel
                <small>de administração</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Sistema</a></li>
                <li class="active">Painel</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-shopping-cart"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Produtos Cadastrados</span>
                            <span class="info-box-number"><?=$numeros['produtos'];?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-cart-arrow-down"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total de Baixas</span>
                            <span class="info-box-number">Em breve</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-warning"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Produtos fora de estoque</span>
                            <span class="info-box-number">Em breve</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row white-box" style="text-align:center;margin:5%;">
                <div class="col-md-4">
                    <iframe allowtransparency="true" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" src="https://www.cptec.inpe.br/widget/widget.php?p=3591&w=h&c=909090&f=ffffff" height="200px" width="100%"></iframe>
                </div>
                <div class="col-md-4">
                    <h1>
                        <i class="fa fa-calendar"></i> Data: <br><br> <?=date("d/m/Y");?>
                    </h1>
                </div>
                <div class="col-md-4">
                    <a href="https://api.whatsapp.com/send?phone=5551998221777"><i class="fa fa-whatsapp ajuda"></i></a>
                    <h3>Clique para pedir suporte</h1>
                </div>
            </div>
            

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection