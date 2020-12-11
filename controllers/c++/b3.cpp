#include<iostream>
using namespace std;
long long dem(int n){
	if(n<2) return 0;
	if (n==2 || n==3) return 1;
	return dem(n-2) + dem(n-3);
	
}
int main (){
	cout << dem(5);
}