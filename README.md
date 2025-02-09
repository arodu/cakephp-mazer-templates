# Mazer templates plugin for CakePHP

> [!WARNING]  
> This plugin is under development and not ready for production. 

## Table of contents

- [Mazer templates plugin for CakePHP](#mazer-templates-plugin-for-cakephp)
  - [Table of contents](#table-of-contents)
  - [Dependencies](#dependencies)
  - [Installation](#installation)
  - [Configuration](#configuration)
  - [Add config on AppView.php](#add-config-on-appviewphp)

## Dependencies

- [Mazer Dashboard 2.x](http://zuramai.github.io/mazer), free Bootstrap 5 Admin Dashboard Template.
- [Bootstrap 5](https://getbootstrap.com/docs/5.0/getting-started/introduction/), the world’s most popular front-end open source toolkit.
- [FriendsOfCake/bootstrap-ui](https://github.com/FriendsOfCake/bootstrap-ui), Transparently use Bootstrap 5 with CakePHP 5.


## Installation

You can install this plugin into your CakePHP application using [composer](https://getcomposer.org).

The recommended way to install composer packages is:

```bash
composer require arodu/cakephp-mazer
```

## Configuration

You can load the plugin using the shell command:

```bash
bin/cake plugin load Mazer
```


## Add config on AppView.php

```php
<?php
declare(strict_types=1);
namespace App\View;

use Cake\View\View;
use Mazer\View\MazerViewTrait;

class AppView extends View
{
    use MazerViewTrait;

    protected string $layout = 'Mazer.default';

    public function initialize(): void
    {
        parent::initialize();
        $this->initializeMazer();
    }
}
```

---
[© 2025 arodu](https://github.com/arodu) 
