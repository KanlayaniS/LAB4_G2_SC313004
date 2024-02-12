<div id="multibank-container">
    <h3>{$module->l('Select Your Bank')}</h3>
    <form action="{$link->getPageLink('order-opc', true)|escape:'html':'UTF-8'}" method="post" class="form">
        {foreach from=$banks item=bank}
            <div>
                <input type="radio" name="selected_bank" value="{$bank.id_multibank}" id="bank_{$bank.id_multibank}">
                <label for="bank_{$bank.id_multibank}">{$bank.bank_name} ({$bank.bank_number})</label>
            </div>
        {/foreach}
        <hr>
        <h4>{$module->l('Or add your own bank information')}</h4>
        <div class="form-group">
            <label for="bank_name">{l s='Bank Name'}</label>
            <input type="text" id="bank_name" name="bank_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="bank_number">{l s='Bank Number'}</label>
            <input type="text" id="bank_number" name="bank_number" class="form-control">
        </div>
        <button type="submit" name="submitMultibank" class="btn btn-primary">{l s='Add Bank'}</button>
    </form>
</div>
