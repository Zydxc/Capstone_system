<?php
// !work the backend
if(isset($_POST['submit_btn']))
{
  // insert function here
}
else if(isset($_POST['cancel_btn']))
{
 header('location: dashboard.php');
}
else{}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/CSS/Global.css">
  <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmPodt5vh1lKwmlGvOSj3xeXqUp_TokegUQV_5WxVqgw&s">
  <title>FORM3_A&B</title>
</head>

<style>
  @font-face{
  font-family: Inter;
  src: url(./fonts/Inter-VariableFont_slnt\,wght.ttf);
}

* {
  margin: 0;
  padding: 0;
  font-family: Inter;
  text-decoration: none;
  align-items:  center;
}

table{
  margin: auto;
}

td{
  text-align: center; 
  background-color: #dbd7d7;
}

input{
  width: auto;
  height: auto;
}

body{
  background: url('./Assets/KRA_files_bg.jpg');
  background-size: cover;
}

.row__des td{
  padding: 10px;
  color: white;
  background-color: #7d0201;
  text-align: center;
}

.title{
  text-align: center;
}

.page_title{
  margin-left: 90px;
  padding: 15px;
  font-style: italic;
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
  font-size: 20px;
}
</style>

<body>

  <h1 class="title">CRITERION A - SERVICE TO THE INSTITUTION (MAX = 30 POINTS)</h1>
  <br><br><br> 
  <h2 class="page_title">1. For Every Successful Linkage, Networking Or Partnership Activity</h2>
  <table>
    <tr class="row__des">
      <td>Name of Partner</td>
      <td>Nature of Partnership</td>
      <td>Faculty role in the forging of partnership</td>
      <td colspan="2">MOA</td>
      <td>Activities conducted based on MOA</td>
      <td>Date of activity</td>
      <td>Faculty Score</td>
    </tr>

    <tr class="row__des">
      <td colspan="3"></td>
      <td>Start</td>
      <td>End</td>
        <td colspan="3"></td>
    </tr>

    <tr>
      <td><input id="FTE1" type="text"></td>
      <td><input id="FTE2" type="text"></td>
      <td>
        <select name="" id="FTE3">
          <option value="none">Select Option</option>
          <option value="lead">Lead Coordinator</option>
          <option value="assis">Assistant Coordinator</option>
        </select>
      </td>
      <td><input id="FTE4" type="date"></td>
      <td><input id="FTE5" type="date"></td>
      <td><input id="FTE6" type="text"></td>
      <td><input id="FTE7" type="date"></td>
      <td><input id="FTE_res1" disabled type="text"></td>
    </tr>

    <tr>
      <td><input id="FTE21" type="text"></td>
      <td><input id="FTE22" type="text"></td>
      <td>
        <select name="" id="FTE23">
          <option value="none">Select Option</option>
          <option value="lead">Lead Coordinator</option>
          <option value="assis">Assistant Coordinator</option>
        </select>
      </td>
      <td><input id="FTE24" type="date"></td>
      <td><input id="FTE25" type="date"></td>
      <td><input id="FTE26" type="text"></td>
      <td><input id="FTE27" type="date"></td>
      <td><input id="FTE_res2" disabled type="text"></td>
    </tr>

    <tr>
      <td><input id="FTE31" type="text"></td>
      <td><input id="FTE32" type="text"></td>
      <td>
        <select name="" id="FTE33">
          <option value="none">Select Option</option>
          <option value="lead">Lead Coordinator</option>
          <option value="assis">Assistant Coordinator</option>
        </select>
      </td>
      <td><input id="FTE34" type="date"></td>
      <td><input id="FTE35" type="date"></td>
      <td><input id="FTE36" type="text"></td>
      <td><input id="FTE37" type="date"></td>
      <td><input id="FTE_res3" disabled type="text"></td>
    </tr>
    
<tr>
  <td colspan="5"></td>
  <td><button onclick="Calcu_FTE()">Calculate</button></td>
  <td>Total: </td>
  <td><input name="" id="FTE_final_res" disabled type="text"></td>
</tr>
  </table>

