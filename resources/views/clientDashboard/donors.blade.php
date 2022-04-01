@extends('layouts.userdashboard')

@section('title', 'campaign donors')

@section('content')

    <div class="dinfo">
        <div id="content">
            <br>

            <div class="mega_calc">
                <h4 class="text-start" id="filter">DONATION SUMMARY</h4>
                <table class="table-striped table-bordered">
                    <tr>
                        <th>Total Donors</th>
                        <th>Total Donations</th>
                        <th>Target Donation</th>
                    </tr>
                    <tr class="text-dark">
                        <td>{{ $totalDonors }}</td>
                        <td>Ksh. {{ $totalDonation }}</td>
                        <td>Ksh. {{ $target }}</td>
                    </tr>
                </table>
            </div>
            <hr>
            <div id="fit">
                <h5 id="filter" class="text-center">DONORS DONATION</h5>
                <div class="donoations">
                    {{-- <div class="filter">
                        <div class="d-flex justify-content-around">
                            <p id="onetime">
                                <button class="btn btn-danger">One Time</button>
                            </p>
                            <p id="recuring">
                                <button class="btn btn-warning">Recuring</button>
                            </p>
                            <p>
                                <button id="active" class="btn btn-primary">Active</button>
                            </p>
                            <p id="best">
                                <button class="btn btn-success">Best Donors</button>
                            </p>
                        </div>
                    </div> --}}
                    <div class="donor_data">
                        <div class="minor_data table-responsive">
                            <table class="table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Total Donated</th>
                                        <th>Date</th>
                                        <th>Acknowledged</th>
                                    </tr>
                                </thead>
                                <tbody id="activeD">
                                    @foreach ($donors as $donor)
                                        <tr class="text-dark">
                                            <td>{{ $donor->fullname }}</td>
                                            <td>{{ $donor->email }}</td>
                                            <td>{{ $donor->amount }}</td>
                                            <td>{{ $donor->created_at }}</td>
                                            <td>{{ $donor->acknoledged }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                {{-- <tbody id="recuringD">
                                    <tr>
                                        <td><?php echo $donors['fname'] . ' ' . $donors['lname']; ?></td>
                                        <td><?php echo $donors['email']; ?></td>
                                        <td>Ksh. <?php echo $donors['donated_amount']; ?></td>
                                        <td><?php echo $donors['date']; ?></td>
                                        <td><a href="../communication/?accmail=<?php echo $donors['email']; ?>">
                                        <button class="btn btn-warning">Email</button></a></td>
                                    </tr>
                                        <?php }} ?>
                                </tbody>
                                <tbody id="oneTimeD">
                                    <tr>
                                        <td><?php echo $donors['fname'] . ' ' . $donors['lname']; ?></td>
                                        <td><?php echo $donors['email']; ?></td>
                                        <td>Ksh. <?php echo $donors['donated_amount']; ?></td>
                                        <td><?php echo $donors['date']; ?></td>
                                        <td><a href="../communication/?accmail=<?php echo $donors['email']; ?>">
                                        <button class="btn btn-warning">Email</button></a></td>
                                    </tr>
                                        <?php }} ?>
                                </tbody>
                                <tbody id="bestD">
                                    <tr>
                                        <td><?php echo $donors['fname'] . ' ' . $donors['lname']; ?></td>
                                        <td><?php echo $donors['email']; ?></td>
                                        <td>Ksh. <?php echo $donors['donated_amount']; ?></td>
                                        <td><?php echo $donors['date']; ?></td>
                                        <td><a href="../communication/?accmail=<?php echo $donors['email']; ?>">
                                        <button class="btn btn-warning">Email</button></a></td>
                                    </tr>
                                        <?php }} ?>
                                </tbody> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
