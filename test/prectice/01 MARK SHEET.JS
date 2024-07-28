alert("well come")
let numder1=parseFloat(prompt("Enter your number1 "))
let numder2=parseFloat(prompt("Enter your number"))
let opr=prompt("select your opreator option are :(+,-,*,/)")
if(opr=="+"){
answer=numder1+numder2;
document.write("by addation="+answer)
}
if(opr=="-"){
    answer=numder1-numder2;
    document.write("by subtracting="+answer)
    
    }
else if(opr=="*"){
        answer=numder1*numder2;
        document.write("by multplying="+answer)
        
        }

        else if(opr=="/") {
            answer=numder1/numder2;
            document.write("by dividing="+answer)
            
}
    


