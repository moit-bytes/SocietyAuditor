var left_nav_1 = document.getElementById('left_nav_1');
var left_nav_2 = document.getElementById('left_nav_2');
var left_nav_3 = document.getElementById('left_nav_3');
var left_nav_4 = document.getElementById('left_nav_4');
var left_nav_5 = document.getElementById('left_nav_5');
var left_nav_6 = document.getElementById('left_nav_6');

var dash_1 = document.getElementById('dash_1');
var dash_2 = document.getElementById('dash_2');
var dash_3 = document.getElementById('dash_3');
var dash_4 = document.getElementById('dash_4');
var dash_5 = document.getElementById('dash_5');
var dash_6 = document.getElementById('dash_6');

left_nav_1.addEventListener("click", func_1);
left_nav_2.addEventListener("click", func_2);
left_nav_3.addEventListener("click", func_3);
left_nav_4.addEventListener("click", func_4);
left_nav_5.addEventListener("click", func_5);
left_nav_6.addEventListener("click", func_6);


function make_nav_active(elem)
{
  elem.classList.add('has-background-primary');
  elem.classList.add('is-active');
}

function remove_nav_active()
{
  left_nav_1.classList.remove('is-active');
  left_nav_2.classList.remove('is-active');
  left_nav_3.classList.remove('is-active');
  left_nav_4.classList.remove('is-active');
  left_nav_5.classList.remove('is-active');
  left_nav_6.classList.remove('is-active');
  

  left_nav_1.classList.remove('has-background-primary');
  left_nav_2.classList.remove('has-background-primary');
  left_nav_3.classList.remove('has-background-primary');
  left_nav_4.classList.remove('has-background-primary');
  left_nav_5.classList.remove('has-background-primary');
  left_nav_6.classList.remove('has-background-primary');

}

function func_1()
{
  remove_nav_active();
  make_nav_active(left_nav_1);
  dash_1.style.display = "block";
  dash_3.style.display = "none";
  dash_2.style.display = "none";
  dash_4.style.display = "none";
  dash_5.style.display = "none";
  dash_6.style.display = "none";
}

function func_2()
{
  remove_nav_active();
  make_nav_active(left_nav_2);
  dash_2.style.display = "block";
  dash_1.style.display = "none";
  dash_3.style.display = "none";
  dash_4.style.display = "none";
  dash_5.style.display = "none";
  dash_6.style.display = "none";
}
function func_3()
{
  remove_nav_active();
  make_nav_active(left_nav_3);
  dash_1.style.display = "none";
  dash_2.style.display = "none";
  dash_3.style.display = "block";
  dash_4.style.display = "none";
  dash_5.style.display = "none";
  dash_6.style.display = "none";
}
function func_4()
{
  remove_nav_active();
  make_nav_active(left_nav_4);
  dash_1.style.display = "none";
  dash_2.style.display = "none";
  dash_3.style.display = "none";
  dash_4.style.display = "block";
  dash_5.style.display = "none";
  dash_6.style.display = "none";
}

function func_5()
{
  remove_nav_active();
  make_nav_active(left_nav_5);
  dash_1.style.display = "none";
  dash_2.style.display = "none";
  dash_3.style.display = "none";
  dash_4.style.display = "none";
  dash_5.style.display = "block";
  dash_6.style.display = "none";
}

function func_6()
{
  remove_nav_active();
  make_nav_active(left_nav_6);
  dash_1.style.display = "none";
  dash_2.style.display = "none";
  dash_3.style.display = "none";
  dash_4.style.display = "none";
  dash_5.style.display = "none";
  dash_6.style.display = "block";
}


// Handling Complaint Resolvements

var complaints = document.getElementsByClassName('complaint-resolve');
    Array.from(complaints).forEach((element) => {
      element.addEventListener("click", (e) => {
        tr = e.target.parentNode.parentNode;
        t1 = tr.getElementsByTagName("td")[1].innerText;
        t2 = tr.getElementsByTagName("td")[2].innerText;
        t3 = tr.getElementsByTagName("td")[3].innerText;
        complaintView.value = parseInt(e.target.id);
        complaint_sub.value = t1;
        complaint_desc.value = t2;
        complaint_stat.value = t3;
      })
    })

// Handling Notices

var edit_notices = document.getElementsByClassName('edit-notice');
    Array.from(edit_notices).forEach((element) => {
      element.addEventListener("click", (e) => {
        tr = e.target.parentNode.parentNode;
        t1 = tr.getElementsByTagName("td")[1].innerText;
        t2 = tr.getElementsByTagName("td")[2].innerText;
        noticeEdit.value = parseInt(e.target.id);
        edit_notice_title.value = t1;
        edit_notice_desc.value = t2;
      })
    })

var notice_deletes = document.getElementsByClassName('delete-notice');
    Array.from(notice_deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("delete ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this notice?")) {
          console.log("yes");
          window.location = `/Society_Auditor/admin_dashboard.php?noticeDelete=${sno}`;
        }
        else {
          console.log("no");
        }
      })
    })
    

//Handling Security Cameras

var edit_cams = document.getElementsByClassName('edit-cctv');
    Array.from(edit_cams).forEach((element) => {
      element.addEventListener("click", (e) => {
        tr = e.target.parentNode.parentNode;
        t1 = tr.getElementsByTagName("td")[2].innerText;
        t2 = tr.getElementsByTagName("td")[3].innerText;
        camsEdit.value = parseInt(e.target.id);
        edit_cam_location.value = t1;
        edit_cam_status.value = t2;
      })
    })

var cams_deletes = document.getElementsByClassName('delete-cctv');
    Array.from(cams_deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("delete ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to remove this CCTV?")) {
          console.log("yes");
          window.location = `/Society_Auditor/admin_dashboard.php?camsDelete=${sno}`;
        }
        else {
          console.log("no");
        }
      })
    })

//Handling Security Staff

var edit_staff = document.getElementsByClassName('edit-staff');
    Array.from(edit_staff).forEach((element) => {
      element.addEventListener("click", (e) => {
        tr = e.target.parentNode.parentNode;
        t1 = tr.getElementsByTagName("td")[2].innerText;
        t2 = tr.getElementsByTagName("td")[3].innerText;
        t3 = tr.getElementsByTagName("td")[4].innerText;
        t4 = tr.getElementsByTagName("td")[5].innerText;

        staffEdit.value = parseInt(e.target.id);
        edit_staff_name.value = t1;
        edit_staff_salary.value = t2;
        edit_staff_type.value = t3;
        edit_staff_shift.value = t4;

      })
    })

var staff_deletes = document.getElementsByClassName('delete-staff');
    Array.from(staff_deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("delete ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to remove this staff?")) {
          console.log("yes");
          window.location = `/Society_Auditor/admin_dashboard.php?staffDelete=${sno}`;
        }
        else {
          console.log("no");
        }
      })
    })    