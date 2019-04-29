<?php

use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            [
                'for' => 'personName',
                'content' => 'personName',
                'active' => '1',
            ],
            [
                'for' => 'personMail',
                'content' => 'personMail',
                'active' => '1',
            ],
            [
                'for' => 'personAbout',
                'content' => 'Text about person',
                'active' => '1',
            ],
            [
                'for' => 'personGithub',
                'content' => 'personGithubLink',
                'active' => '0',
            ],
            [
                'for' => 'personStack',
                'content' => 'personStackoverflowLink',
                'active' => '0',
            ],
            [
                'for' => 'personFacebook',
                'content' => 'personFacebookLink',
                'active' => '0',
            ],
        ]);
    }
}
