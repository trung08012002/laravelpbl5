<?php

namespace App\Http\Controllers;

use App\Http\Resources\CustomCollection;
use App\Http\Resources\Resources\CartCollection;
use App\Models\Cart;

use App\Repositories\Cart\ICartRepository;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $cartRepo;
    public function __construct(ICartRepository $repo){
      $this->cartRepo=$repo;
    }

    public function index()
    {
        $carts=$this->cartRepo->getAll();
        if($carts)
        {
            return new CustomCollection($carts);
        }

        return response()->json([
            'status'=>404,
            'message'=>"Empty Cart!"
          ],404);
    }

    public function store(Request $request)
    {

    }


    public function show(Cart $cart)
    {
        //
    }


    public function edit(Cart $cart)
    {
        //
    }


    public function update(Request $request, Cart $cart)
    {
        //
    }


    public function destroy(Cart $cart)
    {
        //
    }
}
