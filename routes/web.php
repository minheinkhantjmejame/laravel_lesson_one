<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\StaffsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\DashboradsController;
use App\Http\Controllers\MembersController;
use Illuminate\Support\Facades\DB;

use App\Models\Article;
use Illuminate\Broadcasting\PrivateChannel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// page ta ku ko call chin yin get nae call ya thi
Route::get('/', function () {
    return view('welcome');
});

// // Route::get("/",function(){
// //     return "Save Myanmar";
// // });

// Route::get("/sayar",function(){
//     return "Hay, all my bucket lists have been maken?";
// });

// Route::get("/sayhi",function(){
//     return "Hay, all my bucket lists have been maken?";
// });

// // Route::get("/about",function(){
// //     return view("aboutme");
// // });

// Route::view("/about","aboutme");

// Route::get("/about/company",function(){
//     return view("aboutme");
// });

// Route::view("/about","aboutme");// de lo yay ll ya tel

// Route::view("/about/company","aboutcompany");

// // Route::get("/contact",function(){
// //     return redirect("about");
// // });

// Route::redirect("/contact","about/company");

// // route mar shi tae value ko call chin yin parameter pay yin ya pa 
// Route::get('/about/company/{staff}',function($staff){
//     return "hello";
// });

// Route::get('/about/company/{staff}',function($staff){
//     return view("aboutcompanystaff",["person"=>$staff]);
// });

// Route::get('/about/company/{staff}/{city}',function($staff,$city){
//     return view("aboutcompanystaffbycity",["person"=>$staff,"location"=>$city]);
// });


// Route::get('/profile',function(){
//     return view("myprofile");
// })->name("prof");
// // name pay tel so tar route ko a shay gyi u ma thone zay chin lot

// // controller ko call chin yin array nae call ya thi 
// // Route::get("/students",[\App\Http\Controllers\StudentsController::class,'index'])->name('students.index');
// // Route::get("/students/show",[\App\Http\Controllers\StudentsController::class,'show'])->name('students.show');
// // Route::get("/students/edit",[\App\Http\Controllers\StudentsController::class,'edit'])->name('students.edit');


// Route::get("/students",[StudentsController::class,'index'])->name('students.index');
// Route::get("/students/show",[StudentsController::class,'show'])->name('students.show');
// Route::get("/students/edit",[StudentsController::class,'edit'])->name('students.edit');
// // use nae call pe controller path ko compress lote ll ya tel 

// // Route::group(['prefix'=>"students"],function(){
// //     Route::get("/",[\App\Http\Controllers\StudentsController::class,'index'])->name('students.index');
// //     Route::get("/show",[\App\Http\Controllers\StudentsController::class,'show'])->name('students.show');
// //     Route::get("/edit",[\App\Http\Controllers\StudentsController::class,'edit'])->name('students.edit');

// // });// students ko common lote lite tar

// // Route::group(['prefix'=>"students"],function(){
// //     Route::get("/",[StudentsController::class,'index'])->name('students.index');
// //     Route::get("/show",[StudentsController::class,'show'])->name('students.show');
// //     Route::get("/edit",[StudentsController::class,'edit'])->name('students.edit');

// // });// toppest mar, path ko bone htoke htar pe thone lot ll ya tel 



// // naming ko ll bone htoke lot ya thi 
// // Route::name('students.')->group(function(){
// //     Route::get("/students",[StudentsController::class,'index'])->name('index');
// //     Route::get("/students/show",[StudentsController::class,'show'])->name('show');
// //     Route::get("/students/edit",[StudentsController::class,'edit'])->name('edit');

// // });

// Route::get("/staffs",[StaffsController::class,'home'])->name('staffs.home');
// Route::get("/staffs/party",[StaffsController::class,'party'])->name('staffs.party');
// Route::get("/staffs/partytotal/{total}",[StaffsController::class,'partytotal'])->name('staffs.total');
// Route::get("/staffs/partytotal/{total}/{status}",[StaffsController::class,'partytotalconfirm'])->name('staffs.status');


// Route::get("/employees",[EmployeesController::class,'index'])->name('employees.index');
// Route::get("/employees/passingdataone",[EmployeesController::class,'passingdataone'])->name('employees.passingdataone');
// Route::get("/employees/passingdatatwo",[EmployeesController::class,'passingdatatwo'])->name('employees.passingdatatwo');
// Route::get("/employees/passingdatathree",[EmployeesController::class,'passingdatathree'])->name('employees.passingdatathree');
// Route::get("employees/show",[EmployeesController::class,'show'])->name("employees.show");
// Route::get("employees/edit",[EmployeesController::class,'edit'])->name("employees.edit");
// Route::get("employees/update",[EmployeesController::class,'update'])->name("employees.update");


