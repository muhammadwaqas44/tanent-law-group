{{$created_at->format('d M, Y')}}

@if($data['landlord_email'])
    <p><strong>Via Electronic Mail({{$data['landlord_email']}})</strong></p>
@endif

<p><strong>Via USPS Certified Email</strong></p>

<p>{{$data['landlord_first_name']}} {{$data['landlord_last_name']}}</p>
<p>{{$data['street_address']}}</p>
<p>{{$data['city']}}, {{$data['state']}} & {{$data['zip']}}</p>

<p><strong>Re: {{$data['first_name'].' '.$data['landlord_last_name']}} v
        {{$data['landlord_first_name'].' '.$data['landlord_last_name']}},{{$data['country']}}
        County Superior Court Case No.{{$data['case_number']}}  </strong></p>

<p>Dear Mr./Ms. {{$data['landlord_first_name'].' '.$data['landlord_last_name']}} :</p>

<p>I write regarding the Small Claims Court judgment recently entered against you in the above-referenced matter.  Please remit a cashier’s check or money order for {{$data['check_amount']}}
    payable to {{$data['first_name'].' '.$data['last_name']}} and delivered to {{$data['address']}} no later than
{{$data['amount_send_date']}}</p>

<p>
    If you fail to do so, I reserve the right to engage in all available legal remedies available to me to enforce the judgment, including but not limited to a judgment lien on real property, a judgment lien on personal property, enforcement of judgment by writ of execution, and/or wage garnishment.  I may also refer this matter to collections.
</p>

<p>
    Additionally, I will make this experience public by reporting you to the Better Business Bureau.  I will also post reviews of this experience, including a summary of the Small Claims Court action, on social media.
</p>

<p>
    I am hopeful you will satisfy your judgment by the date above so that further legal action may be avoided.
</p>

<p>
    Regards,
</p>

<p>
    {{$data['first_name']}} {{$data['last_name']}}
</p>

<p>
    Encl. Small Claims Court Judgment
</p>
