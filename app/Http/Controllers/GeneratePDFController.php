<?php

namespace App\Http\Controllers;

use App\Models\BirthCertificateRequest;
use App\Models\MarriageCertificateRequest;
use App\Models\DeathCertificateRequest;
use App\Models\Payment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use TCPDF;

class GeneratePDFController extends Controller
{

    public function generatesend()
    {
        // Fetch the latest 'verified' payment record for the authenticated user
        $payment = Payment::where('User_Id', auth()->id())
            ->where('status', 'verified') // Filter by 'verified' status
            ->latest('updated_at') // Get the latest record based on 'updated_at'
            ->first();
    
        // Check if a verified payment record is found
        if ($payment) {
            // Check if the requested_certificate is set
            if ($payment->requested_certificate) {
                switch ($payment->requested_certificate) {
                    case 'Birth Certificate':
                        return redirect('generatebirth');
                    case 'Marriage Certificate':
                        return redirect('generatemarriage');
                    case 'Death Certificate':
                        return redirect('generatedeath');
                    default:
                        return redirect()->route('default.route');
                }
            } else {
                // If requested_certificate is empty, return an error message
                return redirect()->back()->with('error', 'No request found');
            }
        } else {
            // If no verified payment record is found, return an error message
            return redirect()->back()->with('error', 'No verified request, no request make or not yet verified by admin!');
        }
    }

    public function generatebirth(){
    // Get the authenticated user's ID
    $userId = auth()->id();
    
    // Retrieve the most recent BirthCertificateRequest for this user
    $request = BirthCertificateRequest::where('User_Id', $userId)->latest()->first();
    
    // Create new PDF document
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // Set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Nicola Asuni');
    $pdf->SetTitle('TCPDF Example 061');
    $pdf->SetSubject('TCPDF Tutorial');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

    // Remove default header/footer
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);

    // Set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    // Set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    // Set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    // Set some language-dependent strings (optional)
    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
        require_once(dirname(__FILE__).'/lang/eng.php');
        $pdf->setLanguageArray($l);
    }

    // Set font
    $pdf->SetFont('helvetica', '', 10);

    // Add a page for Live Birth Certificate
    $pdf->AddPage();
    
    // HTML content with CSS for styling the input fields
    $html = <<<EOF
        <style>
            .birth-info {
                font-size: 10px;
                margin-bottom: 10px;
                padding: 8px;
                border: none; /* No border */
                color: #333; /* Ensure text remains visible */
                width: 100%;
            }  
</style>


 <div class="form-container" style="font-family: Arial, sans-serif; margin: 20px auto; padding: 0; border: 2px solid green; padding: 10px; font-size: 12px; line-height: 1.4;">
        <div class="header-sub" style="text-align: left; font-size: 10px; margin-bottom: 5px; ">Municipal Form No. 102<br>(Revised January 2007)</div>
         <div class="header-sub" style="text-align: right; font-size: 10px; margin-bottom: 5px;">(To be accomplished in quadruplicate using black ink)</div>
        <div class="header" style="text-align: center; font-size: 14px; font-weight: bold; margin-bottom: 2px;">Republic of the Philippines</div>
        <div class="header" style="text-align: center; font-size: 14px; font-weight: bold; margin-bottom: 2px;">OFFICE OF THE CIVIL REGISTRAR GENERAL</div>
        <div class="header" style="text-align: center; font-size: 14px; font-weight: bold; margin-bottom: 2px;">CERTIFICATE OF LIVE BIRTH</div>

        <div class="row" style="display: flex; justify-content: space-between; margin-bottom: 5px;">
            <div class="column" style="flex: 1; padding: 0 5px; border-right: 1px solid green;">
                <div class="field" style="border: 1px solid green; padding: 3px; margin-bottom: 5px; height: 20px; font-size: 12px;">Province</div>
                <div class="field" style="border: 1px solid green; padding: 3px; margin-bottom: 5px; height: 20px; font-size: 12px;">City/Municipality</div>
            </div>
            <div class="column" style="flex: 1; padding: 0 5px;">
                <div class="field" style="border: 1px solid green; padding: 3px; margin-bottom: 5px; height: 20px; font-size: 12px;">Registry No.</div>
            </div>
        </div>
    </div>
    
                    <div>{$request->child_first}</div>
            
                    <div>{$request->child_middle}</div>
                    
                    <div>{$request->child_last}</div>
                
                <div>{$request->child_sex}</div>
           
                <div>{$request->child_birthdate}</div>
               
                <div>{$request->child_birthplace}</div>
               
                <div>{$request->birth_type}</div>
          
                <div>{$request->multiple_birth}</div>
                
                <div>{$request->birth_order}</div>
               
                <div>{$request->birth_weight}</div>

  
            <div>{$request->mother_first_name}</div>
            <div>{$request->mother_middle_name}</div>
            <div>{$request->mother_last_name}</div>
            <div>{$request->citizenship}</div>
            <div>{$request->religion}</div>
            <div>{$request->total_number}</div>
            <div>{$request->children}</div>
            <div>{$request->dead_child}</div>
            <div>{$request->occupation}</div>
            <div>{$request->mother_age}</div>
            <div>{$request->mother_street}</div>
            <div>{$request->mother_city}</div>
            <div>{$request->mother_province}</div>
            <div>{$request->mother_country}</div>
    
            <div>{$request->father_first_name}</div>
            <div>{$request->father_middle_name}</div>
            <div>{$request->father_last_name}</div>
            <div>{$request->citizenship2}</div>
            <div>{$request->religion2}</div>
            <div>{$request->occupation2}</div>
            <div>{$request->father_age}</div>
            <div>{$request->father_street}</div>
            <div>{$request->father_city}</div>
            <div>{$request->father_province}</div>
            <div>{$request->father_country}</div>
       
            <div>{$request->marriage_date}</div>
            <div>{$request->marriage_street}</div>
            <div>{$request->marriage_municipality}</div>
            <div>{$request->marriage_province}</div>
            <div>{$request->marriage_country}</div>
       
            <div>{$request->attendant_role}</div>
            <div>{$request->other_attendant_role}</div>
       
            <div>{$request->signature1}</div>
            <div>{$request->signature2}</div>
        
