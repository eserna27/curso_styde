<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
  /**    @test     */
  function it_welcomes_users_with_nickname(){
    $this->get("saludo/emmanuel/eserna")
         ->assertStatus(200)
         ->assertSee("Hola Emmanuel, su apodo: eserna");
  }

  function it_welcomes_users_without_nickname(){
    $this->get("saludo/emmanuel")
         ->assertStatus(200)
         ->assertSee("Hola Emmanuel");
  }
}
