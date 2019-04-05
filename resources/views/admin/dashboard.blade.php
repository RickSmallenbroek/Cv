@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mt-4">
                    <div class="card-header text-center">Dashboard</div>

                    <div class="card-body">








                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
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
    @endpush

@endsection
