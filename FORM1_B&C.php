<?php
include './functions.php';
if(isset($_POST['Submit_btn'])){
  // insert_data__KRA1A();
  // echo "<script> alert('Data submitted')</script>";
}elseif(isset($_POST['Cancel_btn'])){
  header('location: dashboard.php');  
}else{}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./CSS/FORM1_B&C.css">
  <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmPodt5vh1lKwmlGvOSj3xeXqUp_TokegUQV_5WxVqgw&s">
  <title>FORM1_B&C</title>
</head>

<style>
@font-face{
  font-family: Inter;
  src: url(./fonts/Inter-VariableFont_slnt,wght.ttf);
}

* {
  margin: 0;
  padding: 0; 
  font-family: Inter;
  text-decoration: none;
}

body{
  background: url('./Assets/KRA_files_bg.jpg');
  background-size: cover;
}

table{
  margin: auto;
}

.title{
  text-align: center;
}

.page_title{
  margin-left: 90px;
  font-style: italic;
}


.row__des td {
  padding: 3px;
  color: white;
  background-color: #7d0201;
}

h2{
  padding: 6px;
}
button{
  border: none;
  background-color: #dbd7d7;
  font-size: 20px;
}

td, input, select, option{
  background-color:  #dbd7d7;
}

tr{
  text-align: center;
}
.hidden{
  display: none;
}
.form__btns{
  text-align: center;
}

.form__btns button{
  align-items: center;
  color: white;
  background-color: #7d0201;
  border: solid #afd9ea;
  border-radius: 15px;
  padding: 5px;
}

</style>
<body>

  <h1 class="title">CRITERION B - CURRICULUM AND INSTRUCTIONAL MATERIALS DEVELOPMENT (MAX = 30 POINTS) </h1>

  <br> <br>

  <h2>1. FOR EVERY INSTRUCTIONAL MATERIAL DEVELOPED AND APPROVED FOR USE</h2>
  <h2 class="page_title">1.1  Sole Authorship</h2>
  <table>
  <tr class="row__des">
    <td>No.</td>
    <td>Title of Instructional Material</td>
    <td>Type of Instructional Material</td>
    <td>Reviewer or Its Equivalent</td>
    <td>Publisher/ Repository</td>
    <td>Date Published (mm/dd/yyyy)</td>
    <td>Date Approved for Use (mm/dd/yyyy)</td>
    <td>Faculty Score</td>
  </tr>

 
  <tr>
    <td>1</td>
    <td><input type="text"></td>
    <td>
     <select name="" id="type__IM__SA__1">
       <option value="None">Select Option</option>
       <option value="Textbook">Textbook</option>
       <option value="Textbook Chapter">Textbook Chapter</option>
       <option value="Manual/Module/Workbook">Manual/Module/Workbook</option>
       <option value="MultiMedia Teaching Material">MultiMedia Teaching Material</option>
       <option value="Testing Material">Testing Material</option>
     </select>
   </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input type="date"></td>
    <td><input id="SA-FS__1" disabled type="text"></td>
   </tr>

  <tr>
    <td>2</td>
    <td><input type="text"></td>
    <td>
     <select name="" id="type__IM__SA__2">
        <option value="None">Select Option</option>
       <option value="Textbook">Textbook</option>
       <option value="Textbook Chapter">Textbook Chapter</option>
       <option value="Manual/Module/Workbook">Manual/Module/Workbook</option>
       <option value="MultiMedia Teaching Material">MultiMedia Teaching Material</option>
       <option value="Testing Material">Testing Material</option>
     </select>
   </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input type="date"></td>
    <td><input name="" id="SA-FS__2" disabled type="text"></td>
   </tr>
  </tr>

  <tr>
    <td>3</td>
    <td><input type="text"></td>
    <td>
     <select name="" id="type__IM__SA__3">
       <option value="None">Select Option</option>
       <option value="Textbook">Textbook</option>
       <option value="Textbook Chapter">Textbook Chapter</option>
       <option value="Manual/Module/Workbook">Manual/Module/Workbook</option>
       <option value="MultiMedia Teaching Material">MultiMedia Teaching Material</option>
       <option value="Testing Material">Testing Material</option>
     </select>
   </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input type="date"></td>
    <td><input id="SA-FS__3" disabled type="text"></td>
   </tr>

   <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><button onclick="total_SA()">Calculate</button></td>
    <td><b> TOTAL: </b></td>
    <td><input name="" type="number" id="finale_SA" disabled></td>
   </tr>
