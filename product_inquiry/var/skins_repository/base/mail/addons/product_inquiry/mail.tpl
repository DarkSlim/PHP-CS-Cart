{* $Id: mail.tpl 9353 2010-05-04 06:10:09Z klerik $ *}
                                                   
{include file="letter_header.tpl"}

<p>
{$lang.first_name}: {$send_data.from_name}<br />
{$lang.email}: {$send_data.from_email}<br />
</p>

{$send_data.notes|nl2br}

{include file="letter_footer.tpl"}