// Route::get('/dashboards',[DashboradsController::class,'index'])->name('dashboards.index');

// Route::get('/members',[MembersController::class,'index'])->name('members.index');


// Route::get('students/insert',function(){
//     // \DB::insert('INSERT INTO students(id,name,phone) VALUES(?,?,?)',['2','aung aung','0911111']);
//     // DB:raw("INSERT INTO students(id,name,phone) VALUE(3,'Su Su','09656565'");
//     // raw ka statement nae tu tel but error tet nay tel may be cause of version

//     return "Data Inserted";
// });

// Route::get('students/read',function(){
//     $results = DB::select('SELECT * FROM students');
//     // return $results;
//     // return var_dump($results);

//     foreach($results as $result){
//         // echo $result['name']."<br/>";
//         echo $result->name."<br/>";// object phyit lot object operator nae call pay ya thi
//     }
// });


// Route::get('students/singleread',function(){
//     $result = \DB::select('SELECT * FROM students WHERE id =?',[2]);
//     return $result;
// });


// Route::get('students/update',function(){
//     // $update = DB::update('UPDATE students SET name="zaw zaw " WHERE id = ?',[1]);
//     $update = DB::update('UPDATE students SET name=?,phone=? WHERE id=?',["Min Hein Khant","0652147313",2]);
//     return 'Updated';
// });

// Route::get('students/delete',function(){
//     DB::delete('DELETE FROM students WHERE id = ?',[2]);
//     return "Deleted";
// });

// Route::get('staffs/insert',function(){

//     DB::table('staffs')->insert([
//         'name'=>'yu yu',
//         'age'=>25
//     ]);



//     return "Inserted";
// });


// Route::get('staffs/read',function(){
//     $staffs = DB::table('staffs')->get();
//     // return $staffs;
//     // return var_dump($staffs);

//     // foreach($staffs as $staff){
//     //     echo $staff->name."<br/>";

//     // }

//     // $staffs = DB::table("staffs")->select('name','id','age')->get();
//     // return $staffs;

//     // $staffs = DB::table('staffs')->where('age','<',25)->get();
//     // return $staffs;

//     // $staffs = DB::table('staffs')->orderBy('id','desc')->limit(2)->get();
//     // return $staffs;

//     // $staffs = DB::table("staffs")->count();
//     // return $staffs;

//     // $staffs = DB::table("staffs")->where("name","min min")->count();
//     // return $staffs;

//     $staffs = DB::table('staffs')->where('name','min min')->exists();
//     return $staffs;
// });

// Route::get("staffs/singleread",function(){

//     // $staff = DB::table("staffs")->where("id",1)->first();
//     // // return $staff;
//     // echo $staff->name;

//     // $staff = DB::table("staffs")->pluck('name');// ["yu yu","min min","min min","yu yu"]
//     // $staff = DB::table("staffs")->pluck('id','name');// {"yu yu":4,"min min":3}
//     // return $staff;


//     // $staff = DB::table("staffs")->where("id",1)->get();
//     // return $staff;
//     // echo $staff->name; // error, cause get() method returns array, array cannot print.If only by using looping, can return value
// });


// Route::get("staffs/update",function(){

//     // DB::table("staffs")->where('id',1)->update(['name'=>'zaw zaw']);
//     // return "updated";

//     // DB::table("staffs")->where('id',2)->update(['name'=>'nandar','age'=>40]);
//     // return "updated";

//     DB::table("staffs")->where('age',25)->update(['name'=>'maung zaw']);
//     return "updated";
// });


// Route::get("staffs/delete",function(){

//     // DB::table("staffs")->where('id',4)->delete();
//     // return "Deleted";

//     DB::table('staffs')->where('name','maung zaw')->delete();
//     return "Deleted";
// });

// Route::get('articles/create',function(){

//     // Method 1
//     // $article = new Article();
//     // $article->title = "This is new articles 5";
//     // $article->description = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis est asperiores iure, hic consequatur eum nobis blanditiis incidunt. Impedit veritatis, culpa repellendus magnam commodi voluptates tenetur repudiandae sit. Ab, repellat.";
//     // $article->user_id = 1;
//     // $article->rating = 1;
//     // $article->save();
//     // return "Insert Successfully";

//     // Method 2

