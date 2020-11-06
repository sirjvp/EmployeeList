@extends('layout.app')
@section('content')
<div class="container" style="margin-top: 20px;">
<div class="row">
        <h1 class="col">Add Company Data</h1>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('company.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Company:</label>
                    <input type="text" class="form-control" name="name" required/>
                </div>
                <div class="form-group">
                    <label>Address:</label>
                    <input type="text" class="form-control" name="address" required/>
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control" name="email" required/>
                </div>
                <div class="form-group">
                    <label>Phone:</label>
                    <input type="text" class="form-control" name="phone" required/>
                </div>
                <div class="form-group">
                    <label>Postcode:</label>
                    <input type="text" class="form-control" name="postcode" required/>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection