@extends('layouts.main')
@section('content')



<div class="container p-3">

@if (session('successMsg'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('successMsg') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif


<table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)

    <tr>
      <th scope="row">{{ $student->id }}</th>
      <td>{{ $student->first_name }}</td>
      <td>{{ $student->last_name }}</td>
      <td>{{ $student->email }}</td>
      <td>{{ $student->phone }}</td>

      <td><a href="{{ route('edit',$student->id) }}" class="btn btn-sm btn-info btn-icon-only"><i class="fas fa-edit"></i></a>&nbsp;

      <form method="post" id="delete-form-{{ $student->id }}" action="{{ route('delete',$student->id) }}" style="display:none;">

      {{ csrf_field() }}
      {{ method_field('delete') }}

      </form>

      <button onclick="if(confirm('Are You Sure to delete this data?')){
          event.preventDefault();
          document.getElementById('delete-form-{{ $student->id }}').submit();
          }else{
            event.preventDefault();
      }"
       href="" class="btn btn-sm btn-danger btn-icon-only"><i class="far fa-trash-alt"></i></button></td>
    </tr>

    @endforeach
  </tbody>
</table>

    {{ $students->links() }}

</div>

@endsection