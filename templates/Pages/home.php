<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->ContentBlock->text('website-title'); ?>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <div class="container text-center">
            <a href="https://github.com/ugie-cake" target="_blank" rel="noopener">
                <?= $this->ContentBlock->image('logo', ['style' => 'max-width: 350px; max-height: 200px']); ?>
            </a>
            <h1>
                <?= $this->ContentBlock->text('website-title'); ?>
            </h1>
            <?= $this->Html->link('Content Blocks', ['plugin' => 'ContentBlocks', 'controller' => 'ContentBlocks', 'action' => 'index']) ?>
            ::
            <?= $this->Html->link('Articles', ['controller' => 'articles', 'action' => 'index']) ?>
            ::
            <?= $this->Html->link('Tags', ['controller' => 'tags', 'action' => 'index']) ?>
            ::
            <?= $this->Html->link('Users', ['controller' => 'users', 'action' => 'index']) ?>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="column">
                        <?= $this->ContentBlock->html('home-content'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <?= $this->ContentBlock->text('copyright-message'); ?>
            </div>
            </div>
        </div>
    </main>
</body>
</html>