</table>

<br><br><br>


<h2 class="page_title">1.2 Co-authorship</h2>
<table>
  <tr class="row__des">
    <td>No.</td>
    <td>Title of Instructional Material</td>
    <td>Type of Instructional Material</td>
    <td>Reviewer or Its Equivalent</td>
    <td>Publisher/ Repository</td>
    <td>Date Published (mm/dd/yyyy)</td>
    <td>Date Approved for Use (mm/dd/yyyy)</td>
    <td>% Contribution</td>
    <td>Faculty Score</td>
  </tr>

 
  <tr>
   <td>1</td>
   <td><input id="CAA7" type="text"></td>
   <td>
    <select name="" id="CAA1">
      <option value="None">Select Option</option>
      <option value="Textbook">Textbook</option>
      <option value="Textbook Chapter">Textbook Chapter</option>
      <option value="Manual/Module/Workbook">Manual/Module/Workbook</option>
      <option value="MultiMedia Teaching Material">MultiMedia Teaching Material</option>
      <option value="Testing Material">Testing Material</option>
    </select>
   </td>
   <td><input id="CAA2" type="text"></td>
   <td><input id="CAA3" type="text"></td>
   <td><input id="CAA4" type="date"></td>
   <td><input id="CAA5" type="date"></td>
   <td><input id="CAA6" type="text"></td>
   <td><input id="CA-FS__1" disabled type="text"></td>
  </tr>

  <tr>
    <td>2</td>
    <td><input id="CAA72" type="text"></td>
  <td>
    <select name="" id="CAA12">
      <option value="None">Select Option</option>
      <option value="Textbook">Textbook</option>
      <option value="Textbook Chapter">Textbook Chapter</option>
      <option value="Manual/Module/Workbook">Manual/Module/Workbook</option>
      <option value="MultiMedia Teaching Material">MultiMedia Teaching Material</option>
      <option value="Testing Material">Testing Material</option>
    </select>
   </td>
   <td><input id="CAA22 type="text"></td>
   <td><input id="CAA32" type="text"></td>
   <td><input id="CAA42" type="date"></td>
   <td><input id="CAA52" type="date"></td>
   <td><input id="CAA6" type="text"></td>
   <td><input id="CA-FS__2" disabled type="text"></td>
  </tr>

  <tr>
    <td>3</td>
    <td><input id="CAA73" type="text"></td>
    <td>
    <select name="" id="CAA13">
      <option value="None">Select Option</option>
      <option value="Textbook">Textbook</option>
      <option value="Textbook Chapter">Textbook Chapter</option>
      <option value="Manual/Module/Workbook">Manual/Module/Workbook</option>
      <option value="MultiMedia Teaching Material">MultiMedia Teaching Material</option>
      <option value="Testing Material">Testing Material</option>
    </select>
   </td>
   <td><input id="CAA23" type="text"></td>
   <td><input id="CAA33" type="text"></td>
   <td><input id="CAA43" type="date"></td>
   <td><input id="CAA53" type="date"></td>
   <td><input id="CAA63" type="text"></td>
   <td><input id="CA-FS__13" disabled type="text"></td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><button onclick="calcu_co__autho()">Calculate</button></td>
    <td><b> TOTAL: </b></td>
    <td><input type="number" id="finale_SA" disabled></td>
   </tr>
</table>

<br><br><br>

