<form mothod="POST">
    <button type="submit" name="getlogout" class="btn-default pull-right">
        <i class="process-icon-save"></i>
        {l s="Logout" mod="applicationform"}
    </button>
</form>

{block name='page_content'}
    <h2>{$teacher_email}</h2>
    {$student_email}
    {foreach from=$applications item=item}
        <p>{$item.id_application}</p>
        <p>{$item.student_email}</p>
        <p>{$item.application_date}</p>
        <p>{$item.teacher_status}</p>
        <form method="post">
            <input type="hidden" id="id" name="id" value="{$item.id_application}">
            <button type="submit" name="acknowledge" class="btn-default pull-right">
                <i class="process-icon-save"></i>
                {l s="รับทราบ" mod="applicationform"}
            </button>
        </form>
    {/foreach}
{/block}