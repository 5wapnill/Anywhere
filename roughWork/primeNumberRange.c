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
