<form action="{{ route('client.join') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('post')
    @if (session()->has('sent'))
        <p class="alert alert-success">{{ session('sent') }}</p>
    @endif
    <h6>PERSONAL INFORMATION</h6>
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
    <hr>
    <div class="">
        <h6>CAMPAIGN INFORMATION</h6>
        <p class="text-danger">NB: fill in where applicable</p>
    </div>
    <hr>
    <div class="d-flex justify-content-between">
        <div class="inp">
            <p>Account type</p>
            <p>
                <select name="org_type" id="org_type" required>client.join
                    <option value="nonprofit">Nonprofit</option>
                    <option value="donor">Donor</option>
                    <option value="individual">Individual</option>
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
            <p>Organization Website</p>
            <p> <input type="url" name="url" id="url"></p>
        </div>
        <div class="inp">
            <p>Organization Email</p>
            <p><input type="email" name="org_email" id="email" required></p>
        </div>
    </div>    <div class="d-flex justify-content-between">
        <div class="inp">
            <p>Your phone number</p>
            <p><input type="number" name="phone" id="phone" required></p>
        </div>
        <div class="inp">
            <p>Campaign/organization Name</p>
            <p><input type="text" name="orgname" id="orgname"></p>
        </div>
    </div>

    <p><input type="checkbox" name="t&c" required> I have read and agrred to Terms and conditions</p>
    <p><input type="checkbox" name="mailing_list"> join our mailing list. You can unsubscribe anytime.</p>
    <button class="btn btn-primary" name="reg_user">Sign Up</button>
    <p>Already have an account? <a href="/login/">Login</a></p>
</form>