<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
use App\Models\Project;

class PageController extends Controller
{
    public function home()
    {
        // Option A: from DB
        // $projects = Project::orderBy('created_at','desc')->get();

        // Option B: quick array (fallback). Modify / replace with DB easily.
        $projects = [
            [
                'slug' => 'portfolio-site',
                'title' => 'Portfolio Site',
                'description' => 'Personal portfolio built with Laravel & Tailwind.',
                'thumbnail' => '/img/project1.jpg',
                'tech' => ['Laravel','Tailwind','MySQL']
            ],
            [
                'slug' => 'ecommerce',
                'title' => 'E-Commerce Dashboard',
                'description' => 'Admin dashboard for store with analytics.',
                'thumbnail' => '/img/project2.jpg',
                'tech' => ['Laravel','React','Stripe']
            ],
            [
                'slug' => 'mobile-app',
                'title' => 'Mobile App Landing',
                'description' => 'Landing page and marketing website.',
                'thumbnail' => '/img/project3.jpg',
                'tech' => ['Flutter','API','Laravel']
            ]
        ];

        $about = [
            'name' => 'Nama Kamu',
            'title' => 'Web Developer',
            'bio' => 'Saya seorang web developer yang berfokus pada pembuatan web modern, performa tinggi, dan desain UI/UX yang bersih. Keahlian utama meliputi HTML, CSS, JS, Laravel, Tailwind, dan lainnya.',
            'skills' => ['HTML','CSS','JavaScript','Laravel','Tailwind','MySQL','Vite']
        ];

        $interests = [
            ['label'=>'Web Development','icon'=>'code'],
            ['label'=>'UI/UX Design','icon'=>'palette'],
            ['label'=>'Gaming','icon'=>'gamepad'],
            ['label'=>'Learning New Tech','icon'=>'sparkles'],
        ];

        return view('pages.home', compact('projects','about','interests'));
    }

    public function projectDetail($slug = null)
    {
        // Here you can fetch project by slug from DB. For demo, redirect to home if not found.
        return redirect()->route('home')->with('info', 'Project detail belum disetup. Silakan gunakan halaman utama untuk melihat project.');
    }

    public function sendContact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:120',
            'email' => 'required|email',
            'message' => 'required|string|max:2000',
        ]);

        // Send email using Mailable
        Mail::to(config('mail.from.address'))->send(new ContactMessage($data));

        return back()->with('success','Pesan berhasil dikirim. Terima kasih!');
    }
}
