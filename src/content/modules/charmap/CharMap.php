<?php

class CharMap extends Controller
{

    private $moduleName = "charmap";

    public function getSettingsHeadline()
    {
        return get_translation("charmap");
    }

    public function getSettingsLinkText()
    {
        return get_translation("open");
    }

    public function settings()
    {
        return Template::executeModuleTemplate($this->moduleName, "charmap.php");
    }

    public function render()
    {
        return $this->settings();
    }

    public function head()
    {
        ViewBag::set("contains_charmap", containsModule(null, "charmap"));
        echo Template::executeModuleTemplate($this->moduleName, "head.php");
    }

    public function adminHead()
    {
        ViewBag::set("contains_charmap", true);
        echo Template::executeModuleTemplate($this->moduleName, "head.php");
    }
}