<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="prfl_inside2">
        <div class="edit_profile1">
            <h3>Please Select a Letter</h3>
            <form class="form-selection" action="{{route('get-letters')}}" method="get">
                <div class="form-group">
                    <select class="form-control select2-class select_letter_name" name="letter_name">
                        <option {{Request::route()->getName() == 'letter-1a' ? 'selected':'' }} value="letter-1a">Notice of Termination of Tenancy Not Due to Any Issue with the Landlord, Rental Unit, or Tenancy</option>
                        <option {{Request::route()->getName() == 'letter-1b' ? 'selected':''}} value="letter-1b"> Notice of Termination of Tenancy Due to One or More Issues with the Landlord, Rental Unit, or Tenancy</option>
                        <option {{Request::route()->getName() == 'letter-2' ? 'selected':''}} value="letter-2">Letter to Landlord Requesting Return of Security Deposit</option>
                        <option {{Request::route()->getName() == 'request_repairs' ? 'selected':''}} value="requesting-repair">Letter to Landlord Requesting Repairs</option>
                        <option {{Request::route()->getName() == 'judgement_letter' ? 'selected':''}} value="judgement-letter">Post-Judgment Letter to Landlord</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){

        $('.select_letter_name').change(function(){

            $('.form-selection').submit();

        });

    });
</script>


