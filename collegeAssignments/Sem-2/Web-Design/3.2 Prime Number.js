let num, prime = 1;
num = parseInt(prompt("please enter any number"));

if(num < 4)
{
    prime = 1;
}
else
{
    for(let i = 2; i <= num - 1; i++)
    {
        if(num % i == 0)
        {
            prime = 0;
            break;
        }
    }
}

if(prime == 1) document.write(`<div><p>${num}  =  prime number</p></div>`);
else document.write(`<div><p>${num}  ≠  prime number</p></div>`);