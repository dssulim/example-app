<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_show_news_create_form()
    {
        $response = $this->get(route('admin.news.create'));

        $response->assertStatus(200);
    }

    public function test_show_single_news(){
        $response = $this->get(route('news.show', ['id' => mt_rand(1, 5) . mt_rand(1, 4)]));
        $response->assertStatus(200);
    }

    public function test_show_news_as_not_found(){
        $response = $this->get(route('news.show', ['id' => mt_rand(70, 165)]));
        $response->assertStatus(404);
    }

    /** Домашка. Тесты на проверку маршрутов */

    public function test_show_feedback_form()
    {
        $response = $this->get(route('news.feedback.index'));

        $response->assertStatus(200);
    }

    public function test_show_auth_form(){
        $response = $this->get(route('authorization'));
        $response->assertStatus(200);
    }

    public function test_show_categories_list(){
        $response = $this->get(route('news.categoryList'));
        $response->assertStatus(200);
    }

    public function test_show_news_at_concrete_category(){
        $response = $this->get(route('news.fromCategory', ['CategoryId' => rand(1, 4)]));
        $response->assertStatus(200);
    }

    /** Домашка. Тесты для разнообразия */

    public function test_view_feedback_has_variable_of_feedbackdata(){
        $view = $this->withViewErrors(['name'=>'errors'])->view('/news/feedback', ['feedbackList' => ['user1'=>'feedback1']]);
        $view->assertSee('feedback1');
    }

    public function test_feedback_has_header_location(){
        $request = $this->post('/news/feedback');
        $request->assertHeader('Location', 'http://localhost');
    }

    public function test_valid_input_on_required(){
        $response = $this->post('/news/feedback');
        $response->assertInvalid(['username' => 'The username field is required', 'description' => 'The description field is required']);
    }

    public function test_feedback_location_code_302(){
        $response = $this->post('/news/feedback');
        $response->assertStatus(302);
    }


}
