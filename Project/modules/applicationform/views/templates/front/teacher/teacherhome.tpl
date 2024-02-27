<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ตรวจสอบสถานะคำร้อง</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
  </head>
  <body>
    <div class="table">
      <div class="table_header">
        <p>ตรวจสอบคำร้อง</p>
        <div>
            <p>{$teacher_email}</p>
        </div>
      </div>
      <div class="table_section">
        <table>
          <thead>
            <tr>
              <th>วันที่ยื่นคำร้อง</th>
              <th>หมายเลขอ้างอิง</th>
              <th>ชื่อ-สกุล</th>
              <!-- <th>ความเห็นอาจารย์<br />ที่ปรึกษา</th> -->
              <th>ความเห็นอาจารย์<br />ที่ปรึกษา</th>
              <th>หลักฐานแนบ</th>
              <th>รายละเอียดเพิ่มเติม</th>
              <th>การรับทราบ</th>
            </tr>
          </thead>
          <tbody>
            {foreach from=$applications item=item}
            <tr>
              <td>{$item.application_date}</td>
              <td>{$item.id_application}</td>
              <td>{$item.first_name} {$item.last_name}</td>
              <td>{$item.teacher_status}</td>
              <td>
                {if $item.filename}
                    <div>
                        <a  href="{$localhost}/evidence/{$item.filename}" target="_blank">ดูไฟล์แนบ</a>
                    </div>
                {/if}
              </td>
              <td>
                <a class="no-href" onclick="openPopup(this, '{$item.id_application}', '{$item.first_name} {$item.last_name}', 
                '{$item.application_date}', '{$item.student_id}', '{$item.year}', '{$item.major}', '{$item.GPA}',
                '{$item.phone_number}', '{$item.student_email}', '{$item.reason_for_scholarship}')">
                    <i class="process-icon-save"></i>
                    {l s="รายละเอียด" mod="applicationform"}
                </a>
              </td>
              <td>
                <form method="post">
                  <input
                    type="hidden"
                    id="id"
                    name="id"
                    value="{$item.id_application}"
                  />
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
        <form method="POST">
          <button type="submit" name="getlogout" class="btn-default pull-right">
            <i class="process-icon-save"></i>
            {l s="ออกจากระบบ" mod="applicationform"}
          </button>
        </form>
      </div>
    </div>
    <div id="popup" class="popup">
      <span class="close" onclick="closePopup()">&times;</span>
      <p><strong>หมายเลขอ้างอิง:</strong> <span id="appId"></span></p>
      <p><strong>ชื่อ-สกุล:</strong> <span id="studentName"></span></p>
      <p><strong>วันที่ยื่น:</strong> <span id="appDate"></span></p>
      <p><strong>รหัสนักศึกษา:</strong> <span id="studentId"></span></p>
      <p><strong>ชั้นปีที่:</strong> <span id="studentYear"></span></p>
      <p><strong>หลักสูตร:</strong> <span id="studentMajor"></span></p>
      <p><strong>GPA:</strong> <span id="studentGPA"></span></p>
      <p><strong>หมายเลขโทรศัพท์:</strong> <span id="studentPhone"></span></p>
      <p><strong>อีเมล:</strong> <span id="studentEmail"></span></p>
      <p><strong>เหตุผลการขอเงินสนับสนุน:</strong> <span id="studentReason"></span></p>
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
  }
  body {
    /* margin: 0;
    padding: 0;
    height: 100%;
    box-sizing: border-box; */
    font-family: "Prompt", sans-serif;
    overflow: hidden;
    /* background: white; */
  }
  .table {
    width: 100%;
    table-layout: fixed;
    min-width: 900px;
    border-collapse: collapse;
  }
  .table_header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: #4a55a2;
  }
  .table_header p {
    color: white;
  }
  button {
    outline: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  .add_new {
    padding: 10px 20px;
    color: #ffffff;
    background-color: #7895cb;
  }
  input {
    padding: 10px 20px;
    margin: 0 10px;
    outline: none;
    border: 1px solid #0298cf;
    border-radius: 6px;
    color: black;
  }
  ::placeholder {
    color: #4a55a2;
  }
  .table_section {
    height: 650px;
    overflow: auto;
  }
  table {
    width: 100%;
    table-layout: fixed;
    min-height: 100px;
    border-collapse: collapse;
  }
  thead th {
    position: sticky;
    top: 0;
    background-color: #f6f9fc;
    color: #8493a5;
    font-size: 16px;
  }
  th,
  td {
    border-bottom: 1px solid #dddddd;
    padding: 10px 20px;
    word-break: break-all;
    text-align: center;
  }
  form {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50%;
    margin-top: 20px; /* Adjust the margin as needed */
  }
  button {
    background-color: #4a55a2;
    color: white;
    width: 250px;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 5px;
    align-items: center;
    font-family: "Prompt", sans-serif;
    margin: 0 auto;
    display: block;
    border-radius: 25px;
  }
  button:hover {
    background-color: #7895cb;
    transition: 0.5s;
    color: black;
  }
  /* Popup container */
  .popup {
    display: none;
    position: absolute;
    background-color: white;
    padding: 20px;
    border: 1px solid #ccc;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    z-index: 9999;
  }

  /* Close button */
  .close {
    position: absolute;
    top: 5px;
    right: 5px;
    cursor: pointer;
  }
  a.no-href {
    cursor: pointer; /* Change cursor to pointer to indicate interactivity */
    text-decoration: underline; /* Add underline to text */
    color: blue; /* Set text color to blue */
  }
</style>

<script>
// Function to open the popup
function openPopup(button, applicationId, studentName, appDate, studentId, studentYear, studentMajor, studentGPA, studentPhone, studentEmail, studentReason) {
  // Get the position of the button
  var rect = button.getBoundingClientRect();
  
  // Set the position of the popup
  var popup = document.getElementById("popup");
  popup.style.top = (rect.top + window.scrollY) + "px";
  popup.style.left = (rect.left + window.scrollX) + "px";
  
  // Populate the popup content
  document.getElementById("appId").textContent = applicationId;
  document.getElementById("studentName").textContent = studentName;
  document.getElementById("appDate").textContent = appDate;
  document.getElementById("studentId").textContent = studentId;
  document.getElementById("studentYear").textContent = studentYear;
  document.getElementById("studentMajor").textContent = studentMajor;
  document.getElementById("studentGPA").textContent = studentGPA;
  document.getElementById("studentPhone").textContent = studentPhone;
  document.getElementById("studentEmail").textContent = studentEmail;
  document.getElementById("studentReason").textContent = studentReason;

  // Display the popup
  popup.style.display = "block";
}

// Function to close the popup
function closePopup() {
  document.getElementById("popup").style.display = "none";
}

// Close the popup if the user clicks outside of it
window.onclick = function(event) {
  var popup = document.getElementById("popup");
  if (event.target == popup) {
    popup.style.display = "none";
  }
}
</script>