<br><br><br>

  <h2  class="page_title">2. Total Contribution To Income Generation</h2>
  <table>

   <tr class="row__des">
    <td>Name of the Commercialized Product, <br>
    Funded Project, or Project with Industry</td>
    <td>Role</td>
    <td>Coverage Period <br>
    (mm/dd/yyyy to mm/dd/yyyy)</td>
    <td>Total Amount</td>
    <td>Faculty Points</td>
   </tr>

    <tr>
    <td><input id="TIG4" type="text"></td>
    <td>
      <select name="" id="TIG1">
        <option value="">Select Option</option>
        <option value="lead">Lead Coordinator</option>
        <option value="CO-cont">Co-contributor</option>
      </select>
    </td>
    <td><input id="TIG2" type="date"></td>
    <td><input id="TIG3" type="text"></td>
    <td><input id="TIG_res1" disabled type="text"></td>
   </tr>

   <tr>
    <td><input id="TIG24" type="text"></td>
    <td>
      <select name="" id="TIG21">
        <option value="">Select Option</option>
        <option value="lead">Lead Coordinator</option>
        <option value="CO-cont">Co-contributor</option>
      </select>
    </td>
    <td><input id="TIG22" type="date"></td>
    <td><input id="TIG23" type="text"></td>
    <td><input id="TIG_res2" disabled type="text"></td>
   </tr>

   <tr>
      <td><input id="TIG34" type="text"></td>
      <td>
        <select name="" id="TIG31">
          <option value="">Select Option</option>
          <option value="lead">Lead Coordinator</option>
          <option value="CO-cont">Co-contributor</option>
        </select>
      </td>
      <td><input id="TIG32" type="date"></td>
      <td><input id="TIG33" type="text"></td>
      <td><input id="TIG_res3" disabled type="text"></td>
   </tr>

   <td colspan="2"></td>
  <td><button onclick="calcu_TIG()">Calculate</button></td>
  <td>Total: </td>
  <td><input id="TIG_finale_res" disabled type="text"></td>
</tr>

  </table>

  <br><br><br><br><br>

  <h1 class="title">CRITERION B - SERVICE TO THE COMMUNITY (MAX = 50 POINTS)</h1>

  <br><br><br>

  <h2 class="page_title">1. Professional/expertise-based Services</h2>
  <h2 class="page_title">1.1 Services In Accreditation, Evaluation, Assessment Works And Other Related Education Qa Activities</h2>
  <table>
    <tr class="row__des">
      <td>Name of Agency/Organization</td>
      <td colspan="2">Appointment Period</td>
      <td>QA-related Services Provided</td>
      <td>Scope</td>
      <td>No. of Deployment</td>
      <td>Faculty Points</td>
    </tr>

    <tr class="row__des">
      <td></td>
      <td>Start</td>
      <td>End</td>
      <td colspan="4"></td>
    </tr>

    <tr>
      <td><input id="PBS1" type="text"></td>
      <td><input id="PBS2" type="date"></td>
      <td><input id="PBS3" type="date"></td>
      <td><input id="PBS4" type="text"></td>
      <td>
        <select name="" id="PBS5">
          <option value="none">Select Option</option>
          <option value="local">Local</option>
          <option value="Int">International</option>
        </select>
      </td>
      <td><input id="PBS6" type="text"></td>
      <td><input id="res_PBS1" disabled type="text"></td>
    </tr>

    <tr>
      <td><input id="PBS21" type="text"></td>
      <td><input id="PBS22" type="date"></td>
      <td><input id="PBS23" type="date"></td>
      <td><input id="PBS24" type="text"></td>
      <td>
        <select name="" id="PBS25">
          <option value="none">Select Option</option>
          <option value="local">Local</option>
          <option value="Int">International</option>
        </select>
      </td>
      <td><input id="PBS26" type="text"></td>
      <td><input id="res_PBS27" disabled type="text"></td>
    </tr>

    <tr>
      <td><input id="PBS31" type="text"></td>
      <td><input id="PBS32" type="date"></td>
      <td><input id="PBS33" type="date"></td>
      <td><input id="PBS34" type="text"></td>
      <td>
        <select name="" id="PBS35">
          <option value="none">Select Option</option>
          <option value="local">Local</option>
          <option value="Int">International</option>
        </select>
      </td>
      <td><input id="PBS36" type="text"></td>
      <td><input id="res_PBS37" disabled type="text"></td>
    </tr>

    <tr>
  <td colspan="4"></td>
  <td><button onclick="PBS__1()">Calculate</button></td>
  <td>Total: </td>
  <td><input id="final_res_PBS1" disabled type="text"></td>
</tr>
  </table>

