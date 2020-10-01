<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Departments;
use App\Models\Employees;

class EmployeeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetAllEmployees()
    {
        $response = $this->json('GET',  '/api/employees');

        $response
            ->assertStatus(200)
            ->assertJson([
                'data' => array(),
            ]);
    }
    public function testGetAllEmployeesByDepartments()
    {
        $response = $this->json('GET',  '/api/employees_by_department');

        $response
            ->assertStatus(200)
            ->assertJson([
                'data' => array(),
            ]);
    }

    public function testAddEmployee()
    {
        $department = Departments::first();
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $response = $this->json('POST',  '/api/employee' ,["emp_name"=> "Sonal",
                "email"=>substr(str_shuffle(str_repeat($pool, 8)), 0, 8)."@gmail.com",
                "contact"=>["phone"=>["2433244434","3532523535"]],
                "address"=>["addressline"=>["test 23456","test 654312"]],
                "job_profile"=>"Sr. Developer",
                "depId"=>$department->_id
                ] 
        );

        $response
            ->assertStatus(200)
            ->assertJson([
                'message' => 'Saved Successfully',
            ]);
    }

    public function testViewEmployee()
    {
        $emp = Employees::first();
        $response = $this->json('GET',  '/api/department/'.$emp->_id);

        $response
            ->assertStatus(200)
            ->assertJson([
                'data' => array(),
            ]);
    }

    public function testUpdateEmployee()
    {
        $department = Departments::first();
        $emp = Employees::first();
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $response = $this->json('PUT',  '/api/employee/'.$emp->_id ,["emp_name"=> "Sonal",
                "email"=>substr(str_shuffle(str_repeat($pool, 8)), 0, 8)."@gmail.com",
                "contact"=>["phone"=>["2433244434","3532523535"]],
                "address"=>["addressline"=>["test 23456","test 654312"]],
                "job_profile"=>"Sr. Developer",
                "depId"=>$department->_id
                ] 
        );

        $response
            ->assertStatus(200)
            ->assertJson([
                'message' => 'Updated Successfully',
            ]);
    }
}
