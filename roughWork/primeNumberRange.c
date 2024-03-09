#include <stdio.h>

void main()
{
    int lvl, prime;
    printf("please enter a range : ");
    scanf("%d", &lvl);

    for (int i = 1; i <= lvl; i++)
    {
        prime = 0;
        for (int j = 1; j <= i; j++)
        {
            if (i % j == 0)
            {
                prime++;
            }
        }
        if (prime == 2)
        {
            printf("%d ", i);
        }
    }
}