<br><br><br>

  <h2 class="page_title">1.2 Services As Judge Or Examiner For Local/international Research Awards And Academic Competitions</h2>
  <table>
    <tr class="row__des">
      <td>Title of the Event/Activity</td>
      <td>Organizer</td>
      <td>Date of Event <br>
        (mm/dd/yyyy)</td>
      <td>Nature of the Award</td>
      <td>Venue</td>
      <td>Faculty Points</td>
    </tr>

    <tr>
      <td><input id="basta1" type="text"></td>
      <td><input id="basta2" type="text"></td>
      <td><input id="basta3" type="date"></td>
      <td><input id="basta4" type="text"></td>
      <td><input id="basta5" type="text"></td>
      <td><input id="res_basta6" disabled type="text"></td>
    </tr>

    <tr>
      <td><input id="basta21" type="text"></td>
      <td><input id="basta22" type="text"></td>
      <td><input id="basta23" type="date"></td>
      <td><input id="basta24" type="text"></td>
      <td><input id="basta25" type="text"></td>
      <td><input id="res_basta26" disabled type="text"></td>
    </tr>

    <tr>
      <td><input id="basta221" type="text"></td>
      <td><input id="basta222" type="text"></td>
      <td><input id="basta223" type="date"></td>
      <td><input id="basta224" type="text"></td>
      <td><input id="basta252" type="text"></td>
      <td><input id="res_basta262" disabled type="text"></td>
    </tr>

    <tr>
      <td><input id="basta134" type="text"></td>
      <td><input id="basta234" type="text"></td>
      <td><input id="basta334" type="date"></td>
      <td><input id="basta434" type="text"></td>
      <td><input id="basta534" type="text"></td>
      <td><input id="res_basta634" disabled type="text"></td>
    </tr>

    <tr>
  <td colspan="3"></td>
  <td><button onclick="PBS_2()">Calculate</button></td>
  <td>Total: </td>
  <td><input id="finale_res_PBS2" disabled type="text"></td>
</tr>
  </table>

  <br><br><br>

  <h2 class="page_title">1.3 For Services As A Short-term Consultant/expert</h2>
  <table>
    <tr class="row__des">
      <td>Title of the Project/Consultancy</td>
      <td>Name of Organization</td>
      <td colspan="2">Period of Engagement</td>
      <td>Scope</td>
      <td>Role</td>
      <td>Faculty Points</td>
    </tr>

    <tr class="row__des">
      <td colspan="2"></td>
      <td>Start</td>
      <td>End</td>
      <td colspan="3"></td>
    </tr>

    <tr>
      <td><input id="FSAASC1" type="text"></td>
      <td><input id="FSAASC2" type="text"></td>
      <td><input id="FSAASC3" type="date"></td>
      <td><input id="FSAASC4" type="date"></td>
      <td>
        <select name="" id="FSAASC5">
          <option value="">Select Option</option>
          <option value="">Local</option>
          <option value="">International</option>
        </select>
      </td>
      <td><input id="FSAASC6" type="text"></td>
      <td><input id="res_FSAASC7" disabled type="text"></td>
    </tr>

    <tr>
      <td><input id="FSAASC12" type="text"></td>
      <td><input id="FSAASC23" type="text"></td>
      <td><input id="FSAASC34" type="date"></td>
      <td><input id="FSAASC45" type="date"></td>
      <td>
        <select name="" id="FSAASC56">
          <option value="">Select Option</option>
          <option value="">Local</option>
          <option value="">International</option>
        </select>
      </td>
      <td><input id="FSAASC67" type="text"></td>
      <td><input id="res_FSAASC77" disabled type="text"></td>
    </tr>

    <tr>
      <td><input id="FSAASC91" type="text"></td>
      <td><input id="FSAASC92" type="text"></td>
      <td><input id="FSAASC39" type="date"></td>
      <td><input id="FSAASC94" type="date"></td>
      <td>
        <select name="" id="FSAASC95">
          <option value="">Select Option</option>
          <option value="">Local</option>
          <option value="">International</option>
        </select>
      </td>
      <td><input id="FSAASC96" type="text"></td>
      <td><input id="res_FSAASC97" disabled type="text"></td>
    </tr>

    <tr>
  <td colspan="4"></td>
  <td><button onclick="calcue_FSAASC()">Calculate</button></td>
  <td>Total: </td>
  <td><input id="finale_res_FSAASC" disabled type="text"></td>
