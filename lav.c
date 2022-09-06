#include <stdio.h>
int factorial(int x);
int main()
{
    int y = factorial(6);
    printf("6! = %d", y);
    return 0;
}

int factorial(int x)
{
    if (x <= 1)
        return 1;
    else
        return x * factorial (x-1);
}
