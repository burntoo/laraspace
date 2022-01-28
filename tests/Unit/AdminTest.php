<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function testUrlBasic()
    {
        $response = $this->get('/admin/dashboard/basic');

        $response->assertStatus(200);
    }

    public function testUrlEcommerce()
    {
        $response = $this->get('/admin/dashboard/ecommerce');

        $response->assertStatus(200);
    }

    public function testUrlFinance()
    {
        $response = $this->get('/admin/dashboard/finance');

        $response->assertStatus(200);
    }


    public function testUrlTodo()
    {
        $response = $this->get('/admin/todos');

        $response->assertStatus(200);
    }

    //SIDEBARS

    public function testUrlSideBar()
    {
        $response = $this->get('/admin/layouts/sidebar');

        $response->assertStatus(200);
    }


    public function testUrlIconSideBar()
    {
        $response = $this->get('/admin/layouts/icon-sidebar');

        $response->assertStatus(200);
    }

    public function testUrlHorizontalMenu()
    {
        $response = $this->get('/admin/layouts/horizontal-menu');

        $response->assertStatus(200);
    }

    //BASIC UI
    public function testUrlBasicUIButons()
    {
        $response = $this->get('/admin/basic-ui/buttons');

        $response->assertStatus(200);
    }

    public function testUrlBasicUICards()
    {
        $response = $this->get('/admin/basic-ui/cards');

        $response->assertStatus(200);
    }

    public function testUrlBasicUITabs()
    {
        $response = $this->get('/admin/basic-ui/tabs');

        $response->assertStatus(200);
    }

    public function testUrlBasicUITopography()
    {
        $response = $this->get('/admin/basic-ui/typography');

        $response->assertStatus(200);
    }

    public function testUrlBasicUITables()
    {
        $response = $this->get('/admin/basic-ui/tables');

        $response->assertStatus(200);
    }

    public function testUrlBasicUIModals()
    {
        $response = $this->get('/admin/basic-ui/modals');

        $response->assertStatus(200);
    }

    //COMPONENTS

    public function testUrlBasicUIdatatables()
    {
        $response = $this->get('/admin/components/datatables');

        $response->assertStatus(200);
    }

    //SETTING TESTS

    public function testUrlSocialSetting()
    {
        $response = $this->get('/admin/settings/social');

        $response->assertStatus(200);
    }

    public function testSocialPost(){

        $response = $this->post("admin/settings/social", [
            '_token' => '',
            'facebook' => 'https://facebook.com',
            'google' => 'https://google.com',
            'twitter' => 'https://twitter.com'
        ]);

        $response->assertStatus(200);
    }

    public function testUrlMailSetting()
    {
        $response = $this->get('/admin/settings/mail');

        $response->assertStatus(200);
    }

    public function testUrlMailSettingPost(){

        $response = $this->post("/admin/settings/mail", [
            '_token' => '',
            'mail_mailgun_host' => 'localhost',
            'mail_mailgun_domain' => '127.0.0.1',
            'mail_mailgun_secret' => 'test123',
            'mail_from_name' => 'joe',
            'mail_from_email' => 'test@test.com',
            'mailer' => 'test123'
        ]);

        $response->assertStatus(200);
    }

    public function testMailPost(){

        $response = $this->post("admin/settings/mail/send-test-email", [
            '_token' => '',
            'to' => 'localhost',
            'subject' => '127.0.0.1',
            'message' => 'test123'
        ]);

        $response->assertStatus(200);
    }
}
