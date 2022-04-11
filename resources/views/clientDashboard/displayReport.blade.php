<div class="repor bg-white p-3 m-3 table-responsive table-expand-sm">
    <h3 class="text-center">REPORTS</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th></th>
                <th>Story</th>
                <th>Activity</th>
                <th>Image1</th>
                <th>Image2</th>
                <th>Image3</th>
                <th>Video</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $r)
                <tr>
                    <td></td>
                    <td>{{ $r->story }}</td>
                    <td>{{ $r->activities }}</td>
                    <td>
                        <img src="{{ url('storage/reports/' . $r->image1) }}" alt="" id="rimg">
                    </td>
                    <td>
                        <img src="{{ url('storage/reports/' . $r->image2) }}" alt="" id="rimg">
                    </td>
                    <td>
                        <img src="{{ url('storage/reports/' . $r->image3) }}" alt="" id="rimg">
                    </td>
                    <td>
                        <video src="{{ url('storage/reports/' . $r->video) }}" id="rimg"></video>
                    </td>
                    <td>
                        <a href="/campaign/delete/report/id={{ $r->id }}">
                            <i class="fa fa-trash-alt text-danger"></i>
                        </a>
                        <a href="/campaign/update/report/id={{ $r->id }}">
                            <i class="fa fa-edit text-success"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