</tr>
  </table>

  <br><br><br>

  <h2 class="page_title">1.4 Services Through Media As:</h2>
  <table>
    <tr class="row__des">
      <td>Services</td>
      <td>Name of Media</td>
      <td>Title of Newspaper Column or TV/Radio Program</td>
      <td>Period of Engagement <br>
        (mm/dd/yyyy to mm/dd/yyyy)</td>
      <td>No. of engagements</td>
    </tr>

    <tr>
      <td>Writer of occasional newspaper column</td>
      <td><input id="STMA1" type="text"></td>
      <td><input id="STMA2" type="text"></td>
      <td><input id="STMA3" type="text"></td>
      <td><input id="res_STMA4" disabled type="text"></td>
    </tr>

    <tr>
      <td>Writer of regular newspaper column</td>
      <td><input id="STMA21" type="text"></td>
      <td><input id="STMA22" type="text"></td>
      <td><input disabled id="" type="text"></td>
      <td><input id="res_STMA24" disabled type="text"></td>
    </tr>


    <tr>
      <td>Host of TV/Radio Program</td>
      <td><input id="STMA31" type="text"></td>
      <td><input id="STMA32" type="text"></td>
      <td><input disabled id="" type="text"></td>
      <td><input id="res_STMA34" disabled type="text"></td>
    </tr>


    <tr>
      <td>Guesting as technical expert for TV or radio program/print media/online media</td>
      <td><input id="STMA41" type="text"></td>
      <td><input id="STMA42" type="text"></td>
      <td><input id="STMA43" type="text"></td>
      <td><input id="res_STMA44" disabled type="text"></td>
    </tr>


    <tr>
  <td colspan="2"></td>
  <td><button onclick="calcu_STMA()">Calculate</button></td>
  <td>Total: </td>
  <td><input id="finale_res_STMA" disabled type="text"></td>
</tr>
  </table>
<br><br><br>

  <h2 class="page_title">1.5 For Every Hour Of Training Course, Seminar, Workshop Conducted As A Resource Person, Convenor, Facilitator, Moderator, Keynote/plenary Speaker Or Panelist</h2>
  <table>
    <tr class="row__des">
      <td>Title of the Training</td>
      <td>Type of Participation</td>
      <td>Organizer</td>
      <td colspan="2">Period of Engagement</td>
      <td>Scope</td>
      <td>Total No. of Hours</td>
      <td>Faculty Points</td>
    </tr>

    <tr class="row__des">
      <td colspan="3"></td>
      <td>Start Date</td>
      <td>End Date</td>
      <td colspan="3"></td>
    </tr>

    <tr>
      <td><input id="FFDCS1" type="text"></td>
      <td><input id="FFDCS2" type="text"></td>
      <td><input id="FFDCS3" type="text"></td>
      <td><input id="FFDCS4" type="date" id=""></td>
      <td><input type="date" id="FFDCS5"></td>
      <td>
        <select name="" id="FFDCS6">
          <option value="">Select Option</option>
          <option value="">Local</option>
          <option value="">International</option>
        </select>
      </td>
      <td><input id="FFDCS7" type="text"></td>
      <td><input id="res_FFDCS1" disabled type="text"></td>
    </tr>

    <tr>
      <td><input id="FFDCS12" type="text"></td>
      <td><input id="FFDCS22" type="text"></td>
      <td><input id="FFDCS32" type="text"></td>
      <td><input id="FFDCS42" type="date" id=""></td>
      <td><input type="date" id="FFDCS52"></td>
      <td>
        <select name="" id="FFDCS62">
          <option value="">Select Option</option>
          <option value="">Local</option>
          <option value="">International</option>
        </select>
      </td>
      <td><input id="FFDCS72" type="text"></td>
      <td><input id="res_FFDCS12" disabled type="text"></td>
    </tr>

    <tr>
      <td><input id="FFDCS13" type="text"></td>
      <td><input id="FFDCS23" type="text"></td>
      <td><input id="FFDCS33" type="text"></td>
      <td><input id="FFDCS43" type="date" id=""></td>
      <td><input type="date" id="FFDCS53"></td>
      <td>
        <select name="" id="FFDCS63">
          <option value="">Select Option</option>
          <option value="">Local</option>
          <option value="">International</option>
        </select>
      </td>
      <td><input id="FFDCS73" type="text"></td>
      <td><input id="res_FFDCS13" disabled type="text"></td>
    </tr>

    <tr>
  <td colspan="5"></td>
  <td><button onclick="calcu__HFOOTRT()">Calculate</button></td>
  <td>Total: </td>
  <td><input id="finale_res_HFOOTRT" disabled type="text"></td>
</tr>
  </table>

