<?php

namespace Tests\Feature;

use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoleTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * Tests for Role Model.
     */
    public function test_if_a_role_has_many_users(): void
    {
        $role = Role::factory()->create();
        $users = User::factory()->create(['role_id' => $role->id]); 
   
        $this->assertEquals(1, $role->users->count());
    }
}
