#include <stdio.h>

int main()
{
    binary(33);
}

int binary(int x)
{
    for(int i = 128; i>0; i = i/2)
    {
        if(x % i == 1)
        {
            printf("0");
            x = x - i;
        }
        else if(x % i == 0)
        {
          printf("1");
          x = x - i;
        }
    }
}