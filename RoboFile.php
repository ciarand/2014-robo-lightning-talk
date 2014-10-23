<?php

class RoboFile extends \Robo\Tasks
{
    /**
     * @desc Generates the pres from pres.md
     */
    public function gen()
    {
        $text = file_get_contents(__DIR__ . "/pres.md");

        $replaced = str_replace("::RoboFile.php::", file_get_contents(__FILE__), $text);

        $html = $this->renderTemplate(["slides" => explode("\n---\n", $replaced)]);

        $this->taskWriteToFile("index.html")->text($html)->run();
    }

    public function serve()
    {
        $this->taskServer(8000)->dir(__DIR__)->run();
    }

    public function watch()
    {
        $this->taskServer(8000)->dir(__DIR__)->background()->run();

        $this->taskWatch()->monitor(["pres.md", "template.php"], function() {
            $this->gen();
        })->run();
    }

    private function renderTemplate(array $data)
    {
        extract($data);

        ob_start();

        include __DIR__ . "/template.php";

        return ob_get_clean();
    }
}
