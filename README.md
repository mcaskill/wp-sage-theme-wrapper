# Sage Theme Wrapper for WordPress

Standalone version of the [Sage Theme Wrapper](https://roots.io/sage/docs/theme-wrapper/) for themes.

## Installation

Require this package, with [Composer](https://getcomposer.org), in the root directory of your project.

```
$ composer require mcaskill/sage-theme-wrapper
```

## Usage

1. Add [`base.php`](base-sample.php) to your theme's directory.
2. Add the following filter to your theme's `functions.php`:

  Example #1:

  ```php
  <?php

  add_filter('template_include', [ '\\Roots\\Sage\\Wrapper', 'wrap'], 109);
  ```

  Example #2:

  ```php
  <?php

  use Roots\Sage\Wrapper as W;

  add_filter('template_include', function ($main) {
      // Check for other filters returning null
      if (!is_string($main)) {
          return $main;
      }

      W::$main_template = $main;
      W::$base = basename(W::$main_template, '.php');

      if (W::$base === 'index') {
          W::$base = false;
      }

      return new W('layouts/base.php');
  }, 109);
  ```

## Credits

All credits & copyrights belongs to people behind [Sage](https://github.com/roots/sage).
