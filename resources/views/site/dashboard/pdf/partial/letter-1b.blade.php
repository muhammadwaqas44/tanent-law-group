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
    I am moving out reluctantly and only because you have failed to remedy conditions at the Property that
    have {{$data['sickness_condition']}}. These conditions include, but are not limited to,
    @if(isset($data['issues']['heating_issue']))
            heating facilities not maintained in good working order; lack of adequate heating;
    @endif

    @if(isset($data['issues']['electricity_issue']))
            electrical lighting, with wiring and electrical equipment, not maintained in good working
            order; lack of electrical lighting; wiring not in good and safe condition nor working properly;
    @endif

    @if(isset($data['issues']['water_issue']))
        a water supply not capable of producing hot and cold running water; lack of hot and cold running
        water; lack of hot and cold running water to plumbing fixtures;
    @endif

    @if(isset($data['issues']['gas_issue']))
            plumbing and/or gas facilities not maintained in good working order; plumbing not maintained
            in good condition;
    @endif

    @if(isset($data['issues']['mold']))
            ineffective waterproofing and weather protection of roof and exterior walls;
            dampness of habitable rooms; deteriorated or ineffective waterproofing of exterior walls,
            roofs, foundations, or floors, including broken windows or doors;
    @endif

    @if(isset($data['issues']['uncleanline']))
            building, grounds, and appurtenances not kept clean, sanitary, and/or free from all
            accumulations of debris, filth, rubbish, and garbage; general dilapidation or improper
            maintenance; an accumulation of weeds, vegetation, junk, dead organic matter, debris,
            garbage, offal, rodent harborages, stagnant water, combustible materials, and/or similar
            materials or conditions constituting fire, health, and/or safety hazards; inadequate maintenance;
    @endif

    @if(isset($data['issues']['infestation']))
            building, grounds, and appurtenances not kept free from rodents, and/or vermin;
            infestation of insects, vermin, and/or rodents;
    @endif

    @if(isset($data['issues']['trash']))
            an inadequate number of appropriate receptacles for garbage and rubbish; lack of adequate garbage
            and rubbish storage and removal facilities;
    @endif

    @if(isset($data['issues']['stairways']))
            floors, stairways, and railings not maintained in good repair; defective and detriorated flooring or
            floor supports;
    @endif

    @if(isset($data['issues']['bathroom']))
         lack of, or improper water closet, lavatory,or bathtub;
    @endif

    @if(isset($data['issues']['kitchen']))
         lack of, or improper kitchen sink;
    @endif

    @if(isset($data['issues']['sewer']))
         lack of connection to required sewage disposal system;
    @endif

    @if(isset($data['issues']['deteriorating']))
         deteriorated or inadequate foundation;
    @endif

    @if(isset($data['issues']['vents']))
        mechanical equipments, including vents, not maintained in good and safe condition, and/or not
        working properly;
    @endif

    @if(isset($data['issues']['plaster']))
        deteriorated, crumbling, or loose plaster;
    @endif

    @if(isset($data['issues']['dilapidated']))
        lack of fire-resistive construction or fire-extinguishing system or equipment;
    @endif

    @if(isset($data['issues']['fire']))
        lack of fire-resistive construction or fire-extinguishing system or equipment;
    @endif

    @if(isset($data['issues']['other']))
        {{$data['issues']['other']['issue']}}
    @endif

</p>

<p>
    Although I have repeatedly informed you of these issues, you have either failed to timely remediate
    them or failed to remediate them altogether.  In light of this, I have lost faith that you will remedy
    these issues and I can no longer tolerate any further harm to my health and wellbeing.
</p>

<p>
    I understand I am entitled to an initial inspection of the Property anytime within the two-week period
    before I move out to provide an opportunity to fix any identified deficiencies to avoid deductions
    from my security deposit of [enter amount of security deposit].
    Please email me at {{$data['email']}} or text me at {{$data['phone_number']}} with two
    or three options you are available within the two-week period before {{$data['move_out_date']}} to conduct
    this inspection.
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
