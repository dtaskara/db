var list=document.getElementById("list");
//list.innerHTML = "asd";


function showTable(arr){
	var listHTML = "";
	for(var i=0; i < arr.length; i++){
	listHTML += "<div class='list-item'>"
	+"<span><img src='"+arr[i].ava+"' height='40px'></span>"+
	"<span>"+arr[i].name+"</span>"+
	"<span>"+arr[i].contact+"</span>"+
	"<span>"+arr[i].price+"</span>"+
	"</span></div>";
	}
list.innerHTML=listHTML;
}
function getStudents(){
	$.ajax({
		method: "GET" ,
		url: "api/hotels/getAll.php",
	}).done(function(res){
		console.log(res);
		arr  = JSON.parse(res);
		showTable(arr);
	})
}
getStudents();
//showTable();

// function addStudent(e){
// 	e.preventDefault();
// 	var name=document.getElementById("student_name");
// 	var age=document.getElementById("student_age");
// 	var gpa=document.getElementById("student_gpa");
// 	var ava=document.getElementById("student_ava");

// 	var fm = new FormData();
// 	fm.append("name", name.value);
// 	fm.append("age", age.value);
// 	fm.append("gpa", gpa.value);
// 	fm.append("image", ava.files[0]);

// 	console.log(ava.files[0], fm);




// 	$.ajax({
// 		method: "POST",
// 		url: "api/students/save.php",
// 		data: fm,
// 		processData: false,
// 		contentType: false
// 	}).done(function(data){
// 		getStudents();
// 	})
// 	showModel();
// }
// function findStudents(){
// 	var search = $("#search").val();
// 	if(search.length>0){
// 		$.ajax({
// 			method: "GET",
// 			url: "api/students/search.php?key="+search
// 		}).done(function(data){
// 			data=JSON.parse(data);
// 			showTable(data);
// 		})
// 	}
// 	else
// 		getStudents();
// }

// function delStudent(e){
// 	arr.splice(e, 1);
// 	//showTable();
// }

// function editStudent(e){
// 	if(e==null){
// 		document.getElementById("editModal").style.display = "none";
// 	}
// 	else{
// 		var listHTML = "";
// 		listHTML = "<div class='list-item'>"+"<span>"+arr[i].id+"</span>"+
// 	"<span>"+arr[i].name+"</span>"+
// 	"<span>"+arr[i].age+"</span>"+
// 	"<span>"+arr[i].gpa+"</span>"+
// 	"<span><button class='button button-info' onclick='editStudent("+i+")''>Edit</button> "+
// 	"<button class='button button-danger' onclick='delStudent("+i+")'>DELETE</button> "+
// 	"</span></div>";

// 		document.getElementById("editModal").style.display = "flex";
// 	}
	
// }
// $(window).scroll(function(){
// 	if( ($(window).height()+$(window).scrollTop()>= $(document).height()-2)  ){
// 		console.log(1);
// 	}
// })