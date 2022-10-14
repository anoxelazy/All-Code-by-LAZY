//towere of hanoi

#include <stdio.h>
#include <conio.h>
void toh(int,char,char,char);
int main()
{
    int e;
    printf("Enter the Nuber of Disks : ");
    scanf("%d" ,&e);
    printf("\n");
    toh(e,'A','B','C');
    getch();
    return(0);
}
void toh (int n,char Beg, char Aux, char End )
{
    if (n>=1){
	
        toh(n-1,Beg,End,Aux);
        printf ("%d Disk move %c to %c\n",n,Beg,End );
        toh(n-1,Aux,Beg,End);
    }
}

ควายกิ๊บต่อยป่าว
