#include <stdio.h>

void main()
{
	triangle(7);
}

void triangle(int line)
{
    char x = '*';
	for(int i= 1; i<=line; i++)
	{
	    printf("\n");
		for(int j= 1; j<=i; j++)
		{
			printf("%c",x);
		}
	}
}