<h2 class="page_title">2. Academic Programs Developed/Revised and Implemented</h2>
  <table>
    <tr class="row__des">
      <td>No.</td>
      <td>Name of Academic Degree Program</td>
      <td>Type of Program</td>
      <td>Board Approval <br>
        (Board Reso. No.)</td>
      <td>Academic Year <br>
         Implemented</td>
      <td>Role</td>
      <td>Faculty Score</td>
    </tr>

    <tr>
      <td>1</td>
      <td><input type="text"></td>
      <td>
        <select name="" id="">
          <option value="">New Program</option>
          <option value="">Revised Program</option>
        </select>
      </td>
      <td><input type="text"></td>
      <td>
        <select name="" id="">
          <option value="">2019-2020</option>
          <option value="">2020-2021</option>
          <option value="">2021-2022</option>
          <option value="">2022-2023</option>
        </select>
      </td>
      <td>
        <select name="" id="select__role__1">
          <option value="none">Select Option</option>
          <option value="Lead">Lead</option>
          <option value="Contributor">Contributor</option>
        </select>
      </td>
      <td><input type="text" id="Acad__res__1" disabled></td>
    </tr>

    <tr>
      <td>2</td>
      <td><input type="text"></td>
      <td>
        <select name="" id="">
          <option value="">New Program</option>
          <option value="">Revised Program</option>
        </select>
      </td>
      <td><input type="text"></td>
      <td>
        <select name="" id="">
          <option value="">2019-2020</option>
          <option value="">2020-2021</option>
          <option value="">2021-2022</option>
          <option value="">2022-2023</option>
        </select>
      </td>
      <td>
        <select name="" id="select__role__2">
          <option value="none">Select Option</option>
          <option value="Lead">Lead</option>
          <option value="Contributor">Contributor</option>
        </select>
      </td>
      <td><input type="text" id="Acad__res__2" disabled></td>
    </tr>

    <tr>
      <td>3</td>
      <td><input type="text"></td>
      <td>
        <select name="" id="">
          <option value="">New Program</option>
          <option value="">Revised Program</option>
        </select>
      </td>
      <td><input type="text"></td>
      <td>
        <select name="" id="">
          <option value="">2019-2020</option>
          <option value="">2020-2021</option>
          <option value="">2021-2022</option>
          <option value="">2022-2023</option>
        </select>
      </td>
      <td>
        <select name="" id="select__role__3">
          <option value="none">Select Option</option>
          <option value="Lead">Lead</option>
          <option value="Contributor">Contributor</option>
        </select>
      </td>
      <td><input type="text" id="Acad__res__3" disabled></td>
    </tr>

    <tr>
      <td colspan="4"></td>
      <td><button onclick="calc__acads()">Calculate</button></td>
      <td><b> TOTAL: </b></td>
      <td><input id="finale_acads" type="number" disabled></td>
     </tr>
  </table>
  <br>  

  <br><br><br><br><br>

<h1 class="title">CRITERION C - THESIS, DISSERTATION AND MENTORSHIP SERVICES (MAX = 10 POINTS)</h1>

<br><br><br>
<h2 class="page_title">1.1 For Services Rendered To Students As: (Adviser)</h2>
<table>
<tr class="row__des">
  <td>No.</td>
  <td>Requirement(s)</td>
  <td colspan="4">No. Of Student Advisee</td>
  <td>Faculty Score</td>
</tr>
<tr>
  <td></td>
  <td></td>
  <td>AY 2019-2020</td>
  <td>AY 2020-2021</td>
  <td>AY 2021-2022</td>
  <td>AY 2022-2023</td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>1</td>
  <td>SPECIAL/CAPSTONE PROJECT</td>
  <td><input type="number"  id="SCP__AY1__1"></td>
  <td><input type="number" id="SCP__AY2__2"></td>
  <td><input type="number"  id="SCP__AY3__3"></td>
  <td><input type="number"  id="SCP__AY4__4"></td>
  <td ><input type="number" disabled id="SCP_res"></td>
</tr>

<tr>
  <td>2</td>
  <td>UNDERGRADUATE THESIS</td>
  <td><input type="number"  id="UG1"></td>
  <td><input type="number"  id="UG2"></td>
  <td><input type="number"  id="UG3"></td>
  <td><input type="number"  id="UG4"></td>
  <td ><input type="number" disabled id="UG_res"></td>
