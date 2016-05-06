<?php

namespace Roots\Sage;

/**
 * @return string The full path to the main template file.
 */
function template_path()
{
  return Wrapper::$main_template;
}

/**
 * @return Wrapper A new instance of Wrapper for the sidebar context.
 */
function sidebar_path()
{
  return new Wrapper('templates/sidebar.php');
}
