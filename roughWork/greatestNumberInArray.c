#include <stdio.h>

void main()
{
	int a[4];
	
	for(int i = 1; i<=5; i++)
	{
	    printf("plese enter the %dst number : ",i);
	    scanf("%d",&a[i-1]);
	}
	printf("you entered = ");
	for(int i = 0; i<=4; i++)
	{
	    printf("%d ",a[i]);
	}
	int greatest = a[0];
	for(int i = 0; i<=4; i++)
	{
	    while(greatest <= a[i])
	    {
	        greatest = a[i];
	        i++;
	    }
	}
	printf("\n%d is the greatest number",greatest);
}
