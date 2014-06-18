drupal7_theme_menu_helper
=========================

Manual menu builder for themes in Drupal 7 (template.php)


Allows for a page.tpl.php file to receive a new render array for a custom menu.
In this case the example makes use of the existing drupal menu system to allow some extra customisation within the CMS. eg: adding the extra css class 'nc' to the menu item it is able to "filter out" children menu items for no display... to summerise just a little extra nice functionality so global menu changes dont have to affect all possible instances of the menu being displayed.