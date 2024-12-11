<?php

namespace App\Http\Controllers;

use App\Models\BirthCertificateRequest;
use App\Models\MarriageCertificateRequest;
use App\Models\DeathCertificateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use TCPDF;

class GeneratePDFController extends Controller
{
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
                font-size: 16px;
                margin-bottom: 10px;
                padding: 8px;
                border: none; /* No border */
                color: #333; /* Ensure text remains visible */
                width: 100%;
            }
                
.certificate {
    font-family: Arial, sans-serif;
    border: 2px solid green;
    width: 80%;
    max-width: 900px;
    margin: 20px auto;
    height: 50vh;
    padding: 20px;
    background-color: white;
}

header {
    padding: 10px;
    border: 2px solid green;
}

.top-child {
    display: flex;
    justify-content: space-between;
    font-size: 50%;
    margin-bottom: 10px;
}

.child-title {
    text-align: center;
    margin: 10px 0;
}

.title p {
    margin: 5px 0;
    font-size: 1rem;
    font-weight: bold;
}

.title h1 {
    margin-top: 10px;
    font-size: 1.5rem;
}

.province {
    display: flex;
    margin-top: 15px;
    border: 2px solid green;
    width: 102.3%;
    margin-left:-12px;
    margin-bottom: -12px;
}

.field.left{
   border: 2px solid green; 
            padding: 10px; 
            background-color: white;
            margin: -2px;
  margin-right: -1px;
            width: 100%;
}
 .text-with-underline {
            position: relative;
            font-size: 0.9rem;
            margin-left: 1px;
        }

        .text-with-underline::after {
            content: '';
            display: block;
            width:88%; /* Adjust width of the underline */
            height: 1px; /* Adjust thickness */
            background-color: green; /* Underline color */
            margin-top: 4px; /* Spacing between text and underline */
          margin-left: 58px;
        }

 .text-with-underline2 {
            position: relative;
             font-size: 0.9rem;
            margin-left:-1px;
   margin-bottom: -4px;
        }

        .text-with-underline2::after {
            content: '';
            display: block;
            width: 76%; /* Adjust width of the underline */
            height: 1px; /* Adjust thickness */
            background-color: green; /* Underline color */
            margin-top: 4px; /* Spacing between text and underline */
          margin-left: 110px;
        }

.field.right {
  margin: -2px;
}
.field.right h3 {
    position: relative;
            font-size: 0.9rem;
   margin-left: 10px;
  margin-top: 5px;
}

.child-section {
    border: 2px solid green;
    padding: 10px;
    margin-top: -2px;
    height: 79vh;
}

.child-label {
    font-weight: bold;
    font-size: 1.2rem;
    text-align: left;
    margin-bottom: 10px;
  
}

.child-name{
  border: 1px solid green;
  margin-top: -122px;
  margin-left: 35px;
  margin-right:-11px;
  width: 100%;
  height: 21vh;
}

.name {
  color: green;
  font-size: 0.8rem;
}

.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-bottom: 15px;
}

.field {
    flex: 1;
    margin-right: 15px;
    font-size: 0.9rem;
}

.child-sex {
  border: 1px solid green;
  margin-top: -77px;
  margin-left: 35px;
  margin-right:-11px;
  width: 80%;
  height: 21vh;
}

.child-date-of-birth{
  border: 1px solid green;
  margin-top: -77px;
  margin-right:-11px;
  margin-left: -64px;
  width: 121%;
  height: 21vh;
}

.child-place-of-birth{
  border: 1px solid green;
  margin-top: -32px;
  margin-left: 35px;
  width: 98.9%;
  height: 21vh;
}

.child-type-of-birth{
   border: 1px solid green;
  margin-top: -11px;
  margin-left: 35px;
  width: 107%;
  height: 23.5vh;
  font-size: 0.8rem;
}

.multiple-child{
   border: 1px solid green;
  margin-top: -11px;
  margin-left: 35px;
  width: 107%;
  height: 23.5vh;
  font-size: 0.8rem;
}

.child-order{
   border: 1px solid green;
  margin-top: -11px;
  margin-left: 35px;
  width: 107%;
  height: 23.5vh;
  font-size: 0.8rem;
}

.weight-of-child {
   border: 1px solid green;
  margin-top: -11px;
  margin-left: 35px;
  width: 95%;
  height: 23.5vh;
  font-size: 0.8rem;
}

        </style>

    <div class="certificate">
        <header>
            <div class="top-child">
                <span class="left">Municipal Form No. 102<br>(Revised January 2007)</span>
                <span class="right">(To be accomplished in quadruplicate using black ink)</span>
            </div>
            <div class="child-title">
                <p>Republic of the Philippines</p>
                <p>OFFICE OF THE CIVIL REGISTRAR GENERAL</p>
                <h1>CERTIFICATE OF LIVE BIRTH</h1>
            </div>
            <div class="province">
                <div class="field left">
                    <h3 class="text-with-underline">Province</h3>
                    <h3 class="text-with-underline2">City/Municipality</h3>
                </div>
                <div class="field right">
                    <h3>Registry No.</h3>
                </div>
            </div>
        </header>
        <div class="child-section">
          <span class="child-label">C<br>H<br>I<br>L<br>D<br></span>
            <div class="row">
                <div class="child-name">
                    <label>1. NAME</label>
                    <div class="name">
                        <span>(First)</span>
                        <span>(Middle)</span>
                        <span>(Last)</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="field">
                  <div class="child-sex">
                    <label>2. SEX</label>
                    <span>(Male / Female)</span>
                  </div>
                </div>
                <div class="field">
                  <div class="child-date-of-birth">
                    <label>3. DATE OF BIRTH</label>
                    <div class="input-group">
                        <span>(Day)</span>
                        <span class=""></span>
                        <span>(Month)</span>
                        <span class=""></span>
                        <span>(Year)</span>
                        <span class=""></span>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="field">
                  <div class="child-place-of-birth">
                    <label>4. PLACE OF BIRTH</label>
                    <div class="input-group">
                        <span>(Name of Hospital/Clinic/Institution/House No., St., Barangay)</span>
                        <span class=""></span>
                        <span>(City/Municipality)</span>
                        <span class=""></span>
                        <span>(Province)</span>
                        <span class=""></span>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="field">
                  <div class="child-type-of-birth">
                    <label>5a. TYPE OF BIRTH</label>
                    <span>(Single, Twin, Triplet, etc.)</span>
                    <div class=""></div>
                  </div>
                </div>
                <div class="field">
                  <div class="multiple-child">
                    <label>5b. IF MULTIPLE BIRTH, CHILD WAS</label>
                    <span>(First, Second, Third, etc.)</span>
                    <div class=""></div>
                  </div>
                </div>
                <div class="field">
                  <div class="child-order">
                    <label>5c. BIRTH ORDER</label>
                    <span>(Order of this birth to previous live births including fetal death)</span>
                    <div class=""></div>
                  </div>
                </div>
                <div class="field">
                  <div class="weight-of-child">
                    <label>6. WEIGHT AT BIRTH</label>
                    <div class="input-group">
                        <span class=""></span>
                        <span>grams</span>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
        <div class="birth-info">{$request->mother_street}</div>
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
        <div class="birth-info">{$request->marriage_street}</div>
        <div class="birth-info">{$request->marriage_municipality}</div>
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
                font-size: 16px;
                margin-bottom: 10px;
                padding: 8px;
                border: none; /* No border */
                color: #333; /* Ensure text remains visible */
                width: 100%;
            }
        </style>

        <h1>Death Certificate</h1>

        <div class="death-info">{$request->full_name}</div>
        <div class="death-info">{$request->sex}</div>
        <div class="death-info">{$request->date_of_death}</div>
        <div class="death-info">{$request->date_of_birth}</div>
        <div class="death-info">{$request->completed_years}</div>
        <div class="death-info">{$request->months_days}</div>
EOF;

    // Output the HTML content for Live Birth Certificate
    $pdf->writeHTML($html, true, false, true, false, '');

    // Close and output PDF document
    $pdf->Output('certificate_report.pdf', 'I');
}
}
