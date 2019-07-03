<?php

namespace Tests\Unit;

use App\genrebook;
use App\Livre;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class livrestest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */


    public function testInsertingIntoDB()
    {

        $livre = factory(Livre::class)->create();


        $this->assertDatabaseHas($livre->getTable(), $livre->toArray());
    }

    public function testUpdatingInDB()
    {
        // Создаём объект в ОЗУ и кортеж в БД.
        $old_livre = factory(Livre::class)->create();
        // Создаём ещё один объект, но только в ОЗУ.
        $new_livre = factory(Livre::class)->make();
        // Обновляем кортеж данными из второго объекта.
        $old_livre->update($new_livre->toArray());
        // Проверяем, обновлён ли кортеж.
        $this->assertDatabaseHas(
            $old_livre->getTable(),
            $old_livre->toArray()
        );
    }

    public function testDeletingFromDB()
    {
        // Создаём объект в ОЗУ и кортеж в БД.
        $livre = factory(Livre::class)->create();
        // Удаляем кортеж.
        $livre->delete();
        // Проверяем, удалён ли кортеж.
        $this->assertDatabaseMissing($livre->getTable(), $livre->toArray());
    }
}
