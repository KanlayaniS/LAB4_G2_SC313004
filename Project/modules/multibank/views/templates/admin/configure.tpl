<div class="panel">
    <div class="panel-heading">{l s='Add New Bank'}</div>
    <div class="panel-body">
        <form action="{url entity='module' action='configure'}" method="post">
            <div class="form-group">
                <label for="bank_name">{l s='Bank Name'}</label>
                <input type="text" id="bank_name" name="bank_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="bank_number">{l s='Bank Number'}</label>
                <input type="text" id="bank_number" name="bank_number" class="form-control" required>
            </div>
            <button type="submit" name="submitMultibank" class="btn btn-primary">{l s='Add Bank'}</button>
        </form>
    </div>
</div>

<div class="panel">
    <div class="panel-heading">{l s='Existing Banks'}</div>
    <div class="panel-body">
        {if $banks}
            <table class="table">
                <thead>
                    <tr>
                        <th>{l s='Bank Name'}</th>
                        <th>{l s='Bank Number'}</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$banks item=bank}
                        <tr>
                            <td>{$bank.bank_name}</td>
                            <td>{$bank.bank_number}</td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        {else}
            <p>{l s='No banks available'}</p>
        {/if}
    </div>
</div>