</tr>

<tr>
  <td>3</td>
  <td>MASTER'S THESIS</td>
  <td><input type="number" name="" id="MT1"></td>
  <td><input type="number" name="" id="MT2"></td>
  <td><input type="number" name="" id="MT3"></td>
  <td><input type="number" name="" id="MT4"></td>
  <td ><input type="number" id="MT_res" disabled></td>
</tr>

<tr>
  <td>4</td>
  <td>DISSERTATION</td>
  <td><input type="number" name="" id="DT1"></td>
  <td><input type="number" name="" id="DT2"></td>
  <td><input type="number" name="" id="DT3"></td>
  <td><input type="number" name="" id="DT4"></td>
  <td ><input type="number" id="DT_res" disabled></td>
</tr>

<tr>
  <td colspan="4"></td>
  <td><button onclick="calcu__adv()">Calculate</button></td>
  <td><b>TOTAL: </b></td>
  <td><input id="crit__C__adviser" type="number" disabled></td>
</tr>
</table>

<br><br><br>

<h2 class="page_title">1.2 For Services Rendered To Students As: (Panel)</h2>
<table>
<tr class="row__des">
  <td>No.</td>
  <td>Requirement(s)</td>
  <td colspan="4">No. Of Student Advisee</td>
  <td>Faculty Score</td>
</tr>
<tr>
  <td></td>
  <td></td>
  <td>AY 2019-2020</td>
  <td>AY 2020-2021</td>
  <td>AY 2021-2022</td>
  <td>AY 2022-2023</td>
  <td></td>
</tr>
<tr>
  <td>1</td>
  <td>SPECIAL/CAPSTONE PROJECT</td>
  <td><input type="number" id="SCP_21" ></td>
  <td><input type="number" id="SCP_22"></td>
  <td><input type="number" id="SCP_23"></td>
  <td><input type="number" id="SCP_24"></td>
  <td><input disabled type="number" id="SCP2__res"></td>
</tr>

<tr>
  <td>2</td>
  <td>UNDERGRADUATE THESIS</td>
  <td><input type="number" id="UT2_1"></td>
  <td><input type="number" id="UT2_2"></td>
  <td><input type="number" id="UT2_3"></td>
  <td><input type="number" id="UT2_4"></td>
  <td><input disabled type="number" id="UT2__res"></td>
</tr>

<tr>
  <td>3</td>
  <td>MASTER'S THESIS</td>
  <td><input type="number" id="MT2_1"></td>
  <td><input type="number" id="MT2_2"></td>
  <td><input type="number" id="MT2_3"></td>
  <td><input type="number" id="MT2_4"></td>
  <td><input disabled type="number" id="MT2__res"></td>
</tr>

<tr>
  <td>4</td>
  <td>DISSERTATION</td>
  <td><input type="number" id="DIS_1"></td>
  <td><input type="number" id="DIS_2"></td>
  <td><input type="number" id="DIS_3"></td>
  <td><input type="number" id="DIS_4"></td>
  <td><input disabled type="number" id="DIS__res"></td>
</tr>

<tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td><button onclick="calcu__panel()">Calculate</button></td>
  <td><b> TOTAL: </b></td>
  <td><input type="number" id="panel__res" disabled></td>
 </tr>
</table>
<br>


<br><br><br>

<h2 class="page_title">2. For Services as Mentor</h2>

<table>
  <tr class="row__des">
    <td>No.</td>
    <td>Name of the Academic Competition</td>
    <td>Name of Sponsor Organization</td>
    <td>Award Recieved</td>
    <td>Date Awarded</td>
    <td>Faculty Score</td>
  </tr>

  <tr>
    <td>1</td>
    <td><input type="text" id="ment_inp" ></td>
    <td><input type="text" id="ment_inp1" ></td>
    <td><input type="text" id="ment_inp2" ></td>
    <td><input type="date" id="ment_inp3" ></td>
    <td><input type="number" id="Mentor_scr1" disabled></td>
