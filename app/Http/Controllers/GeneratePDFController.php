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
                font-size: 8px;
                margin-bottom: 10px;
                padding: 8px;
                border: none; /* No border */
                color: #333; /* Ensure text remains visible */
                width: 100%;
            }
        </style>

        <h1>Live Birth Certificate</h1>
 <input type="text" name="child_first" class="birth-form-control" style="width: 150px; height: 25px" id="child_first" value="{$request->child_first}">
        <div class="birth-info">{$request->child_first}</div>
        <div class="birth-info">{$request->child_middle}</div>
        <div class="birth-info">{$request->child_last}</div>

        <div class="birth-info">{$request->child_sex}</div>
        <div class="birth-info">{$request->child_birthdate}</div>
        <div class="birth-info">{$request->child_birthplace}</div>
        <div class="birth-info">{$request->multiple_birth}</div>
        <div class="birth-info">{$request->birth_type}</div>
        <div class="birth-info">{$request->birth_order}</div>
        <div class="birth-info">{$request->birth_weight}</div>
        <div class="birth-info">{$request->mother_first_name}</div>
        <div class="birth-info">{$request->mother_middle_name}</div>
        <div class="birth-info">{$request->mother_last_name}</div>
        <div class="birth-info">{$request->citizenship}</div>
        <div class="birth-info">{$request->religion}</div>
        <div class="birth-info">{$request->total_number}</div>
        <div class="birth-info">{$request->children}</div>
        <div class="birth-info">{$request->dead_child}</div>
        <div class="birth-info">{$request->occupation}</div>
        <div class="birth-info">{$request->mother_age}</div>
        <div class="birth-info">{$request->mother_city}</div>
        <div class="birth-info">{$request->mother_province}</div>
        <div class="birth-info">{$request->mother_country}</div>
        <div class="birth-info">{$request->father_first_name}</div>
        <div class="birth-info">{$request->father_middle_name}</div>
        <div class="birth-info">{$request->father_last_name}</div>
        <div class="birth-info">{$request->citizenship2}</div>
        <div class="birth-info">{$request->religion2}</div>
        <div class="birth-info">{$request->occupation2}</div>
        <div class="birth-info">{$request->father_age}</div>
        <div class="birth-info">{$request->father_street}</div>
        <div class="birth-info">{$request->father_city}</div>
        <div class="birth-info">{$request->father_province}</div>
        <div class="birth-info">{$request->father_country}</div>
        <div class="birth-info">{$request->marriage_date}</div>
        <div class="birth-info">{$request->marriage_province}</div>
        <div class="birth-info">{$request->marriage_country}</div>
        <div class="birth-info">{$request->attendant_role}</div>
        <div class="birth-info">{$request->other_attendant_role}</div>
        <div class="birth-info">{$request->father_name}</div>
        <div class="birth-info">{$request->mother_name}</div>
        <div class="birth-info">{$request->name_child}</div>
        <div class="birth-info">{$request->birth_date}</div>
        <div class="birth-info">{$request->birth_place}</div>
        <div class="birth-info">{$request->signature1}</div>
        <div class="birth-info">{$request->signature2}</div>
        
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
