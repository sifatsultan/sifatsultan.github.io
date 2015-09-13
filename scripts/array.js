/*
    Using Arrays in JavaScript
*/

var myArray = new Array(10);

for( var i = 0 ; i< myArray.length; i++ ){
    myArray[i] = i+2;
}



var table = "<div class='panel panel-default'><table class='table'><th>No.</th><th>Array Values</th>";

for( var i = 0 ; i<myArray.length; i++){
    table += "<tr><td>"+i+"</td><td>"+myArray[i]+"</td></tr>";
} 

table += "</table>"

document.writeln("<div class='row'><div class='container'>"+table+"</div></div></div>");

