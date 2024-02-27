<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Application Form</title>
  </head>

  <body>
    <div class="container">
      <h2>{l s='แบบฟอร์มขอเงินสนับสนุน'}</h2>
      <!-- <h1>{l s='Scholarship Application Form'}</h1> -->
      <!-- <h3>ประวัติส่วนตัว</h3> -->
      <div id="application_form">
        <form method="post" enctype="multipart/form-data">
          <!-- Submit Button -->
          <h4>ข้อมูลส่วนตัว</h4>

          <!-- <div class="form-group">
            <label for="name_title">คำนำหน้าชื่อ</label>
            <input
              type="text"
              class="form-control"
              placeholder="ระบุคำนำหน้าชื่อ"
              name="name_title"
              required
            />
          </div> -->
          <div class="content">

                        <!-- ชื่อ -->
            <div class="form-group">
              <label for="name_title">{l s='คำนำหน้าชื่อ'}</label>
              <input
                type="text"
                class="form-control"
                placeholder="ระบุคำนำหน้าชื่อ"
                id="name_title"
                name="name_title"
                value="{$old_data.name_title}"
                required
              />
            </div>

            
            <!-- ชื่อ -->
            <div class="form-group">
              <label for="first_name">{l s='ชื่อ'}</label>
              <input
                type="text"
                class="form-control"
                placeholder="ระบุชื่อ"
                id="first_name"
                name="first_name"
                value="{$old_data.first_name}"
                required
              />
            </div>

            <!-- นามสกุล -->
            <div class="form-group">
              <label for="last_name">{l s='นามสกุล'}</label>
              <input
                type="text"
                class="form-control"
                placeholder="ระบุนามสกุล"
                id="last_name"
                name="last_name"
                value="{$old_data.last_name}"
                required
              />
            </div>

            <!-- รหัสนักศึกษา -->
            <div class="form-group">
              <label for="student_id">{l s='รหัสนักศึกษา'}</label>
              <input
                type="text"
                class="form-control"
                placeholder="ระบุรหัสนักศึกษา"
                id="student_id"
                name="student_id"
                value="{$old_data.student_id}"
                required
              />
            </div>

            <!-- บัตรประชาชน -->
            <div class="form-group">
              <label for="citizen_id">{l s='รหัสบัตรประชาชน'}</label>
              <input
                type="text"
                class="form-control"
                placeholder="ระบุรหัสประชาชน"
                id="citizen_id"
                name="citizen_id"
                value="{$old_data.citizen_id}"
                required
              />
            </div>
            <!-- ชั้นปีที่ -->
            <div class="form-group">
            <label for="year">{l s='ชั้นปีที่'}</label>
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

            <!-- หลักสูตร -->
            <div class="form-group">
            <label for="major">{l s='หลักสูตร'}</label>
            <select class="form-control" id="major" name="major" required>
                <option value="วิทยาการคอมพิวเตอร์">{l s='วิทยาการคอมพิวเตอร์'}</option>
                <option value="เทคโนโลยีสารสนเทศ">{l s='เทคโนโลยีสารสนเทศ'}</option>
                <option value="ภูมิสารสนเทศศาสตร์">{l s='ภูมิสารสนเทศศาสตร์'}</option>
                <option value="ปัญญาประดิษฐ์">{l s='ปัญญาประดิษฐ์'}</option>
                <option value="ความมั่นคงปลอดภัยไซเบอร์">{l s='ความมั่นคงปลอดภัยไซเบอร์'}</option>
            </select>
            </div>
            <!-- GPA -->
            <div class="form-group">
              <label for="GPA">{l s='GPA'}</label>
              <input
                type="text"
                class="form-control"
                placeholder="ระบุ GPA"
                id="GPA"
                name="GPA"
                value="{$old_data.GPA}"
                required
              />
            </div>
            <!-- Tel -->
            <div class="form-group">
              <label for="phone_number">{l s='เบอร์โทรศัพท์'}</label>
              <input
                type="text"
                class="form-control"
                placeholder="ระบุเบอร์โทรศัพท์"
                id="phone_number"
                name="phone_number"
                value="{$old_data.phone_number}"
                required
              />
            </div>

            <!-- date  -->
            <div class="form-group">
              <label for="date_of_birth">{l s='วันเดือนปีเกิด'}</label>
              <input
              type="text" class="form-control" id="date_of_birth" placeholder="ระบุ วัน / เดือน / เกิด" name="date_of_birth" value="{$old_data.date_of_birth}"
                required
              />
            </div>
            <!-- อีเมลที่ปรึกษา  -->
            <div class="form-group">
                <label for="teacher_email">{l s='อีเมลที่ปรึกษา'}:</label>
                <input type="email" placeholder="ระบุ อีเมลอาจารย์ที่ปรึกษา"class="form-control" id="teacher_email" name="teacher_email" value="{$old_data.teacher_email}" required pattern=".+@kku\.ac\.th$">
                {$old_data.error}
            </div>


            <!-- date  -->
            <div class="form-group">
              <label for="reason_for_scholarship">{l s='เหตุผลการขอเงินสนับสนุน'}</label>
              <textarea id="reason_for_scholarship" name="reason_for_scholarship" row="10" required>{$old_data.reason_for_scholarship}</textarea>
              
            </div>





            <div class="modal">
                <div class="modal-header">
                    <div class="modal-logo">
                        <span class="logo-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="419.116" viewBox="0 0 512 419.116">
                                <defs>
                                    <clipPath id="clip-folder-new">
                                        <rect width="512" height="419.116" />
                                    </clipPath>
                                </defs>
                                <g id="folder-new" clip-path="url(#clip-folder-new)">
                                    <path id="Union_1" data-name="Union 1" d="M16.991,419.116A16.989,16.989,0,0,1,0,402.125V16.991A16.989,16.989,0,0,1,16.991,0H146.124a17,17,0,0,1,10.342,3.513L227.217,57.77H437.805A16.989,16.989,0,0,1,454.8,74.761v53.244h40.213A16.992,16.992,0,0,1,511.6,148.657L454.966,405.222a17,17,0,0,1-16.6,13.332H410.053v.562ZM63.06,384.573H424.722L473.86,161.988H112.2Z" fill="var(--c-action-primary)" stroke="" stroke-width="1" />
                                </g>
                            </svg>
                        </span>
                    </div>
                    <button class="btn-close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" fill="var(--c-text-secondary)"/></svg>
                    </button>
                </div>
                <div class="modal-body">
                    <h2 class="modal-title"> <label for="file_input_name">{l s='แนบหลักฐาน (ถ้ามี)'}</label></h2>
                    <div class="upload-area">
                        <span class="upload-area-icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="340.531" height="419.116" viewBox="0 0 340.531 419.116">
              <g id="files-new" clip-path="url(#clip-files-new)">
                <path id="Union_2" data-name="Union 2" d="M-2904.708-8.885A39.292,39.292,0,0,1-2944-48.177V-388.708A39.292,39.292,0,0,1-2904.708-428h209.558a13.1,13.1,0,0,1,9.3,3.8l78.584,78.584a13.1,13.1,0,0,1,3.8,9.3V-48.177a39.292,39.292,0,0,1-39.292,39.292Zm-13.1-379.823V-48.177a13.1,13.1,0,0,0,13.1,13.1h261.947a13.1,13.1,0,0,0,13.1-13.1V-323.221h-52.39a26.2,26.2,0,0,1-26.194-26.195v-52.39h-196.46A13.1,13.1,0,0,0-2917.805-388.708Zm146.5,241.621a14.269,14.269,0,0,1-7.883-12.758v-19.113h-68.841c-7.869,0-7.87-47.619,0-47.619h68.842v-18.8a14.271,14.271,0,0,1,7.882-12.758,14.239,14.239,0,0,1,14.925,1.354l57.019,42.764c.242.185.328.485.555.671a13.9,13.9,0,0,1,2.751,3.292,14.57,14.57,0,0,1,.984,1.454,14.114,14.114,0,0,1,1.411,5.987,14.006,14.006,0,0,1-1.411,5.973,14.653,14.653,0,0,1-.984,1.468,13.9,13.9,0,0,1-2.751,3.293c-.228.2-.313.485-.555.671l-57.019,42.764a14.26,14.26,0,0,1-8.558,2.847A14.326,14.326,0,0,1-2771.3-147.087Z" transform="translate(2944 428)" fill="var(--c-action-primary)"/>
              </g>
            </svg>
                        </span>
                        <span class="upload-area-title">แนบหลักฐานที่นี่</span>
                        <input type="file" class="form-control" id="file_input_name" name="file_input_name">
                    </div>
                </div>
            </div>




          </div>




          </div>

                  <!-- Submit Button -->
        <button type="submit" name="submitapplicationform" class="btn-default pull-right">
          <i class="process-icon-save"></i>
          {l s="ยืนยันข้อมูล" mod="applicationform"}
      </button>
        </form>

        <!-- Go back button -->
        <form method="post">
          <button type="submit" name="goback" class="btn-default pull-right">
            <i class="process-icon-save"></i>
            {l s="กลับ" mod="applicationform"}
          </button>
        </form>
      </div>
    </div>
  </body>