EOF;

    // Output the HTML content for Live Birth Certificate
    $pdf->writeHTML($html, true, false, true, false, '');

    // Close and output PDF document
    $pdf->Output('certificate_report.pdf', 'I');
}

public function generatemarriage(){
    // Get the authenticated user's ID
    $userId = auth()->id();
    
    // Retrieve the most recent BirthCertificateRequest for this user
    $request2 = MarriageCertificateRequest::where('User_Id', $userId)->latest()->first();
    
    // Create new PDF document
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // Set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Nicola Asuni');
    $pdf->SetTitle('TCPDF Example 061');
    $pdf->SetSubject('TCPDF Tutorial');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

    // Remove default header/footer
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);

    // Set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    // Set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    // Set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    // Set some language-dependent strings (optional)
    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
        require_once(dirname(__FILE__).'/lang/eng.php');
        $pdf->setLanguageArray($l);
    }

    // Set font
    $pdf->SetFont('helvetica', '', 10);

    // Add a page for Live Birth Certificate
    $pdf->AddPage();
    
    // HTML content with CSS for styling the input fields
    $html = <<<EOF
        <style>
            .birth-info {
                font-size: 16px;
                margin-bottom: 10px;
                padding: 8px;
                border: none; /* No border */
                color: #333; /* Ensure text remains visible */
                width: 100%;
            }
        </style>

        <h1>Marriage Certificate</h1>

        <div class="marriage-info">{$request2->husband_first_name}</div>
        <div class="marriage-info">{$request2->husband_middle_name}</div>
        <div class="marriage-info">{$request2->husband_birthdate}</div>
        <div class="marriage-info">{$request2->husband_age}</div>
        <div class="marriage-info">{$request2->husband_city_municipality}</div>
        <div class="marriage-info">{$request2->husband_province}</div>
        <div class="marriage-info">{$request2->husband_country}</div>
        <div class="marriage-info">{$request2->husband_citizenship}</div>
        <div class="marriage-info">{$request2->husband_residence}</div>
        <div class="marriage-info">{$request2->husband_religion}</div>
        <div class="marriage-info">{$request2->husband_father_first_name}</div>
        <div class="marriage-info">{$request2->husband_father_middle_name}</div>
        <div class="marriage-info">{$request2->husband_father_last_name}</div>
        <div class="marriage-info">{$request2->husband_father_citizenship}</div>
        <div class="marriage-info">{$request2->husband_mother_first_name}</div>
     EOF;

    // Output the HTML content for Live Birth Certificate
    $pdf->writeHTML($html, true, false, true, false, '');

    // Close and output PDF document
    $pdf->Output('certificate_report.pdf', 'I');
}


public function generatedeath(){
    // Get the authenticated user's ID
    $userId = auth()->id();
    
    // Retrieve the most recent BirthCertificateRequest for this user
    $request3 = BirthCertificateRequest::where('User_Id', $userId)->latest()->first();
    
    // Create new PDF document
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // Set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Nicola Asuni');
    $pdf->SetTitle('TCPDF Example 061');
    $pdf->SetSubject('TCPDF Tutorial');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

    // Remove default header/footer
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);

    // Set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    // Set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    // Set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    // Set some language-dependent strings (optional)
    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
        require_once(dirname(__FILE__).'/lang/eng.php');
        $pdf->setLanguageArray($l);
    }

    // Set font
    $pdf->SetFont('helvetica', '', 10);

    // Add a page for Live Birth Certificate
    $pdf->AddPage();
    
    // HTML content with CSS for styling the input fields
    $html = <<<EOF
        <style>
            .birth-info {
                font-size: 16px;
                margin-bottom: 10px;
                padding: 8px;
                border: none; /* No border */
                color: #333; /* Ensure text remains visible */
                width: 100%;
            }
        </style>

        <h1>Death Certificate</h1>

        <div class="death-info">{$request3->full_name}</div>
        <div class="death-info">{$request3->sex}</div>
        <div class="death-info">{$request3->date_of_death}</div>
        <div class="death-info">{$request3->date_of_birth}</div>
        <div class="death-info">{$request3->completed_years}</div>
        <div class="birth-info">{$request3->months_days}</div>
EOF;

    // Output the HTML content for Live Birth Certificate
    $pdf->writeHTML($html, true, false, true, false, '');

    // Close and output PDF document
    $pdf->Output('certificate_report.pdf', 'I');
}
}
