let fact = 1,num;
num = parseInt(prompt("please enter any number"));
for(let i = 1; i <= num; i++)
{
    fact = fact * i;
}
document.write(`<div><p>${num}\!  =  ${fact}</p></div>`);