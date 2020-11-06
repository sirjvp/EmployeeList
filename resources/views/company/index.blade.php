
@extends('layout.app')
@section('content')
    <h1 style="margin: 72px;margin-left: 180px;width: 995px;font-family: ABeeZee, sans-serif;margin-bottom: 18px;">List Company</h1>
    <a href="{{ route('employee.create') }}" class="btn btn-primary" type="button" style="margin-top: 82px;font-family: ABeeZee, sans-serif;width: 173px;margin-left: -103px;height: 40px;">ADD COMPANY</a>
    <hr style="padding: 0px;background-color: #000000;width: 1140px;height: 1px;">
    <div class="container" style="margin-top: 20px;">
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Post Code</th>
                        <th scope="col">Updated At</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td><a href="{{ route('company.edit', $company) }}">{{ $company->name }}</a></td>
                        <td>{{ $company->address }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->phone }}</td>
                        <td>{{ $company->postcode }}</td>
                        <td>{{ $company->updated_at }}</td>
                        <td>{{ $company->created_at }}</td>
                        {{-- @auth --}}
                        <td>
                            <form action="{{ route('company.destroy', $company) }}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger"><img src="trash.png" height="30px"></button>
                            </form>
                        </td>
                        {{-- @endauth --}}
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Jonathan Valentino © 2020</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
@endsection