//     Article::create([
//         "title"=>"This is new Article 13",
//         "description"=>"Lorem Ipsum , dolor sit amet",
//         "user_Id"=>2,
//         "rating"=>3
//     ]);

//     return "insert successfully";


// });

// Route::get('articles/read',function(){
//     $articles = Article::all();
//     // return $articles;

//     // foreach($articles as $article){
//     //     echo "$article->id. $article->title<br/>";
//     // }

//     // $article = Article::find(1);// id ko read lote pay tel
//     $article = Article::findOrFail(3); //ma shi yin error tet tel
//     // $article = Article::find(3); // ma shi yin error tet tel, error code par describe pay tel
//     return $article->id.$article->title;
// });


// Route::get('articles/update',function(){
//     $article = Article::find(1);
//     $article->title = "This is old article 1";
//     $article->description = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores eius iste nisi magni quis? Saepe, recusandae tempora accusamus pariatur necessitatibus officia doloribus voluptatem nostrum cupiditate reprehenderit repudiandae culpa, error accusantium?";
//     $article->user_id = 2;
//     $article->rating = 0;
//     $article->save();

//     return "Update Successfully";
// });

// Route::get('articles/delete',function(){
//     $article = Article::findOrFail(9);
//     $article->delete();

//     return "Delete Successfully";
// });


// Route::get("articles/aggreates",function(){
//     $datas = [
//         ['price'=>1000],
//         ['price'=>2000],
//         ['price'=>3000],
//         ['price'=>4000],
//         ['price'=>5000]
//     ];

//     // return $datas;
//     // var_dump($datas);
//     // var_dump(collect($datas));// collect thone yin object nae htut pay tel
//     // dd($datas,collect($datas));

//     // return collect($datas)->count();

//     // return collect($datas)->max();

//     // return collect($datas)->max(function($num){
//     //     return $num['price'];
//     // });

//     // return collect($datas)->min();

//     // return collect($datas)->min(function($num){
//     //     return $num['price'];
//     // });

//     // return collect($datas)->sum(function($num){
//     //     return $num['price'];
//     // });

//     // return collect($datas)->average(function($num){
//     //     return $num['price'];
//     // });

//     // return collect($datas)->average(); // error

//     // return collect($datas)->avg(function($num){
//     //     return $num["price"];
//     // });

//     // $articles = Article::all()->count();
//     // return $articles;

//     // $articles = Article::where("user_id",1)->count();
//     // return $articles;

//     // $articles = Article::where("user_id",2)->max('rating');
//     // return $articles;

//     // $articles = Article::where("user_id",2)->min("rating");
//     // return $articles;

//     // $articles = Article::where("user_id",1)->average("rating");
//     // $articles = Article::where("user_id",2)->avg("rating");
//     // return $articles;

//     $articles = Article::where("user_id",2)->sum("rating");
//     return $articles;

// });

// // whereColumn(,)
// // whereColumn(,,)

// Route::get("articles/wherecolumn",function(){
//     // $articles = Article::whereColumn('id',"user_id" )->get(); // user_id nae id tu tar twae phaw pya pay tel
//     // return $articles;


//     // $articles = Article::whereColumn('created_at',"updated_at" )->get();
//     // return $articles."<br/>";

//     // $articles = Article::whereColumn('created_at',"updated_at" )->orderByDesc('id')->get();
//     // return $articles;

//     $articles = Article::whereColumn('created_at',"<","updated_at" )->get();
//     return $articles;
// });


// // =>join  

// Route::get("articles/join",function(){
//     // => Inner Join  
//     // $articles = Article::join("users",'articles.user_id','=','users.id')->select('articles.title','users.name')->get();
//     // // return $articles;

//     // foreach($articles as $article){
//     //     echo "$article->title = $article->name <hr/>"; 
//     // }

//     // $articles = DB::table('articles')->join('users','articles.user_id','=','users.id')->select('articles.title','users.name as owner')->get();
//     // // return $articles;
//     // foreach($articles as $article){
//     //     echo "$article->title = $article->owner <hr/>";
//     // }

//     // = left Join

//     $articles = Article::leftJoin("users","articles.user_id","=","users.id")->select('articles.title as caption','users.name as owner')->get();
//     // return $articles;
//     // foreach($articles as $article){
//     //     echo "$article->caption = $article->owner <hr/>";
//     // }

//     // Right Join

//     $articles = Article::rightJoin("users","articles.user_id","=","users.id")->select('articles.title as caption','users.name as owner')->get();
//     // return $articles;
//     foreach($articles as $article){
//         echo "$article->owner = $article->caption <hr/>";
//     }

// });

