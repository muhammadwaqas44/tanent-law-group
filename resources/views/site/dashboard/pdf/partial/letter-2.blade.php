{{$created_at->format('d M, Y')}}

@if($data['landlord_email'])
    <p><strong>Via Electronic Mail({{$data['landlord_email']}})</strong></p>
@endif

<p><strong>Via USPS Certified Email</strong></p>

<p>{{$data['landlord_first_name']}} {{$data['landlord_last_name']}}</p>
<p>{{$data['street_address']}}</p>
<p>{{$data['city']}}, {{$data['state']}} & {{$data['zip']}}</p>

<p><strong>Re: Return of Security Deposit - {{$data['full_address']}} </strong></p>

<p>Dear {{$data['landlord_first_name']}} {{$data['landlord_first_name']}}:</p>

<p>
    I write regarding your failure to return my security deposit in connection with my tenancy at the above-
    referenced property("the Property") by the date required by law.
</p>

<p>
    On {{$created_at->format('d/m/y')}}, I informed you I would be moving out the Property by {{$data['rental_unit_move_date']}}
    and asked you to send my full security deposit to {{$data['security_deposit']}} to {{$data['email']}} with in
    twenty-days. That date has now passed and you have not yet returned my full security deposit.

</p>

<p>
    California law requires that no later than twenty-one calender days after a tenant has vacated a rental
    unit, a landlord is required to provide the tenant, by personal delivery or by first-class mail, postage
    prepaid, a copy of an itemized statement indicating the basic for, and the amount of, any security deposit
    received and the disposition of the security; and return any return and remaining portion of the security
    to the tenant. <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&sectionNum=1950.5">See Cal. Civ. Code § 1950.5(g)(1)</a>.
    A landlord's bad faith retention of the security deposit or any portion thereof may subject the landlord
    to statutory damages of up to twice the amount of the security deposit, in addition to actual damages.
    See id. § 1950.5(l) (emph. added).
</p>

<p>

    @if($data['initial_inspection'] == 'yes')
        As you know, I requested an initial inspection of the Property before moving out so that I
        would have an opportunity to remedy any alleged issues and recover my security deposit in full.
    @endif
    @if($data['broom_clean'] == 'yes')
        I returned the Property to you broom-clean and in exactly the same condition as when I moved in less
        ordinary wear and tear.
    @endif

    @if($data['key_return'] == 'yes')
            I returned the keys to you on or about the date I moved out.
    @endif

    @if($data['landlord_provide_address'] == 'yes')
            And I provided you with an address for the return of my security deposit and reminded you to return it to me within twenty-one days, as required by law.
    @endif
    Accordingly, you are now liable to me for a violation of California Civil Code section 1950.5.
</p>

<p>
    <strong>
        If you do not return to me my security deposit—in full—on or before before {{$data['letter_send_date']}}
        at the address set forth above, I will have no choice but to initiate formal legal proceedings
        against you.
    </strong>
    If that is necessary, I will pursue all applicable damages, including the full amount of the security
    deposit wrongfully withheld {{$data['hold_security_deposit']}}, twice the amount of the security
    deposit wrongfully withheld pursuant to California Civil Code section 1950.5(l)($[2 × ${{$data['hold_security_deposit']}})
    ]), filing and service fees (approximately $75.00), and a fee I paid for information pertaining to
    California security deposit law {{$data['toolkit_amount']}}.
    Additionally, this matter will become a public record.

</p>

<p>
    I look forward to your prompt response and hope we are able to resolve this matter without the need for
    formal legal proceedings.
</p>

<p>
    Sincerely,
</p>

<p>
    {{$data['first_name']}} {{$data['last_name']}}
</p>
