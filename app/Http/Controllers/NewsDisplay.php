<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsDisplay extends Controller
{
    public function index(Request $request)
    {
        $promoViewed = $request->cookie('promo_viewed', false);

        $articles = [
            [
                'title' => 'Community Park Grand Opening',
                'content' => 'The new community park was opened yesterday with a grand ceremony attended by hundreds of residents. The park features a playground, a lake, and several walking trails.',
                'author' => 'Pop',
                'date' => '2024-06-30'
            ],
            [
                'title' => 'Local Library Hosts Summer Reading Program',
                'content' => 'The local library has kicked off its annual summer reading program, encouraging children and adults to read and participate in various activities throughout the summer.',
                'author' => 'Jack',
                'date' => '2024-06-29'
            ],
            [
                'title' => 'Farmers Market to Open Every Weekend',
                'content' => 'Starting this weekend, the downtown farmers market will be open every Saturday and Sunday, offering fresh produce, handmade goods, and live entertainment.',
                'author' => 'Amrit',
                'date' => '2024-06-28'
            ],
            [
                'title' => 'High School Graduates Celebrate Milestone',
                'content' => 'The graduating class of 2024 from the local high school celebrated their achievements with a commencement ceremony held at the city auditorium.',
                'author' => 'Kok',
                'date' => '2024-06-27'
            ],
        ];

        return view('index', compact('articles', 'promoViewed'));
        }
}