</tr>

  <tr>
    <td>2</td>
    <td><input type="text" id="ment_inp4"></td>
    <td><input type="text" id="ment_inp5"></td>
    <td><input type="text" id="ment_inp6"></td>
    <td><input type="date" id="ment_inp7"></td>
    <td><input type="number" id="Mentor_scr2" disabled></td>
  </tr>

  <tr>
    <td>3</td>
    <td><input type="text" id="ment_inp8"></td>
    <td><input type="text" id="ment_inp9"></td>
    <td><input type="text" id="ment_inp10"></td>
    <td><input type="date" id="ment_inp11"></td>
    <td><input type="number" id="Mentor_scr3" disabled></td>
  </tr>
  <tr>
    <td>4</td>
    <td><input type="text" id="ment_inp12"></td>
    <td><input type="text" id="ment_inp13"></td>
    <td><input type="text" id="ment_inp14"></td>
    <td><input type="date" id="ment_inp15"></td>
    <td><input type="number" id="Mentor_scr4" disabled></td>
  </tr>
  <tr>
    <td colspan="3"></td>
    <td><button id="calculateButton" onclick="click_me()">Calculate</button></td>
    <td><b> TOTAL: </b></td>
    <td><input id="result" type="number" disabled></td>
   </tr>
</table>
<br><br>


<form method="post" class="form__btns">
  <button name="Submit_btn">Submit</button>
  <button name="Cancel_btn">Cancel</button>
</form>

</body>

<script>
  // 1st line
const select__IM__SA__1 = document.getElementById("type__IM__SA__1")
const sole_autho_FS__1 = document.querySelector("#SA-FS__1")
select__IM__SA__1.addEventListener("change", () => {
  if (select__IM__SA__1.value.toLowerCase() === "none") {
    sole_autho_FS__1.value = 0;
  }else if (select__IM__SA__1.value.toLowerCase() === "textbook") {
    sole_autho_FS__1.value = 30;
  } else if (select__IM__SA__1.value.toLowerCase() === "textbook chapter") {
    sole_autho_FS__1.value = 10;
  } else if (select__IM__SA__1.value.toLowerCase() === "manual/module/workbook") {
    sole_autho_FS__1.value = 16;
  } else if (select__IM__SA__1.value.toLowerCase() === "multimedia teaching material") {
    sole_autho_FS__1.value = 16;
  } else if (select__IM__SA__1.value.toLowerCase() === "testing material") {
    sole_autho_FS__1.value = 10; 
  }
});

// 2nd Line
const select__IM__SA__2 = document.getElementById("type__IM__SA__2")
const sole_autho_FS__2 = document.querySelector("#SA-FS__2")

select__IM__SA__2.addEventListener("change", () => {
  if (select__IM__SA__2.value.toLowerCase() === "none") {
    sole_autho_FS__2.value = 0;
  }else if (select__IM__SA__2.value.toLowerCase() === "textbook") {
    sole_autho_FS__2.value = 30;
  } else if (select__IM__SA__2.value.toLowerCase() === "textbook chapter") {
    sole_autho_FS__2.value = 10;
  } else if (select__IM__SA__2.value.toLowerCase() === "manual/module/workbook") {
    sole_autho_FS__2.value = 16;
  } else if (select__IM__SA__2.value.toLowerCase() === "multimedia teaching material") {
    sole_autho_FS__2.value = 16;
  } else if (select__IM__SA__2.value.toLowerCase() === "testing material") {
    sole_autho_FS__2.value = 10; 
  }
});

// 3rd Line
const select__IM__SA__3 = document.getElementById("type__IM__SA__3")
const sole_autho_FS__3 = document.querySelector("#SA-FS__3")

