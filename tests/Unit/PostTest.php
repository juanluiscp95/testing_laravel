<?php

namespace Tests\Unit;

use App\Post;
//use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * @group formatted-date
     * @return [type][description]
     */
    public function testCanGetCreatedAtFormattedDate(){
        //arrange
        $post=factory(Post::class)->create();
        //create a post
        //action
        //get the value by calling the method
        $formattedDate=$post->createdAt();
        //assert
        //assert that returned value is as we expected
        $this->assertEquals(
            $post->created_at->toFormattedDateString(),$formattedDate
        );
    }
}
