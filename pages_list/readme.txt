HOW TO INSTALL:
1. Copy the entire content of the arhive to the cs-cart directory
2. In the add-ons list click the install "Pages list" addon
3. Configure the addon, select the parent page id which child pages will be displayed in the list, leave it empty if you want all pages to be displayed.
4. On the page configaration section go to Add-ons tab and add a short description for the page.
5. After the page is saved you will be able to add an icon to it at the Add-ons tab either.
6. Create new link "Pages" in the top menu (Design -> Top menu) with the following URL: index.php?dispatch=pages.list
7. Clear cache using "&cc" parameter in the admin area


FAQ:
"What is this addon for?"
- This addon allows you to display the list of the pages with thumbnails in the storefront.

"Does it use pagination? How can I set the number of items per page?"
- Yes it uses pagination. You can define the number of elements per page in the appereance settings (Settings -> Appereance) by modifying the "Elements per page" parameter

"What does "Parent page id" parameter means?"
- This is the parent page id. It's name will be displayed as a header in the pages list. Only the pages that has this page as a parent will be inlucded to the list.

"I can not add an icon for the page"
- Make sure you are browsing already created page and not a new one. You can not add an icon for the page if this page is not created yet.