select__IM__SA__3.addEventListener("change", () => {
  if (select__IM__SA__3.value.toLowerCase() === "none") {
    sole_autho_FS__3.value = 0;
  }else if (select__IM__SA__3.value.toLowerCase() === "textbook") {
    sole_autho_FS__3.value = 30;
  } else if (select__IM__SA__3.value.toLowerCase() === "textbook chapter") {
    sole_autho_FS__3.value = 10;
  } else if (select__IM__SA__3.value.toLowerCase() === "manual/module/workbook") {
    sole_autho_FS__3.value = 16;
  } else if (select__IM__SA__3.value.toLowerCase() === "multimedia teaching material") {
    sole_autho_FS__3.value = 16;
  } else if (select__IM__SA__3.value.toLowerCase() === "testing material") {
    sole_autho_FS__3.value = 10; 
  }
});

// * Calculate the total score
function total_SA(){
  const finale = document.getElementById("finale_SA")
  const line_1 = parseInt(document.getElementById("SA-FS__1").value)
  const line_2 = parseInt(document.getElementById("SA-FS__2").value)
  const line_3 = parseInt(document.getElementById("SA-FS__3").value)

  // formula
  result = line_1 + line_2 + line_3

  // output after the computation
  finale.value = result;
}

///////////////////////////////////////////////////////////////////////////////////////////////////////
// * Co-authorship down here
function calcu_co__autho()
{
  const edgfg1 = document.getElementById('CAA7')
  const edgfg2 = document.getElementById('CAA1')
  const edgfg3 = document.getElementById('CAA2')
  const edgfg4 = document.getElementById('CAA3')
  const edgf5 = document.getElementById('CAA4')
  const edgfg6 = document.getElementById('CAA5')
  const edgfg7 = document.getElementById('CAA6')
  const CA_FS__1 = document.getElementById('CA-FS__1')
  
  if(edgfg1.value != null || edgfg2.value != null || edgfg3.value != null || edgfg4.value != null || edgf5.value != null || edgfg6.value != null || edgfg7.value != null )
  {CA_FS__1.value = 30;}
  else{CA_FS__1.value = 0}

  const edgfg1w = document.getElementById('CAA72')
  const edgfg2w = document.getElementById('CAA12')
  const edgfg3w= document.getElementById('CAA22')
  const edgfg4w = document.getElementById('CAA32')
  const edgf5w = document.getElementById('CAA42')
  const edgfg6w = document.getElementById('CAA52')
  const edgfg7w = document.getElementById('CAA62')
  const CA_FS__1w = document.getElementById('CA-FS__2')


  if(edgfg1w.value != null || edgfg2w.value != null || edgfg3w.value != null || edgfg4w.value != null || edgfg5w.value != null || edgfg6w.value != null || edgfg7w.value != null )
  {CA_FS__1w.value = 30;}
  else{CA_FS__1w.value = 0}

  const edgfg1wq = document.getElementById('CAA73')
  const edgfg2wq = document.getElementById('CAA13')
  const edgfg3wq= document.getElementById('CAA23')
  const edgfg4wq = document.getElementById('CAA33')
  const edgf5wq = document.getElementById('CAA43')
  const edgfg6wq = document.getElementById('CAA53')
  const edgfg7wq = document.getElementById('CAA63')
  const CA_FS__1wq = document.getElementById('CA-FS__13')

  if(edgfg1wq.value != null || edgfg2wq.value != null || edgfg3wq.value != null || edgfg4wq.value != null || edgfg5wq.value != null || edgfg6wq.value != null || edgfg7wq.value != null )
  {CA_FS__1wq.value = 30;}
  else{CA_FS__1wq.value = 0}
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
const select__role__1 = document.getElementById("select__role__1")
const acad__res__1 = document.getElementById("Acad__res__1")

select__role__1.addEventListener("change", () =>{
  if (select__role__1 .value.toLowerCase() === "none")
  {
    acad__res__1.value = 0
  }
  else if (select__role__1.value.toLowerCase() === "lead")
  {
    acad__res__1.value = 10.00
  }
  else if (select__role__1.value.toLowerCase() === "contributor")
  {
    acad__res__1.value = 5.00
  }
})


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
const select__role__2 = document.getElementById("select__role__2")
const acad__res__2 = document.getElementById("Acad__res__2")

select__role__2.addEventListener("change", () =>{
  if (select__role__2 .value.toLowerCase() === "none")
  {
    acad__res__2.value = 0
  }
  else if (select__role__2 .value.toLowerCase() === "lead")
  {
    acad__res__2.value = 10.00
  }
  else if (select__role__2 .value.toLowerCase() === "contributor")
  {
    acad__res__2.value = 5.00
  }
})
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

const select__role__3 = document.getElementById("select__role__3")
const acad__res__3 = document.getElementById("Acad__res__3")

select__role__3 .addEventListener("change", () =>{
  if (select__role__3 .value.toLowerCase() === "none")
  {
    acad__res__3.value = 0
  }
  else if (select__role__3 .value.toLowerCase() === "lead")
  {
    acad__res__3.value = 10.00
  }
  else if (select__role__3 .value.toLowerCase() === "contributor")
  {
    acad__res__3.value = 5.00
  }
})

///////////////////////////////////////////////////////////////////////////////////////////////////////
// * Calculate the total score for acads section
function calc__acads(){
  const finale = document.getElementById("finale_acads")
  const num1= parseInt(document.getElementById("Acad__res__1").value)
  const num2= parseInt(document.getElementById("Acad__res__2").value)
  const num3= parseInt(document.getElementById("Acad__res__3").value)

    var res = parseInt(num1 + num2 + num3)
   finale.value = res
}

///////////////////////////////////////////////////////////////////////////////////////////////////////
// * DONE
function calcu__adv() {
  //  	SPECIAL/CAPSTONE PROJECT line
const num1  = parseInt(document.getElementById("SCP__AY1__1").value)
const num2 = parseInt(document.getElementById("SCP__AY2__2").value)
const num3 = parseInt(document.getElementById("SCP__AY3__3").value)
const num4  = parseInt(document.getElementById("SCP__AY4__4").value)
const num5 = document.getElementById("SCP_res")

// 	UNDERGRADUATE THESIS line
const num6 = parseInt(document.getElementById("UG1").value)
const num7 = parseInt(document.getElementById("UG2").value)
const num8 = parseInt(document.getElementById("UG3").value)
const num9 = parseInt(document.getElementById("UG4").value)
const num10 = document.getElementById("UG_res")

// 	MASTER'S THESIS line
const num11 = parseInt(document.getElementById("MT1").value)
const num12 = parseInt(document.getElementById("MT2").value)
const num13 = parseInt(document.getElementById("MT3").value)
const num14 = parseInt(document.getElementById("MT4").value)
const num15 = document.getElementById("MT_res")

// 	DISSERTATION line
const num16 = parseInt(document.getElementById("DT1").value)
const num17= parseInt(document.getElementById("DT2").value)
const num18 = parseInt(document.getElementById("DT3").value)
const num19= parseInt(document.getElementById("DT4").value)
const num20  = document.getElementById("DT_res")

//Formula
var SCP_res = (num1 + num2 + num3 + num4) * 3
num5.value = SCP_res

var UG_res = (num6+ num7+ num8 + num9) * 5
num10.value = UG_res

var MT_res = (num11 + num12 + num13 + num14) * 8
num15.value = MT_res

var DT_res = (num16 + num17 + num18 + num19) * 10
num20.value = DT_res

const le__finale = document.getElementById("crit__C__adviser")
le__finale.value = parseInt(num5.value) + parseFloat(num10.value) + parseInt(num15.value) + parseInt(num20.value)
}
///////////////////////////////////////////////////////////////////////////////////////////////////////
// * DONE

function calcu__panel()
{
  //something here
  const  num1 = parseInt(document.getElementById("SCP_21").value);
  const  num2 = parseInt(document.getElementById("SCP_22").value)
  const  num3 = parseInt(document.getElementById("SCP_23").value)
  const  num4 = parseInt(document.getElementById("SCP_24").value)
  const  res1 = document.getElementById("SCP2__res")

  //something here
  const  num5 = parseInt(document.getElementById("UT2_1").value);
  const  num6 = parseInt(document.getElementById("UT2_2").value);
  const  num7 = parseInt(document.getElementById("UT2_3").value);
  const  num8 = parseInt(document.getElementById("UT2_4").value);
  const  res2 = document.getElementById("UT2__res")

  //something here
  const  num9 = parseInt(document.getElementById("MT2_1").value);
  const  num10 = parseInt(document.getElementById("MT2_2").value);
  const  num11 = parseInt(document.getElementById("MT2_3").value);
  const  num12 = parseInt(document.getElementById("MT2_4").value);
  const  res3 = document.getElementById("MT2__res");

  // something here
  const  num13 = parseInt(document.getElementById("DIS_1").value);
  const  num14 = parseInt(document.getElementById("DIS_2").value);
  const  num15 = parseInt(document.getElementById("DIS_3").value);
  const  num16 = parseInt(document.getElementById("DIS_4").value);
  const  res4 = document.getElementById("DIS__res");

  // formula 
  var scp_res = (num1 + num2 + num3+ num4) * 1
  res1.value = scp_res

  var ut_res = (num5 + num6 + num7+ num8) * 1
  res2.value = ut_res

  var mt_res = (num9 + num10 + num11+ num12) * 2
  res3.value = mt_res

  var dis_res = (num13 + num14 + num15+ num16) * 2
  res4.value = dis_res

  const le__finale = document.getElementById("panel__res")
  le__finale.value = parseInt(ut_res + scp_res + mt_res + dis_res)
}


///////////////////////////////////////////////////////////////////////////////////////////////////////

function click_me(){
  const ment_inp = document.getElementById('ment_inp').value
  const ment_inp1 = document.getElementById('ment_inp1').value
  const ment_inp2= document.getElementById('ment_inp2').value
  const ment_inp3 = document.getElementById('ment_inp3').value
  const res1 = document.getElementById('Mentor_scr1')
  if (ment_inp != "" && ment_inp1 != "" && ment_inp2 != "" && ment_inp3 != "" ){
      res1.value = 3;
  }else{ 
    res1.value = 0;}
  
    const ment_inp4 = document.getElementById('ment_inp4').value
  const ment_inp5 = document.getElementById('ment_inp5').value
  const ment_inp6= document.getElementById('ment_inp6').value
  const ment_inp7 = document.getElementById('ment_inp7').value
  const res2 = document.getElementById('Mentor_scr2');

  if (ment_inp4 != "" && ment_inp5 != "" && ment_inp6 != "" && ment_inp7 != "" ){
      res2.value = 3;
  }else{ 
    res2.value = 0;}

    const ment_inp8 = document.getElementById('ment_inp8').value
  const ment_inp9 = document.getElementById('ment_inp9').value
  const ment_inp10= document.getElementById('ment_inp10').value
  const ment_inp11 = document.getElementById('ment_inp11').value
  const res3 = document.getElementById('Mentor_scr3');
  if (ment_inp8 != "" && ment_inp9 != "" && ment_inp10 != "" && ment_inp11 != "" ){
      res3.value = 3;
  }else{ 
    res3.value = 0;}

  const ment_inp12 = document.getElementById('ment_inp12').value
  const ment_inp13 = document.getElementById('ment_inp13').value
  const ment_inp14 = document.getElementById('ment_inp14').value
  const ment_inp15 = document.getElementById('ment_inp15').value
  const res4 = document.getElementById('Mentor_scr4');

  if (ment_inp12 != "" && ment_inp13 != "" && ment_inp14 != "" && ment_inp15 != "" ){
      res4.value = 3;
  }else{ 
    res4.value = 0;}
    var res = parseInt(res1.value) + parseInt(res2.value) + parseInt(res3.value ) + parseInt(res4.value)
    document.getElementById('result').value = res
}



///////////////////////////////////////////////////////////////////////////////////////////////////////
//Parsing data from JS front-end to JSON file


</script>
</html>
