<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatsAppController extends Controller
{
    public function sendToWhatsapp(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'course' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'semester' => 'required|string|max:100',
            'deadline' => 'required|string|max:100',
            'task_details' => 'required|string',
        ]);

        // Prepare WhatsApp message
        $message = "Halo ka mau joki tugas apa?\n\n";
        $message .= "Wajib isi format sebagai berikut agar harga ditentukan dari admin:\n\n";
        $message .= "Matkul: " . $validated['course'] . "\n";
        $message .= "Jurusan: " . $validated['major'] . "\n";
        $message .= "Kelas/Semester: " . $validated['semester'] . "\n";
        $message .= "Deadline (Hari dan Jam): " . $validated['deadline'] . "\n";
        $message .= "Tugas (detail tugas):\n " . $validated['task_details'] . "\n\n";
        $message .= "Tugas wajib dijelaskan secara detail di awal, baik info tugas, format, atau request, bahkan contoh pengerjaan jika ada.";

        // Format message for URL
        $encodedMessage = urlencode($message);
        
        // WhatsApp phone number - change this to your admin number
        $whatsappNumber = "6285225397226";
        
        // Generate WhatsApp URL
        $whatsappUrl = "https://wa.me/{$whatsappNumber}?text={$encodedMessage}";
        
        // Redirect to WhatsApp
        return redirect()->away($whatsappUrl);
    }
}