<br><br><br>

  <h2 class="page_title">2. Institutional Social Responsibility</h2>
  <h2 class="page_title">2.1 For Every Service-oriented Project In The Community Participated, Including Advocacy Initiatives</h2>
  <table>
    <tr class="row__des">
      <td>Name of Community Extension Activity</td>
      <td>Name of Community</td>
      <td>No. of Beneficiaries</td>
      <td>Role</td>
      <td>Activity Date <br>
        (mm/dd/yyyy)</td>
      <td>Faculty Points</td>
    </tr>

    <tr>
      <td><input id="ISS1" type="text"></td>
      <td><input id="ISS2" type="text"></td>
      <td><input id="ISS3" type="text"></td>
      <td>
        <select id="ISS4">
          <option value="none">Select Option</option>
          <option value="Head">Head</option>
          <option value="Participant">Participant</option>
        </select>
      </td>
      <td><input id="ISS5" type="text"></td>
      <td><input id="res_ISS6" type="text" disabled></td>
    </tr>

    <tr>
      <td><input id="ISS21" type="text"></td>
      <td><input id="ISS22" type="text"></td>
      <td><input id="ISS23" type="text"></td>
      <td>
        <select id="ISS24">
        <option value="none">Select Option</option>
          <option value="Head">Head</option>
          <option value="Participant">Participant</option>
        </select>
      </td>
      <td><input id="ISS25" type="text"></td>
      <td><input id="res_ISS26" type="text" disabled></td>
    </tr>

    <tr>
      <td><input id="ISS213" type="text"></td>
      <td><input id="ISS223" type="text"></td>
      <td><input id="ISS233" type="text"></td>
      <td>
        <select id="ISS243">
          <option value="none">Select Option</option>
          <option value="Head">Head</option>
          <option value="Participant">Participant</option>
        </select>
      </td>
      <td><input id="ISS253" type="text"></td>
      <td><input id="res_ISS263" type="text" disabled></td>
    </tr>

    <tr>
      <td><input id="ISS314" type="text"></td>
      <td><input id="ISS324" type="text"></td>
      <td><input id="ISS334" type="text"></td>
      <td>
        <select id="ISS344">
          <option value="none">Select Option</option>
          <option value="Head">Head</option>
          <option value="Participant">Participant</option>
        </select>
      </td>
      <td><input id="ISS354" type="text"></td>
      <td><input id="res_ISS364" type="text" disabled></td>
    </tr>
  <td colspan="3"></td>
  <td><button onclick="calcu__retro()">Calculate</button></td>
  <td>Total: </td>
  <td><input id="res_finale_ISS" disabled type="text"></td>
</tr>

  </table>
  <br><br>
<form method="post" class="form__btns">
  <button name="submit_btn">Submit</button>
  <button name="cancel_btn">Cancel</button>
</form>
</body>

<script>
  function Calcu_FTE()
{
  const var1 = document.getElementById('FTE1').value
  const var2 = document.getElementById('FTE2').value
  const var3 = document.getElementById('FTE3').value
  const var4 = document.getElementById('FTE4').value
  const var5 = document.getElementById('FTE5').value
  const var6 = document.getElementById('FTE6').value
  const var7 = document.getElementById('FTE7').value
  const the_Res1 = document.getElementById('FTE_res1')
  if(var1!="" && var2!="" && var3!="" && var4!="" &&var5!="" && var6!=""){the_Res1.value = 20}
  else{the_Res1.value = 0;}

  const test21 = document.getElementById('FTE21').value
  const test22 = document.getElementById('FTE22').value
  const test23 = document.getElementById('FTE23').value
  const test24 = document.getElementById('FTE24').value
  const test25 = document.getElementById('FTE25').value
  const test26 = document.getElementById('FTE26').value
  const test27 = document.getElementById('FTE27').value
  const the_Res2 = document.getElementById('FTE_res2')
  if(test21!="" &&test22!="" &&test23!="" &&test24!="" &&test25!="" &&test26!=""){the_Res2.value = 20}
  else{the_Res2.value = 0;}

  const fgh31 = document.getElementById('FTE31').value
  const fgh32 = document.getElementById('FTE32').value
  const fgh33 = document.getElementById('FTE33').value
  const fgh34 = document.getElementById('FTE34').value
  const fgh35 = document.getElementById('FTE35').value
  const fgh36 = document.getElementById('FTE36').value
  const fgh37 = document.getElementById('FTE37').value
  const the_Res3 = document.getElementById('FTE_res3')
  if(fgh31!="" &&fgh32!="" &&fgh33!="" &&fgh34!="" &&fgh36!="" &&fgh37!="" &&fgh35!="" ){the_Res3.value = 20}
  else{the_Res3.value = 0;}
  
  document.getElementById('FTE_final_res').value = parseInt(the_Res2.value)+parseInt(the_Res3.value)+parseInt(the_Res1.value)
}


