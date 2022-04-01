@extends('layouts.userdashboard')

@section('title', 'campaign campaigns')

@section('content')

    <div class="campaign">
        <div id="content">
            <br>
            <div class="campaign">
                <div class="center">
                    <h3>WELCOME TO OUR CAMPAIGN BUILDER</h3>
                </div>
                <div class="d-flex justify-content-around" id="cb">
                    <div id="edit" class="text-center">
                        <a href="#">
                            <p>EDIT CAMPAIGN</p>
                            <p>
                                <i class="fa fa-edit" style="font-size: 3em"></i>
                            </p>
                        </a>
                    </div>
                    {{-- <div id="design" class="text-center">
                    <a href="">
                        <p>GO TO CAMPAIGN PAGE</p>
                        <p>
                            <i class="fa fa-globe" style="font-size: 3em"></i>
                        </p>
                    </a>
                </div> --}}
                    <div id="create" class="text-center">
                        <a href="#">
                            <p>CREATE CAMPAIGN</p>
                            <p>
                                <i class="fa fa-file-alt" style="font-size: 3em"></i>
                            </p>
                        </a>
                    </div>
                </div>
                @if (session()->has('info'))
                    <div class="">
                        <p class="alert alert-success">{{ session('info') }}</p>
                    </div>
                @endif
                @if ($errors == true)
                    @foreach ($errors as $er)
                        <p>{{ $er }}</p>
                    @endforeach
                @endif
                <div class="designContent">
                    <div id="displayCampaign">
                        @include('clientDashboard.campaignsInfo')
                    </div>
                </div>
                <div class="campaign_info">
                    <form action="{{ route('client.campaign') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="campain_info">
                            <div class="text-center">
                                <h2>CREATE CAMPAIGN</h2>
                                <hr>
                            </div>
                            <div>
                                <div class="objectives">
                                    <h3 id="subhead">BASIC INFORMATION</h3>
                                    <p>Campaign Title</p>
                                    <p>
                                        <input type="text" name="campaignTitle" id="title">
                                    </p>
                                    <p>
                                        <input type="hidden" name="useremail" id="uemail"
                                            value="{{ session('position') }}">
                                    </p>
                                    <div>
                                        <p>Campain Goal</p>
                                        <p><input type="number" name="campaignGoal" id="campain_goal" required></p>
                                    </div>
                                    <div>
                                        <p>Target Donors</p>
                                        <p><input type="number" name="targetDonors" id="campain_goal" required></p>
                                    </div>
                                    <p>Your core objectives</p>
                                    <p>1. <input type="text" name="objective1" id="objective1" required></p>
                                    <p>2. <input type="text" name="objective2" id="objective2" required></p>
                                    <p>3. <input type="text" name="objective3" id="objective3" required></p>
                                </div>
                                <div class="campaignFiles">
                                    <div>
                                        <h3 id="subhead">CAMPAIGN FILES</h3>
                                    </div>
                                    <div class="flex_item">
                                        <div>
                                            <p>Campaign Logo</p>
                                            <p><input type="file" name="campaignLogo" id=""></p>
                                        </div>
                                        <div class="page_image">
                                            <p>Page image</p>
                                            <p><input type="file" name="campaignImage" id="image" required></p>
                                        </div>
                                        <div class="page_image">
                                            <p>Share video</p>
                                            <p><input type="file" name="campaignVideo" id="image" required></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div c lass="summary">
                                    <div>
                                        <h3 id="subhead">CAMPAIGN DETAILS</h3>
                                    </div>
                                    <p>Campaign summary</p>
                                    <textarea name="campaignSummary" id="summary" rows="10" placeholder="write here"></textarea>
                                    <p>Challenge To be Solved</p>
                                    <p>
                                        <textarea name="campaignChallenge" id="challenge" rows="10" placeholder="write here"></textarea>
                                    </p>
                                    <p>Solution</p>
                                    <textarea name="campaignSolution" id="summary" rows="10" placeholder="write here"></textarea>
                                    <p>Share a Thanks in advance to donors</p>
                                    <textarea name="campaignWord" id="summary" rows="10" placeholder="write here"></textarea>
                                </div>
                            </div>
                            <button class="btn btn-success" name="campaign">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
