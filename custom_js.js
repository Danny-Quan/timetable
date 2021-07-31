//selecting table
const table_data= document.querySelector('.table >tbody');
const button= document.querySelector('.ttb_btn'); 
const eMessage= document.querySelector('.errorMessage');
const sMessage= document.querySelector('.successful-message');
eMessage.style="display:none;";
sMessage.style="display:none;";

//creating xmlhttpRequest instance
function loadJson(a){
var request= new XMLHttpRequest();
request.open('GET','data.json',true);
request.onload= function(){
    if(this.status==200){
        try{
            var result= JSON.parse(this.response);
            var output='';
//console.log(result[a]);
            for(var i=0; i<result[a].length; i++){
                eMessage.style="display:none;";
                var totalOutput= "<tr>"+output+"</tr>";
            totalOutput += '<td>'+result[a][i].day+'</td>';
            result[a][i].courses_venue.forEach((cur)=>{
            totalOutput += '<td>'+cur.course+ '<br>';
                course_name= cur.c_name;
            if(course_name === undefined){
                //console.log('hello');
                course_name= '';
            }else{
                totalOutput +=course_name+'<br>';
            }
            // console.log(cur.c_name);
            if(cur.venue==='ONLINE'){
                 totalOutput += '<div class="label label-success">'+cur.venue+'</div>'+'</td>';
                  }else{
                    totalOutput += '<div class="label label-info">'+cur.venue+'</div>'+'</td>';
                  }
            output=totalOutput;
            });
            table_data.innerHTML=output;
        }
        //alert('your timetable has been loeaded successfully');
        sMessage.style="display:block";
        setTimeout(() => {
            sMessage.style="display:none";
        }, 5000);
        }catch(e){
            if(e){
                table_data.innerHTML="";
                eMessage.style="display:block;";
            }
console.warn('could not load json'+' '+e);
        }
    }request.onerror= function(){
        console.log('Oops! something wrong occured');
    }
    // request.onprogress=function(){
    //     console.log('processing');
    // }
}
request.send();
}



// input field selection and validation
var faculty= document.querySelector('#faculty_select');
var student= document.querySelector('#student_select');
var level= document.querySelector('#level_select');
var program_area= document.querySelector('#program_select');
var submit= document.querySelector('#submit_btn');




//programs json fetch
function programFetch(prog){
    var xhr= new XMLHttpRequest();
    xhr.open('GET','programs.json',true);
    xhr.onload= function(){
        if(this.status==200){
            try{
                var programs= JSON.parse(this.responseText);
                var out="";
                programs[prog].s_course.forEach((cur)=>{
    out += '<option>'+cur+'</option>';                
                })
            }catch(e){
                console.warn('failed to load json '+ e);
            }
            program_area.innerHTML=out;
        }
    }
    xhr.send();
}


//loading programs based on faculty selection
faculty.addEventListener('change',()=>{
    if(faculty.options.selectedIndex=="1"){
        programFetch(0);
    }else if(faculty.options.selectedIndex=="2"){
        programFetch(1);
    }else if(faculty.options.selectedIndex=="3"){
        programFetch(2); 
    } else if(faculty.options.selectedIndex=="4"){
        programFetch(3); 
    } else if(faculty.options.selectedIndex=="7"){
        programFetch(4); 
    } 
})


//triggering loadJson AJAX call
submit.addEventListener('click',()=>{
    if(!(level.options.selectedIndex =='0')){
  
var name= program_area.options[program_area.options.selectedIndex].textContent;
const search_name= name+level.options[level.options.selectedIndex].textContent;
//console.log(search_name);
loadJson(search_name);
    }
})