function calcu_TIG()
{
  const var1 = document.getElementById('TIG1').value
  const var2 = document.getElementById('TIG2').value
  const var3 = document.getElementById('TIG3').value
  const var4 = document.getElementById('TIG4').value
  const the_Res1 = document.getElementById('TIG_res1')
  if(var1!="" && var2!="" && var3!="" && var4!=""){the_Res1.value = 20}
  else{the_Res1.value = 0;}

  const test21 = document.getElementById('TIG24').value
  const test22 = document.getElementById('TIG21').value
  const test23 = document.getElementById('TIG23').value
  const test24 = document.getElementById('TIG22').value
  const the_Res2 = document.getElementById('TIG_res2')
  if(test21!="" &&test22!="" &&test23!="" &&test24!=""){the_Res2.value = 20}
  else{the_Res2.value = 0;}


  const fgh31 = document.getElementById('TIG21').value
  const fgh32 = document.getElementById('TIG32').value
  const fgh33 = document.getElementById('TIG33').value
  const fgh34 = document.getElementById('TIG34').value
  const the_Res3 = document.getElementById('TIG_res3')
  if(test21!="" &&test22!="" &&test23!="" &&test24!=""){the_Res3.value = 20}
  else{the_Res3.value = 0;}
  
  document.getElementById('TIG_finale_res').value = parseInt(the_Res2.value)+parseInt(the_Res3.value)+parseInt(the_Res1.value)
}

function PBS__1()
{
  const var1 = document.getElementById('PBS1').value
  const var2 = document.getElementById('PBS2').value
  const var3 = document.getElementById('PBS3').value
  const var4 = document.getElementById('PBS4').value
  const var5 = document.getElementById('PBS5').value
  const var6 = document.getElementById('PBS6').value
  const the_Res1 = document.getElementById('res_PBS1')
  if(var1!="" && var2!="" && var3!="" && var4!="" &&var5!="" && var6!=""){the_Res1.value = 20}
  else{the_Res1.value = 0;}

  const test21 = document.getElementById('PBS21').value
  const test22 = document.getElementById('PBS22').value
  const test23 = document.getElementById('PBS23').value
  const test24 = document.getElementById('PBS24').value
  const test25 = document.getElementById('PBS25').value
  const test26 = document.getElementById('PBS26').value
  const the_Res2 = document.getElementById('res_PBS27')
  if(test21!="" &&test22!="" &&test23!="" &&test24!="" &&test25!="" &&test26!=""){the_Res2.value = 20}
  else{the_Res2.value = 0;}


  const fgh31 = document.getElementById('PBS31').value
  const fgh32 = document.getElementById('PBS32').value
  const fgh33 = document.getElementById('PBS33').value
  const fgh34 = document.getElementById('PBS34').value
  const fgh35 = document.getElementById('PBS35').value
  const fgh36 = document.getElementById('PBS36').value
  const the_Res3 = document.getElementById('res_PBS37')
  if(test21!="" &&test22!="" &&test23!="" &&test24!="" &&test25!="" &&test26!=""){the_Res3.value = 20}
  else{the_Res3.value = 0;}
  
  document.getElementById('final_res_PBS1').value = parseInt(the_Res2.value)+parseInt(the_Res3.value)+parseInt(the_Res1.value)
}


function PBS_2()
{
  const var1 = document.getElementById('basta1').value
  const var2 = document.getElementById('basta2').value
  const var3 = document.getElementById('basta3').value
  const var4 = document.getElementById('basta4').value
  const var5 = document.getElementById('basta5').value
  const the_Res1 = document.getElementById('res_basta6')
  if(var1!="" && var2!="" && var3!="" && var4!="" &&var5!=""){the_Res1.value = 20}
  else{the_Res1.value = 0;}

  const test21 = document.getElementById('basta21').value
  const test22 = document.getElementById('basta22').value 
  const test23 = document.getElementById('basta23').value
  const test24 = document.getElementById('basta24').value
  const test25 = document.getElementById('basta25').value
  const the_Res2 = document.getElementById('res_basta26')
  if(test21!="" &&test22!="" &&test23!="" &&test24!="" &&test25!=""){the_Res2.value = 20}
  else{the_Res2.value = 0;}


  const fgh31 = document.getElementById('basta221').value
  const fgh32 = document.getElementById('basta222').value
  const fgh33 = document.getElementById('basta223').value
  const fgh34 = document.getElementById('basta224').value
  const fgh35 = document.getElementById('basta252').value
  const the_Res3 = document.getElementById('res_basta262')
  if(fgh31!="" &&fgh32!="" &&fgh33!="" &&fgh34!="" &&fgh35!=""){the_Res3.value = 20}
  else{the_Res3.value = 0;}

  const qwerrt1 = document.getElementById('basta134').value
  const qwerrt2 = document.getElementById('basta234').value
  const qwerrt3 = document.getElementById('basta334').value
  const qwerrt4 = document.getElementById('basta434').value
  const qwerrt5 = document.getElementById('basta534').value
  const the_Res4 = document.getElementById('res_basta634')
  if(qwerrt1!="" &&qwerrt2!="" &&qwerrt3!="" &&qwerrt5!="" &&qwerrt4!="" &&qwerrt6!=""){the_Res3.value = 20}
  else{the_Res4.value = 0;}
  
  document.getElementById('finale_res_PBS2').value = parseInt(the_Res2.value)+parseInt(the_Res3.value)+parseInt(the_Res1.value)+parseInt(the_Res4.value)
}

