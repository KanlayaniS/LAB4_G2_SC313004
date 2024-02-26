

<style>
/* Form container */
.panel {
  width: 300px;
  margin: 100px auto;
  border-radius: 10px;
  background-color: #f5f5f5;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Form header */
.panel-heading {
  font-size: 30px;
  background-color: #0B76BC;
  color: #ffffff;
  padding: 20px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  text-align: center;
  font-size: bold 24px;
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
  border: 3px solid #cccccc;
  border-radius: 5px;
  transition: border-color 0.3s ease;
}

/* Form input focus effect */
.form-control:focus {
  border-color: #0B76BC;
}

/* Form submit button */
.btn-default {
  background-color: #0B76BC;
  color: #ffffff;
  padding: 15px 30px;
  margin-top: 20px;
  margin-left:20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  width: 100%;
  font-size: 18px;
  font-weight: bold;
  text-transform: uppercase;
}

/* Form submit button hover effect */
.btn-default:hover {
  background-color: #00008B;
}

.panel-footer {
    margin-left:0px}

/* Align button to the right */
.pull-right {
    float: right;
    margin-top: 50px
    width: 50px;
    font-size: 20px
}
</style>



<form mothod="POST">
    <div class="panel">
        <div class="panel-heading">
            {l s="Teacher Login" mod="applicationform"}
        </div>
        <div class="panel-body">
            <label for="teacher_email">{l s="Your Email:" mod="applicationform"}</label>
            <input type="text" name="teacher_email" id="teacher_email" class="form-control"/>
        </div>
        <div class="panel-footer">
            <button type="submit" name="loginteacher" class="btn-default pull-right">
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