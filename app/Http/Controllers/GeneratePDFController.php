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

    public function generatebirth() {
        // Get the authenticated user's ID
        $userId = auth()->id();
    
        // Retrieve the most recent BirthCertificateRequest for this user
        $request = BirthCertificateRequest::where('User_Id', $userId)->latest()->first();
    
        // Create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    
        // Set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('MANITO CIVIL REGISTRY OFFICE');
        $pdf->SetTitle('Certificate of Live Birth');
        $pdf->SetSubject('Generated Live Birth Certificate');
        $pdf->SetKeywords('TCPDF, PDF, Birth Certificate');
    
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
    
        // Set font
        $pdf->SetFont('helvetica', '', 10);
    
        // Add a page for Live Birth Certificate
        $pdf->AddPage();
    
        // Add custom header with logos and title
        $logoLeft = '/public/img/manito-logo.png';
        $logoRight = '/public/img/bagongPH.png';
        $pdf->Image($logoLeft, 15, 10, 25, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        $pdf->Image($logoRight, 170, 10, 25, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        $pdf->SetY(10);
        $pdf->SetFont('helvetica', 'B', 12);
        $pdf->Cell(0, 5, 'REPUBLIC OF THE PHILIPPINES', 0, 1, 'C');
        $pdf->Cell(0, 5, 'REGION V - BICOL', 0, 1, 'C');
        $pdf->Cell(0, 5, 'PROVINCE OF ALBAY', 0, 1, 'C');
        $pdf->Cell(0, 5, 'MUNICIPALITY OF MANITO', 0, 1, 'C');
    
        $pdf->SetFont('helvetica', 'B', 16);
        $pdf->Cell(0, 35, 'CERTIFICATE OF LIVE BIRTH', 0, 1, 'C');
    
        // Add a horizontal line
        $pdf->Line(10, 35, 195, 35);
    
       // Formal introduction message
$pdf->SetFont('helvetica', '', 12);

$pdf->MultiCell(0, 10, '        The information provided herein has been carefully reviewed and is based on the details submitted to the Municipality of Manito’s Civil Registry Office. It is intended to ensure the accuracy and integrity of official records. This certificate is an important document for various purposes, including but not limited to legal, administrative, and personal needs of the family and other concerned parties.', 0, 'L');
$pdf->Ln(5);

$pdf->MultiCell(0, 10, '        Kindly ensure that all information contained in this document is reviewed for accuracy. Should there be any discrepancies or updates needed, please contact the Civil Registry Office promptly for assistance. This document bears the signature and certification of authorized personnel and is valid for official use.', 0, 'L');
$pdf->Ln(10);


      $pdf->Ln(10);
        // HTML content with CSS for styling the input fields
        $html = <<<EOF
        <style>
            table {
                width: 100%;
                font-size: 12px;
                line-height: 1.5;
                border-spacing: 10px 5px; /* Optional spacing between rows */
            }
            td.label {
                width: 40%; /* Fixed width for labels */
                font-weight: bold; /* Bold text for emphasis */
                color: #1d3557; /* Dark blue for better visibility */
                text-align: left;
                text-decoration: underline; /* Underline for extra emphasis */
                font-family: Arial, sans-serif; /* Clean and readable font */
            }
            td.data {
                width: 60%; /* Remaining width for the data */
                text-align: left;
                word-wrap: break-word; /* Ensures long text wraps */
                color:rgb(0, 0, 0); /* Neutral gray for content contrast */
                font-family: Arial, sans-serif;
            }
        </style>
        <table>
            <tr>
                <!-- Left Column -->
                <td>
                    <table>
                        <tr>
                            <td class="label">Child's Full Name:</td>
                            <td class="data">{$request->child_first} {$request->child_middle} {$request->child_last}</td>
                        </tr>
                        <tr>
                            <td class="label">Sex:</td>
                            <td class="data">{$request->child_sex}</td>
                        </tr>
                        <tr>
                            <td class="label">Date of Birth:</td>
                            <td class="data">{$request->child_birthdate}</td>
                        </tr>
                        <tr>
                            <td class="label">Place of Birth:</td>
                            <td class="data">{$request->child_birthplace}</td>
                        </tr>
                        <tr>
                            <td class="label">Type of Birth:</td>
                            <td class="data">{$request->birth_type}</td>
                        </tr>
                        <tr>
                            <td class="label">Multiple Birth:</td>
                            <td class="data">{$request->multiple_birth}</td>
                        </tr>
                        <tr>
                            <td class="label">Birth Order:</td>
                            <td class="data">{$request->birth_order}</td>
                        </tr>
                        <tr>
                            <td class="label">Birth Weight:</td>
                            <td class="data">{$request->birth_weight}</td>
                        </tr>
                    </table>
                </td>
                <!-- Right Column -->
                <td>
                    <table>
                        <tr>
                            <td class="label">Mother's Full Name:</td>
                            <td class="data">{$request->mother_first_name} {$request->mother_middle_name} {$request->mother_last_name}</td>
                        </tr>
                        <tr>
                            <td class="label">Citizenship:</td>
                            <td class="data">{$request->citizenship}</td>
                        </tr>
                        <tr>
                            <td class="label">Religion:</td>
                            <td class="data">{$request->religion}</td>
                        </tr>
                        <tr>
                            <td class="label">Address:</td>
                            <td class="data">{$request->mother_street}, {$request->mother_city}, {$request->mother_province}, {$request->mother_country}</td>
                        </tr>
                        <tr>
                            <td class="label">Father's Full Name:</td>
                            <td class="data">{$request->father_first_name} {$request->father_middle_name} {$request->father_last_name}</td>
                        </tr>
                        <tr>
                            <td class="label">Citizenship:</td>
                            <td class="data">{$request->citizenship2}</td>
                        </tr>
                        <tr>
                            <td class="label">Religion:</td>
                            <td class="data">{$request->religion2}</td>
                        </tr>
                        <tr>
                            <td class="label">Address:</td>
                            <td class="data">{$request->father_street}, {$request->father_city}, {$request->father_province}, {$request->father_country}</td>
                        </tr>
                        <tr>
                            <td class="label">Date of Marriage:</td>
                            <td class="data">{$request->marriage_date}</td>
                        </tr>
                        <tr>
                            <td class="label">Place of Marriage:</td>
                            <td class="data">{$request->marriage_street}, {$request->marriage_municipality}, {$request->marriage_province}, {$request->marriage_country}</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        EOF;
        
        

    
        // Output the HTML content for Live Birth Certificate
        $pdf->writeHTML($html, true, false, true, false, '');
    
        // Close and output PDF document
        $pdf->Output('certificate_Live-Birth.pdf', 'I');
    }
    
    
    public function generatemarriage()
{
    // Get the authenticated user's ID
    $userId = auth()->id();

    // Retrieve the most recent MarriageCertificateRequest for this user
    $request2 = MarriageCertificateRequest::where('User_Id', $userId)->latest()->first();

    // Create new PDF document
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // Set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('MANITO CIVIL REGISTRY OFFICE');
    $pdf->SetTitle('Certificate of Marriage');
    $pdf->SetSubject('Generated Marriage Certificate');
    $pdf->SetKeywords('TCPDF, PDF, Marriage Certificate');

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

    // Set font
    $pdf->SetFont('helvetica', '', 10);

    // Add a page for Marriage Certificate
    $pdf->AddPage();

    // Add custom header with logos and title
    $logoLeft = '/public/img/manito-logo.png';
    $logoRight = '/public/img/bagongPH.png';
    $pdf->Image($logoLeft, 15, 10, 25, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
    $pdf->Image($logoRight, 170, 10, 25, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
    $pdf->SetY(10);
    $pdf->SetFont('helvetica', 'B', 12);
    $pdf->Cell(0, 5, 'REPUBLIC OF THE PHILIPPINES', 0, 1, 'C');
    $pdf->Cell(0, 5, 'REGION V - BICOL', 0, 1, 'C');
    $pdf->Cell(0, 5, 'PROVINCE OF ALBAY', 0, 1, 'C');
    $pdf->Cell(0, 5, 'MUNICIPALITY OF MANITO', 0, 1, 'C');

    $pdf->SetFont('helvetica', 'B', 16);
    $pdf->Cell(0, 35, 'CERTIFICATE OF MARRIAGE', 0, 1, 'C');

    // Add a horizontal line
    $pdf->Line(10, 35, 195, 35);

   // Formal introduction message
$pdf->SetFont('helvetica', '', 12);

$pdf->MultiCell(0, 10, '        The information provided herein has been carefully reviewed and is based on the details submitted to the Municipality of Manito’s Civil Registry Office. It is intended to ensure the accuracy and integrity of official records. This certificate is an important document for various purposes, including but not limited to legal, administrative, and personal needs of the family and other concerned parties.', 0, 'L');
$pdf->Ln(5);

$pdf->MultiCell(0, 10, '        Kindly ensure that all information contained in this document is reviewed for accuracy. Should there be any discrepancies or updates needed, please contact the Civil Registry Office promptly for assistance. This document bears the signature and certification of authorized personnel and is valid for official use.', 0, 'L');
$pdf->Ln(10);


    // HTML content for the certificate using tables for left and right columns
    $html = <<<EOF
    <style>
        .label {
            font-weight: bold;
            width: 40%;
        }
        .data {
            width: 60%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 5px;
            vertical-align: top;
        }
    </style>
    <table>
        <tr>
            <!-- Left Column -->
            <td>
                <table>
EOF;

    // Add all the left-column data
    $leftColumnFields = [
        'Husband\'s First Name' => $request2->husband_first_name,
        'Middle Name' => $request2->husband_middle_name,
        'Date of Birth' => $request2->husband_birthdate,
        'Age' => "{$request2->husband_age} years",
        'Residence' => $request2->husband_residence,
        'Citizenship' => $request2->husband_citizenship,
        'Father\'s Name' => $request2->husband_father_first_name . ' ' . $request2->husband_father_last_name,
        'Mother\'s Maiden Name' => $request2->husband_mother_first_name . ' ' . $request2->husband_mother_maiden_last_name,
    ];
    foreach ($leftColumnFields as $label => $data) {
        $html .= <<<EOF
        <tr>
            <td class="label">{$label}:</td>
            <td class="data">{$data}</td>
        </tr>
EOF;
    }

    $html .= <<<EOF
                </table>
            </td>
            <!-- Right Column -->
            <td>
                <table>
EOF;

    // Add all the right-column data
    $rightColumnFields = [
        'Wife\'s First Name' => $request2->wife_first_name,
        'Middle Name' => $request2->wife_middle_name,
        'Date of Birth' => $request2->wife_birthdate,
        'Age' => "{$request2->wife_age} years",
        'Residence' => $request2->wife_residence,
        'Citizenship' => $request2->wife_citizenship,
        'Father\'s Name' => $request2->wife_father_first_name . ' ' . $request2->wife_father_last_name,
        'Mother\'s Maiden Name' => $request2->wife_mother_first_name . ' ' . $request2->wife_mother_maiden_last_name,
    ];
    foreach ($rightColumnFields as $label => $data) {
        $html .= <<<EOF
        <tr>
            <td class="label">{$label}:</td>
            <td class="data">{$data}</td>
        </tr>
EOF;
    }

    $html .= <<<EOF
                </table>
            </td>
        </tr>
    </table>
    <br><br>
    <table>
        <tr>
            <td class="label">Date of Marriage:</td>
            <td class="data">{$request2->marriage_date1}</td>
        </tr>
        <tr>
            <td class="label">Place of Marriage:</td>
            <td class="data">{$request2->marriage_place}</td>
        </tr>
        <tr>
            <td class="label">Type of Ceremony:</td>
            <td class="data">{$request2->ceremony_type}</td>
        </tr>
        <tr>
            <td class="label">Officiant Name:</td>
            <td class="data">{$request2->officiant_name}</td>
        </tr>
        <tr>
            <td class="label">License No:</td>
            <td class="data">{$request2->license_no}</td>
        </tr>
    </table>
    EOF;

    // Output the HTML content for Marriage Certificate
    $pdf->writeHTML($html, true, false, true, false, '');

    // Close and output PDF document
    $pdf->Output('certificate_Marriage.pdf', 'I');
}

    

public function generatedeath() {
    // Get the authenticated user's ID
    $userId = auth()->id();

    // Retrieve the most recent DeathCertificateRequest for this user
    $request3 = DeathCertificateRequest::where('User_Id', $userId)->latest()->first();

    // Create new PDF document
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // Set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('MANITO CIVIL REGISTRY OFFICE');
    $pdf->SetTitle('Certificate of Death');
    $pdf->SetSubject('Generated Death Certificate');
    $pdf->SetKeywords('TCPDF, PDF, Death Certificate');

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

    // Set font
    $pdf->SetFont('helvetica', '', 10);

    // Add a page for Death Certificate
    $pdf->AddPage();

    // Add custom header with logos and title
    $logoLeft = '/public/img/manito-logo.png';
    $logoRight = '/public/img/bagongPH.png';
    $pdf->Image($logoLeft, 15, 10, 25, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
    $pdf->Image($logoRight, 170, 10, 25, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
    $pdf->SetY(10);
    $pdf->SetFont('helvetica', 'B', 12);
    $pdf->Cell(0, 5, 'REPUBLIC OF THE PHILIPPINES', 0, 1, 'C');
    $pdf->Cell(0, 5, 'REGION V - BICOL', 0, 1, 'C');
    $pdf->Cell(0, 5, 'PROVINCE OF ALBAY', 0, 1, 'C');
    $pdf->Cell(0, 5, 'MUNICIPALITY OF MANITO', 0, 1, 'C');

    $pdf->SetFont('helvetica', 'B', 16);
    $pdf->Cell(0, 35, 'CERTIFICATE OF DEATH', 0, 1, 'C');

    // Add a horizontal line
    $pdf->Line(10, 35, 195, 35);

    // Formal introduction message
$pdf->SetFont('helvetica', '', 12);

$pdf->MultiCell(0, 10, '        The information provided herein has been carefully reviewed and is based on the details submitted to the Municipality of Manito’s Civil Registry Office. It is intended to ensure the accuracy and integrity of official records. This certificate is an important document for various purposes, including but not limited to legal, administrative, and personal needs of the family and other concerned parties.', 0, 'L');
$pdf->Ln(5);

$pdf->MultiCell(0, 10, '        Kindly ensure that all information contained in this document is reviewed for accuracy. Should there be any discrepancies or updates needed, please contact the Civil Registry Office promptly for assistance. This document bears the signature and certification of authorized personnel and is valid for official use.', 0, 'L');
$pdf->Ln(10);


    // HTML content for the certificate using tables for left and right columns
    $html = <<<EOF
    <style>
        .label {
            font-weight: bold;
            width: 40%;
        }
        .data {
            width: 60%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 5px;
            vertical-align: top;
        }
    </style>
    <table>
        <tr>
            <!-- Left Column -->
            <td>
                <table>
EOF;

    // Add all the left-column data
    $leftColumnFields = [
        'Full Name' => $request3->full_name,
        'Sex' => $request3->sex,
        'Date of Death' => $request3->date_of_death,
        'Date of Birth' => $request3->date_of_birth,
        'Completed Years' => "{$request3->completed_years} years",
        'Months & Days' => $request3->months_days,
        'Hours, Minutes & Seconds' => $request3->hours_minutes_seconds,
        'Place of Death' => $request3->place_of_death,
        'Father\'s Name' => $request3->father_name,
        'Mother\'s Maiden Name' => $request3->mother_maiden_name,
        'Immediate Cause' => $request3->immediate_cause,
        'Antecedent Cause' => $request3->antecedent_cause,
        'Underlying Death Cause' => $request3->underlyingdeath,
        'Other Conditions' => $request3->other_conditions,
    ];
    foreach ($leftColumnFields as $label => $data) {
        $html .= <<<EOF
        <tr>
            <td class="label">{$label}:</td>
            <td class="data">{$data}</td>
        </tr>
EOF;
    }

    $html .= <<<EOF
                </table>
            </td>
            <!-- Right Column -->
            <td>
                <table>
EOF;

    // Add all the right-column data
    $rightColumnFields = [
        'Civil Status' => $request3->civil_status,
        'Religion' => $request3->religion,
        'Citizenship' => $request3->citizenship,
        'Residence' => $request3->residence,
        'Maternal Condition' => $request3->maternal_condition,
        'Place of Occurrence' => $request3->place_of_occurrence,
        'Manner of Death' => $request3->manner_of_death,
        'Type of Attendant' => $request3->type_of_attendant,
        'Attendance Duration' => $request3->attendance_duration,
        'Certifying Officer' => $request3->certifying_officer,
        'Certification Date' => $request3->certification_date,
        'Corpse Disposal Method' => $request3->corpse_disposal_method,
        'Cemetery Name' => $request3->cemetery_or_crematory_name,
        'Cemetery Address' => $request3->cemetery_or_crematory_address,
    ];
    foreach ($rightColumnFields as $label => $data) {
        $html .= <<<EOF
        <tr>
            <td class="label">{$label}:</td>
            <td class="data">{$data}</td>
        </tr>
EOF;
    }

    $html .= <<<EOF
                </table>
            </td>
        </tr>
    </table>
    EOF;

    // Output the HTML content for Death Certificate
    $pdf->writeHTML($html, true, false, true, false, '');

    // Close and output PDF document
    $pdf->Output('certificate_Death.pdf', 'I');
}

}