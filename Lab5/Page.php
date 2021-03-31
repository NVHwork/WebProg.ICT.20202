<?php

class Page
{
    private $page;
    private $title;
    private $site_name;
    private $theme_color;
    private $text_color;
    private $year;
    private $copyright;

    public function __construct(
        $site_name,
        $title,
        $year,
        $copyright,
        $theme_color,
        $text_color
    ) {
        $this->site_name = $site_name;
        $this->title = $title;
        $this->year = $year;
        $this->copyright = $copyright;
        $this->theme_color = $theme_color;
        $this->text_color = $text_color;
        $this->addHeader();
        $this->addTitle();
    }

    private function addHeader()
    {
        $this->page = "<div class='header'>
                            <p>" . $this->site_name . "</p>
                        </div>  <nav>
                        <ul class='navigation'>
                            <li><a href='' title=''>Nav Item 1</a></li>
                            <li><a href='' title=''>Nav Item 2</a></li>
                            <li><a href='' title=''>Nav Item 3</a></li>
                        </ul>
                    </nav>";
    }

    private function addTitle()
    {
        $this->page = $this->page . " <div class='main'>
        <div class='title'>
            <p>" . $this->title . "</p>
        </div>";
    }

    public function addContent($content)
    {
        $this->page = $this->page .  "<div class='paragraph'>
        <div class='content'>
            <h3>Paragraphs</h3>
            <p>" . $content . "
            </p>
        </div>
        </div> </div>";
    }

    private function addFooter()
    {
        $this->page = $this->page . "<footer><div>
        &copy" . $this->year . "  " . $this->copyright
            . "</div></footer>";
    }

    public function get()
    {
        $this->addFooter();
        return $this->page;
    }
}
