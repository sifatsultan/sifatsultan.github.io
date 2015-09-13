document.writeln(rowStart);
document.writeln("<div class='container'>");
var values = new Array(5);

title("This is life");



for(var i = 0; i<100; i++){
    values[i] = i;
}

thetable(values);

document.writeln(rowEnd);


document.writeln("</div>");






