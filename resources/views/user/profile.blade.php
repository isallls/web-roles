@extends('user.layouts.header')
@section('container')
<div>
    <p>name : {{ Auth::user()->name }}</p>
    @can('admin')
    <p>role : {{ (Auth::user()->roles) ? Auth::user()->roles->role : 'undifined'  }}</p>
    <p>isOwner? : {{ (Auth::user()->roles->role == 'owner') ? 'Yes' :  'Not' }}</p>
    {{-- <p>{{ (Auth::user()->roles->role == 'owner' ) ? true . ' yes anda owner'  : 'anda bukan owner ' . false }}</p> --}}
    @endcan
    <p>{{ (Auth::user()->roles)? true : false }}</p>
    <p>{{ $user1->name }}</p>
    <span class="pf pf-pagseguro"></span>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const p = document.querySelectorAll('p')[3]
        console.log(p)
        const date = new Date()
        setInterval(() => {
            const date = new Date()
            const hour = date.getHours()
            const minute = date.getMinutes()
            const second = date.getSeconds()
            p.innerHTML = `Watch: ${hour}:${minute}:${second}`
            // console.log(`Watch: ${hour}:${minute}:${second}`)
        }, 1000);
    })
</script>
@endsection