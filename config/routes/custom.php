<?php
/**
 * Add routes to the router, processed in the same order they are added.
 * The variabel $app relates to $this.
 */

// Support theme selector by adding class to html element
if ($app->session->has("theme")) {
    $app->theme->appendToVariable("htmlClass", $app->session->get("theme"));
}



/**
 * Add your own custom route
 */
$app->router->add("theme-selector", function () use ($app) {
    $app->theme->setTitle("Set theme");
    $app->views->add("theme-selector/index");
});
