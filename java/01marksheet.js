alert("WELL COME TO OUR SITE")
var studentName=prompt("Enter Your Name")


var english=parseFloat(prompt("Enter Your English Marks"));                           
var urdu=parseFloat(prompt("Enter Your Urdu Marks"));  
var banking=parseFloat(prompt("Enter Your Banking Marks"));  
var accounting=parseFloat(prompt("Enter Your Accounting Marks"));  
var statistics=parseFloat(prompt("Enter Your Statistics Marks"));  
var geography=parseFloat(prompt("Enter Your Geography Marks"));  
var pst=parseFloat(prompt("Enter Your P.st Marks"));  

document.write("student name="+studentName+"<br>")
document.write("english marks="+english+"<br>")
document.write("urdu marks="+urdu+"<br>" )
document.write("banking marks="+banking+"<br>")
document.write("accounting marks="+accounting+"<br>")
document.write("statistice marks="+statistics+"<br>")
document.write("geography marks="+geography+"<br>")
document.write("pst marks="+pst+"<br>")

let total=english+urdu+banking+accounting+statistics+geography+pst;
let per=(total/700)*100;
document.write("persentage="+per+"<br>")

if(per<=100&&per>=80){
document.write("grade A+")
}else if (per<=79&&per>=70){
document.write("grade A")
}else if(per<=69&&per>=60){
document.write("grade B")
}else if(per<=59&&per>=50){
document.write("grade C")
}else if(per<=49&&per>=40){
document.write("grade D")
}else{
    document.write("Your are Fail")
}
