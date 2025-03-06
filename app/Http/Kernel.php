protected $middlewareGroups = [

'web' => [

    // Middleware lainnya...

    \App\Http\Middleware\CheckStok::class,

],

];