<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SocialEngagementTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_create_social_engagements(): void
    {
        $user = User::factory()->create([
            'is_admin' => true,
        ]);

        $response = $this
            ->actingAs($user)
            ->get('/admin/social-engagements');

        $response->assertOk();
        $response->assertSee('Social Engagements');

        $createResponse = $this
            ->actingAs($user)
            ->post('/admin/social-engagements', [
                'name' => 'LinkedIn',
                'link' => 'https://linkedin.com/in/example',
                'icon_class' => 'fab fa-linkedin-in',
                'sort_order' => 1,
            ]);

        $createResponse->assertRedirect('/admin/social-engagements');

        $this->assertDatabaseHas('social_engagements', [
            'user_id' => $user->id,
            'name' => 'LinkedIn',
            'link' => 'https://linkedin.com/in/example',
            'icon_class' => 'fab fa-linkedin-in',
            'sort_order' => 1,
        ]);
    }
}