function calcue_FSAASC()
{
  const var1 = document.getElementById('FSAASC1').value
  const var2 = document.getElementById('FSAASC2').value
  const var3 = document.getElementById('FSAASC3').value
  const var4 = document.getElementById('FSAASC4').value
  const var5 = document.getElementById('FSAASC5').value
  const var6 = document.getElementById('FSAASC6').value
  const the_Res1 = document.getElementById('res_FSAASC7')
  if(var1!="" && var2!="" && var3!="" && var4!="" &&var5!="" && var6!=""){the_Res1.value = 10}
  else{the_Res1.value = 0;}

  const test21 = document.getElementById('FSAASC12').value
  const test22 = document.getElementById('FSAASC23').value
  const test23 = document.getElementById('FSAASC34').value
  const test24 = document.getElementById('FSAASC45').value
  const test25 = document.getElementById('FSAASC56').value
  const test26 = document.getElementById('FSAASC67').value
  const the_Res2 = document.getElementById('res_FSAASC77')
  if(test21!="" &&test22!="" &&test23!="" &&test24!="" &&test25!="" &&test26!=""){the_Res2.value = 10}
  else{the_Res2.value = 0;}


  const fgh31 = document.getElementById('FSAASC91').value
  const fgh32 = document.getElementById('FSAASC92').value
  const fgh33 = document.getElementById('FSAASC39').value
  const fgh34 = document.getElementById('FSAASC94').value
  const fgh35 = document.getElementById('FSAASC95').value
  const fgh36 = document.getElementById('FSAASC96').value
  const the_Res3 = document.getElementById('res_FSAASC97')
  if(fgh31!="" &&fgh32!="" &&fgh33!="" &&fgh34!="" &&fgh35!="" &&fgh36!=""){the_Res3.value = 10}
  else{the_Res3.value = 0;}

  document.getElementById('finale_res_FSAASC').value = parseInt(the_Res2.value)+parseInt(the_Res3.value)+parseInt(the_Res1.value)
}


function calcu_STMA()
{
  const var1 = document.getElementById('STMA1').value
  const var2 = document.getElementById('STMA2').value
  const var3 = document.getElementById('STMA3').value
  const the_Res1 = document.getElementById('res_STMA4')
  if(var1!="" && var2!="" && var3!=""){the_Res1.value = 2}
  else{the_Res1.value = 0;}

  const test21 = document.getElementById('STMA21').value
  const test22 = document.getElementById('STMA22').value
  const the_Res2 = document.getElementById('res_STMA24')
  if(test21!="" &&test22!=""){the_Res2.value = 10}
  else{the_Res2.value = 0;}


  const fgh31 = document.getElementById('STMA31').value
  const fgh32 = document.getElementById('STMA32').value
  const the_Res3 = document.getElementById('res_STMA34')
  if(fgh31!="" &&fgh32!=""){the_Res3.value = 10}
  else{the_Res3.value = 0;}
  
  // !below codeblock nmot working idk why
  const qwerrt1 = document.getElementById('STMA41').value
  const qwerrt2 = document.getElementById('STMA42').value
  const qwerrt3 = document.getElementById('STMA43').value
  const the_Res4 = document.getElementById('res_STMA44')
  if(qwerrt1!="" &&qwerrt2!="" &&qwerrt3!=""){the_Res4.value = 1}
  else{the_Res4.value = 0;}

  document.getElementById('finale_res_STMA').value = parseInt(the_Res2.value)+parseInt(the_Res3.value)+parseInt(the_Res1.value)+parseInt(the_Res4.value)
}

