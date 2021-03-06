<form action="{{ route('igive.mail') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('post')
    <div class="chead">
        <h5>CHOOSE AMOUNT TO DONATE</h5>
        <div class="hc">
            <input type="hidden" name="id" id="" value="{{ $campaign->id }}">
            <input type="hidden" name="cemail" id="" value="{{ $campaign->cemail }}">
        </div>
        <div class="d-flex justify-content-around">
            <div id="adiv">
                <p>Ksh. 500</p>
                <p><input type="radio" name="amount" value="500" id="amount"></p>
            </div>
            <div id="adiv">
                <p>Ksh. 1000</p>
                <p><input type="radio" name="amount" value="1000" id="amount"></p>
            </div>
            <div id="adiv">
                <p>Ksh. 2000 </p>
                <p><input type="radio" name="amount" value="2000" id="amount"></p>
            </div>
            <div id="adiv">
                <p>Ksh. 25000</p>
                <p><input type="radio" name="amount" value="2500" id="amount"></p>
            </div>
        </div>
        <div>
            <p>Custom amount</p>
            <input type="number" name="camount" id="custom" placeholder="Ksh.">
            <br>
            <p>Phone Number</p>
            <input type="text" name="phone" id="comment" value="+254" required>
            <p>
                {{-- Display your donations on donor wall --}}
                <input type="hidden" name="display_name" id="display_name" value="on">
            </p>
        </div>
        <hr>
        <div class="clien_info">
            <div id="finance_info" class="bg">
                <h5>PERSONAL INFORMATION</h5>
            </div>
            <p>Full Name</p>
            <p><input type="text" name="fname" id="fname" required></p>
            <p>Email</p>
            <p><input type="email" name="email" id="email" required></p>
            <p>Country</p>
            <p><input type="text" name="country" id="country" required></p>
            {{-- <p>State/county</p>
            <p><input type="text" name="county" id="county" required></p> --}}
            <div>
                <button class="btn btn-warning">DONATE</button>
            </div>
        </div>
    </div>
</form>
