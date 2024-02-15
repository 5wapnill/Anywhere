let level,a = 0,b = 1,c = 0;

level = parseInt(prompt("please enter a level"));
document.write("<div><p>0</div></p><div><p>1</div></p><hr>");


for(let i = 1; i <= level; i++)
{
    c = a + b;
    document.write(`<div><p>${c}<br></p></div>`);
    a = b;
    b = c;
}   