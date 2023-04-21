<?php

namespace Tests\Unit\Food;

use App\Models\Food;
use App\Repositories\Food\FoodRepository;
use Tests\TestCase;
use Database\Factories\FoodFactory;
class FoodRepositoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
   /** @test */
    // public function test_create()
    // {
    //     $repo=$this->app->make(FoodRepository::class);
    //     $payload=[
    //         'type'=>'fast food',
    //         'first_price'=>20000,
    //         'last_price'=>12000,
    //         'name'=>'pho',
    //         'id_shop'=>1,
    //     ];
    //     $result=$repo->create($payload);
    //     $this->assertSame($payload['name'],$result->name,'Food created does not have same name');
    // }
    // public function test_getall(){
    //     $repo=$this->app->make(FoodRepository::class);
    //     $result=$repo->getAll();
    //     $this->
    // }



    /** @test */
    public function test_update()
    {
        $repo=$this->app->make(FoodRepository::class);
        $payload=[
            'type'=>'fast food',
            'first_price'=>20000,
            'last_price'=>12000,
            'name'=>'pho',
            'id_shop'=>1,
        ];
        $result=$repo->create($payload);
        $payloadupdate=[
            'name'=>'ga',
        ];
        $updated=$repo->update($result->food_id,$payloadupdate);
        $this->assertSame($payloadupdate['name'],$updated->name,'Food updated not have same name');
    }

    // public function test_delete()
    // {
    //     $repo=$this->app->make(FoodRepository::class);
    //     $payload=[

    //         'type'=>'fast food',
    //         'fisrt_price'=>20000,
    //         'last_price'=>12000,
    //         'name'=>'pho',
    //         'id_shop'=>1,
    //     ];
    //     $result=$repo->create($payload);
    //     $deleted=$repo->delete($result->food_id);

    //     $found=Food::query()->find($result[
    //         'food_id']);

    //     $this->assertSame(null,$found,'Food is not deleted');
    // }
}
