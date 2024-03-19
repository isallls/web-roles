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
  <div class="p-4 mb-2 bg-danger text-white">
    <div class="bg-primary">welcome</div>
  </div>
</div>
<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            @can('admin')
            <th scope="col">id</th>
            @endcan
            @can('owner')
            <th scope="col">Handle</th>
            @endcan
          </tr>
        </thead>
        <tbody>
        @foreach ($users as $u)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
            {{-- <td>{{ ($u->roles) ? true : false }}</td> --}}
            <td>{{ ($u->roles) ? $u->roles->role : 'no roles' }}</td>
            <td>{{ $u->id}}</td>
            @can('owner')
            <td>
              <a href="{{ route('action',['id'=> encrypt( $u->email)]) }}">
                <button type="button" class="btn btn-primary" class='button'>
                  Set Role
                </button>
              </a>
            </td>
            @endcan
          </tr>
          @endforeach
        </tbody>
      </table>
      @foreach ($main as $item)
      <h1>test</h1>
      @endforeach
</div>

<script>
  console.log('JetBrains Mono Font of')
</script>
@endsection