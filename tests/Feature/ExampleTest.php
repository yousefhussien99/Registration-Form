<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use function PHPUnit\Framework\assertJson;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    use WithoutMiddleware;
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_Correct_Registration(): void
    {
        $response = $this->get('/index');
        
        $response=$this->Post('/adduser',[
            'username' => 'John',
            'email' => 'john@example.com',
            'password' => 'password123',
            'name' => 'John',
            'phone' => '01019271286',
            'address' => 'Giza, Egypt',
            'birthday' => '2003-08-16',
            'image' => UploadedFile::fake()->image('avatar.jpg'), // Simulate an uploaded image
        ]);

        $response->assertStatus(200)->assertJson(['message' => 'User created successfully']);

        $response->assertStatus(200);
    }

    public function test_Exist_Registration(): void
    {
        $response = $this->get('/index');
        
        $response=$this->Post('/adduser',[
            'username' => 'EsraaMahmoud',
            'email' => 'john@example.com',
            'password' => 'password123',
            'name' => 'John',
            'phone' => '01019271286',
            'address' => 'Giza, Egypt',
            'birthday' => '2003-08-16',
            'image' => UploadedFile::fake()->image('avatar.jpg'), // Simulate an uploaded image
        ]);

        $response->assertStatus(200)->assertJson(['message' => 'Username already exists']);

        $response->assertStatus(200);
    }

    public function test_Invalid_File_Registration(): void
    {
        $response = $this->get('/index');
        
        $response=$this->Post('/adduser',[
            'username' => 'John',
            'email' => 'john@example.com',
            'password' => 'password123',
            'name' => 'John',
            'phone' => '01019271286',
            'address' => 'Giza, Egypt',
            'birthday' => '2003-08-16',
            'image' => UploadedFile::fake()->image('avatar.pdf'), // Simulate an uploaded image
        ]);
        // $data=$response->json();
        // dd($data);

        $response->assertStatus(200)->assertJson(['message' => 'Invalid file format']);

        $response->assertStatus(200);
    }

}
