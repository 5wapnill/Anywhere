#include <stdio.h>

void main()
{
    int lvl,prime;
    printf("please enter a range : ");
    scanf("%d",&lvl);
    
    for(int i = 1; i <= lvl; i++)
    {
        prime = 0;
        for(int j = 2; j <= i-1; j++)
        {
            if (i % j == 0 && i != j)
            {
                prime = 1;
            }
        }
        if(prime == 0)
        {
            printf("%d ",i);
        }
    }
}
