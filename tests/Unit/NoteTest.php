<?php

namespace Tests\Unit;

use Mockery;
use Tests\TestCase;
use App\Models\Role;
use App\Models\User;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class NoteTest extends TestCase
{
    // use DatabaseMigrations;
    public function test_mostrar_form_notas_a_personal_atc()
    {                
        $user = User::factory()->create();
        $user->role_id = 3;
        $user->department_id = 1;

        $request = new Request();

        $response = $this->actingAs($user)->get('/notes/create');
    
        $response->assertStatus(200);

        $response->assertViewIs('notes.create');

        $response->assertViewHas('departments');
    }

    public function test_mostrar_form_notas_a_otro_personal()
    {                
        $user = User::factory()->create();

        $request = new Request();

        $response = $this->actingAs($user)->get('/notes/create');
    
        $response->assertSee("403");
    }
    public function test_guardar_notas(): void
    {
        $user = User::factory()->create();
        $user->role_id = 3;
        $user->department_id = 1;

        $note = [
            'department_id' => 1,
            'description' => 'This is a note.',
            'customer_name' => 'John Doe',
            'customer_company' => 'Acme Corporation',
            'customer_phone' => '(123) 456-7890',
        ];

        $request = new Request();
        $request->merge($note);
        $data = $request->toArray();

        $response = $this->actingAs($user)->post('/notes', $data);        

        $this->assertDatabaseHas('notes', $note);
    }

    public function test_mostrar_form_actualizar()
    {
        $user = User::factory()->create(
            [
            'role_id' => 1,
            'department_id' => 1,
            ]
        );

        $this->actingAs($user);

        $response = $this->call('GET', '/notes/1');

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function test_no_mostrar_form_actualizar_otros_departamentos()
    {
        $user = User::factory()->create(
            [
            'role_id' => 1,
            'department_id' => 2,
            ]
        );

        $this->actingAs($user);

        $response = $this->call('GET', '/notes/1');

        $this->assertEquals(403, $response->getStatusCode());
    }
}
