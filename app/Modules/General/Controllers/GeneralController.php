<?php

namespace App\Modules\General\Controllers;

use App\Modules\General\Models\General;
use App\Modules\Shooting\Models\ShootingCategory;
use App\Modules\User\Models\Photograph;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use UxWeb\SweetAlert\SweetAlert;

class GeneralController extends Controller
{

    /**
     * Display Home Page
     *
     * @return \Illuminate\Http\Response
     */
    public function showHome()
    {
       
        
        return view('General::frontOffice.public.home', [
            
        ]);
    }

    /**
     * Display Legal Mentions Page
     *
     * @return \Illuminate\Http\Response
     */
    public function showLegalMentions()
    {
        return view('General::frontOffice.public.legal', [

        ]);
    }

    public function showFAQ()
    {
        return view('General::frontOffice.public.faq', [

        ]);
    }
    public function showConditions()
    {
        return view('General::frontOffice.public.conditions', [

        ]);
    }

    public function showHowItWorks()
    {
        return view('General::frontOffice.public.howItWorks', [

        ]);
    }


    public function apiShowLegalMentions($token)
    {
        if(!checkApiToken($token)){
            return response()->json(['status' => 403]);
        }

        $legalMentions['Editeur'] =
            'Wellpic est une application éditée par la société BECOOL STUDIO SARL. <br>
            BECOOL STUDIO <br>
            Société à Actions Responsabilité Limitée <br>
            RCS Paris 494 503 550 <br>
            TVA intracommunautaire : FR 34494503550 <br>
            Enregistrement CNIL : 1996106 <br>
            ';

        $legalMentions['contact'] =
            '<strong>Adresse:</strong> Triple I STUDIO, 117 rue orange Soukra Ariana Tunisie  <br>
            <strong>Site internet:</strong> www.sharetaxi.com, le site internet est hébergé par la société OVH.<br>
            <strong>E-mail:</strong> saifarmyej@gmail.com
            ';

        $legalMentions['Propriété intellectuelle'] =
            'Tous les éléments présents ou décrits sur ce site Web, incluant, mais sans s\'y limiter, les logos, marques, photos, vidéos, applications produits de Wellpic sont la propriété de BECOOL STUDIO S.A.S. et ne peuvent être utilisés à des fins commerciales ou autres sans notre autorisation expresse.';

        return response()->json(['status' => 1, 'legal_mentions' => $legalMentions]);
    }

    /**
     * Display Contact Page
     *
     * @return \Illuminate\Http\Response
     */
    public function showContact()
    {
        return view('General::frontOffice.public.contact', [

        ]);
    }

    /**
     * Handle Contact Page
     *
     * @return \Illuminate\Http\Response
     */
    public function handleContact()
    {
        $data = Input::all();

        $email = $data['email'];
        $subject = $data['subject'];

        $content = ['messages' => $data['comments'], 'name' => $data['name'], 'subject' => $subject, 'email' => $email];
        Mail::send('General::mail.contact', $content, function ($message) use ($email,$subject) {
            $message->from($email);
            $message->to('saifarmyej@gmail.com');
            $message->subject($subject);
        });

        SweetAlert::success('Bien !', 'Votre message a été envoyé !')->persistent('Fermer');
        return redirect(route('showContact'));
    }

    public function handleTopFeaturedPhotographs($type)
    {
        $general = General::find(1);
        if($type == 1){
            $general->top_featured = 2;
            $general->save();

            SweetAlert::success('Bien !', 'Mise en avant activée !')->persistent('Fermer');
        } else {
            $general->top_featured = 1;
            $general->save();

            SweetAlert::success('Bien !', 'Mise en avant désactivée !')->persistent('Fermer');
        }
        return back();
    }

}
