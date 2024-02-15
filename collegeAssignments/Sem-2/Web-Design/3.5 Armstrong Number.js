let n, r, sum=0, temp;
n = parseInt(prompt("please enter a level"));
temp = n;
while(n>0)
{
    r = parseInt(n % 10);
    sum = parseInt(sum +(r*r*r));
    n = parseInt(n / 10);
}

if (temp == sum)
{
    document.write(`<div><p>${temp} = Armstrong Number</p></div>`);
}
else
{
    document.write(`<div><p>${temp} ≠ a Armstrong Number</p></div>`);
}

