{block name='page_content'}
    <h2>สถานะคำร้อง</h2>
    {$student_email}
    <div style="overflow-x:auto;">
        <table class="table">
            <thead>
                <tr>
                    <th>Application Date</th>
                    <th>Application ID</th>
                    <th>Teacher Status</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$applications item=item}
                <tr>
                    <td>{$item.application_date}</td>
                    <td>{$item.id_application}</td>
                    <td>{$item.teacher_status}</td>
                    <td>{$item.status}</td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
{/block}

<form method="post">
    <button type="submit" name="goback" class="btn-default pull-right">
        <i class="process-icon-save"></i>
        {l s="Back" mod="applicationform"}
    </button>
</form>
