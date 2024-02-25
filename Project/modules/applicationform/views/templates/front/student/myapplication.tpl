{block name='page_content'}
    <h2>My test page content</h2>
    {$student_email}
    {foreach from=$applications item=item}
        <p>{$item.application_date}</p>
        <p>{$item.id_application}</p>
        <p>{$item.teacher_status}</p>
        <p>{$item.status}</p>
    {/foreach}
{/block}


<form method="post">
    <button type="submit" name="goback" class="btn-default pull-right">
        <i class="process-icon-save"></i>
        {l s="Back" mod="applicationform"}
    </button>
</form>