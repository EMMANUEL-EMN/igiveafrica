<div class="adsector">
    <div class="addheading">
        <h4 class="text-center">FEATURED AND PARTICULARS</h4>
    </div>
    <div class="d-flex justify-content-between">
        @foreach ($advert ?? '' as $c)
            <div class="advert">
                <div>
                    <center>
                        <img src="{{ url('storage/images/' . $c->image) }}" alt="" id="img">
                    </center>
                </div>
                <center>
                    <div class="p-2" id="acontent">
                        <h5 style="color: #227ad8; font-weight:900;">{{ $c->description }}</h5>
                        <br>
                        <p>Published : {{ $c->created_at }}</p>
                    </div>
                </center>
            </div>
        @endforeach
    </div>
</div>
