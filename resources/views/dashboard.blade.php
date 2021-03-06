@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Accueil</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Bienvenue</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      
      <div class="row">


          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-primary"><i class="nav-icon far fa-user"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">utilisateur</span>
                <span class="info-box-number">{{$users}}</span>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-danger"><i class="nav-icon fas fa-school"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">IFAD</span>
                <span class="info-box-number">{{$ifads}}</span>
              </div>
            </div>
          </div>
         
          

          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="nav-icon fas fa-edit"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Rapport</span>
                <span class="info-box-number">{{$rapports}}</span>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="nav-icon fas fa-book-open"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Livret de positionnement</span>
                <span class="info-box-number">{{$livret_positionnements}}</span>
              </div>
            </div>
          </div>
         

      </div>
  </div>
</div>
@endsection