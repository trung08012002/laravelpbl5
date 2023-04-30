<?php

namespace Tests\Unit;


use App\Repositories\Cart\CartRepository;
use Tests\TestCase;
class CartRepositoryTest extends TestCase
{
    public function test_example()
    {
        $repo=$this->app->make(CartRepository::class);

        $id=$repo->getIdCartFromIdUser(2);

        $this->assertSame(2,$id,'cart created does not have same name');
    }
}
