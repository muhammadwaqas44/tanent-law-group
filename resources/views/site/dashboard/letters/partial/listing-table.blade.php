<div class="col-sm-12 order-first order-lg-9 col-md-12 col-lg-9 col-xl-9 body_white1">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="prfl_inside2">
                <div class="edit_profile"><h3>Saved Customized Letters</h3></div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
            <div class="prfl_inside3">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Letter Name</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($letters as $key=>$letter)
                        <tr>
                            <td>{{$letter->type}}</td>
                            <td>{{$letter->created_at->format('d M Y')}}</td>
                            <td>

                                @if($letter->type == 'Notice of Termination of Tenancy Not Due to Any Issue with the Landlord, Rental Unit, or Tenancy')
                                    <a href="{{route('export_letter1a',['id'=>$letter->id])}}"><i class="fas fa-file-pdf"></i></a>
                                @elseif($letter->type == 'Notice of Termination of Tenancy Due to One or More Issues with the Landlord, Rental Unit, or Tenancy')
                                    <a href="{{route('export_letter1b',['id'=>$letter->id])}}"><i class="fas fa-file-pdf"></i></a>
                                @elseif($letter->type == 'Letter to Landlord Requesting Return of Security Deposit')
                                    <a href="{{route('export_letter2',['id'=>$letter->id])}}"><i class="fas fa-file-pdf"></i></a>
                                @elseif($letter->type == 'Letter to Landlord Requesting Repairs')
                                    <a href="{{route('export_request_repairs',['id'=>$letter->id])}}"><i class="fas fa-file-pdf"></i></a>
                                @elseif($letter->type == 'Post-Judgment Letter to Landlord')
                                    <a href="{{route('export_judgement_letter',['id'=>$letter->id])}}"><i class="fas fa-file-pdf"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                {{ $letters->links() }}


            </div>
        </div>
    </div>


</div>
