<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        "heading" => 'Pizza'
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/menu', function () {
    $pizzas = [
        'name' => 'Pizzas',
        'items'=> [
           ['name'=> "Smoked Brisket Pizza", 'price' => 19, 
           'desc' => "Pulled Pork, Beer Braised Brisket,
            & Quarter Rack of Ribs served with your choice of side"
        ],
           ['name'=> "Pulled Chicken Pizza",  'price' => 23, 
           'desc' => "Pulled Pork, Beer Braised Brisket,
            & Quarter Rack of Ribs served with your choice of side"
         ],
           ['name'=> "6 Piece Mozzarella Sticks", 'price' => 12, 
           'desc' => "Pulled Pork, Beer Braised Brisket,
            & Quarter Rack of Ribs served with your choice of side"
        ],
           ['name'=> "Canada Dry Ginger Pizza",  'price' => 31, 
           'desc' => "Pulled Pork, Beer Braised Brisket,
            & Quarter Rack of Ribs served with your choice of side"
           ]
        ]];

        $burgers = [
            'name' => 'Burgers',
            'items'=> [
               ['name'=> "Smoked Brisket Pizza", 'price' => 19, 
               'desc' => "Pulled Pork, Beer Braised Brisket,
                & Quarter Rack of Ribs served with your choice of side"
            ],
               ['name'=> "Pulled Chicken Pizza",  'price' => 23, 
               'desc' => "Pulled Pork, Beer Braised Brisket,
                & Quarter Rack of Ribs served with your choice of side"
             ],
               ['name'=> "6 Piece Mozzarella Sticks", 'price' => 12, 
               'desc' => "Pulled Pork, Beer Braised Brisket,
                & Quarter Rack of Ribs served with your choice of side"
            ],
               ['name'=> "Canada Dry Ginger Pizza",  'price' => 31, 
               'desc' => "Pulled Pork, Beer Braised Brisket,
                & Quarter Rack of Ribs served with your choice of side"
               ]
            ]];

     $chicken = [
                'name' => 'Chicken',
                'items'=> [
                   ['name'=> "Smoked Brisket Pizza", 'price' => 19, 
                   'desc' => "Pulled Pork, Beer Braised Brisket,
                    & Quarter Rack of Ribs served with your choice of side"
                ],
                   ['name'=> "Pulled Chicken Pizza",  'price' => 23, 
                   'desc' => "Pulled Pork, Beer Braised Brisket,
                    & Quarter Rack of Ribs served with your choice of side"
                 ],
                   ['name'=> "6 Piece Mozzarella Sticks", 'price' => 12, 
                   'desc' => "Pulled Pork, Beer Braised Brisket,
                    & Quarter Rack of Ribs served with your choice of side"
                ],
                   ['name'=> "Canada Dry Ginger Pizza",  'price' => 31, 
                   'desc' => "Pulled Pork, Beer Braised Brisket,
                    & Quarter Rack of Ribs served with your choice of side"
                   ]
        ]];

        $beverages = [
            'name' => 'Bevrages',
            'items'=> [
               ['name'=> "Smoked Brisket Pizza", 'price' => 19, 
               'desc' => "Pulled Pork, Beer Braised Brisket,
                & Quarter Rack of Ribs served with your choice of side"
            ],
               ['name'=> "Pulled Chicken Pizza",  'price' => 23, 
               'desc' => "Pulled Pork, Beer Braised Brisket,
                & Quarter Rack of Ribs served with your choice of side"
             ],
               ['name'=> "6 Piece Mozzarella Sticks", 'price' => 12, 
               'desc' => "Pulled Pork, Beer Braised Brisket,
                & Quarter Rack of Ribs served with your choice of side"
            ],
               ['name'=> "Canada Dry Ginger Pizza",  'price' => 31, 
               'desc' => "Pulled Pork, Beer Braised Brisket,
                & Quarter Rack of Ribs served with your choice of side"
               ]
            ]];

    $menus = [$pizzas, $burgers, $chicken, $beverages];
    return view('menu',['menus' => $menus]);
});

Route::get('/pizzas', function () {
    
    return view('pizzas', [
        
        "type" => "Huwain",
        "topping" => "Cheese",
        "heading" => 'b'
        ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
