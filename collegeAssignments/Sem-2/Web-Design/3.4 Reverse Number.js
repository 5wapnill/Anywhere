let num, rev;

num = parseInt(prompt("please enter any number"));

document.write(`the reverse of ${num} = `);

while(num > 0)
{
    rev = parseInt(num % 10);
    document.write(`${rev}`);
    num = parseInt(num / 10);
}