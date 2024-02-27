<title>หน้าหลัก</title>
<div class="main-container">
  <body>
    <div class="detail-first">
        <img
        src="{$localhost}/views/img/cp.png"
        alt="imgcp"
      />
      
      <div>
        <span class="type-login-text">{l s="เลือกรูปแบบการเข้าสู่ระบบ"}</span>
      </div>
      <form method="POST">
        <button
          type="submit"
          name="studentlogin"
          class="btn-default pull-right"
        >
          <i class="process-icon-save"></i>
          {l s="นักศึกษา (Student)" mod="applicationform"}
        </button>
      </form>
      <form method="POST">
        <button
          type="submit"
          name="teacherlogin"
          class="btn-default pull-right"
        >
          <i class="process-icon-save"></i>
          {l s="อาจารย์ที่ปรึกษา (Adviser)" mod="applicationform"}
        </button>
      </form>
    </div>
  </body>
</div>
<style>
  @import url("https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500&display=swap");
  html {
    font-size: calc(60% + 0.8vmin);
  }
  body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Prompt", sans-serif;
    background: white;
  }

  /* กล่องครอบใหญ่สุด  */
  .main-container {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #f0f0f0;
  }

  .detail-first {
    color: #1c3879;
    text-align: center;
    margin-top: 30px;
    margin-bottom: 30px;
    min-height: 400px;
  }

  .type-login-text {
    font-size: 24px;
  }

  .container {
    width: 100%;
    display: flex;
    background-color: black;
  }

  /* กล่อง button นะ */
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
  }

  button:hover {
    background-color: #7895cb;
    transition: 0.5s;
    color: black;
  }

  .detail-first img {
    max-width: 75%;
    height: 75%; 
    margin-bottom: 5px; 
  }
</style>
