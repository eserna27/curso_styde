<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class UsersModuleTest extends TestCase
{
    use RefreshDatabase;

    /**    @test     */
    function it_loads_the_users_list_page()
    {
      factory(User::class)->create([
        'name' => "Emmanuel"
      ]);

      $this->get("/usuarios")
           ->assertStatus(200)
           ->assertSee("Listado de usuarios")
           ->assertSee("Emmanuel");
    }

    /**    @test     */
    function it_loads_message_if_the_users_list_empty()
    {
      $this->get("/usuarios")
           ->assertStatus(200)
           ->assertSee("No hay usuarios registrados");
    }

    /**    @test     */
    function it_loads_the_user_details_page(){
      $user = factory(User::class)->create([
        'name' => "Benito"
      ]);
      $this->get("/usuarios/{$user->id}")
           ->assertStatus(200)
           ->assertSee("Mostrando detalle del usuario: #{$user->id}")
           ->assertSee('Benito')
           ->assertSee($user->email);
    }

    /**    @test     */
    function it_not_loads_the_user_details_page(){
      $this->get("usuarios/id")
           ->assertStatus(404);
    }


    /**    @test     */
    function it_loads_the_new_user_page(){
      $this->get("usuarios/nuevo")
           ->assertStatus(200)
           ->assertSee("Crear nuevo usuario");
    }

    /**    @test     */
    function it_display_404_error_if_user_is_not_found(){
      $this->get("usuarios/1000")
           ->assertStatus(404)
           ->assertSee("Pagina no encontrada");
    }
}
