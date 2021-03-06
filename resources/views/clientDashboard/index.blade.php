@extends('layouts.userdashboard')

@section('title', 'campaign dashboard')

@section('content')

    <div class="dcontent">
        @include('clientDashboard.dashboardAnalysys')
    </div>
    <div class="dv">
        <div class="bv">
            <h4>DATA VISUALIZATION</h4>
        </div>
        <div class="d-flex justify-content-between">
            <div class="p-2">
                <div id="cv">
                    <canvas id="chart1"></canvas>
                </div>
            </div>
            <div class="p-2" id="gi">
                <div class="bv">
                    <h5>TARGET INFORMATION</h5>
                </div>
                <div class="gii">
                    <ul style="height: 200px;">
                        <li>Target Donation: {{ $targetDonation }}</li>
                        <li>Target Dornors: {{ $targetDonors }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            let myChart1 = $('#chart1');
            let label1 = ['Target Donation', 'Total Donations', 'Donors', 'Target Donors', 'Campaigns'];
            let colors1 = ['green', 'blue', 'maroon', 'orangered'];
            let data1 = [{{ $targetDonation }}, {{ $donations }}, {{ $donors }}, {{ $targetDonors }},
                {{ $campaigns }}
            ];
            let chart1 = new Chart(myChart1, {
                type: 'line',
                data: {
                    labels: label1,
                    datasets: [{
                        data: data1,
                        backgroundColor: colors1,
                    }]
                },
                options: {
                    title: {
                        text: 'users',
                        display: true
                    }
                }
            });
        });
    </script>
@endsection
