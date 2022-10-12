//towere of hanoi
void toh(int,char,char,char);
#include <stdio.h>
#include <conio.h>
int main()
{
    int e;
    printf("Enter the Nuber of Disks : ")
    scanf("%d ,&e");
    printf("\n")
    toh(e'A' 'b' 'C');
    getch ();
    return (0);
}
void toh (int n,char Beg, char Aux, char End )
{
    if (n>=1){
        toh(n-1,Beg,End,Aux);
        printf ("%d Disk move %c to %c\n"n,Beg,End );
        toh(n-1,Aux,Beg,End);
    }
