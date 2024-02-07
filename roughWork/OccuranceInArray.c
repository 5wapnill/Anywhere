#include <stdio.h>


int main()
{
	int a[8];
	for(int i = 1; i<=8; i++)
	{
	    printf("plese enter the %dst number : ",i);
	    scanf("%d",&a[i-1]);
	}
	printf("\nyou entered = ");
	for(int i = 0; i<=7; i++)
	{
	    printf("%d ",a[i]);
	}
	printf("\n\neven numbers = ");
	
	for(int i = 0; i<=7; i++)
	{
	    if(a[i] % 2 == 0)
	    {
	        printf(" %d ",a[i]);
	    }
	    
	}
	printf("\n\nodd numbers = ");
	for(int i = 0; i<=7; i++)
	{
	    if(a[i] % 2 != 0)
	    {
	        printf(" %d ",a[i]);
	    }
	}
	int check;
	printf("\n\nenter the no. to check occurance : ");
	scanf("%d",&check);
	
	
	int n = 0;
	for(int i = 0; i<=7; i++)
	{
	    if(check == a[i])
	    {
	        n++;
	    }
	    
	}
	printf("\n\n\n%d is repeated %d times",check,n);
}
