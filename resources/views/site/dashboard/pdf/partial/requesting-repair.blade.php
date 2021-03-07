{{$created_at->format('d M, Y')}}

@if($data['landlord_email'])
    <p><strong>Via Electronic Mail({{$data['landlord_email']}})</strong></p>
@endif

<p><strong>Via USPS Certified Email</strong></p>

<p>{{$data['landlord_first_name']}} {{$data['landlord_last_name']}}</p>
<p>{{$data['street_address']}}</p>
<p>{{$data['city']}}, {{$data['state']}} & {{$data['zip']}}</p>

<p><strong>Re: Repairs Requested </strong></p>

<p>Dear {{$data['landlord_first_name']}} {{$data['landlord_first_name']}}:</p>

<p>As you know, I recently moved into the rental property at {{$data['full_address']}} and am
    loving it!  However, I recently noticed a few items in need of attention/repair—namely</p>

<ol>
    @foreach($data['repair_items']  as $key => $repair_item)
        <li>
            {{$repair_item}}
        </li>
    @endforeach
</ol>

<p>
    If possible, I would greatly appreciate it these items could be fixed/repaired by {{$data['repair_last_date']}}.
    I am available to facilitate and assist however I can. If you and/or someone on your behalf need to
    enter the rental unit, please let me know at least twenty-four hours in advance so I can make
    arrangements to be around. If you need to reach me, you can call me at {{$data['phone_number']}} or
    email me at {{$data['email']}}. Thanks in advance.
</p>

<p>
    Warm regards,
</p>

<p>
    {{$data['first_name']}} {{$data['last_name']}}
</p>
