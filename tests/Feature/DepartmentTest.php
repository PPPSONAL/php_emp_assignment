<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Departments;

class DepartmentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetAllDepartment()
    {
        $response = $this->json('GET',  '/api/departments');

        $response
            ->assertStatus(200)
            ->assertJson([
                'data' => array(),
            ]);
    }

    public function testAddDepartment()
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $response = $this->json('POST',  '/api/department' ,["dep_name"=> substr(str_shuffle(str_repeat($pool, 16)), 0, 16)]);

        $response
            ->assertStatus(200)
            ->assertJson([
                'message' => 'Saved Successfully',
            ]);
    }

    public function testViewDepartment()
    {
        $department = Departments::first();
        $response = $this->json('GET',  '/api/department/'.$department->_id);

        $response
            ->assertStatus(200)
            ->assertJson([
                'data' => array(),
            ]);
    }

    public function testUpdateDepartment()
    {
        $department = Departments::first();
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $response = $this->json('PUT',  '/api/department/'.$department->_id, ["dep_name"=> substr(str_shuffle(str_repeat($pool, 16)), 0, 16)]);

        $response
            ->assertStatus(200)
            ->assertJson([
                'message' => 'Updated Successfully',
            ]);
    }
}
