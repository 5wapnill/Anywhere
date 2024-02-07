#include <stdio.h>


int main()
{
	binary(98);
}

int binary(int x)
{
    int limit = 1;
    for(int i = 128; i>=0 && limit<=8  ; i = i/2)
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
      limit++;
    }
}
