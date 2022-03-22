<div class="cm">
    <h5>OUR CORE OBJECTIVES</h5>
    <ul>
        <li>{{ $campaign->objective1 }}</li>
        <li>{{ $campaign->objective2 }}</li>
        <li>{{ $campaign->objective3 }}</li>
    </ul>
</div>
<div class="cs">
    <h5>OUR TARGETS</h5>
    <p>
        <i class="fa fa-user-friends"></i>
        Target Donors
    </p>
    <p>{{ $campaign->tdonors }}</p>
    <p>
        <i class="fa fa-dollar"></i>
        Target Amount
    </p>
    <p>Ksh. {{ $campaign->goal }}</p>
</div>
{{-- <div class="d-flex justify-content-between">
    @foreach ($progress as $c)
        <div class="advert">
            <div>
                <center>
                    <img src="{{ url('storage/uploads/'.$c->image)}}" alt="" id="img">
                </center>
            </div>
            <center>
                <div class="p-2" id="cont">
                    <h5 style="color: #227ad8; font-weight:900;">{{ $c->description }}</h5>
                    <br>
                    <p>Published : {{ $c->created_at }}</p>
                </div> 
            </center>
        </div>
    @endforeach
</div> --}}