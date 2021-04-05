<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function getCategory($slug){
        echo $slug;
    }
    public function getPage($category,$slug){
        $data = Post::where('slug',$slug)->first();
        return view('listing.page', compact('data'));
    }
    public function contact(){
        return view('contact');
    }
    public function contactPost(ContactRequest $request): JsonResponse
    {
        $request->validated();

        $contact = Contact::create([
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        if($contact){
            return Response::json([
                'result' => 1,
                'message' => 'Teşekkürler , Mesajınız alınmıştır.'
            ],200);
        }
        return Response::json([
            'result' => 0,
            'message' => 'Sunucu hatası.'
        ],500);

    }
}
