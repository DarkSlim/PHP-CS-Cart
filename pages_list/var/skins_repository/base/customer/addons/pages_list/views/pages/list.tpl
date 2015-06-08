{* $Id: view.tpl 9655 2010-05-28 09:17:48Z lexa $ *}
{if $pages}
{include file="common_templates/pagination.tpl" save_current_page=true save_current_url=true}

{foreach from=$pages item="page" name="view_all_pages"}

	<div class="clear product-main-info">
                <div class="float-left product-item-image center">
                    <a href="{"pages.view&page_id=`$page.page_id`"|fn_url}">{include file="common_templates/image.tpl" images=$page.main_pair object_type="common"}</a>
                </div>

                <div class="product-info">
                    <a class="product-title" href="{"pages.view&page_id=`$page.page_id`"|fn_url}">{$page.page}</a>		
                    <div class="product-descr">{$page.short_description|unescape}</div>
                </div>
	</div>
	<hr />
{/foreach}

{capture name="mainbox_title"}{$pages_list_title|default:$lang.pages_list}{/capture}
{include file="common_templates/pagination.tpl"}
{/if}