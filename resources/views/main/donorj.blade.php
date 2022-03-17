<form action="../auth_user.php" method="POST" enctype="multipart/form-data">
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
    <div class="d-flex justify-content-between">
        <div class="inp"></div>
        <div class="inp"></div>
    </div>

    <p><input type="checkbox" required> I have read and agrred to Terms and conditions</p>
    <p><input type="checkbox" name="mailing_list"> join our mailing list. You can unsubscribe anytime.</p>
    <button class="btn btn-primary" name="reg_user">Sign Up</button>
    <p>Already have an account? <a href="/login/">Login</a></p>
</form>