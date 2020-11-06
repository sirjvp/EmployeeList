@extends('layout.app')
@section('content')
<div class="container" style="margin-top: 20px;">
<div class="row">
        <h1 class="col">Edit Company Data</h1>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('company.update', $company) }}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PATCH"/>
                <div class="form-group">
                    <label>Company:</label>
                    <input type="text" class="form-control" name="name" value="{{ $company->name }}" required/>
                </div>
                <div class="form-group">
                    <label>Address:</label>
                    <input type="address" class="form-control" name="address" value="{{ $company->address }}" required/>
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control" name="email" value="{{ $company->email }}" required/>
                </div>
                <div class="form-group">
                    <label>Phone:</label>
                    <input type="text" class="form-control" name="phone" value="{{ $company->phone }}" required/>
                </div>
                <div class="form-group">
                    <label>Postcode:</label>
                    <input type="text" class="form-control" name="postcode" value="{{ $company->postcode }}" required/>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection