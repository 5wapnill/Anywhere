#include <stdio.h>

int main()
{
    perfectNumber(999999999);
}

perfectNumber(int lvl)
{
    for (int j = 1; j <= lvl; j++)
    {
        int k = 0;
        for (int i = 1; i < j; i++)
        {
            if (j % i == 0)
            {
                k = k + i;
            }
        }
        if (k == j)
            printf("%d ", j);
    }
}