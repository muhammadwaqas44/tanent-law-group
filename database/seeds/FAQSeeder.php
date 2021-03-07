<?php

use Illuminate\Database\Seeder;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Blog::truncate();
        $blogs = [
            [
                'title' => 'What can a landlord use my security deposit for?',
                'description' => 'Although a security deposit may be used “for any purpose,” four are specifically identified: (1) landlord reimbursement for a tenant’s rent default, (2) repair of damages to the rental unit, exclusive of ordinary wear and tear, caused by the tenant or guests, (3) cleaning costs necessary to return the rental unit to the same level of cleanliness it was in at the start of the tenancy, and (4) if authorized by the lease, payment of any tenant default to restore, replace, or return personal property or appurtenances, exclusive of ordinary wear and tear.See <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5">Cal. Civ. Code § 1950.5(b)(1)–(4)</a>.'
            ],
            [
                'title' => 'When I move out, does the law specify what I’m financially responsible for and what my landlord is financially responsible for?',
                'description' => 'Yes.  When you return possession of the rental property to your landlord, you are responsible for returning it in the same condition in which you received it LESS “ordinary wear and tear.”See <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5">Cal. Civ. Code § 1950.5(b)(2), (e)</a>.In other words, the landlord must pay all costs associated with remedying “ordinary wear and tear.”  Unfortunately, “ordinary wear and tear” is not specified.  The discoloring of paint; wearing down of rugs; minor scratches and nicks on walls and countertops; etc. likely constitute “ordinary wear and tear,” for which the landlord is financially responsible.  A large gaping hole in the wall caused by a rowdy friend at a party or a broken window caused by a toddler throwing a baseball through it likely do not constitute “ordinary wear and tear,” and the tenant will be financially responsible.  Reasonable people can disagree as to what does and does not constitute “ordinary wear and tear,” which in turn determines who is responsible for the repairs.  This is why tenants should always request a final inspection from the landlord before moving out.  (More below.  See also the document, “California Security Deposit Deduction Guidelines,” included with this Toolkit.)'
            ],
            [
                'title' => 'Am I required to steam-clean the carpeting?',
                'description' => 'If carpeting had been steam-cleaned prior to the start of your tenancy, probably.  Again, the tenant must return the rental unit to the landlord it in the same condition in which he or she received it LESS “ordinary wear and tear.”See  <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5">Cal. Civ. Code § 1950.5(b)(2), (e)</a>.Assuming the carpeting had been steam-cleaned prior to the start of the tenancy, holding the tenant financially responsible for the steam-cleaning of the carpeting is consistent with the language of the law. Holding the financially tenant responsible for replacing the carpeting due to ordinary wear and tear is not.'            ],
            [
                'title' => 'Is there a limit as to how much my landlord can charge for a residential security deposit?',
                'description' => 'Yes.  For an unfurnished residential rental unit, a landlord cannot demand a security deposit in an amount in excess of two months’ rent.  See <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5">Cal. Civ. Code § 1950.5(c)</a>.For a furnished residential rental unit, a landlord cannot demand a security deposit in an amount in excess of three months’ rent.  See id.A landlord may require payment of the first month’s rent separate and apart from the security deposit prior to move-in.'            ],
            [
                'title' => 'Does a landlord have to pay interest on my security deposit?',
                'description' => 'Not under California law.  However, local rent ordinances may require landlords to do so.  For example, landlords of rental units subject to the San Francisco Residential Rent Stabilization and Arbitration Ordinance are required to pay interest on security deposits.See <a href="https://sfrb.org/chapter-49-san-francisco-administrative-code-security-deposits-residential-rental-property">S.F., Cal., Admin. Code § 49.2(a)–(g)</a>.'            ],
            [
                'title' => 'After a tenant has given a landlord notice of an intention to terminate the tenancy, is the landlord required to perform an initial inspection to determine what charges, if any, would be deducted from the tenant’s security deposit?',
                'description' => 'Only if the tenant requests it.  Within a reasonable time after notification of either party’s intention to terminate the tenancy, or before the end of the lease term, the landlord must notify the tenant in writing of the option to request an initial inspection and of the right to be present at the inspection.See <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5">Cal. Civ. Code § 1950.5(f)(1)</a>.  [Note: This requirement does not apply if the landlord is terminating the tenancy following a three-day notice to pay rent or quit; a three-day notice to perform a lease condition or convent or quit; or a three-day notice to stop committing waste/nuisance or quit.]If the tenant requests an inspection, the landlord or the landlord’s agent must make an initial inspection of the rental property no earlier than two weeks before the termination or the end of lease date.  See id.The purpose of this initial inspection is to allow the tenant an opportunity to fix any identified repairs to avoid deductions from the security deposit.  See id.The landlord and tenant must attempt to schedule the inspection at a mutually acceptable date and time.See id.  The landlord must provide at least forty-eight hours’ prior written notice of the date and time of the inspection.See id.  A landlord can proceed with the inspection whether the tenant is present or not, unless the tenant withdraws the inspection request.See id.'            ],
            [
                'title' => 'Does the landlord have to give the tenant anything after this initial inspection?',
                'description' => 'Yes.  After the inspection, the landlord must give the tenant an itemized statement specifying repairs or cleanings proposed to be the basis of any deductions from the security deposit.  See <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5">Cal. Civ. Code § 1950.5(f)(2)</a>.This statement, which must also include certain language from California Civil Code section 1950.5, must either be given to the tenant if the tenant is present for the inspection or left inside the rental unit.  See id.The tenant then will have an opportunity during the period between the initial inspection and the final date of the tenancy to remedy these identified repairs to avoid deductions from the security deposit.See § 1950.5(f)(3).'            ],
            [
                'title' => 'When must my landlord return my security deposit?',
                'description' => 'No later than twenty-one calendar days (i.e., three weeks) after the tenant has moved out of the rental unit.  See <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5">Cal. Civ. Code § 1950.5(g)(1)</a>.On or before this date, the landlord must provide the tenant, by personal delivery, by first-class mail, or by email (if the landlord and tenant agree to email) (1) a copy of an itemized statement indicating the basis for, and the amount of, any security deposit received and the disposition of the security deposit, and (2) any remaining portion of the security deposit.  See id.The itemized statement must also include copies of documents showing charges incurred and deducted by the landlord to repair or clean the premises.  See § 1950.5(g)(2).If the landlord or landlord’s employee did the work, the itemized statement must describe the work performed, including time spent and the reasonable hourly rate charged.  See § 1950.5(g)(2)(A).If the landlord or landlord’s employee did not do the work, the landlord must provide the tenant a copy of the bill, invoice, or receipt supplied by the person or entity performing the work.  See § 1950.5(g)(2)(B).If a deduction is made for materials or supplies, the landlord must provide a copy of the bill, invoice, or receipt.  See § 1950.5(g)(2)(C).The parties can agree to have the landlord deposit any remaining portion of the security deposit electronically to a bank account or other financial institution designated by the tenant.  See § 1950.5(g)(1).Otherwise, the tenant should provide the landlord with a mailing address so that a check can be mailed.  If the tenant has not provided a new mailing address, the landlord must use the address of the vacated rental unit.See § 1950.5(g)(6).'            ],
            [
                'title' => 'Does the law penalize a landlord who fails to return the itemized statement along with the balance of the tenant’s security deposit (if applicable) within twenty-one calendar days?',
                'description' => 'Yes.  The bad faith retention by a landlord of the security interest or any portion thereof can subject the landlord to statutory damages of up to twice the amount of the security deposit, in addition to actual damages (including the portion of any security deposit retained in bad faith).See <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5">Cal. Civ. Code § 1950.5(l)</a>.'            ],
            [
                'title' => 'How can a tenant prove the existence of a security deposit if the dispute ends up in court?',
                'description' => 'A canceled check, a receipt, a lease indicating the requirement of a security deposit, a statement made under penalty of perjury, or “[a]ny [other] credible evidence.”See <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5">Cal. Civ. Code § 1950.5(o)</a>.'            ],
            [
                'title' => 'What happens to my security deposit if my landlord sells the building, dies, or otherwise loses a legal interest in the rental unit during my tenancy?',
                'description' => 'The landlord can either (1) transfer to the landlord’s successor in interest (e.g., the new owner) the portion of the tenant’s security deposit remaining after any lawful deductions but only after notifying the tenant of the transfer, of any claims made against the security deposit, of the amount of the security deposited, and of the names of the successors in interest, their addresses, and their telephone numbers; or (2) return the portion of the security deposit remaining after any lawful deductions, together with an accounting.See <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5">Cal. Civ. Code § 1950.5(h)(1)–(2)</a>.'            ],
            [
                'title' => 'In a tenancy with multiple roommates who each contribute to the security deposit, what should we do when one of the roommates moves out?',
                'description' => 'Either the remaining roommates need to reimburse the departing roommate his or her share of the security deposit, or the replacement roommate should write a check directly to the departing roommate for the departing roommate’s share of the security deposit, less any damages to the departing roommate’s room beyond ordinary wear and tear.  The latter is a more common approach.'            ],

        ];

        foreach ($blogs as $blog) {
            \App\Blog::create([
                'title' => $blog['title'],
                'description' => $blog['description'],
            ]);
        }
    }
}
