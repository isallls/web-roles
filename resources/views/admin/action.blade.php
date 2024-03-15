@extends('user.layouts.header')

@section('container')
{{ decrypt($data) }}
<button class="ksldf">
    test
</button>
<script>
    document.addEventListener('DOMContentLoaded', function(){
        const bu = document.getElementsByTagName('button')[1]
        console.log(bu)
        bu.addEventListener('click',function(){
            console.log('trer')
        })
        console.log('skldfjsdkjlfas')
    })
</script>
@endsection
