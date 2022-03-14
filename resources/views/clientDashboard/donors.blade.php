@extends('layouts.userdashboard')

@section('title', 'campaign donors')

@section('content')

    <div class="dinfo">
        <div id="content">
            <br>
            
            <div class="mega_calc">
                <h4 class="text-start" id="filter">DONATIONS SUMMARY</h4>
                <table>
                    <tr>
                        <th>Total Donors</th>
                        <th>Total Donations</th>
                        <th>Target Donation</th>
                    </tr>
                    {{-- @foreach ($donor as $donors)
                    <tr>
                        <td><?php echo $totalDonors; ?></td>
                        <td>Ksh. <?php echo $amoutRaised; ?></td>
                        <td>Ksh. <?php echo $goal; ?></td>
                    </tr>
                    @endforeach --}}
                </table>
            </div>
            <hr>
            <div id="fit"> 
                <h4 id="filter">FILTER RESULTS</h4>
                <div class="flex_item">      
                    <div>           
                        <div class="flex_ite">
                            <div>
                                <p id="active">Active</p>
                                <p id="recuring">Recuring</p>
                            </div>
                            <div>
                                <p id="onetime">One time donors</p>
                                <p id="best">Best donors</p>
                            </div>
                        </div>
                    </div>
                    <div class="donor_data">
                        <div class="minor_data">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Total Donated</th>
                                        <th>Date</th>
                                        <th>Acknowledge</th>
                                    </tr>
                                </thead>
                                {{-- <tbody id="activeD">
                                    <tr>
                                        <td><?php echo $donors['fname']." ".$donors['lname']; ?></td>
                                        <td><?php echo $donors['email']; ?></td>
                                        <td>Ksh. <?php echo $donors['donated_amount']; ?></td>
                                        <td><?php echo $donors['date']; ?></td>
                                        <td><a href="../communication/?accmail=<?php echo $donors['email']; ?>">
                                        <button class="btn btn-warning">Email</button></a></td>
                                    </tr>
                                        <?php } ?>
                                </tbody>
                                <tbody id="recuringD">
                                    <tr>
                                        <td><?php echo $donors['fname']." ".$donors['lname']; ?></td>
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
                                        <td><?php echo $donors['fname']." ".$donors['lname']; ?></td>
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
                                        <td><?php echo $donors['fname']." ".$donors['lname']; ?></td>
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