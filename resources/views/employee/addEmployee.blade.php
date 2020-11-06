@extends('layout.app')
@section('content')
<div class="container" style="margin-top: 20px;">
<div class="row">
        <h1 class="col">Add Employee Data</h1>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('employee.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" name="name" required/>
                </div>
                <div class="form-group">
                    <label>Gender:</label>
                    <select name="gender" class="custom-select" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Company:</label>
                    <select name="company" class="custom-select" required>
                        @foreach($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->name .'('. $company->email .')' }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Position:</label>
                    <input type="text" class="form-control" name="position" required/>
                </div>
                <div class="form-group">
                    <label>Recruit Date:</label>
                    <input type="date" class="form-control" name="recruit" required/>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection