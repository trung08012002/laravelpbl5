<?php
namespace App\Repositories\CartFood;

use App\Repositories\RepositoryInterface;

interface ICartFoodRepository extends RepositoryInterface
{
    public function getCartFoodFromUser($id_user);
}
