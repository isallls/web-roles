@extends('user.layouts.header')
@section('container')
{{-- <div class="p-4 sm:ml-64">
    <script>
    </script>
<h1 class="{{ Request::is('dashboard')?'bg-gray-700': '' }} p-8">
    kdjsfksd
    {{ Request::is('dahsboard') ? 'bg-gray-100 ' : '' }}
</h1>
<div>
    <table border="1" class="table-auto w-52">
        <thead>User</thead>
        <thead>role</thead>
        @foreach ($users as $u)
        <tr>
            <td>{{ $u->name }}</td>
            <td>{{ $u->roles->role }}</td>
        </tr>
        @endforeach
    </table>
</div>
<div>
    <table>
        <thead>role</thead>
        <thead>kucing</thead>
        @foreach ($roles as $role)
        <tr>
            <td>{{ $role->role }}</td>
            <td>pskdfksd</td>
        </tr>
        @endforeach
    </table>
</div>
@foreach ($testrole->find(1)->roles as $test)
{{ $test->name }}
@endforeach
</div> --}}
<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($users as $u)
          <tr>
            <th scope="row">1</th>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
            <td>@mdo</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection