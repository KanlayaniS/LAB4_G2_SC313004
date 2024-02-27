
<style>

/* Form container */
.panel {
    width: 300px;
    margin: 100px auto;
    border-radius: 10px;
    background-color: #f9f9f9;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Form header */
.panel-heading {
    font-size: 30px;
    background-color: #4a55a2;
    color: #ffffff;
    padding: 20px;
    border-top-left-radius: 10px;
    border-radius: 5px;
    border-top-right-radius: 10px;
    font-size: bold 24px;
    text-align: center;
}

/* Form body */
.panel-body {
    padding: 20px;
}

/* Form input fields */
.form-control {
    width: calc(100% + 10px);
    padding: 12px;
    margin: 10px 0;
    margin-bottom: 50px;
    border: 3px solid #ccc;
    border-radius: 5px;
    transition: border-color 0.3s ease-in-out;
}

/* Form input focus effect */
.form-control:focus {
  border-color: #4a55a2;
}

/* Form submit button */
.btn-default {

    background-color: #4a55a2;
    color: #ffffff;
    padding: 15px 30px;
    margin-top: 20px;
    margin-left: 20px
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 100%;
    font-weight: bold;
    text-transform:uppercase;
}

/* Form submit button hover effect */
.btn-default:hover {
    background-color: #7895cb;
}

/* Align button to the right */
.pull-right {
    margin-top: 50px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: fit-content; /* Set width based on content */
    font-size: 22px; /* Decrease font size */
}



.login-container {
    background-color: #DEF3FF; /* Background color */
    padding: 20px; /* Padding */
    padding-right: 20px;
    border-radius: 5px; /* Border radius to create rounded corners */
}


</style>

<form mothod="POST">
    <div class="panel">
        <div class="panel-heading">
            {l s="Student Login" mod="applicationform"}
        </div>
        <div class="panel-body">
          <div class="login-container"> <!-- Added container div -->
            <label for="student_email">{l s="Your Email: " mod="applicationform"}</label>
            <input type="text" name="student_email" id="student_email" class="form-control"/>
        </div>
        <div class="panel-footer">
            <div class="login-container"> <!-- Added container div -->
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