</html>

<!-- PART CSS นะ -->
<style>

  @import url("https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500&display=swap");
  html {
    font-size: calc(60% + 0.8vmin);
    height: 100%;
    margin: 0;
  }
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Prompt", sans-serif;
  }
  body {
    min-width: 100vh;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    background: #dfe9f5;
  }
  .container {
    max-width: 650px;
    padding: 28px;
    margin: 0 28px;
    box-shadow: 0 15px 20px #ffffff;
  }
  h4 {
    font-size: 16px;
    font-weight: 600;
    text-align: left;
    color: black;
    padding-bottom: 8px;
    border-bottom: 1px solid black;
  }
  .content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px 0;
  }
  /* .form-group {
    display: flex;
    flex-wrap: wrap;
    width: 50%;
    padding-bottom: 15px;
  }  */
  .form-group {
    display: flex;
    flex-wrap: wrap;
    width: 50%;
    justify-content: flex-end;
    padding-bottom: 15px;
  }

  .form-group:nth-child(2n) {
    justify-content: end;
  }
  /* ปรับให้ตัวหนังสืออยู่ใกล้กัน */
  .form-group label {
    width: 95%;
  }
  .form-group input {
    height: 40px;
    width: 95%;
    padding: 0 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    outline: none;
  }
  .form-group input:is(:focus, :valid) {
    box-shadow: 0 3px 6px gray;
  }
  button {
    background-color: #4a55a2;
    margin: 15px 0;
    width: 100%;
    margin-top: 10px;
    display: block;
    font-size: 20px;
    color: #ffffff;
    border: none;
    border-radius: 5px;
  }

  button:hover {
    background-color: #7895cb;
    transition: 0.5s;
    color: black;
  }

  .form-group select {
    width: 95%;
    height: 40px;
    padding: 0 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    outline: none;
  }


  textarea{
    width: 95%;
    border: 1px solid #ccc;
    outline: none;
    padding: 10px;
    border-radius: 5px;
    padding: 0 10px;

  }


  .modal {
	width: 90%;
	max-width: 500px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 10vh;
	margin-bottom: 10vh;
	background-color: #7895cb;
	border-radius: .5rem;
	box-shadow: 0 5px 15px rgba(#000, .2); 
    }
    .modal-header {
	display: flex;
	align-items: flex-start;
	justify-content: space-between;
	padding: 1.5rem 1.5rem 1rem;
    }
    .logo-circle 
    {
	width: 3.5rem;
	height: 3.5rem;
	display: flex;
	justify-content: center;
	align-items: center;
	border-radius: 50%;
	background-color: var(--c-action-primary-accent);
    svg {
		max-width: 1.5rem;
	}
    }

    
.btn-close {
	display: flex;
	align-items: center;
	justify-content: center;
	width: 2.25rem;
	height: 2.25rem;
	border-radius: .25rem;
	border: none;
	background-color: transparent;
	&:hover, &:focus {
		background-color: var(--c-action-primary-accent);
	}
}

.modal-body {
	padding: 1rem 1.5rem;
}

.modal-title {
	font-weight: 700;
}

.modal-description {
	color: var(--c-text-secondary);
}

.upload-area {
	margin-top: 1.25rem;
	border: none;
	background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23ccc' stroke-width='3' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e");
	background-color: transparent;
	padding: 3rem;
	width: 100%;
	display: flex;
	flex-direction: column;
	align-items: center;
	&:hover, &:focus {
			background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%232e44ff' stroke-width='3' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e");
	}
} 

.upload-area-icon {
	display: block;
	width: 2.25rem;
	height: 2.25rem;
	svg {
		max-height: 100%;
		max-width: 100%;
	}
}

.upload-area-title {
	margin-top: 1rem;
	display: block;
	font-weight: 700;
		color: var(--c-text-primary);
}

.upload-area-description {
		display: block;
		color: var(--c-text-secondary);
	strong {
		color: var(--c-action-primary);
		font-weight: 700;
	}
}

.modal-footer {
	padding: 1rem 1.5rem 1.5rem;
	display: flex;
	justify-content: flex-end;
	[class*="btn-"] {
		margin-left: .75rem;
	}
}

.btn-secondary, .btn-primary {
	padding: .5rem 1rem;
	font-weight: 500;
	border: 2px solid var(--c-action-secondary);
	border-radius: .25rem;
	background-color: transparent;
}

.btn-primary {
	color: #FFF;
	background-color: var(--c-action-primary);
	border-color: var(--c-action-primary);
}

  /* .container {
    position: relative;
    max-width: 900px;
    width: 100%;
    background-color: #ffffff;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 0 15px #1c3879;
  }
  .container h2 {
    font-size: 24px;
    font-weight: 600;
    color: #333;
    text-align: center;
  } */
</style>
