<h4>API</h4>
<p>In this project you can find the following topics.
<ol>
    <li>Simple API</li>
    <li>Example of POST, GET, PUT, DELETE Methods - dummyApi.php</li>
    <li>Also find the apiResource method example - dummyApi.php</li>
    <li>Upload File with api - FileController.php </li>
    <li>API authentication with Laravel Sanctum - UserController.php</li>
</ol>

<h5>Steps to install and configure the Laravel Sanctum</h5>
<ol>
<li><b>Install Laravel Sanctum via composer package manager</b></li>
<p> >>composer require laravel/sanctum

<li><b>Configure and publish laravel Sanctum</b></li>
<p>>>php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"</p>
The sanctum configuration file will be placed in your application's config directory.

<li><b>Run Database Migration</b></li>
you should run your database migrations. Sanctum will create one database table in which to store API tokens:
<p>>>php artisan migrate</p>

<li><b>Utilize Sanctum to authenticate a SPA </b></li>
if you plan to utilize Sanctum to authenticate a SPA, you should add Sanctum's middleware to your api middleware group within your application's app/Http/Kernel.php file:
<pre>
'api' => [
    \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
    'throttle:api',
    \Illuminate\Routing\Middleware\SubstituteBindings::class,
],
</pre>


<li><b>To use token for user.</b></li>
To begin issuing tokens for users, your User model should use the Laravel\Sanctum\HasApiTokens trait:
<pre>use Laravel\Sanctum\HasApiTokens;
 
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
}</pre>

<li><b>Let's create the seeder for the User model</b></li>
<p>>>php artisan make:seeder UsersTableSeeder

<li><b>Now let's insert as record </b></li>
Open application folder ->database->seeder->UsersTableSeeder.php
<pre>
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
...
...
DB::table('users')->insert([
    'name' => 'John Doe',
    'email' => 'john@doe.com',
    'password' => Hash::make('password')
]);</pre>

<li><b>To seed users table with user</b></li>
<p>>>php artisan db:seed --class=UsersTableSeeder </p>

<li><b>create controller and make routes/api.php for user login</b></li>
<p>>>php artisan make:controller UserController </p>
paste code:
<pre><?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    // 

    function index(Request $request)
    {
        $user= User::where('email', $request->email)->first();
        // print_r($data);
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }
        
             $token = $user->createToken('my-app-token')->plainTextToken;
        
            $response = [
                'user' => $user,
                'token' => $token
            ];
        
             return response($response, 201);
    }
}

Route\api.php
Route::post('login',[UserController::class,'index']);
</pre>
<li><b>Test with postman, Result will be below</b></li>
<pre>
    {
    "user": {
        "id": 1,
        "name": "John Doe",
        "email": "john@doe.com",
        "email_verified_at": null,
        "created_at": null,
        "updated_at": null
    },
    "token": "AbQzDgXa..."
}
</pre>
<li><b>Make Details API or any other with secure route</b></li>
<pre>
Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's

    });

Route::post("login",[UserController::class,'index']);
</pre>
</ol>

Never put singin and sign up api routes inside the group of authentication.
