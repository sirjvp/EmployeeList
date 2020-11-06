@extends('layout.app')
@section('content')
<div class="container" style="margin-top: 20px;">
<div class="row">
        <h1 class="col">Edit Employee Data</h1>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('employee.update', $employee) }}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PATCH" required/>
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" name="name" value="{{ $employee->name }}" required/>
                </div>
                <div class="form-group">
                    <label>Gender:</label>
                    <?php
                    $selected_male = '';
                    if ( $employee->gender == "Male" ) { 
                        $selected_male = 'selected'; 
                    }
                    $selected_female = '';
                    if ( $employee->gender == "Female" ) { 
                        $selected_female = 'selected'; 
                    }
                    ?>
                    <select name="gender" class="custom-select" required>
                        <option value="Male" {{ $selected_male }}>Male</option>
                        <option value="Female" {{ $selected_female }}>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Company:</label>
                    <select name="company" class="custom-select" required>
                        @foreach($companies as $company)
                        <?php
                        $selected = '';
                        if ( $employee->company == $company->id ) { 
                            $selected = 'selected'; 
                        }
                        ?>
                        <option value="{{ $company->id }}" {{ $selected }}>{{ $company->name .'('. $company->email .')' }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Position:</label>
                    <input type="text" class="form-control" name="position" value="{{ $employee->position }}" required/>
                </div>
                <div class="form-group">
                    <label>Recruit Date:</label>
                    <input type="date" class="form-control" name="recruit" value="{{ $employee->recruit }}" required/>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection