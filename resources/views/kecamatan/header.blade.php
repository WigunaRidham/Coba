<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nyoba</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/datatable-bootstrap.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/facebox.css">
    <link rel="stylesheet" href="js/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="js/select2/select2.css">
  </head>
  <body>
    <nav class="navbar navbar-default navbar-utama" role="navigation">
      <div class="container">
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
          <img src="img/logo-kab.png" class="logo-navbar">
          <strong>KECAMATAN</strong>
          </a>
        </div>
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Menu </a>
              <ul class="dropdown-menu tipe-kiri dropdown-menu-login2">
                <li><a href="{{url('/Kecamatan/Informasipendataan')}}">Informasi Pendataan</li></a>
                <li><a href="{{url('/Kecamatan/inputdatapetugas')}}">Input data petugas</li></a>
                </ul>
            </li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{url('/')}}"><i class="fa fa-sign-out">Log Out</i></li></a>
          </ul>
        </div>
      </div>
    </nav>
    
        
      </div>
    </div>
