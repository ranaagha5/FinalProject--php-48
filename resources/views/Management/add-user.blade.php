@extends('layouts.dashboard')
@section('dashboard-content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>New User</h1>
        </div>
      </div>
    </div>
  </section>

<form method="POST"  action="{{url('/add-user')}}">
    {{csrf_field()}}
    <div class="card-body">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control w-75"  name="name" id="name"  required >
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control w-75" name="email" id="email"  required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control w-75" name="password" id="password"  required>
      </div>
      <div class="form-group">
        <label for="role">Role</label>
        <select class="form-control w-25" name="role" required>
            <option value="admin">Admin</option>
            <option value="user">User</option></option>
            <option value="moderator">Moderator</option>
        </select>
      </div>
    </div>
    <div class="card-footer bg-transparent">
      <button type="submit" class="btn btn-primary">Add</button>
    </div>
</form>



  @endsection
