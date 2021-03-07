@extends('site-layout.site-layout')

@section('title')
    @php
        $title = 'Security Deposit Toolkit-FAQ'
    @endphp
    {{$title}}
@endsection


@section('seo-tags')
    <link rel=canonical href="{{route('faq')}}">

    <meta property="og:url"  content="{{route('faq')}}"/>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{$title}}" />
    <meta property="og:description" content="{{$title}}" />
    <meta property="og:image" content="{{asset('site/img/new-logo.png')}}" />

    <meta name="twitter:title" content="{{$title}}">
    <meta name="twitter:description" content="{{$title}}">
    <meta name="twitter:image" content="{{asset('site/img/new-logo.png')}}">
    <meta name="twitter:card" content="{{$title}}">
@endsection



@section('content')

    <div class="outer_faqs">
        <div class="container">
            <div><h1 class="header_h12">Frequently Asked Questions <span class="span3">(FAQs)</span></h1></div>
            <div class="div_outer_faqs">
                <div class="row">
                    <div class="col-md-10">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabess nav-justified" role="tablist">
                            <li class="nav-item nav-itemes">
                                <a class="nav-link active" data-toggle="tab" href="#home">California Security Deposit FAQs</a>
                            </li>
                            <li class="nav-item nav-itemes">
                                <a class="nav-link" data-toggle="tab" href="#home1">California Small Claims Court FAQs</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="home" class="tab-pane active">
                                <div class="index-tab-in-main">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div id="accordion">
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                <p>What can a landlord use my security deposit for?</p>
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                        <div class="card-body text-justify"> Although a security deposit may be used “for any purpose,” four are specifically identified: (1) landlord reimbursement for a tenant’s rent default, (2) repair of damages to the rental unit, exclusive of ordinary wear and tear, caused by the tenant or guests, (3) cleaning costs necessary to return the rental unit to the same level of cleanliness it was in at the start of the tenancy, and (4) if authorized by the lease, payment of any tenant default to restore, replace, or return personal property or appurtenances, exclusive of ordinary wear and tear. See <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5" target="_blank">Cal.
                                                                Civ. Code § 1950.5(b)(1)–(4).</a> </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingTwo">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed adj-btn" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> When I move out, does the law specify what I’m financially responsible for and what my landlord is financially responsible for? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                        <div class="card-body text-justify"> Yes.  When you return possession of the rental property to your landlord, you are responsible for returning it in the same condition in which you received it LESS “ordinary wear and tear.” See <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5" target="_blank">Cal. Civ. Code § 1950.5(b)(2), (e)</a>.  In other words, the landlord must pay all costs associated with remedying “ordinary wear and tear.”  Unfortunately, “ordinary wear and tear” is not specified.  The discoloring of paint; wearing down of rugs; minor scratches and nicks on walls and countertops; etc. likely constitute “ordinary wear and tear,” for which the landlord is responsible.  A large gaping hole in the wall caused by a rowdy friend at a party or a cracked window caused by a toddler throwing a baseball through it likely do not constitute “ordinary wear and tear,” and the tenant will be responsible.  Reasonable people can disagree as to what does and does not constitute “ordinary wear and tear,” which in turn determines who is responsible for the repairs.  This is why tenants should always request a final inspection from the landlord before moving out.  (More below.) </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingThree">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Am I required to steam-clean the carpets? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                        <div class="card-body text-justify"> If carpeting had been steam-cleaned prior to the start of your tenancy, probably.  Again, the tenant must return the rental unit to the landlord it in the same condition in which he or she received it LESS “ordinary wear and tear.” See <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5" target="_blank">Cal. Civ. Code § 1950.5(b)(2), (e)</a>.  Assuming the carpeting had been steam-cleaned prior to the start of the tenancy, holding the tenant financially responsible for the steam-cleaning of the carpeting is consistent with the language of the law.  Holding the financially tenant responsible for replacing the carpeting due to normal wear and tear is not. </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingFour">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed " data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> Is there a limit as to how much my landlord can charge for a residential security deposit? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                                        <div class="card-body text-justify"> Yes.  For an unfurnished residential rental unit, a landlord cannot demand a security deposit in an amount in excess of two months’ rent.See <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5" target="_blank"> Cal. Civ. Code § 1950.5(c)</a>.  For a furnished residential rental unit, a landlord cannot demand a security deposit in an amount in excess of three months’ rent.  A landlord may require payment of the first month’s rent separate and apart from the security deposit prior to move-in. </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingFive">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> Does a landlord have to pay interest on my security deposit? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                                        <div class="card-body text-justify"> Not under California law.  However, local rent ordinances may require landlords to do so.  For example, landlords of rental units subject to the San Francisco Residential Rent Stabilization and Arbitration Ordinance are required to pay interest on security deposits.See
                                                            <a target="_blank" href="https://sfrb.org/chapter-49-san-francisco-administrative-code-security-deposits-residential-rental-property">S.F., Cal., Admin. Code § 49.2(a)–(g)</a>. </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingSix">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"> After a tenant has given a landlord notice of an intention to terminate the tenancy, is the landlord required to perform an initial inspection to determine what charges, if any, would be deducted from the tenant’s security deposit? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                                        <div class="card-body text-justify"> Only if the tenant requests it.  Within a reasonable time after notification of either party’s intention to terminate the tenancy, or before the end of the lease term, the landlord must notify the tenant in writing of the option to request an initial inspection and of the right to be present at the inspection. See <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5" target="_blank"> Cal. Civ. Code § 1950.5(f)(1)</a>. [Note: This requirement does not
                                                            apply if the landlord is terminating the tenancy following a three-day notice to pay rent or quit;
                                                            a three-day notice to perform a lease condition or convent or quit; or a three-day notice to stop
                                                            committing waste/nuisance or quit.]  If the tenant requests an inspection, the landlord or the landlord’s agent must make an initial inspection of the rental property no earlier than two weeks before the termination or the end of lease date.  The purpose of this initial inspection is to allow the tenant an opportunity to fix any identified deficiencies to avoid deductions from the security deposit.  The landlord and tenant must attempt to schedule the inspection at a mutually acceptable date and time.  The landlord must provide at least forty-eight hours’ prior written notice of the date and time of the inspection.  A landlord can proceed with the inspection whether the tenant is present or not, unless the tenant withdraws the inspection request. </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingSeven">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"> Does the landlord have to give the tenant anything after this initial inspection? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                                                        <div class="card-body text-justify"> Yes.  After the inspection, the landlord must give the tenant an itemized statement specifying repairs or cleanings proposed to be the basis of any deductions from the security deposit. See <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5" target="_blank">Cal. Civ. Code § 1950.5(f)(2)</a>.  This statement, which must also include certain language from California Civil Code section 1950.5, must either be given to the tenant if the tenant is present for the inspection or left inside the rental unit.  The tenant then will have an opportunity during the period between the initial inspection and the final date of the tenancy to remedy these identified deficiencies to avoid deductions from the security deposit. </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingEight">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight"> When must my landlord return my security deposit? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                                                        <div class="card-body text-justify"> No later than twenty-one calendar days (i.e., three weeks) after the tenant has moved out of the rental unit.See <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5" target="_blank">Cal. Civ. Code § 1950.5(g)(1)</a>.  On or before this date, the landlord must provide the tenant, by personal delivery, by first-class mail, or by email (if the landlord and tenant agree to email) (1) a copy of an itemized statement indicating the basis for, and the amount of, any security deposit received and the disposition of the security deposit, and (2) any remaining portion of the security deposit.  The itemized statement must also include copies of documents showing charges incurred and deducted by the landlord to repair or clean the premises.  If the landlord or landlord’s employee did the work, the itemized statement must describe the work performed, including time spent and the reasonable hourly rate charged.  If the landlord or landlord’s employee did not do the work, the landlord must provide the tenant a copy of the bill, invoice, or receipt supplied by the person or entity performing the work.  If a deduction is made for materials or supplies, the landlord must provide a copy of the bill, invoice, or receipt.  The parties can agree to have the landlord deposit any remaining portion of the security deposit electronically to a bank account or other financial institution designated by the tenant.  Otherwise, the tenant should provide the landlord with a mailing address so that a check can be mailed.  If the tenant has not provided a new mailing address, the landlord must use the address of the vacated rental unit. </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingNine">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine"> Does the law penalize a landlord who fails to return the itemized statement along with the balance of the tenant’s security deposit (if applicable) within twenty-one days? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                                                        <div class="card-body text-justify"> Yes.  The bad faith retention by a landlord of the security interest or any portion thereof can subject the landlord to statutory damages of up to twice the amount of the security deposit, in addition to actual damages (including the portion of any security deposit retained in bad faith). See <a target="_blank" href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5">Cal. Civ. Code § 1950.5(l)</a>.</div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingTen">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen"> How can a tenant prove the existence of a security deposit if the dispute ends up in court? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                                                        <div class="card-body text-justify"> A canceled check, a receipt, a lease indicating the requirement of a security deposit, a statement made under penalty of perjury, or “[a]ny [other] credible evidence.”See <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5" target="_blank">Cal. Civ.
                                                            Code § 1950.5(o)</a>. </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingFifty">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseFifty" aria-expanded="false" aria-controls="collapseFifty"> What happens to my security deposit if my landlord sells the building, dies, or otherwise loses a legal interest in the rental unit during my tenancy? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseFifty" class="collapse" aria-labelledby="headingFifty" data-parent="#accordion">
                                                        <div class="card-body text-justify"> The landlord can either (1) transfer to the landlord’s successor in interest (e.g., the new owner) the portion of the tenant’s security deposit remaining after any lawful deductions but only after notifying the tenant of the transfer, of any claims made against the security deposit, of the amount of the security deposited, and of the names of the successors in interest, their addresses, and their telephone numbers; or (2) return the portion of the security deposit remaining after any lawful deductions, together with an accounting.See <a target="_blank" href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5">Cal. Civ. Code §
                                                                1950.5(h)(1)–(2)</a>. </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingSixty">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseSixty" aria-expanded="false" aria-controls="collapseSixty"> In a tenancy with multiple roommates each contributing a share of the security deposit, what should
                                                                we do when one of the roommates moves out? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseSixty" class="collapse" aria-labelledby="headingSixty" data-parent="#accordion">
                                                        <div class="card-body text-justify"> Either the remaining roommates need to reimburse the departing roommate his or her share of the security deposit, or the replacement roommate should write a check directly to the departing roommate for the departing roommate’s share of the security deposit, less any damages to the departing roommate’s room beyond normal wear and tear.  The latter is a more common approach. </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="home1" class="tab-pane">
                                <div class="index-tab-in-main">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div id="accordion">
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingSixteen">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">
                                                                <p>What is Small Claims Court?</p>
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseSixteen" class="collapse show" aria-labelledby="headingSixteen" data-parent="#accordion">
                                                        <div class="card-body text-justify"> Small Claims Court is a division of every California Superior Court where disputes between private litigants of up to $10,000.00 are decided.  Since lawyers are prohibited from representing litigants in Small Claims Court, the procedural and evidentiary rules which lawyers must normally follow in other Superior Court divisions are substantially more lenient. </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingSeventeen">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen"> Can a lawyer represent me in Small Claims Court? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseSeventeen" class="collapse" aria-labelledby="headingSeveteen" data-parent="#accordion">
                                                        <div class="card-body text-justify"> No.  Lawyers are prohibited from representing litigants in Small Claims Court.  However, you may seek advice from a lawyer prior to your trial on preparing for and presenting your case in Small Claims Court.  A lawyer or law firm can also assist you with the filing and service of your “Claim and Order to Go to Small Claims Court” (the document describing why you are entitled to recover money from the defendant).  You can also retain a lawyer to assist you with collecting your judgment.  In an appeal from a Small Claims Court judgment, an attorney may represent you.  However, only defendants may appeal judgments.  This means that if you are the plaintiff (the person filing the Claim and Order to Go to Small Claims Court) and you lose, you may not appeal the judgment. </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingEighten">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseEighten" aria-expanded="false" aria-controls="collapseEighten"> How much can I recover in Small Claims Court? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseEighten" class="collapse" aria-labelledby="headingEighten" data-parent="#accordion">
                                                        <div class="card-body text-justify"> The maximum an individual plaintiff may recover in Small Claims Court is $10,000.00.  Plaintiffs that are corporations, partnerships, governments, or other entities can recover no more than $5,000.00.  For claims above $2,500.00, plaintiffs are limited to one Small Claims Court lawsuit per calendar year.  There is no limit for claims less than $2,500.00.  “Claim splitting,” (dividing a case involving more than $10,000.00 into two separate lawsuits) to stay under the $10,000.00 limit is prohibited.  Claims of more than $10,000.00 but no more than $25,000.00 are known as “limited” civil cases.  Claims of more than $25,000.00 are known as “unlimited” civil cases.  Both limited and unlimited civil cases are heard in separate divisions of the Superior Court, and lawyers may appear on behalf of their clients in these cases.  Although plaintiffs can represent themselves in limited or unlimited civil cases (otherwise known as “in pro per” or “in propria persona” representation), the procedural and evidentiary rules are much more complex and pro per litigants often find themselves at a disadvantage against litigants represented by a lawyer. </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingNinten">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseNinten" aria-expanded="false" aria-controls="collapseNinten"> Is the procedure the same for all Small Claims Courts throughout California? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseNinten" class="collapse" aria-labelledby="headingNinten" data-parent="#accordion">
                                                        <div class="card-body text-justify"> Generally, yes.  While the rules may vary slightly from county to county, the procedure is generally the same among all Small Claims Courts throughout California. </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingTwenty">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty"> What costs can I expect to incur by filing a Claim and Order to Go to Small Claims Court in Small
                                                                Claims Court? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwenty" class="collapse" aria-labelledby="headingTwenty" data-parent="#accordion">
                                                        <div class="card-body text-justify"> To file a Claim and Order to Go to Small Claims Court, you must pay a filing fee based on the amount of the claim: $30.00 if the claim is for $1,500.00 or less, $50.00 if the claim is for more than $1,500.00 but up to $5,000.00, and $75.00 if the claim is for more than $5,000.00.  However, if a plaintiff has filed more than twelve small claims lawsuits in California within the previous twelve months, the filing fee for each subsequent lawsuit is $100.00.  Other fees (summarized in a table at the end of this document) may apply.  The filing fee is paid to the Small Claims Court clerk.  The cost of hiring a process server (someone to hand-deliver a copy of the Claim and Order to Go to Small Claims Court to the defendant) varies by vendor but could run anywhere from $50.00 to $300.00.  If you prevail at your Small Claims Court trial, you can recover your case costs, including reasonable process server fees. </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingTwentyone">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseTwentyone" aria-expanded="false" aria-controls="collapseTwentyone"> How long does this process take from start to finish? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwentyone" class="collapse" aria-labelledby="headingTwentyone" data-parent="#accordion">
                                                        <div class="card-body text-justify"> Generally, from the date you file your Claim and Order to Go to Small Claims Court, the process should take no more than three to four months.  The Court will set a trial date approximately sixty days from the date the Claim and Order to Go to Small Claims Court is filed.  If you receive a judgment in your favor, the defendant has thirty days to appeal the judgment.  Otherwise, the judgment becomes final. </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingTwentytwo">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseTwentytwo" aria-expanded="false" aria-controls="collapseTwentytwo"> What documents do I need to prepare to start the Small Claims Court process? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwentytwo" class="collapse" aria-labelledby="headingTwentytwo" data-parent="#accordion">
                                                        <div class="card-body text-justify"> A plaintiff must download, complete, sign, date, and file the Claim and Order to Go to Small Claims Court (Form SC-100).  Proof of service (i.e., proof that the defendant received your Claim and Order to Go to Small Claims Court) and other Small Claims Court forms are available at <a href="http://www.courts.ca.gov/forms.htm?filter=SC"> http://www.courts.ca.gov/forms.htm?filter=SC.</a> </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingTwentythree">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseTwentythree" aria-expanded="false" aria-controls="collapseTwentythree"> What is the procedure for filing my Claim and Order to Go to Small
                                                                Claims Court? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwentythree" class="collapse" aria-labelledby="headingTwentythree" data-parent="#accordion">
                                                        <div class="card-body text-justify"> Once you download, complete, sign, and date the Claim and Order to Go to Small Claims Court (Form SC-100), you must file it at the clerk’s office in the courthouse of the county where the dispute took place.  Once filed, the clerk will issue a trial date and stamp the date on the Claim and Order to Go to Small Claims Court. </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingTwentyfour">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseTwentyfour" aria-expanded="false" aria-controls="collapseTwentyfour"> How do I serve the defendant with my Claim and Order to Go to Small
                                                                Claims Court? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwentyfour" class="collapse" aria-labelledby="headingTwentyfour" data-parent="#accordion">
                                                        <div class="card-body text-justify"> There are three different ways to serve a defendant with a Claim and Order to Go to Small Claims Court in a small claims case: (1) personal service, (2)  substituted service, and (3) service by Certified Mail by the Court Clerk.

                                                            A "server" must be at least eighteen years of age and not a party to the case (i.e., you cannot serve the Claim and Order to Go to Small Claims Court yourself).  The server can be either a friend, relative, or co-worker; or, as noted, you can hire a professional process server.  The local sheriff (or marshal if your county has one) can also deliver court documents.  You will have to pay the sheriff for this service unless you qualify for a fee waiver.

                                                            For personal service, ask your server to personally “serve” (give) a copy of your court papers to the defendant or to the agent legally authorized to accept court papers for the defendant.  Tell the server to walk up to the defendant; say, “these are court papers”; and give the person copies of all the court papers.  If the person will not take the papers, the server can leave them near the person.  It does not matter if the person tears them up or throws them away.  The server must then fill out the Proof of Service (Small Claims) (Form SC-104), sign Page 2, and return the form to you for you to file.

                                                            For substituted service, if the defendant is not at home or work when your server goes there, your server can give the court papers to a competent adult (at least eighteen) living at the defendant’s home; an adult who seems to be in charge where defendant usually works; or an adult who seems to be in charge where the person receives mail.  The server must also tell the person he or she is leaving the court papers with to give them to the defendant and write down the name of the person he or she gave the court papers to.  If the person will not give his or her name, your server must write down a physical description of the person who took the papers.  You must then mail another copy of the court papers by USPS First Class mail to the defendant at the same address where your server left the papers.  Fill out the Proof of Service (Small Claims) (Form SC-104) and sign Page 2.  The server MUST also fill out and sign the Proof of Mailing (Substituted Service) (Form SC-104A) for the second step of mailing a copy of the Claim and Order to Go to Small Claims Court.  Once the server fills out both forms, he or she must return the completed forms for you to file with the clerk.

                                                            For service by Certified Mail by the Court Clerk, you can pay the court clerk to mail your Claim and Order to Go to Small Claims Court to the defendant by USPS Certified Mail.  While this can be a very convenient and inexpensive option, this type of service can also be very unreliable.  The court will probably not accept it and will make you serve again (with personal or substituted service) if the defendant or the defendant’s agent does not sign the certified mail receipt with his or her complete name, if the judge cannot read the signature on the certified mail receipt and cannot tell who signed it, or if someone else signs the receipt.
                                                            After the server fills out and signs the Proof of Service, you must file it with the court at least five days before your Small Claims trial date.  Further information on serving the defendant is available at http://www.courts.ca.gov/9742.htm. </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingTen">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen"> How much time do I have to serve the defendant with the Claim and Order to Go to Small
                                                                Claims Court? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                                                        <div class="card-body text-justify"> For personal service, at least 15 days before the court date (or 20 days if the person, business, or public entity you are serving is outside the county).  Cal. Civ. Proc. Code § 116.340(b).  For substituted service, at least 25 days before your court date (or 30 days if the person, business, or public entity you are serving is outside the county).  See Id. §§ 116.340(b); 415.20(a).  As noted in the previous FAQ, you must file the Proof of Service form with the court at least five days before your Small Claims trial date. </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingEleven">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven"> What happens if I am unable to serve the defendant with the Claim and Order to Go to Small
                                                                Claims Court? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
                                                        <div class="card-body text-justify"> Unfortunately, if you are unable to serve the defendant, you may not proceed with your trial.  Thus, finding a good address and effecting proper service are critical to ensuring your day in court. </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingTwelve">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve"> What should I do to prepare for my Small Claims Court trial? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion">
                                                        <div class="card-body text-justify"> The plaintiff always has the burden of proof.  Gather all the evidence that you believe is relevant to your case and that will convince the judge the defendant owes you money.  The easier you make it for the judge to understand your story, the better your odds of prevailing at trial.  Three items will be especially critical to proving your claim: (1) a factual summary of the events that led you to court, organized chronologically and not exceeding one page; (2) copies of any laws you intend to reference as a basis for your claims; and (3) a spreadsheet or other document calculating how you arrived at the number in your Claim and Order to Go to Small Claims Court.  Bring at least three copies of all these documents with you to court: one for you, one for the judge, and one for the mediator or the defendant (optional).  Also bring at least three copies of the filed Claim and Order to Go to Small Claims Court (Form SC-100), the filed Proof of Service (Form SC-104), and (if applicable) the filed Proof of Mailing (Substituted Service) (Form SC-104A).  Get a good night’s rest before your trial.  Wear a suit to court.  This will show the judge (and the defendant) you are taking this matter seriously.  Plan on arriving at the courtroom at least thirty minutes before your trial.  Since it could take up to half an hour to wait in line and get through security, plan on physically entering the courthouse at least one hour before your trial.  You do not want to be rushed on your trial date.  Further information on preparing for trial is available at <a href="http://www.courts.ca.gov/1013.htm"> http://www.courts.ca.gov/1013.htm.</a> </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingThirteen">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen"> What happens on the day of my Small Claims Court trial? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordion">
                                                        <div class="card-body text-justify"> After entering the courthouse, head to your assigned courtroom.  This will be listed on the Claim and Order to Go to Small Claims Court.  You will likely find many other litigants waiting outside the courtroom.  Most courts will have a calendar placed directly outside of the courtroom with a list of the cases the judge will hear that day.  Note the line number associated with your lawsuit.  Once the doors open, check in with the clerk.  The clerk will ask which line you are on and whether you are the plaintiff or the defendant.  After you check in, take a seat and wait for your matter to be called.  The clerk will go over some of the rules of the court and, assuming both sides are present, will ask you both to step outside and share your evidence with each other.  After you have done so, enter the courtroom and wait until your case is called.  When it is, approach the table in front of the judge.  (The plaintiff usually sits or stands on the left-hand side but go wherever you are instructed.)  The judge may ask the parties if they want to attempt mediation or order the parties to attempt mediation.  Courts often have onsite mediators to assist litigants free of charge.  Mediation is always a good idea.  If you come to an agreement at mediation, you do not need to present your case to the judge.  The mediator can assist in memorializing the terms of any agreement and then present it to the judge.  The judge will then (1) enter it into the record and (2) set a “compliance hearing” at a later date so that if the defendant fails to comply with the agreement, the plaintiff can return to court and request an immediate judgement.  If you do not come to an agreement at mediation, you can simply return to the court to present your case.  The plaintiff goes first and, as noted, has the burden of proving the case.  Relying on the documents you prepared, succinctly explain your case to the judge.  Always be respectful; never interrupt the judge.  The defendant will have a chance to present his or her side and challenge any evidence you may present with his or her own.  In most cases, the judge will take the matter “under submission,” i.e., return to his or her chambers to review all the evidence and arguments presented and issue a written decision later.  Usually, a decision will be mailed to the parties within two to four weeks of the trial date.  Further information on your trial is available at http://www.courts.ca.gov/1119.htm. </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingFourteen">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen"> How do I recover my money after I obtain a judgment? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordion">
                                                        <div class="card-body text-justify"> Unfortunately, there is no absolute guarantee that once you receive a favorable judgment, the defendant will actually the money owed to you.  Initially, the defendant has a thirty-day window from a judgment in your favor to appeal.  Thus, you must wait until this period has expired before taking any further action.  Once it has, you can attempt to collect by either referring the matter to a collection agency or filing a lien on the defendant’s real property.  Both have their advantages and disadvantages.  Collection agencies are more immediate but could cost you a larger fee.  Liens have a lower cost, but you may only recover if the real property is sold.  You would be listed as a creditor and that debt would have to be paid in order for the sale to proceed.  However, because the owner may never sell the property, it is difficult to determine when and if you would ever recover the money owed.  Further information on collecting your judgment is available at http://www.courts.ca.gov/1014.htm. </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header card-header1" id="headingFifteen">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link adj-btn collapsed" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen"> Are additional resources available online? </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordion">
                                                        <div class="card-body text-justify"> Yes.  Additional information is available online on the California Courts website at http://www.courts.ca.gov/selfhelp-smallclaims.htm/selfhelp-smallclaims.htm.  You should also visit the Small Claims Division page(s) of the Superior Court website for your county.  Find below links to the Small Claims Division pages of all nine San Francisco Bay Area Superior Court websites:
                                                            <div class="tab_table">
                                                                <div class="row">
                                                                    <div class="tab_inside1">Alameda:</div>
                                                                    <div class="tab_inside"><a href="http://www.alameda.courts.ca.gov/Pages.aspx/Small-Claims" target="blank"> http://www.alameda.courts.ca.gov/Pages.aspx/Small-Claims.</a></div>
                                                                    <div class="tab_inside1">Contra Costa:</div>
                                                                    <div class="tab_inside"><a href="http://www.cc-courts.org/small-claims/small-claims.aspx" target="blank">http://www.cc-courts.org/small-claims/small-claims.aspx.</a></div>
                                                                    <div class="tab_inside1">Marin:</div>
                                                                    <div class="tab_inside"><a href="http://www.marincourt.org/small_claims.htm" target="blank"> http://www.marincourt.org/small_claims.htm.</a></div>
                                                                    <div class="tab_inside1">Napa:</div>
                                                                    <div class="tab_inside"><a href="http://www.napa.courts.ca.gov/divisions/small-claims" target="blank">http://www.napa.courts.ca.gov/divisions/small-claims.</a></div>
                                                                    <div class="tab_inside1">San Francisco:</div>
                                                                    <div class="tab_inside"><a href="https://www.sfsuperiorcourt.org/divisions/small-claims" target="blank">https://www.sfsuperiorcourt.org/divisions/small-claims.</a></div>
                                                                    <div class="tab_inside1">San Mateo:</div>
                                                                    <div class="tab_inside"><a href="http://www.sanmateocourt.org/court_divisions/small_claims/" target="blank">http://www.sanmateocourt.org/court_divisions/small_claims/.</a></div>
                                                                    <div class="tab_inside1">Santa Clara:</div>
                                                                    <div class="tab_inside"><a href="http://www.scscourt.org/court_divisions/small_claims/small_claims_home.shtml" target="blank">http://www.scscourt.org/court_divisions/small_claims/small_claims_home.shtml.</a></div>
                                                                    <div class="tab_inside1">Solano:</div>
                                                                    <div class="tab_inside"><a href="http://www.solano.courts.ca.gov/Courts/SmallClaims.html" target="blank">http://www.solano.courts.ca.gov/Courts/SmallClaims.html.</a></div>
                                                                    <div class="tab_inside1">Sonoma:</div>
                                                                    <div class="tab_inside"><a href="http://sonoma.courts.ca.gov/divisions/civil" target="blank">http://sonoma.courts.ca.gov/divisions/civil.</a></div>
                                                                    <div class="tab_inside2"><u>SMALL CLAIMS COURT FEES</u></div>
                                                                    <table id="customers">
                                                                        <tr>
                                                                            <td>Description</td>
                                                                            <td>Code Section(s)</td>
                                                                            <td>Fee</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Filing claim for $1,500.00 or less</td>
                                                                            <td>CCP 116.230(b)(1)</td>
                                                                            <td>$30.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Filing claim for more than $1,500.00 up to and including $5,000.00</td>
                                                                            <td>CCP 116.230(b)(2)</td>
                                                                            <td>$50.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Filing claim for more than $5,000.00 up to and including $10,000.00 (claim by natural persons only, with certain exceptions)</td>
                                                                            <td>CCP 116.230(b)(3), CCP 116.221</td>
                                                                            <td>$75.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Filing claim by person who has filed more than 12 small claims in California within the previous 12 months</td>
                                                                            <td>CCP 116.230(c)</td>
                                                                            <td>$100.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Amendment raising amount of claim from $1,500.00 or less to more than $1,500.00 but not exceeding $5,000.00</td>
                                                                            <td>CCP 116.230(d)(1)</td>
                                                                            <td>$20.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Amendment raising amount of claim from more than $1,500.00 but not exceeding $5,000.00 to more than $5,000.00 but not exceeding $10,000.00 (claim by natural persons only, with certain exceptions)</td>
                                                                            <td>CCP 116.230(d)(2), CCP 116.221</td>
                                                                            <td>$25.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Amendment raising amount of claim from $1,500.00 or less to more than $5,000.00 but not exceeding $10,000.00 (claim by natural persons only, with certain exceptions)</td>
                                                                            <td>CCP 116.230(d)(3), CCP 116.221</td>
                                                                            <td>$45.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Service of copy of a claim under CCP § 116.340, for each defendant to whom the clerk mails a copy of the claim</td>
                                                                            <td>CCP 116.232</td>
                                                                            <td>$15.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Transfer of case out of small claims court (defendant’s claim exceeding jurisdictional limit) (no receiving court filing or transfer fee)</td>
                                                                            <td>CCP 116.390</td>
                                                                            <td>No fee</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Request for postponement of hearing, if defendant has been served</td>
                                                                            <td>CCP 116.570</td>
                                                                            <td>$10.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Notice of appeal of small claims case</td>
                                                                            <td>CCP 116.760</td>
                                                                            <td>$75.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Motion to vacate</td>
                                                                            <td>CCP 116.745</td>
                                                                            <td>$20.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Fee for payment of judgment to court</td>
                                                                            <td>CCP 116.860</td>
                                                                            <td>$20.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Application for order of examination of judgment debtor</td>
                                                                            <td>GC 70617(a)(6), CCP 116.820</td>
                                                                            <td>$60.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Writ of execution</td>
                                                                            <td>GC 70626(a)(1), CCP 116.820</td>
                                                                            <td>$25.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Abstract of judgment</td>
                                                                            <td>GC 70626(a)(2), CCP 116.820</td>
                                                                            <td>$25.00</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
