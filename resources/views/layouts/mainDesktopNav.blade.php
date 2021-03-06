<div class="container-fliud">
    <div class="row">
        <div class="wrapperClass">
            <div class="d-flex flex-row justify-content-between">
                <div class="p2" style="padding-left: 5px;">
                    <img src="{{ url('storage/images/logo.png')}}" alt="" id="logo">
                </div>
                <div class="p2" id="lgv">
                    <ul class="d-flex flex-row justify-content-around" id="dnav">
                        <li><a id="topAnchor" href="/">Home</a></li>
                        <li class="dropdown">
                            <a href="#" id="topAnchor">Learn More</a>
                            <div class="dropdown-content">
                                <ul>
                                    <li><a id="topAnchor" href="/about_us/">About Us</a></li>
                                    <li><a id="topAnchor" href="/our_services/">Our Services</a></li>
                                    <li><a id="topAnchor" href="/how_it_works/">How it works</a></li> 
                                    <li><a id="topAnchor" href="/why_us/">why us?</a></li>
                                    <li><a id="topAnchor" href="/pricing/">Pricing</a></li>
                                    <li><a id="topAnchor" href="/Case_studies/">Case studies</a></li>
                                    <li><a id="topAnchor" href="/our_team/">Team</a></li>
                                    <li><a id="topAnchor" href="/partners/">Partners</a></li>
                                    <li><a id="topAnchor" href="/events_&_auction/">Events & Auction</a></li>
                                </ul>
                                <br>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a id="topAnchor" href="#">Resources</a>
                            <div class="dropdown-content">
                                <ul>
                                    <li><a id="topAnchor" href="/strategies/">Strategies</a></li>
                                    <li><a id="topAnchor" href="/blog/">Blogs</a></li>
                                    <li><a id="topAnchor" href="/communication/">Communication</a></li>
                                    <li><a id="topAnchor" href="/fundraisers/">Fundraisers</a></li>
                                    <li><a id="topAnchor" href="/donors/">Donors</a></li>
                                    <li><a id="topAnchor" href="/nonprofits/">Nonprofit</a></li>
                                    {{-- <li><a id="topAnchor" href="/badges/">Barges</a></li> --}}
                                </ul>   
                            </div>
                        </li>
                        <li><a id="topAnchor" href="/fundraise/courses_we_serve/">Donate</a></li>
                        <li><a id="topAnchor" href="/charity_shop/">Charity Shop</a></li>
                        <li><a id="topAnchor" href="/contact_us/">Contact Us</a></li>
                        <li><a id="topAnchor" href="/login/">Login</a></li>
                    </ul>
                </div>
                <div class="p2" id="menu">
                    <i class="fa fa-bars" style="font-size: 2.5em;cursor: pointer;"></i>
                </div>
            </div>
            <div class="mb">
                @include('layouts.mainMobileNav')
            </div>
        </div>
    </div>
</div>
<style>
    #close
    {
        font-size: 2.2em;
        text-align: right;
    }
    h1
    {
        font-weight: 900;
    }
    .wrapperClass
    {
        /* background-color: #227ad8; */
        background-color: #ec3d3d;
        color: white;
        font-weight: 900;
        padding: 10px;
        border-bottom: 20px solid #227ad8;
        width: 100%;
    }
    #topAnchor
    {
        text-decoration: none;
        color: white;
        padding: 5px;
        margin: 10px;
    }
    
    #topAnchor:hover
    {
        background-color: #227ad8;
        padding: 4px;
        color: white;
        font-weight: bolder;
    }
    #dnav
    {
        list-style-type: none;
        padding: 10px;
    }
    /* dropdown menus */
.dropdown 
{
    position: relative;
    display: inline-block;
}
#logo
{
    max-width: 60px;
    max-height: 60px;
}


.dropdown-content 
{
    display: none;
    position: absolute;
    background-color: #ec3d3d;
    width: 250px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}

li
{
    list-style-type: none;
}

.dropdown:hover .dropdown-content 
{
    display: block;
}
#menu
{
    padding: 5px;
    display: none;
}
#mobNav
{
    display: none;
}

@media screen and (max-width: 700px) 
{
    #lgv
    {
        display: none;
    }
    #menu
    {
        display: block;
    }
    #mobNav
    {
        background-color: #ec3d3d;
        color: white;
        font-weight: 900;
        padding: 10px;
        width: 100%;
    }
    .mobNavLinks
    {
        list-style-type: none;
        font-size: larger;
    }
    .mobNavLinks li a 
    {
        padding: 10px;
    }
    .dropdown-content
    {
        left: 0;
        background-color: #227ad8;
        flex-wrap: wrap;
        width: 170px;
    }
    #close
    {
        cursor: pointer;
    }
}

</style>
<script>
$(document).ready(function()
{
    let menuBtn = $("#menu");
    let mobNav = $("#mobNav");
    const menu = $('.wrapperClass');
    const close = $('#close');
    const lm1 = $('.lm1');
    const mr1 = $('#curl1');

    const lm2 = $('.lm2');
    const mr2 = $('#curl2');

    mr1.hide();
    mr2.hide();

    menuBtn.click(function()
    {
        mobNav.toggle();
    });

    close.click(()=>{
        mobNav.hide();
        menu.show();
    });
    lm1.click(()=>{
        mr1.toggle();
    });
    lm2.click(()=>{
        mr2.toggle();
    });
});
</script>