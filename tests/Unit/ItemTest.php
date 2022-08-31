<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Item;

class ItemTest extends TestCase
{

    /**
     * Test for creating a new item
     *
     * @return void
     */
    public function test_create_new_item()
    {
        $response = $this->post('api/store-item', [
            'item_name'        => 'Think like a man',
            'item_type_id'     => '1',
            'description'      => 'A book by Steve Harvey'
        ]);

        $response->assertStatus(201)->assertJson(['status' => 'success']);
    }

    /**
     * Test for required item name
     *
     * @return void
     */
    public function test_item_name_is_required()
    {
        $response = $this->post('api/store-item', [
            'item_name'        => '',
            'item_type_id'     => '1',
            'description'      => 'A book by Steve Harvey'
        ]);

        $response->assertSessionHasErrors('item_name');
    }

    /**
     * Test for required item type
     *
     * @return void
     */
    public function test_item_type_id_is_required()
    {
        $response = $this->post('api/store-item', [
            'item_name'        => 'Stay alive all your life',
            'item_type_id'     => '',
            'description'      => 'A book by Norman Vincent Peale'
        ]);

        $response->assertSessionHasErrors('item_type_id');
    }

    /**
     * Test for updating a new item
     *
     * @return void
     */
    public function test_item_can_be_updated()
    {
        $response = $this->patch('api/update-item/23', [
            'item_name'        => 'Stay alive all your life',
            'item_type_id'     => '1',
            'description'      => 'A book by Norman Vincent Peale'
        ]);

        $response->assertStatus(201)->assertJson(['status' => 'success']);
    }

    /**
     * Test for creating a new item
     *
     * @return void
     */
    public function test_item_can_be_deleted()
    {
        $response = $this->delete('api/delete-item/40');

        $response->assertStatus(200)->assertJson(['status' => 'success']);
    }
}
