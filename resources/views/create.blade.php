@extends('layouts.main')
@section('content')


<div class="container p-3">

@if($errors->any())
@foreach($errors->all() as $error)

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ $error }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endforeach
@endif

<!-- Default form register -->
<form class="text-center border border-light p-5" action="{{ route('store') }}" method="POST">

    {{ csrf_field() }}

    <p class="h4 mb-4">Add Student</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" name="firstname" class="form-control" placeholder="First name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" name="lastname" class="form-control" placeholder="Last name">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" name="email" class="form-control mb-4" placeholder="E-mail">


    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" name="phone" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Add Data</button>

    <hr>

</form>
<!-- Default form register -->
</div>
@endsection