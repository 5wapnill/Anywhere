#include <stdio.h>

void main()
{
    prime(100);
}

int prime(int limit)
{
    for(int i = 1; i <= limit; i++)
    {
        if(i <= 3)
        {
            printf("%d ",i);
        }
        else
        {
            int prime = 1;
            for(int j = 2; j <= limit; j++)
            {
                if(i % j == 0)
                {
                    prime = 0;
                }
                if(prime == 1) printf("%d ",i);
                break;
            }
        }
    }
}

/*
#include <stdio.h>

void main()
{
    int div[3] = {2, 3, 5, 7};
    int x,lim = 50;
    for(int i = 1; i <= lim; i++)
    {
        int prime = 0;
        for(int j = 0; j <= 3; j++)
        {
            if(i % div[j] == 0)
            prime++;
        }
        if(prime < 3)
        printf("%d ",i);
    }
}

*** more accurate than upper one ***
#include <stdio.h>

void main()
{
    int div[4] = {2, 3, 5, 7};
    int x,lim = 1000;
    for(int i = 1; i <= lim; i++)
    {
        int prime = 0;
        for(int j = 0; j <= 3; j++)
        {
            if(i % div[j] == 0)
            prime++;
        }
        if(prime == 0)
        printf("%d ",i);
    }
}
*/
