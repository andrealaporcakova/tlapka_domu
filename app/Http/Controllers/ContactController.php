<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'jmeno' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'zprava' => 'required|string|min:10',
            'form_sent_time' => 'required|numeric',
        ]);
      //  dd($data);

        try {

            mail('info@tlapkadomu.cz', 'Nová kontaktní zpráva', 'Uživatel: ' . $data['jmeno'] . ', email: ' . $data['email']. ', zprava: ' . $data['zprava']);

            return redirect()->back()->with('success', 'Děkujeme! Zpráva byla úspěšně odeslána.');

        } catch (Exception $e) {

            throw new Exception($e->getMessage());
        }
    }
}
