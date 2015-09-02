<?php namespace App\Http\Controllers;

use App\Articles;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth; 

class ArticlesController extends Controller {
     /*Конструктор для редиректа для НЕзалогиненных*/
    public function __construct(){
        $this->middleware('auth',['only' => 'create']);
    }
    public function sortByName()
    {

        $articles = Articles::SortByName()->get();

        return view('articles.index',compact('articles'));
    }
    
        /*Метод для вывода всех новостей*/
  public function index()
    {

        $articles = Articles::latest('published_at')->published()->get();
        $latest = Articles::latest()->first();
      
         if(is_null($articles)){
            abort(404);
         }

        return view('articles.index',compact('articles','latest'));
    }
 /*Метод для вывода каждой отдельной новости*/
    public function show($id)
    {

        $article = Articles::find($id);
        $time = $article->published_at->diffForHumans();

        //dd($article->published_at);//->diffForHumans() для '15 минут назад'


        if(is_null($article)){
            abort(404);
        }
        return view('articles.show',compact('article','time'));
    }
     /*Метод для вывода формы для создания новости*/
    public function create()
    {
        $tags= \App\Tag::lists('name','id');
        return view('articles.create',compact('tags'));
    }

     /*Главный метод для создания новости*/
    public function store(Requests\ArticleRequest $request)
    {
        //Auth::user();
      
        $this->createArticle($request);
         /* Всплывающая подсказка при создании новости*/            
        \Session::flash('flash_message','Ваша новость была создана!');
       // Articles::create($request->all());

        return redirect('articles');
    }

     /*Метод для редактирования*/
    public function edit($id)
    {
        $article=Articles::findOrFail($id);
        $tags= \App\Tag::lists('name','id');
        return view('articles.edit',compact('article','tags'));
    }

     /*Метод для обновления при редактировании*/
    public function update($id,Requests\ArticleRequest $request)
    {
        $article=Articles::findOrFail($id);

        $article->update($request->all());
        
        $this->syncTags($article,$request->input('tag_list'));

        return redirect('articles');
    }
    
     public function delete($id)
    {
          $articles = Articles::find($id);

              $articles->delete();

              return redirect('articles');
    }
    
     /*Метод для синхронизации тегов при редактировании*/
    private function syncTags(Articles $article,array $tags)
    {
        $article->tags()->sync($tags);
    }
    
    /*Метод для создания новости*/
    private function createArticle(Requests\ArticleRequest $request)
    {
          $article = new Articles($request->all());
        
        Auth::user()->articles()->save($article);
        
         $this->syncTags($article,$request->input('tag_list'));
        
        return $article;
    }
    

}
