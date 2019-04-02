@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!



                    <div>
                        <div class="text-center">
                        <form action="{{ route('editImage') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-7">
                                    <input type="file" name="image" class="form-control-file"
                                           id="file">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <button class="btn btn-success"
                                            type="submit">@lang('general.upload')</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script>
        $(document).ready(function () {
            @if (Session::has('success'))
            Swal.fire(
                'Success',
                '{{Session::get('success')}}',
                'success'
            );
            @elseif(session::has('warning'))
            Swal.fire(
                'Warning',
                '{{Session::get('warning')}}',
                'warning'
            );
            @endif
        });
    </script>

@endsection
