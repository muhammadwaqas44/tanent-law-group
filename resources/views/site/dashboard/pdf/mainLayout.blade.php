<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>

@include('site.dashboard.pdf.mainCssPdf')

@yield('pdf_css')

</style>

<body>	


    <div class="container">
        @if($type == 'Notice of Termination of Tenancy Not Due to Any Issue with the Landlord, Rental Unit, or Tenancy')
            @include('site.dashboard.pdf.partial.letter-1a')
        @elseif($type == 'Notice of Termination of Tenancy Due to One or More Issues with the Landlord, Rental Unit, or Tenancy')
            @include('site.dashboard.pdf.partial.letter-1b')
        @elseif($type == 'Letter to Landlord Requesting Return of Security Deposit')
            @include('site.dashboard.pdf.partial.letter-2')
        @elseif($type == 'Letter to Landlord Requesting Repairs')
            @include('site.dashboard.pdf.partial.requesting-repair')
        @elseif($type == 'Post-Judgment Letter to Landlord')
            @include('site.dashboard.pdf.partial.judgement-letter')
        @endif
    </div>
    

</body>
