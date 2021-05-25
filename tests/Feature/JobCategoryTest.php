<?php
/**
 *  tests/Feature/JobCategoryTest.php
 *
 * Date-Time: 24.05.21
 * Time: 13:40
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class JobCategoryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @return void
     */
    function test_createdCategory_success_categoryCreated(): void
    {
//        $this->withoutExceptionHandling();
        Sanctum::actingAs(User::factory()->create());
        $title = 'Engineering';


        $payload = [
            'title' => $title
        ];

        $headers = [
            'Accept' => 'application/json',
        ];

        $response = $this->post('/api/job-categories', $payload, $headers);

        $response->assertStatus(201);


        $response->assertJsonFragment([
            'status' => true,
            'message' => 'Job category created.',
            'data' => [
                'id' => 1,
                'title' => $title
            ]
        ]);

    }

    // fetch categories
}
