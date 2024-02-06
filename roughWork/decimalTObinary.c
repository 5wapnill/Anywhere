#include <stdio.h>

int main()
{
    binary(78);
}

int binary(int x)
{
    for(int i = 128; i>=0 && x>0; i = i/2)
    {
      if(x>=i && x-i >= 0)
      {
        printf("1");
        x = x - i;
      }
      else
      {
        printf("0");
      }
    }
}
