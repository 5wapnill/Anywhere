// Online C++ compiler to run C++ program online
#include <iostream>
using namespace std;
void bs(int arr[],int size);

int main()
{
    int size;
    cout<<"enter the size of array : ";
    cin>>size;
    int arr[size];
    for(int i = 0; i < size; i++)
    {
        cout<<"enter the values ("<<i+1<<"/"<<size<<") : ";
        cin >> arr[i]; 
    }
    
    bs(arr,size);
}

void bs(int arr[],int size)
{
    for(int i = 0; i < size; i++)
    {
        for(int j = 0; j < size; j++)
        {
            if(arr[i] < arr[j])
            {
                int temp = arr[i];
                arr[i] = arr[j];
                arr[j] = temp;
            }
        } 
    }

    for(int i = 0; i < size; i++)
    {
        cout<<arr[i]<<" ";
    }
}



