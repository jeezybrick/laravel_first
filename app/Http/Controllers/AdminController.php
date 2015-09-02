<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Order;
use App\Articles;
use App\Customer;
use Illuminate\Http\Request;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //$customers = Customer::has('orders')->get();
		$users = User::all();
        $orders = Order::all();
        $articles = Articles::all();
		return view('admin.index',compact('users','orders','articles'));
	}
    
        public function show($id)
    {

        $users=User::find($id);
            
        $userArticles = $users->articles()->get();
       //  dd($userArticles);
        //dd($article->published_at);//->diffForHumans() для '15 минут назад'


        if(is_null($users)){
            abort(404);
        }
        return view('admin.show',compact('users','userArticles'));
    }
    
      public function editUser($id){
        
        $users = User::findOrFail($id);
        return view('admin.edit', compact('users'));
        
    }
    
        public function updateUser($id,Request $request){
        
        $users = User::findOrFail($id);
        $users->update($request->all());
        return redirect('admin');
        
    }
    
              public function deleteUser($id)
	{
      
              $user = User::find($id);

              $user->delete();

              return redirect('admin');
              /*DB::delete('delete from users where id=?', [$id]);*/
	}

    public function deleteOrder($id)
    {
        $order = Order::find($id);

        $order->delete();

        return redirect('admin');
    }



}
