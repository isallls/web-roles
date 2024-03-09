@extends('user.layouts.header')

@section('container')
<div class="sm:ml-64">
    <div class=" bg-slate-600 w-full rounded-lg p-16"></div>
    <div class="flex mt-4">
        <div class="flex-1 w-40">
            <table class="ml-5 border-separate border-spacing-2 border border-slate-500 bg-cyan-700 rounded-lg">
                <thead>
                    <tr class="rounded-lg overflow-hidden">
                        <th class="py-2 px-4 bg-gray-800 text-white">Nama</th>
                        <th class="py-2 px-4 bg-gray-800 text-white">Email</th>
                        <th class="py-2 px-4 bg-gray-800 text-white">Role</th>
                        <th class="py-2 px-4 bg-gray-800 text-white">edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $user)
                    <tr class="bg-gray-100">
                        <td class="py-2 px-4">{{ $user->name }}</td>
                        <td class="py-2 px-4">{{ $user->email }}</td>
                        <td class="py-2 px-4 text-left">{{ $user->roles->role }}</td>
                        <td class="py-2 px-4 text-left"><a href="">edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="flex-1 bg-cyan-400">
            <p>welcome {{ auth()->user()->name }}</p>
            <p>add user <a href="#">here</a></p>
        </div>
        
    </div>
    <div class="ml-2 mt-3">
        <select name="" id="">
            @foreach ($roles as $item)
            <option value="{{ $item->role_id }}">{{ $item->role }}</option>
            @endforeach
        </select>
    </div>
    
</div>
@endsection
