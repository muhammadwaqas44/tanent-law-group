{{$created_at->format('d M, Y')}}

@if($data['landlord_email'])
    <p><strong>Via Electronic Mail({{$data['landlord_email']}})</strong></p>
@endif

<p><strong>Via USPS Certified Email</strong></p>

<p>{{$data['landlord_first_name']}} {{$data['landlord_last_name']}}</p>
<p>{{$data['street_address']}}</p>
<p>{{$data['city']}}, {{$data['state']}} & {{$data['zip']}}</p>

<p><strong>Re: Termination of Tenancy - {{$data['full_address']}} </strong></p>

<p>Dear {{$data['landlord_first_name']}} {{$data['landlord_first_name']}}:</p>

<p> I write to notify you that I will be moving out of {{$data['full_address']}}("the Property") on or before {{$data['move_out_date']}}.</p>

<p>
    I understand I am entitled to an initial inspection of the Property anytime within the two week period
    before I move out to provide an opportunity to fix any identified deficiencies to avoid deductions from
    my security deposit of {{$data['security_deposit']}}. Please email me at {{$data['email']}} or text me
    at {{$data['phone_number']}} with two or three options you are available within two-week period before
    {{$data['move_out_date']}} to conduct this inspection.
</p>

<p>
    You can mail my security deposit to me at {{$data['address']}}. Please do so within twenty-one days of
    my move-out date.
</p>

<p>
    Regards,
</p>

<p>
    {{$data['first_name']}} {{$data['last_name']}}
</p>
