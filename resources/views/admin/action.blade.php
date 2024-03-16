@extends('user.layouts.header')

@section('container')
<div>
    {{-- {{ decrypt($data) }} --}}
</div>
<div>
    {{-- @dd($data1) --}}
</div>
<div class="mb-5" style="display: flex;">
    <form>
        <div class="form-group row mb-3">
          <label for="staticEmail" class="col-sm-2 col-form-label">{{ decrypt($data) }}</label>
          <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="">
          </div>
        </div>
        {{-- <div class="form-group row mb-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
          </div>
        </div> --}}
        <div class="form-group row mb-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Role</label>
          <div class="col-sm-10">
            <select class="form-select" aria-label="Disabled select example">
                <option selected>Open this select menu</option>
                @foreach ($roles as $role)
                <option value="{{ $role->role_id }}">{{ $role->role }}</option>
                @endforeach
            </select>
          </div>
        </div>
      </form>
    </div>
    <div class="mt-3">
        <form action="">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Revoke Role</label>
                <div class="col-sm-10">
                    <button>
                        revoke role
                    </button>
                </div>
            </div>
        </form>
    </div>
<script>
    document.addEventListener('DOMContentLoaded', function(){
        const buton = document.getElementsByTagName('button')[1]
        const bb = document.getElementsByTagName('div')[7]
        console.log(buton)
        buton.addEventListener('click',function(e){
            console.log(e+1)
        })
    })
</script>
@endsection
