@extends('layouts.contentNav')

@section('title', 'add admin')

@section('content')
    <div class="cont" style="width: 100%;">
        <center>
            <div class="uf bg-white p-3 text-left" style="width: 600px;">
                <form action="{{ route('admin.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    @if (session()->has('sent'))
                        <p class="alert alert-success">{{ session('sent') }}</p>
                    @endif
                    <h6 class="text-center">PERSONAL INFORMATION</h6>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <div>
                            <p>First Name</p>
                            <p><input type="text" name="fname" id="fname" required></p>
                        </div>
                        <div>
                            <p>Last Name</p>
                            <p><input type="text" name="lname" id="lname" required></p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="inp">
                            <p>Email</p>
                            <p><input type="email" name="email" id="email" required></p>
                        </div>
                        <div class="inp">
                            <p>Password: </p>
                            <p><input type="password" name="password" id="password" required></p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="inp">
                            <p>Country</p>
                            <p>
                                <input type="text" name="country" id="country" required>
                            </p>
                        </div>
                        <div class="inp">
                            <p>City</p>
                            <p>
                                <input type="text" name="city" id="city" required>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="inp">
                            <p>Account type</p>
                            <p>
                                <select name="org_type" id="org_type" required>client.join
                                    <option value="contentAdmin">content Admin</option>
                                    {{-- <option value="donor">Donor</option>
                                    <option value="individual">Individual</option> --}}
                                </select>
                            </p>
                        </div>
                        <div class="inp">
                            <p>County located</p>
                            <p><input type="text" name="location" id="county" required></p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="inp"></div>
                        <div class="inp"></div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="inp">
                            <p>Phone number</p>
                            <p><input type="number" name="phone" id="phone" required></p>
                        </div>
                        <div class="inp">
                            <p>ID Number</p>
                            <p><input type="text" name="idnum" id="idnum"></p>
                        </div>
                    </div>
                    <button class="btn btn-primary" name="reg_user">Sign Up</button>
                </form>
            </div>
        </center>
    </div>
@endsection
