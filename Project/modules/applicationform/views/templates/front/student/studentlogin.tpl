<form mothod="POST">
    <div class="panel">
        <div class="panel-heading">
            {l s="Student Login" mod="applicationform"}
        </div>
        <div class="panel-body">
            <label for="student_email">{l s="Your Email?" mod="applicationform"}</label>
            <input type="text" name="student_email" id="student_email" class="form-control"/>
        </div>
        <div class="panel-footer">
            <button type="submit" name="loginstudent" class="btn-default pull-right">
                <i class="process-icon-save"></i>
                {l s="Login" mod="applicationform"}
            </button>
            
        </div>
    </div>
</form>
<form mothod="POST">
    <button type="submit" name="goback" class="btn-default pull-right">
        <i class="process-icon-save"></i>
        {l s="Back" mod="applicationform"}
    </button>
</form>