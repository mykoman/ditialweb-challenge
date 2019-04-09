@extends("main")

@section("content")


    <div class="row">
        <div class="col-lg-12">
            <h2 class="title-1 m-b-25">Donation Records</h2>
            <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Reference</th>
                        <th>Amount</th>
                        <th >Category</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($records as $record)
                        <tr>
                            <td>{{$record->created_at}}</td>
                            <td>{{$record->payment_ref}}</td>
                            <td>₦ {{$record->amount}}</td>
                            <td>{{$record->plan}}</td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection