<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;  // Move this line to the top
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Scan; 
use TCPDF;

class GenerateScanPDFController extends Controller
{
    public function scaninsert(Request $request)
    {
        $request->validate([
            'Email' => 'required|email', 
            'File' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048', 
        ]);
    
        $user = Auth::user();  
    
        $filePath = $request->file('File')->store('scan', 'public'); 
    
        Scan::create([
            'email' => $request->input('Email'),  
            'scan_img' => $filePath, 
            'User_Id' => $user->User_Id, 
        ]);
    
        return redirect('/otpform')->with('success_scan', 'Scan Form submitted successfully!');
    }
    
    public function scandocument()
    {
      
        $user = Auth::user();
    
        $scan = Scan::where('email', $user->email)->latest()->first();
    
        if (!$scan) {
            return response()->json(['error' => 'No scan found for the logged-in user.'], 404);
        }
    
        $filePath = $scan->scan_img;
        $fullImagePath = public_path('storage/' . $filePath);
    
        // Create a new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    
        // Disable header and footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
    
        // Set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    
        // Add a page
        $pdf->AddPage();
    
        // Get page dimensions
        $pageWidth = $pdf->getPageWidth();
        $pageHeight = $pdf->getPageHeight();
    
        // Set margins
        $margin = 15;
        $imgWidth = $pageWidth - (2 * $margin);
        $imgHeight = $pageHeight - (2 * $margin);
    
        // Center the image by calculating the X and Y positions
        $x = $margin;
        $y = $margin;
    
        // Ensure no extra content is added before the image
        $pdf->SetAutoPageBreak(false, 0);
    
        // Display the image
        if (file_exists($fullImagePath)) {
            $pdf->Image(
                $fullImagePath,
                $x,
                $y,
                $imgWidth,
                $imgHeight,
                '',     // File type (auto-detect)
                '',     // Link
                'C',    // Align
                true,   // Resize
                150,    // DPI
                '',     // Border
                false,  // Fit box
                false,  // Hidden
                1,      // Fit on page
                false,  // MultiCell
                false   // Is Mask
            );
        } else {
            $pdf->Cell(0, 10, 'Image not found!', 0, 1, 'C');
        }
    
        // Close and output PDF document
        $pdf->Output('scanned_document.pdf', 'I');
    }    
}
