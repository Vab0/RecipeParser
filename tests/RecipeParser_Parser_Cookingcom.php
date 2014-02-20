<?php

require_once "../bootstrap.php";

class RecipeParser_Parser_Cookingcom_Test extends PHPUnit_Framework_TestCase {

    public function test_big_oatmeal_raisin_chews_recipe_5114_aspx() {

        $path = "data/cooking_com_big_oatmeal_raisin_chews_at_cooking_curl.html";
        $url  = "http://www.cooking.com/recipes-and-more/recipes/big-oatmeal-raisin-chews-recipe-5114.aspx";

        $recipe = RecipeParser::parse(file_get_contents($path), $url);
        if (isset($_SERVER['VERBOSE'])) print_r($recipe);

        $this->assertEquals('Big Oatmeal Raisin Chews', $recipe->title);

        $this->assertEquals(15, $recipe->time['prep']);
        $this->assertEquals(20, $recipe->time['cook']);
        $this->assertEquals(35, $recipe->time['total']);
        $this->assertEquals('18 cookies (1 serving size = 1 cookie)', $recipe->yield);

        $this->assertEquals(1, count($recipe->ingredients));
        $this->assertEquals('', $recipe->ingredients[0]['name']);
        $this->assertEquals(12, count($recipe->ingredients[0]['list']));

        $this->assertEquals(1, count($recipe->instructions));
        $this->assertEquals('', $recipe->instructions[0]['name']);
        $this->assertEquals(4, count($recipe->instructions[0]['list']));

        $this->assertEquals('http://iweb.cooking.com/images/Recipe/Recipe/detail/RE_Sarah15v.jpg',
                            $recipe->photo_url);

    }

    public function test_raisin_cinnamon_apple_bread_recipe_355_aspx() {

        $path = "data/cooking_com_raisin_cinnamon_apple_bread_at_cooking_curl.html";
        $url  = "http://www.cooking.com/recipes-and-more/recipes/raisin-cinnamon-apple-bread-recipe-355.aspx";

        $recipe = RecipeParser::parse(file_get_contents($path), $url);
        if (isset($_SERVER['VERBOSE'])) print_r($recipe);

        $this->assertEquals('Raisin-Cinnamon Apple Bread', $recipe->title);

        $this->assertEquals(5, $recipe->time['prep']);
        $this->assertEquals(70, $recipe->time['cook']);
        $this->assertEquals(75, $recipe->time['total']);
        $this->assertEquals('1 loaf (18 servings)', $recipe->yield);

        $this->assertEquals(1, count($recipe->ingredients));
        $this->assertEquals('', $recipe->ingredients[0]['name']);
        $this->assertEquals(11, count($recipe->ingredients[0]['list']));

        $this->assertEquals(1, count($recipe->instructions));
        $this->assertEquals('', $recipe->instructions[0]['name']);
        $this->assertEquals(2, count($recipe->instructions[0]['list']));

        $this->assertRegExp('/^Make this moist/', $recipe->description);

        $this->assertEquals('http://iweb.cooking.com/images/Recipe/Recipe/detail/RE_355stock.jpg',
                            $recipe->photo_url);

    }

    public function test_wild_maine_blueberry_cobbler_recipe_2278_aspx() {

        $path = "data/cooking_com_wild_maine_blueberry_cobbler_at_cooking_curl.html";
        $url  = "http://www.cooking.com/recipes-and-more/recipes/wild-maine-blueberry-cobbler-recipe-2278.aspx";

        $recipe = RecipeParser::parse(file_get_contents($path), $url);
        if (isset($_SERVER['VERBOSE'])) print_r($recipe);

        $this->assertEquals('Wild Maine Blueberry Cobbler', $recipe->title);

        $this->assertEquals(46, $recipe->time['prep']);
        $this->assertEquals(0, $recipe->time['cook']);
        $this->assertEquals(0, $recipe->time['total']);
        $this->assertEquals('6 servings', $recipe->yield);

        $this->assertEquals(1, count($recipe->ingredients));
        $this->assertEquals('', $recipe->ingredients[0]['name']);
        $this->assertEquals(11, count($recipe->ingredients[0]['list']));

        $this->assertEquals(1, count($recipe->instructions));
        $this->assertEquals('', $recipe->instructions[0]['name']);
        $this->assertEquals(5, count($recipe->instructions[0]['list']));

        $this->assertEquals('http://iweb.cooking.com/images/Recipe/Recipe/detail/RE_2278stock.jpg',
                            $recipe->photo_url);

    }

}