@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
@endsection

@section('javascript')
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('table').DataTable({
                "pageLength" : 50
            })
        })
    </script>

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('About') }}</div>
                <div class="card-body">
                    <form action="">
                        @foreach ($abouts as $about)
                            <label for="basic-url" class="form-label">Title</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="{{ $about->title }}" id="basic-url" aria-describedby="basic-addon3">
                            </div>

                            
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea style="height: 20rem" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $about->description }}</textarea>
                              </div>
                        @endforeach
                        
                        <button type="button" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-light">Trash</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection