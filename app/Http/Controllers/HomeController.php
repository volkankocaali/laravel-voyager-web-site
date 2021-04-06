<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Tour;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use TCG\Voyager\Models\Page;

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

    public function allTour(){
        $data = json_decode(json_encode([
            'title' => 'Seferler',
            'name' => 'Seferler',
            'slug' => 'seferler',
            'image' => 'others/image-2.jpg',
        ], true));

        return view('tour',compact('data'));
    }

    public function getTour(string $slug){
        $data = Tour::where('slug',$slug)
            ->where('status','AKTIF')
            ->firstOrFail();

        return view('listing.tour',compact('data'));
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

    public function allBlog(){
        $data = json_decode(json_encode([
            'title' => 'Blog',
            'name' => 'Blog',
            'slug' => 'blog',
            'image' => 'others/image-2.jpg',
        ], true));

        return view('blog',compact('data'));
    }

    public function getBlog(string $slug){
        $data = Page::where('slug',$slug)->where('status','ACTIVE')->firstOrFail();
        return view('listing.page',compact('data'));
    }
}
