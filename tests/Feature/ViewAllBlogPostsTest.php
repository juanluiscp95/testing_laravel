<?php

namespace Tests\Feature;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class ViewAllBlogPostsTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @group posts
     * @return [type][description]
     */

    public function testCanViewAllBlogPosts(){
        //arrange
        $post1=factory(Post::class)->create();
        $post2=factory(Post::class)->create();
        //action
        $resp = $this->get('/posts');
        //assert
        //assert status code 200
        $resp->assertStatus(200);
        $resp->assertSee($post1->title);
        $resp->assertSee($post2->title);
        $resp->assertSee(str_limit($post1->body));
        $resp->assertSee(str_limit($post2->body));
    } 
}
