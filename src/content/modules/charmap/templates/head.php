<?php
if (ViewBag::get("contains_charmap")) {
    ?>
<link rel="stylesheet"
	href="<?php echo ModuleHelper::buildModuleRessourcePath("charmap", "css/charmap.css");?>"
	type="text/css" />
<?php
}