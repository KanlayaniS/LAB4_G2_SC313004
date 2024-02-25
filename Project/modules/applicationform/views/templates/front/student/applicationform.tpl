{$student_email}
<form method="post">
    <label for="teacher_email">Teacher Email:</label>
    <input type="email" id="teacher_email" name="teacher_email" required>
    <button type="submit" name="submitapplicationform" class="btn-default pull-right">
        <i class="process-icon-save"></i>
        {l s="Submit" mod="applicationform"}
    </button>
</form>

<form method="post">
    <button type="submit" name="goback" class="btn-default pull-right">
        <i class="process-icon-save"></i>
        {l s="Back" mod="applicationform"}
    </button>
</form>