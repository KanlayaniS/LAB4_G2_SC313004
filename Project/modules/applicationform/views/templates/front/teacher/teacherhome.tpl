
{block name='page_content'}
    <h2>{$teacher_email}</h2>
    {$student_email}
    <div style="overflow-x:auto;">
        <table class="table">
            <thead>
                <tr>
                    <th>Application ID</th>
                    <th>Student Email</th>
                    <th>Application Date</th>
                    <th>Teacher Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$applications item=item}
                <tr>
                    <td>{$item.id_application}</td>
                    <td>{$item.student_email}</td>
                    <td>{$item.application_date}</td>
                    <td>{$item.teacher_status}</td>
                    <td>
                        <form method="post">
                            <input type="hidden" id="id" name="id" value="{$item.id_application}">
                            <button type="submit" name="acknowledge" class="btn-default">
                                <i class="process-icon-save"></i>
                                {l s="รับทราบ" mod="applicationform"}
                            </button>
                        </form>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
{/block}

<form method="POST">
    <button type="submit" name="getlogout" class="btn-default pull-right">
        <i class="process-icon-save"></i>
        {l s="Logout" mod="applicationform"}
    </button>
</form>