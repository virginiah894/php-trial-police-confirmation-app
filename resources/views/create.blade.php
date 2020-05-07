@extends('layouts.app')
@section('content')
<form action="{{route('store')}}" method="POST" >
    @csrf
    <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header bg-indigo">
                <h2>Save  Police Details </h2>
            </div>
            <div class="body">
                <div class="form-group form-float">
                    <div class="form-line">
                        <label class="form-label">Police Name</label>
                        <input type="text" name="name" class="form-control"
                        placeholder="name" value="{{old('name')}}" required>
                    </div>
                    <div class="form-line">
                        <label class="form-label">Police Number</label>
                        <input type="number" name="force_number" class="form-control"
                        placeholder="force_number" value="{{old('force_number')}}" required>
                    </div>
                    <div class="form-line">
                        <label class="form-label">Police Station</label>
                        <input type="text" name="station" class="form-control"
                        placeholder="station" value="{{old('station')}}" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">
                    <span>SAVE</span>
                </button>
            </div>
        </div>
    </div>
</form>
@endsection
