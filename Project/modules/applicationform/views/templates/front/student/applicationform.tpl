{capture name=path}
    <h1>{l s='Scholarship Application Form'}</h1>
{/capture}

<<<<<<< HEAD
<style>

#application_form

</style>


=======
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
<div id="application_form">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="first_name">{l s='ชื่อ'}:</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{$old_data.first_name}" required>
        </div>
        <div class="form-group">
            <label for="last_name">{l s='นามสกุล'}:</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{$old_data.last_name}" required>
        </div>
        <div class="form-group">
            <label for="student_id">{l s='รหัสนักศึกษา'}:</label>
            <input type="text" class="form-control" id="student_id" name="student_id" value="{$old_data.student_id}" required>
        </div>
        <div class="form-group">
            <label for="citizen_id">{l s='รหัสบัตรประชาชน'}:</label>
            <input type="text" class="form-control" id="citizen_id" name="citizen_id" value="{$old_data.citizen_id}" required>
        </div>
        <div class="form-group">
            <label for="year">{l s='ชั้นปีที่'}:</label>
            <select class="form-control" id="year" name="year" required>
                <option value="1" {if $old_data.year == 1}selected{/if}>1</option>
                <option value="2" {if $old_data.year == 2}selected{/if}>2</option>
                <option value="3" {if $old_data.year == 3}selected{/if}>3</option>
                <option value="4" {if $old_data.year == 4}selected{/if}>4</option>
                <option value="5" {if $old_data.year == 5}selected{/if}>5</option>
                <option value="6" {if $old_data.year == 6}selected{/if}>6</option>
                <option value="7" {if $old_data.year == 7}selected{/if}>7</option>
                <option value="8" {if $old_data.year == 8}selected{/if}>8</option>
            </select>
        </div>
        <div class="form-group">
            <label for="major">{l s='หลักสูตร'}:</label>
            <select class="form-control" id="major" name="major" required>
                <option value="วิทยาการคอมพิวเตอร์">{l s='วิทยาการคอมพิวเตอร์'}</option>
                <option value="เทคโนโลยีสารสนเทศ">{l s='เทคโนโลยีสารสนเทศ'}</option>
                <option value="ภูมิสารสนเทศศาสตร์">{l s='ภูมิสารสนเทศศาสตร์'}</option>
                <option value="ปัญญาประดิษฐ์">{l s='ปัญญาประดิษฐ์'}</option>
                <option value="ความมั่นคงปลอดภัยไซเบอร์">{l s='ความมั่นคงปลอดภัยไซเบอร์'}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="GPA">{l s='GPA'}:</label>
            <input type="text" class="form-control" id="GPA" name="GPA" value="{$old_data.GPA}" required>
        </div>
        <div class="form-group">
            <label for="phone_number">{l s='เบอร์โทรศัพท์'}:</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{$old_data.phone_number}" required>
        </div>
        <div class="form-group">
            <label for="date_of_birth">{l s='วันเดือนปีเกิด'}:</label>
            <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" value="{$old_data.date_of_birth}" required>
        </div>
        <div class="form-group">
            <label for="teacher_email">{l s='อีเมลที่ปรึกษา'}:</label>
            <input type="email" class="form-control" id="teacher_email" name="teacher_email" value="{$old_data.teacher_email}" required pattern=".+@kku\.ac\.th$">
            {$old_data.error}
        </div>
        <div class="form-group">
            <label for="address">{l s='ที่อยู่'}:</label>
            <input type="text" class="form-control" id="address" name="address" value="{$old_data.address}" required>
        </div>
        <div class="form-group">
            <label for="reason_for_scholarship">{l s='เหตุผลการขอเงินสนับสนุน'}:</label>
            <textarea class="form-control" id="reason_for_scholarship" name="reason_for_scholarship" rows="4" required>{$old_data.reason_for_scholarship}</textarea>
        </div>
        
        <!-- File Upload Field -->
        <div class="form-group">
            <label for="file_input_name">{l s='Upload File'}:</label>
            <input type="file" class="form-control" id="file_input_name" name="file_input_name">
        </div>
        
        <!-- Submit Button -->
        <button type="submit" name="submitapplicationform" class="btn-default pull-right">
            <i class="process-icon-save"></i>
            {l s="Submit" mod="applicationform"}
        </button>
    </form>
    
    <!-- Go back button -->
    <form method="post">
        <button type="submit" name="goback" class="btn-default pull-right">
            <i class="process-icon-save"></i>
            {l s="Back" mod="applicationform"}
        </button>
    </form>
</div>
