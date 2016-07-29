<?php namespace App;

/**
 * Extend Laravel main application class to change public_path.
 *
 * See here for more info:
 * http://stackoverflow.com/questions/31758901/laravel-5-change-public-path
 */
class Application extends \Illuminate\Foundation\Application
{

    /**
     * Get the path to the public / web directory.
     *
     * @return string
     */
    public function publicPath()
    {
        return $this->basePath . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'public_html';
    }

}
