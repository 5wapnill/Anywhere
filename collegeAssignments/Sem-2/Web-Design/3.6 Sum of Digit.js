let n, r, sum=0;

n = parseInt(prompt("please enter any number "));
let temp = n;
while(n>0)
{
    r = parseInt(n % 10);
    sum = parseInt(sum + r);
    n = parseInt(n / 10);
}
document.write(`<div><p>Addition of ${temp} = ${sum}</p></div>`);