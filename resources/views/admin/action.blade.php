@extends('user.layouts.header')

@section('container')
    <div>
    </div>
    <div>
        ldskffdss{{ ($data->roles)? $data->roles->role : FALSE }}
    </div>
    <div class="mb-5" style="display: flex;">
        <form action="{{ route('test1',[encrypt($data->id)]) }}" method="post">
            @csrf
            <div class="form-group row mb-3">
                <label for="" class="col-sm-2 col-form-label">{{ $data->name }}</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Role</label>
                <div class="col-sm-10">
                    <select class="form-select" name="role" aria-label="Disabled select example">
                        <option disabled selected>Edit</option>
                        @foreach ($roles as $role)
                            @if (!is_null($data->roles) && old('role', $data->roles->role == $role->role) && true)
                                <option selected value="{{ $data->roles->role }}">{{ $role->role }}</option>
                            @else
                                <option value="{{ $role->role_id }}">{{ $role->role }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <button>
                edit
            </button>
        </form>
    </div>
    <div class="mt-3">
        <form action="{{ route('revokerole',['id'=>$id]) }}" method="get">
            @csrf
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Revoke Role</label>
                <div class="col-sm-10">
                    <button>
                        revoke role
                    </button>
                </div>
            </div>
        </form>
        <form action="{{  route('test1',['dd'=>$d])  }}" method="get">
            @csrf
            <button>
                test
            </button>
        </form>
        <div>
            {{-- {{ $data->name }} --}}
            @if (!is_null($data->roles))
            role
            @else
            notrole
            @endif
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buton = document.getElementsByTagName('button')[1]
            const bb = document.getElementsByTagName('div')[7]
            console.log(buton)
            buton.addEventListener('click', function(e) {
                console.log('asdasdaasasdasdasd')
            })
        })
    </script>
@endsection
