@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-10">
            {{-- <users-register-form></users-register-form>
            <users-table></users-table> --}}
            <users-component></users-component>
        </div>
    </div>
</div>
@endsection