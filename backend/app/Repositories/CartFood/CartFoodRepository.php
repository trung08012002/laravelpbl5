<?php
namespace App\Repositories\CartFood;

use App\Models\CartFood;
use App\Repositories\Cart\CartRepository;
use App\Repositories\BaseRepository;
use App\Repositories\Cart\ICartRepository;
class CartFoodRepository extends BaseRepository implements ICartFoodRepository
{
    private CartRepository $cartRepo;
    public function __construct(ICartRepository $repo)
    {
        $this->setModel();
        $cartRepo=$repo;
    }
    //lấy model tương ứng
    public function getModel()
    {
        return CartFood::class;
    }
    public function getCartFoodFromUser($id_user)
    {

    }
}