function calcu__HFOOTRT()
{
  const var1 = document.getElementById('FFDCS1').value
  const var2 = document.getElementById('FFDCS2').value
  const var3 = document.getElementById('FFDCS3').value
  const var4 = document.getElementById('FFDCS4').value
  const var5 = document.getElementById('FFDCS5').value
  const var6 = document.getElementById('FFDCS6').value
  const var7 = document.getElementById('FFDCS7').value
  const the_Res1 = document.getElementById('res_FFDCS1')
  if(var1!="" && var2!="" && var3!="" && var4!="" &&var5!="" && var6!=""&&var7!=""){the_Res1.value = 20}
  else{the_Res1.value = 0;}

  const test21 = document.getElementById('FFDCS12').value
  const test22 = document.getElementById('FFDCS22').value
  const test23 = document.getElementById('FFDCS32').value
  const test24 = document.getElementById('FFDCS42').value
  const test25 = document.getElementById('FFDCS52').value
  const test26 = document.getElementById('FFDCS62').value
  const test27 = document.getElementById('FFDCS72').value
  const the_Res2 = document.getElementById('res_FFDCS12')
  if(test21!="" &&test22!="" &&test23!="" &&test24!="" &&test25!="" &&test26!=""&&test27!="" ){the_Res2.value = 20}
  else{the_Res2.value = 0;}

  const fgh31 = document.getElementById('FFDCS13').value
  const fgh32 = document.getElementById('FFDCS23').value
  const fgh33 = document.getElementById('FFDCS33').value
  const fgh34 = document.getElementById('FFDCS43').value
  const fgh35 = document.getElementById('FFDCS53').value
  const fgh36 = document.getElementById('FFDCS63').value
  const fgh37 = document.getElementById('FFDCS73').value
  const the_Res3 = document.getElementById('res_FFDCS13')
  if(fgh31!="" &&fgh32!="" &&fgh33!="" &&fgh34!="" &&fgh35!="" &&fgh36!=""&&fgh37!=""){the_Res3.value = 20}
  else{the_Res3.value = 0;}
  document.getElementById('finale_res_HFOOTRT').value = parseInt(the_Res2.value)+parseInt(the_Res3.value)+parseInt(the_Res1.value)
}


function calcu__retro()  //! this shit aint working
{
  const var1 = document.getElementById('ISS1').value
  const var2 = document.getElementById('ISS2').value
  const var3 = document.getElementById('ISS3').value
  const var4 = document.getElementById('ISS4').value
  const var5 = document.getElementById('ISS5').value
  const the_Res1 = document.getElementById('res_ISS6')
  console.log(the_Res1.value)

  if(var1!="" && var2!="" && var3!="" && var4!="" &&var5!=""){the_Res1.value = 20}
  else{the_Res1.value = 0;}

  const test21 = document.getElementById('ISS21').value
  const test22 = document.getElementById('ISS22').value
  const test23 = document.getElementById('ISS23').value
  const test24 = document.getElementById('ISS24').value
  const test25 = document.getElementById('ISS25').value
  const the_Res2 = document.getElementById('res_ISS26')
  if(test21!="" &&test22!="" &&test23!="" &&test24!="" &&test25!=""){the_Res2.value = 20}
  else{the_Res2.value = 0;}


  const fgh31 = document.getElementById('ISS213').value
  const fgh32 = document.getElementById('ISS223').value
  const fgh33 = document.getElementById('ISS233').value
  const fgh34 = document.getElementById('ISS243').value
  const fgh35 = document.getElementById('ISS253').value
  const the_Res3 = document.getElementById('res_ISS263')
  if(fgh31!="" &&fgh32!="" &&fgh33!="" &&fgh34!="" &&fgh35!=""){the_Res3.value = 20}
  else{the_Res3.value = 0;}

  const qwerrt1 = document.getElementById('ISS314').value
  const qwerrt2 = document.getElementById('ISS324').value
  const qwerrt3 = document.getElementById('ISS334').value
  const qwerrt4 = document.getElementById('ISS344').value
  const qwerrt5 = document.getElementById('ISS354').value
  const the_Res4 = document.getElementById('res_ISS364')
  if(qwerrt1!="" &&qwerrt2!="" &&qwerrt3!="" &&qwerrt5!="" &&qwerrt4!=""){the_Res3.value = 20}
  else{the_Res4.value = 0;}

  document.getElementById('res_finale_ISS').value = parseInt(the_Res2.value)+parseInt(the_Res3.value)+parseInt(the_Res1.value)+parseInt(the_Res4.value)
}

</script>

</html>



