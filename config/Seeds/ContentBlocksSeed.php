<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * ContentBlocks seed.
 */
class ContentBlocksSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'id' => '17d2ef73-b3de-418b-b06f-0e323c1547bb',
                'parent' => 'global',
                'display_name' => 'Website Title',
                'description' => 'Shown on the home page, as well as any tabs in the users browser.',
                'hint' => 'website-title',
                'content_type' => 'text',
                'content_value' => 'ugie-cake/cakephp-content-blocks-example-app',
                'previous_value' => NULL,
                'modified' => '2023-04-12 00:02:53',
            ],
            [
                'id' => 'b37f5dc4-c821-418d-84a7-e367a037343e',
                'parent' => 'global',
                'display_name' => 'Logo',
                'description' => 'Shown in the centre of the home page, and also in the top corner of all administration pages.',
                'hint' => 'logo',
                'content_type' => 'image',
                'content_value' => '',
                'previous_value' => '',
                'modified' => '2023-04-12 00:11:02',
            ],
            [
                'id' => '94556b1f-3f14-4322-a90a-15dbba4df61b',
                'parent' => 'home',
                'display_name' => 'Home Page Content',
                'description' => 'The main content shown in the centre of the home page.',
                'hint' => 'home-content',
                'content_type' => 'html',
                'content_value' => 'Example app showcasing the <code>ugie-cake/cakephp-content-blocks</code> plugin.',
                'previous_value' => NULL,
                'modified' => '2023-04-12 00:30:18',
            ],
            [
                'id' => '80bcdb95-d31c-4615-b4c7-c9e7c1d8ca16',
                'parent' => 'home',
                'display_name' => 'Copyright Message',
                'description' => 'Copyright information shown at the bottom of the home page.',
                'hint' => 'copyright-message',
                'content_type' => 'text',
                'content_value' => '(c) Copyright 2023, enter copyright owner here.',
                'previous_value' => NULL,
                'modified' => '2023-04-12 00:04:45',
            ],
        ];

        $table = $this->table('content_blocks');
        $table->insert($data)->save();
    }
}
