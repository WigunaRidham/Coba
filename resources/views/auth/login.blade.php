@extends('dashboard.master')

@section('isi')
  <div class="ukuran450 tengah margin-b50">
    <div class="login-container">
      
      <div id="output"></div>

      <div class="form-box">
        <form action="{url('/Login')}" method="post">
          <legend><h3 class="text-center">Login</h3></legend>
          <div class="left-inner-addon2">
            <i class="fa fa-user"></i>
            <input required name="username" class="input-lg form-control" type="text" placeholder="Username">
          </div>
          <div class="left-inner-addon2">
            <i class="fa fa-lock"></i>
            <input required name="password" type="password" class="input-lg form-control" placeholder="Password">
          </div>
          <div class="left-inner-addon2">
            <i class="fa fa-calendar-o"></i>
            <select name="level" class="form-control input-lg" required>
              <option value="">-Pilih Level-</option>
              <option value="2">Pimpinan</option>
              <option value="3">Supplier</option>
              <option value="1">Administrasi</option>
            </select>
          </div>
          <div class="form-group">
            <button class="btn btn-info btn-lg btn-block login" type="submit">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>
</div>
</div>

@endsection
