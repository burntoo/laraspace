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

    public function testUrlComponentDatatables()
    {
        $response = $this->get('/admin/components/datatables');

        $response->assertStatus(200);
    }

    public function testUrlComponentNotifications()
    {
        $response = $this->get('/admin/components/notifications');

        $response->assertStatus(200);
    }

    public function testUrlComponentNestedList()
    {
        $response = $this->get('/admin/components/nestable-list');

        $response->assertStatus(200);
    }

    public function testUrlComponentTree()
    {
        $response = $this->get('/admin/components/nestable-tree');

        $response->assertStatus(200);
    }

    public function testUrlComponentCopper()
    {
        $response = $this->get('/admin/components/image-cropper');

        $response->assertStatus(200);
    }

    public function testUrlComponentZoom()
    {
        $response = $this->get('/admin/components/zoom');

        $response->assertStatus(200);
    }

    public function testUrlComponentCalender()
    {
        $response = $this->get('/admin/components/calendar');

        $response->assertStatus(200);
    }


    public function testUrlComponentRatingStar()
    {
        $response = $this->get('/admin/components/ratings/star');

        $response->assertStatus(200);
    }


    public function testUrlComponentBarRating()
    {
        $response = $this->get('/admin/components/ratings/bar');

        $response->assertStatus(200);
    }

    public function testUrlComponentContact()
    {
        $response = $this->get('/admin/components/contacts');

        $response->assertStatus(200);
    }

    //CHARTS


    public function testUrlChartJs()
    {
        $response = $this->get('/admin/charts/chartjs');

        $response->assertStatus(200);
    }

    public function testUrlSparklines()
    {
        $response = $this->get('/admin/charts/sparklines');

        $response->assertStatus(200);
    }


    public function testUrlAmCharts()
    {
        $response = $this->get('/admin/charts/amcharts');

        $response->assertStatus(200);
    }


    public function testUrlMorris()
    {
        $response = $this->get('/admin/charts/morris');

        $response->assertStatus(200);
    }

    public function testUrlGauges()
    {
        $response = $this->get('/admin/charts/gauges');

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
